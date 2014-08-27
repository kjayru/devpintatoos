<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pintattoo - Explore All Instagram Online</title>
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
<div id="fb-root"></div>
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '923540207659594',
          xfbml      : true,
          version    : 'v2.0'
        });
      };
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));   
</script>
<!-- google api.---->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/client:plusone.js?onload=render';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  })();

  function render() {
    gapi.signin.render('customBtn', {
      'callback': 'signinCallback',
      'clientid': '46889575497-tvaort1fensh4jkrdms6kchjg1dnqgfo.apps.googleusercontent.com',
      'cookiepolicy': 'single_host_origin',
      'requestvisibleactions': 'http://schemas.google.com/AddActivity',
      'scope': 'https://www.googleapis.com/auth/plus.login'
    });
  }
  
  function signinCallback(authResult) {
  

        if (authResult['status']['signed_in']) { //get some user info
            gapi.client.load('oauth2', 'v2', function() {
                gapi.client.oauth2.userinfo.get().execute(function(resp){
                  
                    var nombres = resp.given_name; //get user email
                    var apellidos =resp.family_name;
                    var id=resp.id;
					var foto = resp.picture;
					console.log(resp);
                    
                });
            });
        } else {
        // Update the app to reflect a signed out user
      }

}

</script>