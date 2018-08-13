<?php get_header() 
?>
<div class="content clearfix">   
    <div id="contain" class="contain clearfix">
        <div class="container">
               <div id="main_items" class="clearfix">
                   <div class="main_item">
                       <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item_1.jpg" alt="">
                            <div class="main_item_title">
                                <h1><?php _e('See What Happened in Bookshelf' , 'bookshelf'); ?></h1>
                            </div>
                       </a>
                   </div>
                   <div class="main_item">
                       <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item_3.jpg" alt="">
                            <div class="main_item_title">
                                <h1><?php _e('Our Authors and Publishers' , 'bookshelf'); ?></h1>
                            </div>
                       </a>
                   </div>
                   <div class="main_item">
                       <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item_2.jpg" alt="">
                            <div class="main_item_title">
                                <h1><?php _e('Find Your Book' , 'bookshelf'); ?></h1>
                            </div>
                       </a>
                   </div>
               </div>
        </div>
    </div>
</div>
<?php get_footer() ?>