<!-- скроллинг для мобильной версии -->
<script type="text/javascript">
	$(document).ready(function(){
	    if ($(window).width() <= '768'){
		//скролл к подкатегориям
		if ($('.side_menu_wrap ul li a').click()) {
			var catalog = $('.breadcrumbs');                
			if ($(catalog).length != 0) {
			    $('html, body').animate({ scrollTop: $(catalog).offset().top }, 500);
			}            
		    }
		    //к категории
		    if ($('.item a').click()) {
			var catalog = $('.breadcrumbs');                
			if ($(catalog).length != 0) {
			    $('html, body').animate({ scrollTop: $(catalog).offset().top }, 500);
			}            
		    }
		    //к товару
		    if ($('.prodName a').click()) {
			var catalog = $('.breadcrumbs');                
			if ($(catalog).length != 0) {
			    $('html, body').animate({ scrollTop: $(catalog).offset().top }, 500);
			}            
		    }
		}
	});
</script>

<!--перебирать элементы и записывать в них что то -->
<script type="text/javascript">
	$(document).ready(function(){
		var href = $('.side_menu_wrap ul li a').attr('href')+'#page-content';
		$('.side_menu_wrap ul li a').each(function(){
			$(this).attr('href')+href;
		});
	});
</script>
