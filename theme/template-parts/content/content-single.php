<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raivard_tw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="mt-[220px]">

	<header class="entry-header px-8 md:max-w-[1229px] mx-auto">
		<?php
		$category = get_the_category();
		if (! empty($category)) {
			echo '<span class="entry-category font-RalewayBold text-[23px] tracking-[47%] uppercase text-[#E6C07BA1]">' . esc_html($category[0]->name) . '</span>';
		}
		?>
		<div class="flex items-center gap-4">
			<?php the_title('<h1 class="mt-[30px] font-Cormorant font-semibold text-[90px] leading-none tracking-normal">', '</h1>'); ?>
		</div>

		<div class="entry-meta-line flex items-center gap-4 my-[68px]">
			<?php
			$date_text = ucfirst(date_i18n('j F Y', get_the_time('U')));
			$location  = get_field('location');
			$acf_cat   = get_field('category');

			$parts = array_filter([
				'<span class="inline-flex items-center gap-2"><svg class="shrink-0" width="29" height="33" viewBox="20 16 29 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.6665 17.9165V23.7498" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M40.3335 17.9165V23.7498" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M44.7083 20.8335H24.2917C22.6808 20.8335 21.375 22.1393 21.375 23.7502V44.1668C21.375 45.7777 22.6808 47.0835 24.2917 47.0835H44.7083C46.3192 47.0835 47.625 45.7777 47.625 44.1668V23.7502C47.625 22.1393 46.3192 20.8335 44.7083 20.8335Z" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.375 29.5835H47.625" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.6665 35.4165H28.6765" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.5 35.4165H34.51" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M40.3335 35.4165H40.3435" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.6665 41.25H28.6765" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.5 41.25H34.51" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M40.3335 41.25H40.3435" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span class="font-RalewaySemiBold text-[20px] tracking-[10px] uppercase text-[#FFFFFFB2]">' . esc_html($date_text) . '</span></span>',
				$location ? '<span class="inline-flex items-center gap-2"><svg class="shrink-0" width="25" height="31" viewBox="4 1 25 31" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.3264 29.9736C19.8839 27.7654 27.5 20.6154 27.5 13.75C27.5 10.8326 26.3411 8.03472 24.2782 5.97182C22.2153 3.90893 19.4174 2.75 16.5 2.75C13.5826 2.75 10.7847 3.90893 8.72182 5.97182C6.65893 8.03472 5.5 10.8326 5.5 13.75C5.5 20.6154 13.1161 27.7654 15.6736 29.9736C15.9119 30.1528 16.2019 30.2497 16.5 30.2497C16.7981 30.2497 17.0881 30.1528 17.3264 29.9736Z" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.5 17.875C18.7782 17.875 20.625 16.0282 20.625 13.75C20.625 11.4718 18.7782 9.625 16.5 9.625C14.2218 9.625 12.375 11.4718 12.375 13.75C12.375 16.0282 14.2218 17.875 16.5 17.875Z" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span class="font-RalewaySemiBold text-[20px] tracking-[10px] uppercase text-[#FFFFFFB2]">' . esc_html($location) . '</span></span>' : '',
				$acf_cat  ? '<span class="inline-flex items-center gap-2"><svg class="shrink-0" width="33" height="31" viewBox="1 1 33 31" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.0417 14.5835L20.4167 18.9585" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.47917 30.6248C10.4887 30.6248 11.4755 30.3255 12.3149 29.7646C13.1543 29.2038 13.8085 28.4066 14.1948 27.474C14.5811 26.5413 14.6822 25.515 14.4853 24.5249C14.2883 23.5348 13.8022 22.6253 13.0884 21.9115C12.3745 21.1977 11.4651 20.7115 10.4749 20.5146C9.48484 20.3176 8.45856 20.4187 7.52589 20.805C6.59323 21.1914 5.79607 21.8456 5.23521 22.685C4.67436 23.5243 4.37501 24.5112 4.37501 25.5207C4.37528 26.4913 4.00612 27.4257 3.34251 28.134C3.13803 28.338 2.99871 28.5981 2.94223 28.8813C2.88574 29.1645 2.91463 29.4581 3.02522 29.7249C3.13581 29.9917 3.22313 30.2197 3.56343 30.3799C3.80374 30.5401 4.0862 30.6254 4.37501 30.6248H9.47917Z" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.5381 24.8368L31.1762 8.2016C31.7567 7.62106 32.0829 6.83366 32.0829 6.01265C32.0829 5.19163 31.7567 4.40424 31.1762 3.82369C30.5956 3.24314 29.8083 2.91699 28.9872 2.91699C28.1662 2.91699 27.3788 3.24314 26.7983 3.82369L10.1602 20.4618" stroke="#E6C07B" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span class="font-RalewaySemiBold text-[20px] tracking-[10px] uppercase text-[#FFFFFFB2]">' . esc_html($acf_cat) . '</span></span>' : '',
			]);
			echo '<span class="inline-flex items-center">' . implode('<span class="mx-2">|</span>', $parts) . '</span>';
			?>
		</div>
	</header><!-- .entry-header -->
	<section class="px-8 md:max-w-[1229px] mx-auto">
		<?php $texte_1 = get_field('texte_1');
		if ($texte_1) : ?>
			<div class="font-RalewayRegular font-normal text-[20px] leading-[45px] tracking-[0.1em] text-[#FFFFFF8A]">
				<?php echo wp_kses_post($texte_1); ?>
			</div>
		<?php endif; ?>

		<div class="mt-[68px] mb-[130px]">
			<?php
			$media = get_field('media_group');
			if (!empty($media)) :
				$media_type   = $media['type'] ?? '';
				$image        = $media['image'] ?? null;
				$video        = $media['video'] ?? null;
				$poster_video = $media['poster_video'] ?? null;

				if ($media_type === 'image' && !empty($image)) : ?>
					<div class="entry-media">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>">
					</div>
				<?php elseif ($media_type === 'video' && !empty($video)) : ?>
					<div class="entry-media">
						<video controls<?php if ($poster_video) echo ' poster="' . esc_url($poster_video['url']) . '"'; ?>>
							<source src="<?php echo esc_url($video['url']); ?>" type="<?php echo esc_attr($video['mime_type']); ?>">
						</video>
					</div>
			<?php endif;
			endif; ?>
		</div>
		<?php $texte_2 = get_field('texte_2');
		if ($texte_2) : ?>
			<div class="font-RalewayRegular font-normal text-[20px] leading-[45px] tracking-[0.1em] text-[#FFFFFF8A]">
				<?php echo wp_kses_post($texte_2); ?>
			</div>
		<?php endif; ?>

		<?php if (have_rows('deux_colonnes')) : ?>
			<div class="grid grid-cols-2 gap-16 mt-[120px]">
				<?php while (have_rows('deux_colonnes')) : the_row();
					$image = get_sub_field('image');
					$texte = get_sub_field('texte');
				?>
					<div class="flex flex-col">
						<?php if ($image) : ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-[342px] object-cover">
						<?php endif; ?>
						<?php if ($texte) : ?>
							<div class="font-RalewayRegular font-normal text-[20px] leading-[45px] tracking-[0.1em] text-[#FFFFFF8A] mt-[80px]"><?php echo wp_kses_post($texte); ?></div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<?php $texte_3 = get_field('texte_3');
		if ($texte_3) : ?>
			<div class="font-RalewayRegular font-normal text-[20px] leading-[45px] tracking-[0.1em] text-[#FFFFFF8A] mt-[80px]">
				<?php echo wp_kses_post($texte_3); ?>
			</div>
		<?php endif; ?>
	</section>

	<?php get_template_part('template-parts/content/content', 'quote'); ?>

	<?php
	$autres_query = new WP_Query([
		'post_type'           => 'post',
		'post_status'         => 'publish',
		'posts_per_page'      => 3,
		'post__not_in'        => [get_the_ID()],
		'orderby'             => 'rand',
		'ignore_sticky_posts' => 1,
	]);

	if ($autres_query->have_posts()) : ?>
		<section class="mt-[195px] px-8 md:max-w-[1229px] mx-auto">
			<div>
				<div class="flex items-center gap-16">
					<hr class="flex-1 border-white/20">
					<h2 class="font-Cormorant font-bold text-[35px] tracking-[25%] uppercase text-center text-[#FFFFFFCC]">Autres Actualités</h2>
					<hr class="flex-1 border-[#D9D9D933]">
				</div>

				<div class="grid grid-cols-1 md:grid-cols-3 gap-16 mt-[70px]">
					<?php while ($autres_query->have_posts()) : $autres_query->the_post();
						$card_cat      = get_the_category();
						$card_location = get_field('location');
						$card_date     = ucfirst(date_i18n('F Y', get_the_time('U')));
						$card_loc_date = implode(', ', array_filter([$card_location, $card_date]));
					?>
						<a href="<?php the_permalink(); ?>" class="group flex flex-col h-[440px] bg-[#121212] overflow-hidden border border-[#566B8980]">
							<div class="overflow-hidden shrink-0">
								<?php if (has_post_thumbnail()) : ?>
									<img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>"
										alt="<?php echo esc_attr(get_the_title()); ?>"
										class="w-full h-[230px] object-cover group-hover:scale-105 transition-transform duration-500">
								<?php else : ?>
									<div class="w-full h-[230px]"></div>
								<?php endif; ?>
							</div>
							<div class="flex flex-col flex-1 p-6 pt-5">
								<?php if (!empty($card_cat)) : ?>
									<span class="font-RalewaySemiBold text-[14px] leading-[45px] tracking-[10%] uppercase text-[#E6C07B99]">
										<?php echo esc_html($card_cat[0]->name); ?>
									</span>
								<?php endif; ?>
								<h3 class="font-Cormorant text-[26px] leading-[1.25] text-white mt-4 mb-6">
									<?php the_title(); ?>
								</h3>
								<div class="flex items-center justify-between mt-auto">
									<?php if ($card_loc_date) : ?>
										<span class="font-Raleway text-[14px] text-[#D8D3CD]">
											<?php echo esc_html($card_loc_date); ?>
										</span>
									<?php endif; ?>
									<span class="text-[#D8D3CD99] text-[18px] ml-auto">→</span>
								</div>
							</div>
						</a>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>

			</div>
		</section>
	<?php endif; ?>

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->