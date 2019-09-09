<?php if ( 'yes' == get_field('show_modal', 'option') ): ?>


  <script src="<?php bloginfo( 'template_directory' ); ?>/js/js.cookie.js"></script>
  <script>
  jQuery(document).ready(function($) {

    if (!Cookies.get('popup-<?php the_field('modal_cookie_hash', 'option'); ?>')) {
        $('#siteModal').modal('show');
    }
    $('.modal .close-cookie').click(function() {
      Cookies.set('popup-<?php the_field('modal_cookie_hash', 'option'); ?>', 'valid', { expires: 3, path: "/" }); // need to set the path to fix a FF bug
    })

  });
  </script>


  <!-- Modal -->
  <div class="modal fade" id="siteModal" tabindex="-1" role="dialog" aria-labelledby="Notice" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLongTitle"><?php the_field('modal_otsikko', 'option'); ?></h5>
          <button type="button" class="close close-cookie" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">

          <?php $img = get_field('modal_image', 'option'); ?>
          <?php if( $img ): ?>
              <img src="<?php echo $img['sizes']['large']; ?>" class="img-fluid" />
          <?php endif; ?>
          <?php if( get_field('modal_content', 'option') ): ?>
            <div class="p-2 p-lg-3">
              <?php the_field('modal_content', 'option'); ?>
            </div>
          <?php endif; ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline close-cookie" data-dismiss="modal">Sulje</button>

          <?php if( get_field('modal_link', 'option') ):
              $link = get_field('modal_link', 'option');
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self'; ?>

              <a class="btn btn-lg btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                  <?php echo esc_html($link_title); ?>
              </a>
          <?php endif; ?>


        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
