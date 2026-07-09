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
