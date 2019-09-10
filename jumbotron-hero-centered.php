<?php
    if ( wp_is_mobile() ) {
     $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', false, '' );
    } else {
     $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
    }
?>
 
<div class="jumbotron jumbotron-fluid d-flex align-items-center" style="background-image: url(<?php echo $img[0]; ?>); ">
  <div class="container">
      <div class="row"><div class="col text-center">
	       <h1 class="m-0"><?php the_title(); ?></h1>
      </div></div>
    </div>
</div>

