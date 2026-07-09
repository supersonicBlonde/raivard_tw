<?php

/**
 * Template Name: Contact
 *
 * @package raivard_tw
 */

get_header();

?>

<?php
$hero = get_field('hero');
if ($hero): ?>
    <section id="hero">
        <?php if (! empty($hero['media']) && is_array($hero['media'])) : ?>
            <div class="relative w-full overflow-hidden">
                <img class="w-full h-auto object-cover" src="<?php echo esc_url($hero['media']['url']); ?>" alt="<?php echo esc_attr($hero['media']['alt']); ?>" />
            </div>
        <?php endif; ?>
    </section>
<?php
endif ?>
<section class="mt-[100px] md:mt-[250px] px-8 md:px-0 text-center">
    <div class="inline-block">
        <h1 class="font-CatavaloThin text-[48px] md:text-[96px] tracking-wide leading-none">
            <?php the_field('page_title'); ?>
        </h1>
        <hr class="border-white/50 my-[90px] max-w-[329px] mx-auto">
        <h2 class="font-RalewayLight text-[20px] text-[#D9D9D9]/50 mt-[35px] tracking-[20%]">
            <?php the_field('sub_title'); ?>
        </h2>
    </div>
</section>
<section class="max-w-[830px] mt-[100px] mx-auto px-8 md:px-0">
    <h3 class="font-RalewayBold text-[22px] mb-[24px]">Envoyez une demande</h3>
    <?php
    echo do_shortcode('[contact-form-7 id="881bf43" title="Contact"]');
    ?>
</section>
<?php
get_template_part('template-parts/content/content', 'bottom');
?>

<?php get_footer(); ?>