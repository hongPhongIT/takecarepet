function readURL(input) {
    if (input.files && input.files[0]) {  
        $('#image-upload').empty();
        for (let i = 0; i < input.files.length; i++) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#image-upload').append(`<image src="${ e.target.result}" alt="image upload"/>`);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }
}

$(document).ready(function() {
    $('#file-upload').change(function() {
        readURL(this);
    });
});

// function autoResize(id) {
    const text = $('#editor');
    text.on('change drop keydown cut paste', function() {
    text.height('auto');
        text.height(text.prop('scrollHeight'));
    });
// }
