<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */


$back_to_top_class = mfn_opts_get('back-top-top');

if( $back_to_top_class == 'hide' ){
	$back_to_top_position = false;
} elseif( strpos( $back_to_top_class, 'sticky' ) !== false ){
	$back_to_top_position = 'body';
} elseif( mfn_opts_get('footer-hide') == 1 ){
	$back_to_top_position = 'footer';
} else {
	$back_to_top_position = 'copyright';
}

?>
	
		<?php if( is_tax( 'product_cat' ) || is_post_type_archive( 'product' ) )  : ?>

			<div class="section mcb-section    bg-cover" style="margin-top:100px; padding-top:100px; padding-bottom:80px; background-color:" data-parallax="3d"><img class="mfn-parallax" src="<?php echo site_url(); ?>/wp-content/uploads/2016/08/bg-services.jpg" alt="" style="width: 1270px; height: 846.884px; transform: translate3d(0px, -59px, 0px);">
				<div class="section_wrapper mcb-section-inner">
					<div class="wrap mcb-wrap one  valign-middle clearfix" style="">
						<div class="mcb-wrap-inner">
							<div class="column mcb-column one-sixth column_placeholder">
								<div class="placeholder">&nbsp;</div>
							</div>
							<div class="column mcb-column two-third column_column  column-margin-50px">
								<div class="column_attr clearfix align_center" style="">
									<h2 style="color: #fff;">Portifólio de Serviços.</h2></div>
							</div>
						</div>
					</div>
					<div class="wrap mcb-wrap one-third  valign-middle clearfix" style="">
						<div class="mcb-wrap-inner">
							<div class="column mcb-column one-third column_image ">
								<div class="animate zoomIn" data-anim-type="zoomIn">
									<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
										<div class="image_wrapper"><img class="scale-with-grid" src="<?php echo site_url(); ?>/wp-content/uploads/2016/08/locacao-icon.png" alt="locacao-icon" width="128" height="121"></div>
									</div>
								</div>
							</div>
							<div class="column mcb-column two-third column_column  column-margin-">
								<div class="column_attr clearfix align_center">
									<p style="color: #fff !Important; margin-bottom: 10px; font-weight: 400; font-size:25px"></br>Locação</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wrap mcb-wrap one-third  valign-middle clearfix" style="">
						<div class="mcb-wrap-inner">
							<div class="column mcb-column one-third column_image ">
								<div class="animate zoomIn" data-anim-type="zoomIn">
									<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
										<div class="image_wrapper"><img class="scale-with-grid" src="<?php echo site_url(); ?>/wp-content/uploads/2016/08/manutencao-icon.png" alt="manutencao-icon" width="128" height="121"></div>
									</div>
								</div>
							</div>
							<div class="column mcb-column two-third column_column  column-margin-">
								<div class="column_attr clearfix align_center">
									<p style="color: #fff !Important; margin-bottom: 10px; font-weight: 400; font-size:25px"></br>Manutenção</p>
							</div>
						</div>
					</div>
					<div class="wrap mcb-wrap one-third  valign-top clearfix" style="">
						<div class="mcb-wrap-inner">
							<div class="column mcb-column one-third column_image ">
								<div class="animate zoomIn" data-anim-type="zoomIn">
									<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
										<div class="image_wrapper"><img class="scale-with-grid" src="<?php echo site_url(); ?>/wp-content/uploads/2016/08/projetos-icon.png" alt="projetos-icon" width="128" height="121"></div>
									</div>
								</div>
							</div>
							<div class="column mcb-column two-third column_column  column-margin-">
								<div class="column_attr clearfix align_center">
									<p style="color: #fff !Important; margin-bottom: 10px; font-weight: 400; font-size:25px"></br>Projetos</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Newslleter		-->
			<div class="section mcb-section   " style="padding-top:80px; padding-bottom:20px; background-color:#666">
				<div class="section_wrapper mcb-section-inner">
					<div class="wrap mcb-wrap one-second  valign-top clearfix" style="">
						<div class="mcb-wrap-inner">
							<div class="column mcb-column one column_column  column-margin-">
								<div class="column_attr clearfix" style="">
									<p style="color: #ffffff; font-size:48px; line-height:44px">Quer saber mais?</p>
									<p style="color: #ffffff; font-size:24px; line-height:26px">Fique por dentro das últimas novidades da Union.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wrap mcb-wrap one-second  valign-top clearfix" style="">
						<div class="mcb-wrap-inner">
							<div class="column mcb-column one column_column  column-margin-">
								<div class="column_attr clearfix" style="">
									<?php echo do_shortcode('[contact-form-7 id="336" title="Newsletter"]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php endif; ?>
			<?php do_action( 'mfn_hook_content_after' ); ?>
				<!-- #Footer -->
				<footer id="Footer" class="clearfix">

					<?php if ( $footer_call_to_action = mfn_opts_get('footer-call-to-action') ): ?>
						<div class="footer_action">
							<div class="container">
								<div class="column one column_column">
									<?php echo do_shortcode( $footer_call_to_action ); ?>
								</div>
							</div>
						</div>
						<?php endif; ?>

							<?php 
		$sidebars_count = 0;
		for( $i = 1; $i <= 5; $i++ ){
			if ( is_active_sidebar( 'footer-area-'. $i ) ) $sidebars_count++;
		}
		
		if( $sidebars_count > 0 ){
			
			$footer_style = '';
				
			if( mfn_opts_get( 'footer-padding' ) ){
				$footer_style .= 'padding:'. mfn_opts_get( 'footer-padding' ) .';';
			}
			
			echo '<div class="widgets_wrapper" style="'. $footer_style .'">';
				echo '<div class="container">';
						
					if( $footer_layout = mfn_opts_get( 'footer-layout' ) ){
						// Theme Options

						$footer_layout 	= explode( ';', $footer_layout );
						$footer_cols 	= $footer_layout[0];
		
						for( $i = 1; $i <= $footer_cols; $i++ ){
							if ( is_active_sidebar( 'footer-area-'. $i ) ){
								echo '<div class="column '. $footer_layout[$i] .'">';
									dynamic_sidebar( 'footer-area-'. $i );
								echo '</div>';
							}
						}						
						
					} else {
						// Default - Equal Width
						
						$sidebar_class = '';
						switch( $sidebars_count ){
							case 2: $sidebar_class = 'one-second'; break;
							case 3: $sidebar_class = 'one-third'; break;
							case 4: $sidebar_class = 'one-fourth'; break;
							case 5: $sidebar_class = 'one-fifth'; break;
							default: $sidebar_class = 'one';
						}
						
						for( $i = 1; $i <= 5; $i++ ){
							if ( is_active_sidebar( 'footer-area-'. $i ) ){
								echo '<div class="column '. $sidebar_class .'">';
									dynamic_sidebar( 'footer-area-'. $i );
								echo '</div>';
							}
						}
						
					}
				
				echo '</div>';
			echo '</div>';
		}
	?>


								<?php if( mfn_opts_get('footer-hide') != 1 ): ?>

									<div class="footer_copy">
										<div class="container">
											<div class="column one">

												<?php 
						if( $back_to_top_position == 'copyright' ){
							echo '<a id="back_to_top" class="button button_left button_js" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>';
						}
					?>

													<!-- Copyrights -->
													<div class="copyright">
														<?php 
							if( mfn_opts_get('footer-copy') ){
								echo do_shortcode( mfn_opts_get('footer-copy') );
							} else {
								echo '&copy; '. date( 'Y' ) .' '. get_bloginfo( 'name' ) .'. All Rights Reserved. <a target="_blank" rel="nofollow" href="http://muffingroup.com">Muffin group</a>';
							}
						?>
													</div>

													<?php 
						if( has_nav_menu( 'social-menu-bottom' ) ){
							mfn_wp_social_menu_bottom();
						} else {
							get_template_part( 'includes/include', 'social' );
						}
					?>

											</div>
										</div>
									</div>

									<?php endif; ?>


										<?php 
		if( $back_to_top_position == 'footer' ){
			echo '<a id="back_to_top" class="button button_left button_js in_footer" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>';
		}
	?>


				</footer>

				</div>
				<!-- #Wrapper -->

				<?php 
	// Responsive | Side Slide
	if( mfn_opts_get( 'responsive-mobile-menu' ) ){
		get_template_part( 'includes/header', 'side-slide' );
	}
?>

					<?php
	if( $back_to_top_position == 'body' ){
		echo '<a id="back_to_top" class="button button_left button_js '. $back_to_top_class .'" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>';
	}
?>

						<?php if( mfn_opts_get('popup-contact-form') ): ?>
							<div id="popup_contact">
								<a class="button button_js" href="#"><i class="<?php mfn_opts_show( 'popup-contact-form-icon', 'icon-mail-line' ); ?>"></i></a>
								<div class="popup_contact_wrapper">
									<?php echo do_shortcode( mfn_opts_get('popup-contact-form') ); ?>
										<span class="arrow"></span>
								</div>
							</div>
							<?php endif; ?>

								<?php do_action( 'mfn_hook_bottom' ); ?>

									<!-- wp_footer() -->
									<?php wp_footer(); ?>

										</body>

										</html>