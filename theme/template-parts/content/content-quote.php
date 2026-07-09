<?php

/**
 * Template part for displaying a quote block
 *
 * @package raivard_tw
 */

$quote_group = get_field('quote_group');

if (empty($quote_group)) :
	return;
endif;

$citation = $quote_group['quote'] ?? '';
$author   = $quote_group['author'] ?? '';
?>
<div class="px-8 entry-quote max-w-[785px] mx-auto text-center mt-[140px]">
	<svg class="block mx-auto" width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M10.4231 13.4418V24.155L0 25V19.0776C0 14.2533 0.843757 10.166 2.53845 6.81209C4.22956 3.46561 7.46097 1.19491 12.2363 0.00372245L13.7766 2.16647C11.4787 3.60706 9.75527 5.30077 8.60991 7.24017C7.46097 9.18329 7.12706 11.2493 7.61177 13.4418H10.4231ZM27.6465 13.4418V24.155L17.2234 25V19.0776C17.2234 14.2533 18.0672 10.166 19.7619 6.81209C21.453 3.46188 24.688 1.19119 29.4597 0L31 2.16275C28.7021 3.60334 26.9787 5.29705 25.8333 7.23645C24.6844 9.17957 24.3505 11.2455 24.8352 13.4381H27.6465V13.4418Z" fill="#E6C07B" fill-opacity="0.63" />
	</svg>
	<?php if ($citation) : ?>
		<p class="my-[50px] font-Cormorant font-bold italic text-[35px] sm:text-[50px] leading-[49.7px] sm:leading-[71px] tracking-[3%] text-center"><?php echo wp_kses_post($citation); ?></p>
	<?php endif; ?>
	<svg class="block mx-auto -scale-y-100 -scale-x-100" width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M10.4231 13.4418V24.155L0 25V19.0776C0 14.2533 0.843757 10.166 2.53845 6.81209C4.22956 3.46561 7.46097 1.19491 12.2363 0.00372245L13.7766 2.16647C11.4787 3.60706 9.75527 5.30077 8.60991 7.24017C7.46097 9.18329 7.12706 11.2493 7.61177 13.4418H10.4231ZM27.6465 13.4418V24.155L17.2234 25V19.0776C17.2234 14.2533 18.0672 10.166 19.7619 6.81209C21.453 3.46188 24.688 1.19119 29.4597 0L31 2.16275C28.7021 3.60334 26.9787 5.29705 25.8333 7.23645C24.6844 9.17957 24.3505 11.2455 24.8352 13.4381H27.6465V13.4418Z" fill="#E6C07B" fill-opacity="0.63" />
	</svg>
	<?php if ($author) : ?>
		<p class="font-RalewayBold text-[23px] tracking-[25%] uppercase text-[#E6C07BA1] text-center mt-[50px]"><?php echo esc_html($author); ?></p>
	<?php endif; ?>
</div>