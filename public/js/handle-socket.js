const socket = io('http://localhost:3001/forum');
const url = 'http://localhost/takecarepet/public';
 
function formatAMPM(date) { // This is to display 12 hour format like you asked
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
  }

function formatDate(datetime) {
    const date = new Date(datetime);
    const month = date.toLocaleString('en-us',  { month: 'long' });
    return month+ ', ' + date.getDate() + ', ' +date.getFullYear() + ' ' + formatAMPM(date);
}

function countDate(datetime, post_id) {
    const date = new Date(datetime).getTime(); 
  
    const x = setInterval(function() {  
        const now = new Date().getTime(); 
        const t = now - date; 
        const days =  Math.floor(t / (1000 * 60 * 60 * 24)); 
        const hours =  Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
        const minutes =  Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        const seconds =  Math.floor((t % (1000 * 60)) / 1000); 
            if (days !== 0) {
                document.getElementById(`day${post_id}`).innerText = days + ' days ' ;
            } else {
                if (hours !== 0) {
                    document.getElementById(`hour${post_id}`).innerText = hours + ' hours ';         
                } else {
                    if (minutes !== 0) {
                        document.getElementById(`minute${post_id}`).innerText = minutes + ' minutes ';  
                    } 
                }
            }
    }, 1000); 
}

function getUserInfor() {
    const user = window.localStorage.getItem("takecarepet_UserInfor");
    if (user !== undefined) {
        return JSON.parse(user);
    }
    return false;
}

const user_infor = getUserInfor();

function commentHtmlElement(comment) {
    const htmlElement = `
    <div class="row comments active-comment">
        <div class="col-md-1"></div>
        <div class="col-md-1 p-1" style="display: flex; justify-content: center;">
            <div class="avatar">
                <img src="${url}/image/avatar.jpg" alt="">
                <div class="status green">&nbsp;</div>
            </div>
        </div>
        <div class="form-group col-md-9" style="padding-top: 15px">
            <b><a href="#" style="color: #14171a;">${comment.user.user_name}</a></b>
            <span class="pull-right" style="font-size: 12px; color: #758593; font-style: italic">${formatDate(comment.created_at)}</span>
            <p>${comment.content}</p>
        </div>
    </div>
    `;

    const listComment = $('.comment'+comment.post_id);
    listComment.append(htmlElement);
}

function commentsHtmlElement(data) {
    const htmlElement = `
    <div class="comment${data.id}" style="position: unset">
        <div class="row comments">
            <div class="col-md-1"></div>
            <div class="col-md-1 p-1" style="display: flex; justify-content: center;">
                <div class="avatar">
                    <img src="${url}/image/avatar.jpg" alt="">
                    <div class="status green">&nbsp;</div>
                </div>
            </div>
            <form class="form-row col-md-9" style="padding-top: 15px">
                <b>${getUserInfor().user_name}</b>
                <textarea rows="3" id="content${data.id}" class="form-control col-md-12" placeholder="Type your comment..." defaultValue=""></textarea>
                <div class="form-group col-md-6">
                    <!-- <label for="file-upload" class="custom-file-upload form-control btn btn-outline-primary">
                            <i class="fas fa-cloud-upload-alt"></i> Upload Image
                    </label>
                    <input id="file-upload" type="file" multiple accept="image/*"/> -->
                </div>
                <div class="form-group col-md-6">
                    <button class="btn-comment${data.id} pull-right mt-1 btn btn-outline-primary" user_id="1" post_id="${data.id}">Đăng</button>
                </div>
            </form>
        </div>
    </div>
    `;

    $(document).ready(function() {
        $(`.btn-comment${data.id}`).click(function (e) {
            e.preventDefault();
            const user = getUserInfor();
            const content = $(`#content${data.id}`).val();
            const user_id = user.id;
            const post_id = $(this).attr('post_id');

            socket.emit('create comment', {
                content,
                user_id,
                post_id,
                user
            },
            function(response) {
                commentHtmlElement(response.data);
            })

        });
    });

    const listComment = $('.post'+data.id);
    listComment.append(htmlElement);

    if (data.comments.length !== 0) {
        data.comments.map(comment => commentHtmlElement(comment)); 
    }
}

function postHtmlElement(data) {
    const countClap = [];
    for (let i = 0; i < data.claps.length; i++) {
        if ( data.claps[i].is_delete === null) {
            countClap.push(data.claps[i]);
        }
    }
    const isClap = countClap.map(function(d) { return d['user_id']; }).indexOf(user_infor.id);
    let galleryHtml = '';
    if ( data.images !== undefined && data.images.length !== 0) {
        for (const image of data.images) {
           galleryHtml += `<div><img src="${url}${image.link_image}" alt></div>`;
        }
    }
    const htmlElement = `
    <div class="post post${data.id}">
        <div class="wrap-ut pull-left">
            <div class="userinfo pull-left">
                <div class="avatar">
                    <img src="${url}/image/avatar.jpg" alt="">
                    <div class="status green">&nbsp;</div>
                </div>
                <div class="icons icons${data.id}">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" post_id="${data.id}" class="btn-create-clap${data.id}">
                                <img src="${url}/image/clap.png" width="40px" height="40px" alt="">
                            </a>        
                        </div>
                        <div class="col-md-6">
                            <span id="clap-number${data.id}" style="font-size: 12px; font-family: 'Open Sans', sans-serif">${countClap.length !== 0 ? countClap.length : ''}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="posttext pull-left">
                <h2><a href="#" style="color: #14171a;">${data.user.user_name}</a><span class="pull-right" style="font-size: 12px; color: #758593; font-style: italic">${formatDate(data.created_at)}</span></h2>
                <h2><a href="02_topic.html">${ data.title }</a></h2>
                <p>${ data.content }</p>
            </div>
        </div>  
        <div class="gallery">
            ${ galleryHtml }
        </div>
        <div class="row wrap-ut pull-right">
                <div class="col-md-4">
                    <div class="views">
                        <i class="fa fa-eye"></i>
                         ${countClap.length + data.comments.length}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="comment">
                            <i class="fas fa-comment"></i>
                            ${data.comments.length}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="time">
                        <i class="fa fa-clock"></i> 
                        <span><span id="day${data.id}"></span><span id="hour${data.id}"></span><span id="minute${data.id}"></span>ago</span>
                    </div>
                </div>
            </div>
    </div>
    `;

    const fireWorkHtmlElement = `
    <a class="svg svg${data.id}" post_id="${data.id}" style="position: absolute;z-index: 1;top: -20px;left: -30px;">
    <svg xmlns="http://www.w3.org/2000/svg" id="firework-slide2" class="firework-icon injected-svg img-firework inject-svg" data-name="Calque 1" viewBox="0 0 157 156">
	<defs>
		<style>
			.cls-1,.cls-2,.cls-3{
				fill:#e41656;
				opacity:0;
			}
		</style>
	</defs>
	<title>icon_firework_1</title>
	<path class="cls-3" d="M80.52,106.92a0.65,0.65,0,0,1-.65-0.65v-10a0.65,0.65,0,0,1,1.3,0v10A0.65,0.65,0,0,1,80.52,106.92Z"></path>
	<path class="cls-3" d="M97.72,100.91a0.65,0.65,0,0,1-.52-0.26l-6-8a0.65,0.65,0,0,1,1-.78l6,8A0.65,0.65,0,0,1,97.72,100.91Z"></path>
	<path class="cls-3" d="M108.32,85.95a0.61,0.61,0,0,1-.19,0l-9.55-3A0.65,0.65,0,1,1,99,81.69l9.55,3A0.65,0.65,0,0,1,108.32,85.95Z"></path>
	<path class="cls-3" d="M98.77,71a0.65,0.65,0,0,1-.2-1.27l9.55-3a0.65,0.65,0,1,1,.39,1.24L99,71A0.66,0.66,0,0,1,98.77,71Z"></path>
	<path class="cls-3" d="M91.7,61a0.65,0.65,0,0,1-.52-1l6-8a0.65,0.65,0,0,1,1,.78l-6,8A0.65,0.65,0,0,1,91.7,61Z"></path>
	<path class="cls-3" d="M80.52,57a0.65,0.65,0,0,1-.65-0.65v-10a0.65,0.65,0,0,1,1.3,0v10A0.65,0.65,0,0,1,80.52,57Z"></path>
	<path class="cls-3" d="M67.64,61a0.65,0.65,0,0,1-.52-0.26l-6-8a0.65,0.65,0,0,1,1-.78l6,8A0.65,0.65,0,0,1,67.64,61Z"></path>
	<path class="cls-3" d="M60.57,71a0.66,0.66,0,0,1-.2,0l-9.55-3a0.65,0.65,0,1,1,.39-1.24l9.55,3A0.65,0.65,0,0,1,60.57,71Z"></path>
	<path class="cls-3" d="M51,85.95a0.65,0.65,0,0,1-.19-1.27l9.55-3a0.65,0.65,0,1,1,.39,1.24l-9.55,3A0.61,0.61,0,0,1,51,85.95Z"></path>
	<path class="cls-3" d="M61.62,100.91a0.65,0.65,0,0,1-.52-1l6-8a0.65,0.65,0,0,1,1,.78l-6,8A0.65,0.65,0,0,1,61.62,100.91Z"></path>

	<path class="cls-2" d="M80.52,126.88a0.65,0.65,0,0,1-.65-0.65v-10a0.65,0.65,0,0,1,1.3,0v10A0.65,0.65,0,0,1,80.52,126.88Z"></path>
	<path class="cls-2" d="M109.74,116.86a0.65,0.65,0,0,1-.52-0.26l-6-8a0.65,0.65,0,0,1,1-.78l6,8A0.65,0.65,0,0,1,109.74,116.86Z"></path>
	<path class="cls-2" d="M127.42,91.92a0.61,0.61,0,0,1-.19,0l-9.55-3a0.65,0.65,0,1,1,.39-1.24l9.55,3A0.65,0.65,0,0,1,127.42,91.92Z"></path>
	<path class="cls-2" d="M117.86,65a0.65,0.65,0,0,1-.2-1.27l9.55-3a0.65,0.65,0,1,1,.39,1.24l-9.55,3A0.66,0.66,0,0,1,117.86,65Z"></path>
	<path class="cls-2" d="M103.73,45.08a0.65,0.65,0,0,1-.52-1l6-8a0.65,0.65,0,0,1,1,.78l-6,8A0.65,0.65,0,0,1,103.73,45.08Z"></path>
	<path class="cls-2" d="M80.52,37.07a0.65,0.65,0,0,1-.65-0.65v-10a0.65,0.65,0,0,1,1.3,0v10A0.65,0.65,0,0,1,80.52,37.07Z"></path>
	<path class="cls-2" d="M55.61,45.08a0.65,0.65,0,0,1-.52-0.26l-6-8a0.65,0.65,0,0,1,1-.78l6,8A0.65,0.65,0,0,1,55.61,45.08Z"></path>
	<path class="cls-2" d="M41.47,65a0.62,0.62,0,0,1-.2,0l-9.55-3a0.65,0.65,0,1,1,.39-1.24l9.55,3A0.65,0.65,0,0,1,41.47,65Z"></path>
	<path class="cls-2" d="M31.92,91.93a0.65,0.65,0,0,1-.19-1.27l9.55-3a0.65,0.65,0,1,1,.39,1.24l-9.55,3A0.61,0.61,0,0,1,31.92,91.93Z"></path>
	<path class="cls-2" d="M49.59,116.86a0.65,0.65,0,0,1-.52-1l6-8a0.65,0.65,0,0,1,1,.78l-6,8A0.65,0.65,0,0,1,49.59,116.86Z"></path>

	<path class="cls-1" d="M80.52,146.83a0.65,0.65,0,0,1-.65-0.65v-10a0.65,0.65,0,0,1,1.3,0v10A0.65,0.65,0,0,1,80.52,146.83Z"></path>
	<path class="cls-1" d="M121.77,132.82a0.65,0.65,0,0,1-.52-0.26l-6-8a0.65,0.65,0,0,1,1-.78l6,8A0.65,0.65,0,0,1,121.77,132.82Z"></path>
	<path class="cls-1" d="M146.52,97.9a0.61,0.61,0,0,1-.19,0l-9.55-3a0.65,0.65,0,1,1,.39-1.24l9.55,3A0.65,0.65,0,0,1,146.52,97.9Z"></path>
	<path class="cls-1" d="M137,59a0.65,0.65,0,0,1-.2-1.27l9.55-3A0.65,0.65,0,1,1,146.7,56l-9.55,3A0.66,0.66,0,0,1,137,59Z"></path>
	<path class="cls-1" d="M115.76,29.12a0.65,0.65,0,0,1-.52-1l6-8a0.65,0.65,0,0,1,1,.78l-6,8A0.65,0.65,0,0,1,115.76,29.12Z"></path>
	<path class="cls-1" d="M80.52,17.11a0.65,0.65,0,0,1-.65-0.65v-10a0.65,0.65,0,0,1,1.3,0v10A0.65,0.65,0,0,1,80.52,17.11Z"></path>
	<path class="cls-1" d="M22.37,59a0.62,0.62,0,0,1-.2,0l-9.55-3A0.65,0.65,0,1,1,13,54.77l9.55,3A0.65,0.65,0,0,1,22.37,59Z"></path>
	<path class="cls-1" d="M12.82,97.9a0.65,0.65,0,0,1-.19-1.27l9.55-3a0.65,0.65,0,1,1,.39,1.24l-9.55,3A0.61,0.61,0,0,1,12.82,97.9Z"></path>
	<path class="cls-1" d="M43.58,29.12a0.65,0.65,0,0,1-.52-0.26l-6-8a0.65,0.65,0,0,1,1-.78l6,8A0.65,0.65,0,0,1,43.58,29.12Z"></path>
	<path class="cls-1" d="M37.56,132.82a0.65,0.65,0,0,1-.52-1l6-8a0.65,0.65,0,0,1,.91-0.13,0.65,0.65,0,0,1,.13.91l-6,8A0.65,0.65,0,0,1,37.56,132.82Z"></path>
</svg></a>`;

    $(document).ready(function() {
        $(`.svg${data.id}`).click(function (e) {
            const clap_number = document.getElementById(`clap-number${data.id}`).innerText;;
            document.getElementById(`clap-number${data.id}`).innerText = parseInt(clap_number) - 1;
            e.preventDefault();
            const user_id = getUserInfor().id;
            const post_id = $(this).attr('post_id');
            $(`.svg${data.id}`).remove();
            socket.emit('delete clap', {
                user_id,
                post_id,
            },
            function(response) {
                if (response.data) {
                    
                }
            })

        });
    });

    $(document).ready(function() {
        $(`.btn-create-clap${data.id}`).click(function (e) {
            const clap_number = document.getElementById(`clap-number${data.id}`).innerText;
            if (clap_number === '') {
                document.getElementById(`clap-number${data.id}`).innerText = '1';
            }
            else {
                document.getElementById(`clap-number${data.id}`).innerText = parseInt(clap_number) + 1;
            }
            const firework = $(`.icons${data.id}`);
            firework.append(fireWorkHtmlElement);

            e.preventDefault();

            const user_id = getUserInfor().id;
            const post_id = $(this).attr('post_id');
            socket.emit('create clap', {
                user_id,
                post_id,
            },
            function(response) {
                if (response.data) {
                    
                }
            })

        });
    });

    const listPost = $('.post-content');
    listPost.append(htmlElement);

    if (isClap !== -1) {
        const firework = $(`.icons${data.id}`);
        firework.append(fireWorkHtmlElement);
    }

    countDate(data.created_at, data.id);
}

function createPost() {
    let content = document.getElementById('editor').value;
    let title = document.getElementById('title').value;
    let images = document.getElementById('file-upload');
    let formData = new FormData(images.files);
    jQuery.each(jQuery('#file-upload')[0].files, function(i, file) {
        formData.append('file-'+i, file);
    });
    content = content.trim();
    title = title.trim();
    $.ajax({
        url: 'https://localhost:3000/posts',
        type: 'post',
        cache: false,
        contentType: false,
        processData: false,
        data: formData,
        headers: {
            'title': title,
            'content': content,
            'user_id': user_infor.id,
        },
        success: function(response) {
            $.confirm({
                title: 'Đăng bài thành công!',
                content: 'Vấn đề của bạn sẽ sớm được mọi người gúp đỡ, đừng quá lo lắng',
                type: 'success',
                typeAnimated: true,
                buttons: {
                    close: function () {
                    }
                }
            });
            postHtmlElement(response.data);
            socket.emit('create post', response.data);
        },
        error: function(e) {
            console.log(e);
        }
    });
}

function payload() {

    $.ajax({
        url: 'https://localhost:3000/posts',
        type: 'get',
        dataType: 'json',
        success: function(response) {
            response.data.map(item => {
                postHtmlElement(item);
                commentsHtmlElement(item);
            });

            socket.emit('join active comment', {
                id: getUserInfor().id,
            });

            socket.emit('join active post comment', {
                id: getUserInfor().id,
            })
        },
        error: function(e) {
            console.log(e);
        }
    });
}

socket.on('send new post to client', function(response) {
    postHtmlElement(response);
});

socket.on('send new comment to client', function(response) {
    commentHtmlElement(response.data);
    notification ();
});

socket.on('send new clap to client', function(response) {
    const clap_number = document.getElementById(`clap-number${response.data.post_id}`).innerText;;
    document.getElementById(`clap-number${response.data.post_id}`).innerText = parseInt(clap_number) + 1; 
    notification ();
});

socket.on('send delete clap to client', function(response) {
    const clap_number = document.getElementById(`clap-number${response.data.post_id}`).innerText;;
    document.getElementById(`clap-number${response.data.post_id}`).innerText = parseInt(clap_number) - 1; 
    notification ();
});

socket.on('error', function(error) {
    console.log(error);
});

function notification () {
    const bell = document.getElementById('bell');
    bell.classList.add("bell-color");
}
