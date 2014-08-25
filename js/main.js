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
	
	/*var sfield = $("#s");
	var container = $("#photos");
	var timer;

	function instaSearch() {
		$(sfield).addClass("loading");
		$(container).empty();
		//var q = $(sfield).val();
		var q = "tatuajes";
		$.ajax({
			type: 'POST',
			url: 'instalib.php',
			data: "q="+q,
			success: function(data){
				$(sfield).removeClass("loading");
				 console.table(data);
				$.each(data, function(i, item) {
					var ncode = '<div class="p"><a href="'+data[i].src+'" class="fullsize" target="_blank"><img src="img/full-image.png" alt="fullsize"></a> <a href="'+data[i].url+'" target="_blank"><img src="'+data[i].thumb+'"></a></div>';
					$(container).append(ncode);
				});
			},
			error: function(xhr, type, exception) { 
				$(sfield).removeClass("loading");
				$(container).html("Error: " + type); 
			}
		});
	}
	
	/** 
	 * keycode glossary 
	 * 32 = SPACE
	 * 188 = COMMA
	 * 189 = DASH
	 * 190 = PERIOD
	 * 191 = BACKSLASH
	 * 13 = ENTER
	 * 219 = LEFT BRACKET
	 * 220 = FORWARD SLASH
	 * 221 = RIGHT BRACKET
	 */
	/*$(sfield).keydown(function(e){
      if(e.keyCode == '32' || e.keyCode == '188' || e.keyCode == '189' || e.keyCode == '13' || e.keyCode == '190' || e.keyCode == '219' || e.keyCode == '221' || e.keyCode == '191' || e.keyCode == '220') {
         e.preventDefault();
       } else {
    		clearTimeout(timer);

			timer = setTimeout(function() {
    		  instaSearch();
			}, 900);   
       }
    };
*/
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