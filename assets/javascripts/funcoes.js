$(function(){
	//zebra
	$('ul#mostra li:odd').addClass('zebra_odd');  
    $('ul#mostra li:even').addClass('zebra_even');

    // Menu Lateral
	$(document).on('click','.lateral > ul > li > a', function() {

		var checkElement = $(this).next();

		$('.lateral li').removeClass('active');
		$(this).closest('li').addClass('active');	

		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		}

		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			$('.lateral ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}

		if (checkElement.is('ul')) {
			return false;
		} else {
			return true;	
		}
	});

	// Abre e fecha menu Mobile
	$(document).on('click', '.nav-toggle', function(){
		if($(".lateral").hasClass("menu-fechado")) {
			$('.lateral').animate({
				marginLeft: "0px"
			}, 100, function(){
				 $(".lateral").removeClass("menu-fechado");
			});

		}else{
			$(".lateral").addClass("menu-fechado");
			$('.lateral').animate({
				marginLeft: "-220px"
			}, 100, function(){
				 $(".lateral").addClass("menu-fechado");
			});
		}
	});

	// Previa image upload
	$("#img").change(function() {     $(this).prev().html($(this).val()); });
    $(function(){
	     Foto1 = {
	        UpdatePreview: function(obj){
	          // if IE < 10 doesn't support FileReader
	          if(!window.FileReader){
	             // don't know how to proceed to assign src to image tag
	          } else {
	             var reader = new FileReader();
	             var target = null;
	             
	             reader.onload = function(e) {
	              target =  e.target || e.srcElement;
	               $("img#1").prop("src", target.result);
	             };
	              reader.readAsDataURL(obj.files[0]);
	          }
	        }
	    };
	});
});