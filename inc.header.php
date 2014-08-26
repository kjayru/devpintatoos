<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>
Pintattoo - Explore All Instagram Online        
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en" />
    <link rel="shortcut icon" href="/favicon.png" type="image/png" />
    <meta name="viewport" content="width=970, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/lib.css">
      <!--[if lt IE 9]>

    <link href="css/multiview.ie8.css" rel="stylesheet" type="text/css" />

    <![endif]-->

    <!--[if IE 9]>

    <link href="css/multiview.ie9.css" rel="stylesheet" type="text/css" />

    <![endif]-->

    <!--[if IE 7]>

    <link href="css/multiview.ie7.css" rel="stylesheet" type="text/css" />

    <![endif]-->

      <script type="text/javascript">
        var rootUrl = 'http://kantamerica.com/desarrollo';
        if (typeof (console) == "undefined")
            console = { log: function (content) { } };
        if (typeof (MultiViewLang) == "undefined")
            MultiViewLang = {};
        var userPageBaseUrl = '';
        var searchTagBaseUrl = '/tag';
        var searchUserBaseUrl = '/findpeople';
    </script>
<script type="text/javascript">

    function getAdSize() {

        try{

            var width = document.documentElement.clientWidth;

            var size = null;

            if (width >= 320 && width < 468)

                size = [320, 50];

            else if (width < 728) {

                size = [468, 60];

            } else if (width < 970) {

                size = [728, 90];

            } else {

                //size = [970, 90];

                size = [728, 90];

            }

            return size;

        }

        catch (e) {

            return [728, 90];

        }

    }

</script>


</head>
<body>
<script type="text/javascript">

    var following = false;

    var followedMe = false;

    var followRequested  = false;

</script>
    <div style="display: none">Explore online with the best experience, follow interesting people, post comment and share photo to Facebook, twitter and all other websites.</div>
    <div class="bodyContent">
<div class="multiViewTopBannerWrapper">
    <div class="multiViewTopBanner">
        <div class="navLeft">
            <div class="navButtons">
<div class='splitter'></div>
	<a href='/'  class='currentPage' ><img src='img/nav_home.png' alt='' /></a>
<div class='splitter'></div>
    <a href='javascript:void(0);' class='navButtonExplore'  ><img src='img/nav_globe.png' alt='' /></a>
</div>
</div>          
<div class="navButtons navRight" style="left: 115px;">
<?php if(!$_SESSION){ ?>
    <div class='splitter'></div>
	<a href='login.php'><img src='img/nav_user.png' alt='Sign in' /><span>Sign in</span></a>
<?php }else{?>
<div class='splitter'></div>
<? echo $_SESSION['usuario']; ?>
<?php } ?>
<div class='splitter'></div>
<div class='splitter'></div>
	<a href='help.php' target='_blank'  ><img src='img/nav_help.png' alt='' /></a>
<div class='splitter'></div>
        </div>
    </div>
</div>
<div class="navButtonTip ui-tooltip-top">navButtonTip</div>
<div class="explorePopover navPopover">
    <div class="exploreSection">
        <a href="/popular" >Popular</a>
        <a href="/interesting" >Random</a>
        <a href="/justnow" >Just now</a>
    </div>
    <div class="exploreSection">
            <a class="" href="/Channel/fashion" >Fashion</a>
            <a class="" href="/Channel/entertainment" >Entertainment</a>
            <a class="" href="/Channel/food" >Food</a>
            <a class="" href="/Channel/animal" >Pets</a>
            <a class="" href="/Channel/art" >Art</a>
            <a class="" href="/Channel/urban" >Urban</a>
            <a class="" href="/Channel/nature" >Nature</a>
            <a class="" href="/Channel/tech" >Tech</a>
    </div>
</div>
<ul class="dropdown-menu sharePopover navPopover">
    <li class="divider"></li>
        <li><a href="javascript:share('facebook')" rel="nofollow"><i class="icon_bg icon_facebook"></i>Facebook</a></li>
        <li><a href="javascript:share('pinterest')" rel="nofollow"><i class="icon_bg icon_pinterest"></i>Pinterest</a></li>
        <li><a href="javascript:share('twitter')" rel="nofollow"><i class="icon_bg icon_twitter"></i>Twitter</a></li>
        <li><a href="javascript:share('tumblr')" rel="nofollow"><i class="icon_bg icon_tumblr"></i>Tumblr</a></li>
        <li><a href="javascript:share('googleplus')" rel="nofollow"><i class="icon_bg icon_googleplus"></i>Google+</a></li>
        <li><a href="javascript:share('qrcode')" rel="nofollow"><i class="icon_bg icon_qrcode"></i>Scan Code</a></li>
        <li><a href="javascript:share('sinaweibo')" rel="nofollow"><i class="icon_bg icon_sinaweibo"></i>Sina Weibo</a></li>
        <li><a href="javascript:share('douban')" rel="nofollow"><i class="icon_bg icon_douban"></i>Douban</a></li>
        <li><a href="javascript:share('qzone')" rel="nofollow"><i class="icon_bg icon_qzone"></i>QZone</a></li>
        <li><a href="javascript:share('renren')" rel="nofollow"><i class="icon_bg icon_renren"></i>Renren</a></li>
        <li class="divider"></li>
        <li><a class="addthis_button_expanded">Other services</a></li>    
</ul>
<div id="qrCodeModal" style="z-index: 1090" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="scanQrCode" >Scan the QR code to get the link for the photo</h3>
        <h3 class="scanQrCodeForInstagramHook">Open the following link with Safari to see the photo in Instagram</h3>
    </div>
    <div class="modal-body">
        <div style="height: 150px; position: relative">
            <img id="loadingQrCode" style="z-index:1091; position:absolute; top:65px; left:245px;" src="/Content/MultiView/ajax-loader.gif" alt="loading" />
            <img id="qrCodeImage" style="z-index: 1092; position: absolute; left: 190px;" src="" alt="QR code" />
        </div>
        <div><a href="#" class="link" target="_blank">#</a></div>
    </div>
</div>
<div class="modal hide fade" id="loginFormModal" style="border:none;">
    <div class="modal-header" style="background: #46749a; color: #fff; -webkit-border-radius: 5px 5px 0px 0px; border-radius: 5px 5px 0px 0px;">
        <button type="button" class="close" data-dismiss="modal" style="color: #fff; text-shadow: none;"> ×</button>
        <h3>Sign In</h3>
    </div>
    <div class="modal-body">
        <div class="loginFormBody">
            <div style="color: #68AABE;">
                <i class="icon-info-sign" style="opacity: 0.3; margin-right: 5px;"></i>Sign in to follow other user, post comments and likes.
            </div>
            <div class="instagramLogin">
                <a href="/Account/LoginWithService?serviceType=instagram&amp;redirectUrl=%2F">
                        <img src="/img/login_instagram_en.png" alt="login instagram" />
                </a>
            </div>
            <div style="color: #68AABE; padding-bottom: 10px; margin-top: 24px; padding-top: 24px; border-top: solid 1px #eee;">
                No Instagram account? <a href="http://instagr.am/" target="_blank">Download Instagram and sign up</a>
            </div>
        </div>
    </div>
</div>
    <div class="note ">
        <div class="noteContent">
           <div>
                <a data-toggle="modal" href="/Account/LoginWithService?serviceType=instagram&amp;redirectUrl=%2F" target="_blank">
                        <img src="/img/pinsta-splash_en.png" alt="pinsta introduction splash" />
                </a>
            </div>
            <div class="hideNoteButtonContainer">
                    <a class="signInLink" href="/Account/LoginWithService?serviceType=instagram&amp;redirectUrl=%2F" rel="nofollow">
                            <img src="/img/login_instagram_en.png" alt="login instagram" />

                    </a>

            </div>

        </div>

    </div>

    <div class="wallToolbar" style="text-align: center; margin-top: 14px;">

        <div class="btn-group photoSizeSwitch" data-toggle="buttons-radio">

            <button type="button" class="btn btn-small smallBricksBtn"><i class="icon-th"></i>S</button>

            <button type="button" class="btn btn-small mediumBricksBtn"><i class="icon-th-large"></i>M</button>

            <button type="button" class="btn btn-small fullBricksBtn"><i class="icon-picture"></i>L</button>

            

        </div>

        <div class="btn-group viewModeSwitch" data-toggle="buttons-radio">

            <button type="button" class="btn btn-small viewModeTightBtn" onclick="switchViewMode('tight')"><i class="icon-th"></i>Hide comments</button>

            <button type="button" class="btn btn-small active viewModeBricksBtn" onclick="switchViewMode('bricks')"><i class="icon-asterisk"></i>Show comments</button>

        </div>

        <div class="btn-group mapModeSwitch" data-toggle="buttons-radio" style="display:none;" style="display:none;">

            <button type="button" class="btn btn-small mapModeOn mapModeOnButtonStyle"><i class="icon-map-marker"></i>Map Mode</button>

            <button type="button" class="btn btn-small mapModeOff" style="display:none;"><i class="icon-minus"></i>隐藏地图</button>

        </div>

    </div>







        <div class="middleAdsBannerWrapper">

            <div class="middleAdsBanner underNavBar">

                <div class="adsContentWrapper">


                </div>

            </div>

        </div>

    

    <div class="likedAlert">

        <div class="likedAlertContent">

            <img src="/img/heart.png" alt="" />

        </div>

    </div>

    <div class="pageLoading">

        <img src="img/page-load.gif" alt="loading" />

    </div>



    <div class="mapModeWrapper"><div class="mapModeMapView"></div><div style="position:absolute;top:0px; right:0px;">[x]</div></div>

    <div class="mapModeWrapperPlaceholder"></div>