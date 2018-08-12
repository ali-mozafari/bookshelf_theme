jQuery(document).ready( function($) {
	 /*function save_main_options_ajax() {
           $('#number_slider').on('change', function (e) {
                var b =  $(this).serialize();
                $.post( 'options.php', b ).error( 
                    function() {
                        alert('error');
                    }).success( function() {
                        alert('success');   
                    });
                    return false;    
                });
            }
 save_main_options_ajax();*/
	
	$('#newsletter_emailbox_btn').click(function(e){
		
		e.preventDefault();
		
	}); 
	var clipboard = new Clipboard('#newsletter_emailbox_btn');

	clipboard.on('success', function(e) {
		$('#clipboard-notify').hide();
		$('#clipboard-notify').text('ذخیره شد.');
		$('#clipboard-notify').fadeIn().delay(2000).fadeOut();
		

		e.clearSelection();
	});

	clipboard.on('error', function(e) {
		console.error('Action:', e.action);
		console.error('Trigger:', e.trigger);
	});
	
	
	$(".farad_admin_panel_section_title").click(function(){
        $(this).next().slideToggle();
    });
	
	$(".farad_admin_panel_sidebar_group_menu ul li").click(function(){
		var section_temp = '#farad_admin_panel_';
		var title_temp = $(this).text();
        section_temp += $(this).data('section');
		
		
		$('.farad_admin_panel_sidebar_group_menu ul li').css('background-color' , '#424242');
		$(this).css('background-color' , '#666');
		$('.farad_admin_panel_main_content').fadeOut('fast').promise().done(function() {
			
			$(section_temp).fadeIn("fast");
			$('.farad_admin_panel_main_head h1').text(title_temp);
			
		});
		
    });
	
	$('.change_number').on('change', function (e) {
		
		//$('#submit').click();
		
	});
	



});