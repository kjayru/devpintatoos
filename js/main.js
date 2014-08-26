$(document).ready(function(){
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