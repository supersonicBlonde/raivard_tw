<?php

/**
 * Template Name: Parcours
 *
 * @package raivard_tw
 */

get_header();

?>

<?php
get_template_part('template-parts/content/content', 'multihero');
?>
<section class="mt-[140px] px-8 max-w-[1300px]">
    <h1 class="font-CatavaloSemiBold text-[48px] tracking-[10%] uppercase">
        <?php
        the_title();
        ?></h1>
    <h2 class="mt-[55px] font-RalewayLight text-[32px] text-[#FFFFFFCC]"><?php the_field('sub_title'); ?></h2>
</section>
<section class="mt-[260px] px-8 max-w-[1300px]">

    <?php if (have_rows('bloc_title_paragraph')) : ?>
        <?php while (have_rows('bloc_title_paragraph')) : the_row(); ?>
            <div class="mb-[190px]">
                <h3 class="font-RalewaySemiBold text-[25px] tracking-[20%]"><?php the_sub_field('title'); ?></h3>
                <p class="font-Raleway text-[17px] leading-[30px] tracking-[10%] text-[#D9D9D9]"><?php the_sub_field('paragraph'); ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php
get_template_part('template-parts/content/content', 'bottom');
?>

<?php get_footer(); ?>