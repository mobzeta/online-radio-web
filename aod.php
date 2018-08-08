<!DOCTYPE html>
<html lang="en">
<!--

Page    : Dunamis Live Radio
Version : 1.0
Author  : Soft Code
URI     : http://dunamisradio

Copyright © All rights Reserved
Dunamis / Live Radio

-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dunamis Live Radio</title>
    <meta name="description" content="Listen to dunamis live radio" />
    <meta name="keywords" content="Dunamis,Revelation,Nusktec,soft,radio,live,international,church"/>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900%7CMontserrat:400,500,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="css/plugins/plugins-combined.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/lib/modernizr-min.js"></script>
    <!--[Favicon]-->
    <link href="favicon.png" rel="icon"/>
</head>

<body id="top" class="preload">
<!-- ============================================================
 PAGE LOADING
 ============================================================ -->
<div id="page-loader" class="loading-wrap">
    <span class="loading-text">Dunamis Live Radio</span>
    <div class="loading-bars">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
</div>
<!-- // End Page Loading -->
<!-- ============= FLEXBOX AUDIO PLAYER ============== -->
<div class="audio-player">
    <a href="javascript:;" class="hide_player"><i class="fa fa-angle-down"></i> HIDE</a>
    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <!-- Audio Player -->
    <!-- Visual Container -->
    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
        <div class="jp-type-playlist">
            <!-- Flexbox -->
            <div class="jp-gui jp-interface flex-wrap">
                <!-- Play / Pause... Controls -->
                <div class="jp-controls flex-item">
                    <button class="jp-previous" tabindex="0"><i class="fa fa-step-backward"></i></button>
                    <button class="jp-play" tabindex="0"><i class="fa fa-play"></i></button>
                    <button class="jp-next" tabindex="0"><i class="fa fa-step-forward"></i></button>
                </div>
                <!-- End Flex Item -->
                <!-- Progress bar -->
                <div class="jp-progress-container flex-item">
                    <!-- Progress Time -->
                    <div class="jp-time-holder">
                        <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                        <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                    </div>
                    <!-- End Time holder -->
                    <!-- Progress bar -->
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar">
                                <div class="bullet">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Progress bar -->
                </div>
                <!-- End Flex Item -->
                <!-- Album & Artist Info -->
                <a href="javascript:void(0);" id="playlist-text">
                    <div class="jp-now-playing flex-item">
                        <div class="jp-track-name"></div>
                        <div class="jp-artist-name"></div>
                    </div>
                </a>
                <!-- End Flex Item -->
                <!-- Loop / Shuffle / Playlist Toggles -->
                <div class="jp-toggles flex-item">
                    <!-- Playlist Toggle -->
                    <button id="playlist-toggle" class="jp-show-playlist" tabindex="0" title="Playlist"><i class="fa fa-music"></i></button>
                    <!-- Shuffle Toggle -->
                    <button class="jp-shuffle" tabindex="0" title="Shuffle">
                        <i class="fa fa-random"></i></button>
                    <!-- Repeat Toggle -->
                    <button class="jp-repeat" tabindex="0" title="Repeat"><i class="fa fa-exchange"></i></button>
                </div>
                <!-- End Flex Item -->
                <!-- Volume controls -->
                <div class="jp-volume-controls flex-item">
                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>
                    <!-- Volume Bar -->
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value">
                            <div class="bullet">
                            </div>
                        </div>
                    </div>
                    <!-- End Volume Bar -->
                </div>
                <!-- End Flex Item -->
            </div>
            <!-- End Flexbox -->
            <!-- Playlist -->
            <div id="playlist-wrap" class="jp-playlist">
                <ul>
                    <li>&nbsp;</li>
                </ul>
            </div>
            <!-- End Playlist -->
            <!-- No Flash / No HTML5 Warning -->
            <div class="jp-no-solution">
                <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
            </div>
        </div>
        <!-- Player Type Playlist -->
    </div>
    <!-- End Contaner -->
</div>
<!-- //End Fixed Audio Player -->
<!-- ================= HEADER ================= -->
<nav class="navbar navbar-default navbar-fixed-top js-on-scroll">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="flaticon-interface"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="menu-trigger">
                <a href="#">
                    <span class="flaticon-interface"></span>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right toggle-menu">
                <li><a href="../">Home </a></li>
                <li><a href="aod">Audio On Demand</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<!-- ================= MEDIA ================= -->
<section class="section-padding has-parallax our-media">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="media-subtitle">Dunamis Media Library. Audio &amp; Video On Demands</p>
            </div>
            <div class="btn-position">
                <div class="tab-position">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="tabset-left active" role="presentation"><a href="#audio" aria-controls="audio" role="tab" data-toggle="tab">AUDIOS</a></li>
                        <li class="tabset-right" role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">VIDEOS</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- ================== AUDIO TAB ====================== -->
                    <div role="tabpanel" class="tab-pane audio-tab active" id="audio">
                        <div class="audio-wrap">
                            <div class="col-xs-12 col-sm-1 col-md-1">
                                <div class="audio-play-btn" data-playlist-id="3">
                                    <a onclick="local_audio('https://cldup.com/i7nfYK5rHR.mp3?download=Dr%20Paul%20Enenche%20-%20Nara%20Ekele.mp3');">
                                        <span class="flaticon-play flaticon-sm"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <div class="audio-title">
                                    <span>Nare Ekele</span>
                                    <p>Dr. Paul Enenche</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="audio-buy">
                                    <a download="Nare Ekele - Dr Paul Enenche | Dunamis Radio" href="https://cldup.com/i7nfYK5rHR.mp3?download=Dr%20Paul%20Enenche%20-%20Nara%20Ekele.mp3" class="btn btn-defualt">Download Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="audio-wrap">
                            <div class="col-xs-12 col-sm-1 col-md-1">
                                <div class="audio-play-btn" data-playlist-id="3">
                                    <a onclick="local_audio('https://busysinging.com/bsfiles/2017/09/busysinging-271696.mp3');">
                                        <span class="flaticon-play flaticon-sm"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <div class="audio-title">
                                    <span>We Are Together</span>
                                    <p>Dr. Paul Enenche</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <div class="audio-buy">
                                    <a download="Nare Ekele - Dr Paul Enenche | Dunamis Radio" href="https://busysinging.com/bsfiles/2017/09/busysinging-271696.mp3" class="btn btn-defualt">Download Now</a>
                                </div>
                            </div>
                        </div>

                    <h5 style="color: white">More coming soon...</h5>
                    </div>
                    <!-- // End Audio Tab -->
                    <!-- ================== VIDEO TAB ====================== -->
                    <div role="tabpanel" class="tab-pane" id="video">
                        <!-- ============================================================
                        Tip: Change the href Video to your Youtube or Vimeo Video LInk
                        PS : The Video Popup may not work locally if accessing via file://
                             So, Please upload to your server to test that.
                         ============================================================= -->
                        <div class="video-wrap">
                            <div class="col-md-4">
                                <div class="video-img-block">
                                    <a href="https://www.youtube.com/watch?v=7OYsKqlGgYQ" class="mfp-youtube">
                                        <img src="images/album/video/video_1.jpg" class="img-responsive" alt="video01">
                                        <div class="video-play-btn">
                                            <span class="flaticon-play flaticon-sm"></span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="video-img-block">
                                    <a href="https://www.youtube.com/watch?v=unPnJJK26MI" class="mfp-youtube">
                                        <img src="images/album/video/video_2.png" class="img-responsive" alt="video01">
                                        <div class="video-play-btn">
                                            <span class="flaticon-play flaticon-sm"></span></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="video-img-block">
                                    <a href="https://www.youtube.com/watch?v=MlRyD4Z4uos" class="mfp-youtube">
                                        <img src="images/album/video/video_3.jpg" class="img-responsive" alt="video01">
                                        <div class="video-play-btn">
                                            <span class="flaticon-play flaticon-sm"></span></div>
                                    </a>
                                </div>
                            </div>


                            </div>
                        </div>
                    <!-- // End Video Tab -->
                </div>
                <!-- // End Tab Content -->
            </div>
        </div>
    </div>
</section>
<!--// MEDIA END -->



<!--// CONTACT END -->
<!-- ================= FOOTER ================= -->
<footer id="contact" class="section-padding has-parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><span class="flaticon-social-1 flaticon-sm-shape shape1"></span></a></li>
                        <li><a href="#"><span class="flaticon-social-media-1 flaticon-sm-shape shape2"></span></a></li>
                        <li><a href="#"><span class="flaticon-social-network-1 flaticon-sm-shape shape3"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="address">
                    <h4>Dunamis International Gospel Centre</h4>
                    <span>Abuja, Nigeria</span>
                    <h4>Desk: +234 9034095673</h4>
                    <span>info@dunamisgospel.org</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="address">
                    <h5></h5>
                </div>
            </div>

            <div class="col-md-12">
                <div class="address">
                    <p style="font-size: 9px;">Copyright © Dunamis TV. All rights reserved.</p>
                    <p style="font-size: 8px;">Developed by: NSC Bits</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--// FOOTER END -->
<a class="back_to_top" href="#top"> <img src="images/back-to-top.png" alt="Back to top" /> </a>
<!-- // end .back_to_top -->
<!-- jQuery & Other Javascript Files -->
<script src="js/lib/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/lib/bootstrap.min.js"></script>
<!-- Plugins -->
<script src="js/plugins/flexslider-min.js"></script>
<script src="js/plugins/slick.min.js"></script>
<script src="js/plugins/magnific-popup.min.js"></script>
<script src="js/plugins/parallax.js"></script>
<script src="js/plugins/rellax.min.js"></script>
<script src="js/plugins/atvimg.js"></script>
<script src="js/plugins/jquery.jplayer.min.js"></script>
<script src="js/plugins/jplayer.playlist.min.js"></script>
<script src="js/audio-player.js"></script>
<script src="js/validate.js"></script>
<script src="js/contact.js"></script>
<script src="js/subscribe.js"></script>
<!-- Main Duotone script -->
<script src="js/script.js"></script>

<script>
    var audio = new Audio("");
    function local_audio(name) {
        audio.pause();
        audio = new Audio(name);
        audio.play();
    }
</script>
</body>

</html>
