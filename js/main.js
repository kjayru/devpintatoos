$(document).ready(function(){
	$(".customGPlusSignIn").hover(
		function(){
			$(this).css({ "opacity": "1",
						  "filter": "Alpha(opacity=100)",
						  "text-decoration":"none",
						  "background": "rgba(255,255,255,.2)"});
			},
		function(){
			$(this).css({ "opacity": "1",
						  "filter": "Alpha(opacity=80)",
						  "text-decoration":"none",
						  "background":"transparent"});
			}
		);
	$("#send").click(function(e){
			e.preventDefault();
		var midata = $("#registro").serialize();
		$.ajax({
			url:"register.php",
			data:midata,
			type:"POST",
			dataType:"json",
			before:function(){},
			success:function(data){
					if(data.rpta=="ok"){
					window.location.href="index.php?user="+data.nombres;
					}
				}
			});
	});
	
	
	$("#login").click(function(e){
		e.preventDefault();
		var midata = $("#formlogin").serialize();
		$.ajax({
			url:"verificar.php",
			data:midata,
			type:"POST",
			dataType:"json",
			before:function(){},
			success:function(data){
				 if(data.rpta=="ok"){
				    window.location.href="index.php?user="+data.nombres;
				   }else{
					alert(data.mensaje);
				  }
				}
			});
	});
	
	
	$("#sendpost").click(function(e){
		e.preventDefault();
		var midata = $("#formpost").serialize();
		$.ajax({
			url:"savepost.php",
			data:midata,
			type:"POST",
			dataType:"json",
			before:function(){},
			success:function(data){
				 if(data.rpta=="ok"){
				    window.location.href="index.php?user="+data.nombres;
				   }else{
					alert(data.mensaje);
				  }
				}
			});
	});

$(".lfacebook").click(function(e){
	e.preventDefault();
	console.log("evento");
	FB.login(checkLoginStatus,{ scope: ' user_likes, publish_actions, offline_access,publish_stream,email'});	
	function checkLoginStatus(response) {
        if(response && response.status == 'connected') {          
		  var uid = response.authResponse.userID;
		  var accessToken = response.authResponse.accessToken;
		  FB.api('/me', function(response) {	
		  var name     = response.first_name;
		  var lastname = response.last_name;
		  var email    = response.email;
		  $("#nombres").attr("value",name);
		  $("#correo").attr("value",email);
		 var registro=({'idface':uid,'correo':email});
		
        
      });
	  }
	FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
		var uid = response.authResponse.userID;
	  }
   });
  };
});	

$(".ltwitter").click(function(){
            TwitterLogin();
	});
});



$(function () {
    'use strict';
  
    $('#fileupload').fileupload({
        url: "uploadfile.php",
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
               // $('<p/>').text(file.name).appendTo('#files');
                $("#pfiles").attr("src","files/thumbnail/"+file.name);
                $("#picture").val(file.name);
				$(".picture").val(file.name);
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
		
		

});