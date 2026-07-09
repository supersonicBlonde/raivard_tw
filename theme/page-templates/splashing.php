<?php

/**
 * Template Name: Splashing
 *
 * @package raivard_tw
 */

get_header();

get_template_part('template-parts/content/content', 'title');

?>
<section class="px-8 md:max-w-[1129px] mt-[95px] mx-auto">
    <h3 class="font-RalewayRegular text-[20px] mt-[160px] tracking-[20%] text-center"><?php the_field('intro_title'); ?></h3>
    <div class="text-center font-RalewayLight text-[17px] mt-[135px] tracking-[0%] md:leading-[30px]"><?php the_field('intro_paragraphe'); ?></div>
</section>
<section class="mt-[230px] md:max-w-[1273px] px-8" id="section_1">
    <?php $section_1 = get_field('section_1'); ?>
    <h2 class="font-RalewayBold text-[24.5px] sm:text-[35px] tracking-[25%] text-[#FFFFFFCC]"><?php echo $section_1['title']; ?></h2>
    <p class="mt-[92px] font-RalewayLight text-[20px] leading-[30px] tracking-[25%] max-w-[700px]"><?php echo $section_1['paragraph']; ?></p>
</section>
<?php
get_template_part('template-parts/content/content', 'multihero');
?>
<section class="mt-[315px] px-8 md:max-w-[1273px]" id="section_2">
    <?php $section_2 = get_field('section_2'); ?>
    <h2 class="font-RalewayBold text-[24.5px] sm:text-[35px] tracking-[25%] text-[#FFFFFFCC]"><?php echo $section_2['title']; ?></h2>
    <p class="font-RalewayLight text-[20px] leading-[30px] tracking-[25%] max-w-[700px]"><?php echo $section_2['paragraph']; ?></p>
    <div id="media-group" class="mt-[114px]">
        <?php
        $media_group = $section_2['media_group'];
        if ($media_group): ?>
            <?php if ($media_group['type'] === 'image' && ! empty($media_group['media'])) : ?>
                <img src="<?php echo esc_url($media_group['media']['url']); ?>" alt="<?php echo esc_attr($media_group['media']['alt']); ?>" class="w-full h-auto" />
            <?php elseif ($media_group['type'] === 'video' && ! empty($media_group['video'])) : ?>
                <video
                    src="<?php echo esc_url($media_group['video']['url']); ?>"
                    <?php if (! empty($media_group['poster_video'])) : ?>poster="<?php echo esc_url($media_group['poster_video']['url']); ?>" <?php endif; ?>
                    autoplay muted loop playsinline>
                </video>
            <?php endif; ?>
        <?php
        endif ?>
    </div>
</section>
<?php
get_template_part('template-parts/content/content', 'quote');
get_template_part('template-parts/content/content', 'bottom');
?>
<?php get_footer(); ?>