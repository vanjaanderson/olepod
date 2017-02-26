<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// Custom text
$txt = <<<EOD
<div id="custom-text">
<p>&hellip;är en podcast som fokuserar på dig och din historia. Det spelar ingen roll vem du är... om du har en bra historia, och vi vill höra dig berätta den!</p>

<p>Handlar den om vad som helst? Fine! Huvudsaken är att den är sann och att den haft en betydande inverkan på ditt liv.</p>

<p>Klicka på länken ”PITCH” och tala in en max 2 minuter lång sammanfattning av din historia. Om vi gillar det vi hör så återkommer vi och bestämmer tid för inspelning i vår studio belägen i centrala Stockholm. Efter vederbörlig redigering går du, som man sade förr i tiden: ”On Air”!</p>
</div>
EOD;
?>

<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
				<!-- Custom text -->
				<?= $txt ?>
				<!-- Pitch Button -->
				<a id="pitch" href="#">Spela in pitch</a>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
