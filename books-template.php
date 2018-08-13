<?php 
/*
Template Name: books
*/

get_header();

$args = array(
  'post_type'   => 'books',
  'post_status' => 'publish'
 );
 
?>
<div class="archive_title">
  <div class="container">
      <h1><?php _e('Archive List' , 'bookshelf'); ?></h1>
  </div>
</div>

<div class="archive_contain clearfix container">
<?php
$books = new WP_Query( $args );
if( $books->have_posts() ) :
?>
 
    <?php
      while( $books->have_posts() ) :
        $books->the_post();
        $post_id = get_the_ID();
        
        $publisher_term = get_the_terms( $books->ID , 'publisher' );
        $authors_term   = get_the_terms( $books->ID , 'authors' );
        $isbn_meta = get_post_meta( $books->ID , 'isbn', true );         

        ?>
        
          <div class="archive_item clearfix">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/book.jpg" alt="">
            <div class="archive_item_content">
              <div class="meta"><?php _e('Title:' , 'bookshelf'); ?><span><?php echo the_title(); ?></span></div>
              <div class="meta"><?php _e('ISBN:' , 'bookshelf'); ?>
                <span>
                  <?php echo $isbn_meta; ?>

                </span>

              </div>
              <div class="meta"><?php _e('Author:' , 'bookshelf'); ?><span><?php 

                    if (!empty($publisher_term)) {
                      foreach ( $publisher_term as $term ) {
                        echo $term->name;
                      }
                    }

              ?></span></div>
              <div class="meta"><?php _e('Publisher:' , 'bookshelf'); ?><span><?php
                    
                    if (!empty($authors_term)) {
                      foreach ( $authors_term as $term ) {
                        echo $term->name;
                      }
                    }


              ?></span></div>
              </div>
            </div>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
 
<?php
else :
  esc_html_e( 'No testimonials in the diving taxonomy!', 'bookshelf' );
endif;
?>
</div>
<?php get_footer() ?>