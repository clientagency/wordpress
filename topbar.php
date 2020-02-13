   -------------------------------- HEADER


<?php if ( 'yes' == get_field('top_bar_toggle', 'option') ): ?>
   <div class="notice-bar bg-primary text-white">
     <div class="container-fluid clearfix">
       <div class="float-md-left ml-md-4">
         <p class="mb-0 pb-0"><?php the_field('top_bar', 'option'); ?></p>
       </div>
       <div class="float-md-right mr-md-4">
         <?php
          $link = get_field('top_bar_button', 'option');
          if( $link ):
           $link_url = $link['url'];
           $link_title = $link['title'];
           $link_target = $link['target'] ? $link['target'] : '_self';
           ?>
           <p class="m-0 p-0">
             <a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
           </p>
          <?php endif; ?>

       </div>
     </div>
   </div>
   <div class="push-wrapper">
   <?php endif; ?>
   
   -------------------------------- FOOTER
   
   <?php if ( 'yes' == get_field('top_bar_toggle', 'option') ): ?>
</div>
<?php endif; ?>


---------------------------------- CSS


.push-wrapper { position: relative; }
   
   
