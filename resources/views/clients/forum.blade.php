@extends('layouts.app')

@section('content')
<!--================ Header Area =================-->
<div class="headernav">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo  align-middle"><a href="index.html"><img src="{{asset('image/logo.png')}}" alt="" width="60px" height="60px"></a></div>
            <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#">Borderlands 2</a> <b class="caret"></b>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Borderlands 1</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Borderlands 2</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Borderlands 3</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                <div class="wrap">
                    <form action="#" method="post" class="form">
                        <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                        <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                <div class="stnt pull-left">                            
                    <form action="03_new_topic.html" method="post" class="form">
                        <button class="btn btn-primary">Start New Topic</button>
                    </form>
                </div>
                <div class="env pull-left"> <i id="bell" class="fas fa-bell"></i></div>

                <div class="avatar pull-left dropdown">
                    <a data-toggle="dropdown" href="#"><img src="{{asset('image/avatar.jpg')}}" alt=""></a> <b class="caret"></b>
                    <div class="status green">&nbsp;</div>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-2" href="#">Inbox</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-3" href="#">Log Out</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-4" href="04_new_account.html">Create account</a></li>
                    </ul>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--================End Header Area =================-->

<section class="content">
    <div class="container"  style="margin-top: 2em; margin-bottom: 2em">
        <div class="row">
            <div class="col-lg-8 col-md-8 post-content">
                <!-- Create Post -->
                <div class="post">
                    <form onsubmit="return false" enctype="multipart/form-data" class="p-1">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title" class="form-post-title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="editor" class="form-post-title" >Content</label>
                                <textarea rows="4" class="form-control" id="editor" placeholder="Bạn đang gặp vấn đề gì?" defaultValue=""></textarea>
                            </div>
                            <div class="form-group col-md-12" id="image-upload">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="file-upload" class="custom-file-upload form-control btn btn-outline-primary">
                                        <i class="fas fa-cloud-upload-alt"></i> Upload Image
                                    </label>
                                <input id="file-upload" type="file" multiple accept="image/*"/>
                             </div>
                            <div class="form-group col-md-6">
                                <input class="form-control btn btn-outline-primary" type="submit" onclick="createPost()" value="Đăng"/>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
                <!-- End Create Post -->
                {{-- <div class="post">
                    <div class="wrap-ut pull-left">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="/image/avatar.jpg" alt="">
                                <div class="status green">&nbsp;</div>
                            </div>

                            <div class="icons">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/image/clap.png" width="40px" height="40px" alt="">        
                                    </div>
                                    <div class="col-md-6">
                                        <span style="font-size: 12px; font-family: 'Open Sans', sans-serif">204</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="posttext pull-left">
                            <h2><a href="#" style="color: #14171a;">Nguyen Hong Phong</a></h2>
                            <h2><a href="02_topic.html">10 Kids Unaware of Their Halloween Costume</a></h2>
                            <p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>
                        </div>
                        <!--  -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="gallery">
                        <div>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg" alt="">
                        </div>
                        <div>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg" alt="">
                        </div>
                        <div>
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg" alt="">
                        </div>
                        <div>
                            <img src="/image/avatar.jpg" alt="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row wrap-ut pull-right">
                            <div class="col-md-4">
                                <div class="views">
                                    <i class="fa fa-eye"></i>
                                     1,568
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="comment">
                                        <i class="fas fa-comment"></i>
                                        200
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="time">
                                    <i class="fa fa-clock"></i> 
                                    24 min
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    <!-- comment -->
                </div><!-- POST --> --}}
            </div>
            <div class="col-lg-4 col-md-4">

                <!-- -->
                <div class="sidebarblock">
                    <h3>Categories</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <ul class="cats">
                            <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                            <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                            <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                            <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                            <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                            <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                            <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                        </ul>
                    </div>
                </div>

                <!-- -->
                <div class="sidebarblock">
                    <h3>Poll of the Week</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <p>Which game you are playing this week?</p>
                        <form action="#" method="post" class="form">
                            <table class="poll">
                                <tbody><tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                Call of Duty Ghosts
                                            </div>
                                        </div>
                                    </td>
                                    <td class="chbox">
                                        <input id="opt1" type="radio" name="opt" value="1">  
                                        <label for="opt1"></label>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                Titanfall
                                            </div>
                                        </div>
                                    </td>
                                    <td class="chbox">
                                        <input id="opt2" type="radio" name="opt" value="2" checked="">  
                                        <label for="opt2"></label>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                Battlefield 4
                                            </div>
                                        </div>
                                    </td>
                                    <td class="chbox">
                                        <input id="opt3" type="radio" name="opt" value="3">  
                                        <label for="opt3"></label>  
                                    </td>
                                </tr>
                            </tbody></table>
                        </form>
                        <p class="smal">Voting ends on 19th of October</p>
                    </div>
                </div>

                <!-- -->
                <div class="sidebarblock">
                    <h3>My Active Threads</h3>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                    </div>
                    <div class="divline"></div>
                    <div class="blocktxt">
                        <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                    </div>
                </div>


            </div>
        </div>
        </div>
    </div>
</section>
<section class="p_120 banner-bottom">
    <div class="row py-lg-5 pl-lg-6">
        <div class="col-md-5 text-center text-white">
            <span style="font-size: 2em">Each service always starts from</span>
            <h2>1 to 7 steps of pet care check</h2>
            <span  style="font-size: 2em">exclusive at NPK PetCare</span>
            <form class="form-inline banner-form my-1" action="{{url('/booking')}}" method="get">
                <button class="btn btn-primary banner-button" style="font-size: 1em" type="submit">Book Now</button>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5"></div>
    </div>
</section>
@endsection