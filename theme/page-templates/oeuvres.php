<?php

/**
 * Template Name: Oeuvres
 *
 * @package raivard_tw
 */

get_header();

?>

<?php
get_template_part('template-parts/content/content', 'hero');
?>
<section class="mt-[100px] md:mt-[250px] px-8 md:px-0 text-center">
    <div class="inline-block">
        <h1 class="font-CatavaloThin text-[48px] md:text-[96px] mb-12 tracking-wide">
            <?php the_field('page_title'); ?>
        </h1>
        <hr class="border-white/50 my-[90px] max-w-[329px] mx-auto">
    </div>
</section>
<section class="px-8 md:max-w-[650px] mt-[135px] mx-auto">
    <div class="text-center font-RalewayExtraLight text-[20px] mb-6 tracking-wide md:leading-[30px] md:leading-[40px]"><?php the_field('introduction_'); ?></div>
</section>
<!-- MOBILE -->
<section class="px-8 mt-[100px] md:mt-[300px] md:hidden splide" id="slider1">
    <div class="splide__track">
        <div class="splide__list">
            <?php
            if (have_rows('rows_flexible_content')):
                while (have_rows('rows_flexible_content')) : the_row();
                    if (get_row_layout() === 'rows'):
                        if (have_rows('row')):
                            while (have_rows('row')) : the_row();
                                if (have_rows('col')):
                                    while (have_rows('col')) : the_row();
                                        $image = get_sub_field('image');
                                        $title = get_sub_field('title');
            ?>
                                        <div class="splide__slide">
                                            <?php if (! empty($image) && is_array($image)) : ?>
                                                <div class="relative aspect-[1/1.06] overflow-hidden">
                                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full h-full object-cover">
                                                    <!-- overlay -->
                                                    <div data-image="<?php echo esc_url($image['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="text-left my-1 text-[#cccccc] text-sm my-4"><?php echo $title; ?></div>
                                        </div>
            <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php
if (have_rows('rows_flexible_content')):
?>
    <section class="mt-[50px]">
        <?php
        while (have_rows('rows_flexible_content')) : the_row();
            if (get_row_layout() === 'rows'):
                if (have_rows('row')):
        ?>
                    <section class="max-w-[1200px] mt-[230px] mx-auto px-8 md:px-0  hidden md:block">
                        <div class="md:flex md:gap-12">
                            <?php while (have_rows('row')) : the_row(); ?>
                                <?php if (have_rows('col')): ?>
                                    <?php while (have_rows('col')) : the_row(); ?>
                                        <div class="col">
                                            <div class="relative overflow-hidden">
                                                <?php $image = get_sub_field('image'); ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="">
                                                <div data-image="<?php echo esc_url($image['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                                            </div>
                                            <div class="text-left my-1 text-[#cccccc] text-sm my-4"><?php echo get_sub_field('title'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    </section>
        <?php
                endif;
            endif;
        endwhile;
        ?>
    </section>
<?php
endif;


get_template_part('template-parts/content/content', 'bottom');
?>

<?php get_footer(); ?>