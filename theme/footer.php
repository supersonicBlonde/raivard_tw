<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raivard_tw
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

</div><!-- #page -->

<!-- SCROLL TO TOP -->
<button
	id="scroll-to-top"
	type="button"
	aria-label="<?php esc_attr_e('Retour en haut', 'raivard_tw'); ?>"
	class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-14 h-14 rounded-full bg-dark/80 backdrop-blur opacity-0 pointer-events-none transition-opacity duration-300 cursor-pointer">
	<svg class="absolute inset-0 w-full h-full -rotate-90" viewBox="0 0 56 56" aria-hidden="true">
		<circle cx="28" cy="28" r="25" fill="none" stroke="currentColor" stroke-width="2" class="text-white/10"></circle>
		<circle
			id="scroll-progress-ring"
			cx="28" cy="28" r="25"
			fill="none"
			stroke="currentColor"
			stroke-width="2"
			stroke-linecap="round"
			class="text-secondary"
			stroke-dasharray="157.08"
			stroke-dashoffset="157.08"></circle>
	</svg>
	<svg width="19" height="15" viewBox="0 0 19 15" fill="none" class="relative" aria-hidden="true">
		<path d="M1 14L8.9123 1.31786C8.97281 1.221 9.05881 1.14077 9.16185 1.08504C9.26489 1.0293 9.38143 1 9.5 1C9.61858 1 9.73511 1.0293 9.83815 1.08504C9.94119 1.14077 10.0272 1.221 10.0877 1.31786L18 14" stroke="#E6C07B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
	</svg>
</button>

<!-- IMAGE MODAL -->
<div id="image-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 p-4">
	<div class="relative w-full max-w-4xl">
		<button
			id="image-modal-close"
			type="button"
			class="flex items-center absolute top-2 right-2 z-10 text-white text-3xl leading-none cursor-pointer bg-black/50 w-10 h-10 flex items-center justify-center">
			<div class="-mt-2">&times;</div>
		</button>
		<img id="modal-image" src="" alt="" class="max-w-full max-h-[80vh] w-auto h-auto mx-auto object-contain">
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
