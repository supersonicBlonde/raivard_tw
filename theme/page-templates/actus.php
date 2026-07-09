<?php

/**
 * Template Name: Actus
 *
 * @package raivard_tw
 */

get_header();
?>
<section class="mt-[100px] md:mt-[250px] px-8 md:px-0 text-center">
    <div class="inline-block">
        <h1 class="font-CatavaloThin text-[48px] md:text-[96px] mb-12 tracking-wide">
            <?php the_field('page_title'); ?>
        </h1>
        <hr class="border-white/50 mb-12">
        <h2 class="font-RalewayLight text-[20px] text-[#D9D9D9]/50 mt-[35px] tracking-[20%]">
            <?php the_field('sub_title'); ?>
        </h2>
    </div>
</section>
<section class="px-8 md:max-w-[1000px] mt-[95px] mx-auto">
    <h3 class="font-RalewayRegular text-[20px] mt-[160px] tracking-[20%] text-center"><?php the_field('intro_title'); ?></h3>
    <div class="text-center font-RalewayLight text-[20x] mt-[135px] mb-[180px] text-[#D9D9D9] tracking-[10%] md:leading-[40px]"><?php the_field('intro_paragraphe'); ?></div>
</section>
<?php
$hero = get_field('hero');
if ($hero): ?>
    <section id="hero">
        <?php if (! empty($hero['media']) && is_array($hero['media'])) : ?>
            <div class="relative w-full overflow-hidden">
                <img src="<?php echo esc_url($hero['media']['url']); ?>" alt="<?php echo esc_attr($hero['media']['alt']); ?>" />
            </div>
        <?php endif; ?>
    </section>
<?php
endif ?>
<section class="md:max-w-[1366px] mx-auto px-8 my-40" id="featured-section">
    <h2 class="font-Cormorant font-bold text-[40px] mt-[300px] mb-[95px] tracking-[25%] text-center uppercase">
        <?php the_field('texte_a_la_une'); ?>
    </h2>
    <div id="featured-section">
        <?php
        $sticky_posts = get_option('sticky_posts');
        if (! empty($sticky_posts)) :
            $featured_query = new WP_Query(array(
                'post_type'           => 'post',
                'post__in'            => $sticky_posts,
                'posts_per_page'      => 1,
                'ignore_sticky_posts' => 1,
            ));
            if ($featured_query->have_posts()) :
                $featured_query->the_post();
                $featured_id    = get_the_ID();
                $featured_image = get_the_post_thumbnail_url($featured_id, 'large');

                $gallery_images = array();
                if (have_rows('gallery', $featured_id)) :
                    while (have_rows('gallery', $featured_id)) : the_row();
                        $gallery_image = get_sub_field('image');
                        if ($gallery_image) :
                            $gallery_images[] = $gallery_image;
                        endif;
                    endwhile;
                endif;
                $gallery_count = count($gallery_images);
        ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <div class="order-2 md:order-1 relative overflow-hidden max-h-[403px] <?php echo $gallery_count === 0 ? 'lg:col-span-2' : ''; ?>">
                        <?php if ($featured_image) : ?>
                            <a href="<?php echo esc_url(get_permalink($featured_id)); ?>">
                                <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title($featured_id)); ?>" class="w-full h-full object-cover">
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php if ($gallery_count > 0) : ?>
                        <div class="hidden lg:grid lg:order-2 h-[403px] <?php echo $gallery_count === 2 ? 'grid-rows-2 gap-y-10' : ''; ?>">
                            <?php foreach ($gallery_images as $gallery_image) : ?>
                                <div class="relative overflow-hidden">
                                    <a href="<?php echo esc_url(get_permalink($featured_id)); ?>">
                                        <img src="<?php echo esc_url($gallery_image['url']); ?>" alt="<?php echo esc_attr($gallery_image['alt']); ?>" class="w-full h-full object-cover">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="order-1 md:order-2 lg:order-3 flex flex-col justify-center">
                        <h3 class="font-Cormorant font-light text-[48px] leading-[100%] text-[#E8E4DD]"><a href="<?php echo esc_url(get_permalink($featured_id)); ?>"><?php echo get_the_title($featured_id); ?></a></h3>
                        <div class="mt-6 font-RalewayLight text-[15px] leading-[25px] text-[#D9D9D9]"><?php echo get_the_excerpt($featured_id); ?></div>
                    </div>
                </div>
        <?php
                wp_reset_postdata();
            endif;
        endif;
        ?>
    </div>
</section>
<section class="md:max-w-[1366px] mx-auto px-8 my-40" id="posts">
    <h2 class="font-Cormorant font-bold text-[40px] mt-[400px] mb-[95px] tracking-[25%] text-center uppercase">
        <?php the_field('text_posts'); ?>
    </h2>
    <div id="posts">
        <?php
        $sticky_posts   = get_option('sticky_posts');
        $actus_per_page = 9;
        $posts_query    = new WP_Query(array(
            'post_type'           => 'post',
            'post_status'         => 'publish',
            'post__not_in'        => $sticky_posts,
            'posts_per_page'      => $actus_per_page,
            'paged'               => 1,
            'ignore_sticky_posts' => 1,
        ));
        if ($posts_query->have_posts()) :
        ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-15" id="actus-posts-grid">
                <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                    <?php get_template_part('template-parts/content/content', 'actu-card'); ?>
                <?php endwhile; ?>
            </div>
        <?php
            $actus_max_pages = $posts_query->max_num_pages;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <?php if (! empty($actus_max_pages) && $actus_max_pages > 1) : ?>
        <div class="mt-[100px] flex justify-center">
            <button
                type="button"
                id="load-more-actus"
                data-page="1"
                data-max-pages="<?php echo esc_attr($actus_max_pages); ?>"
                class="relative inline-flex items-center justify-center gap-3 px-[40px] py-[20px] font-RalewaySemiBold text-[#E6C07B] border border-[#E6C07B33] rounded-md uppercase cursor-pointer transition-opacity duration-200 disabled:cursor-wait disabled:opacity-60">
                <svg id="load-more-spinner" class="hidden h-5 w-5 animate-spin text-[#E6C07B]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                </svg>
                <span id="load-more-label"><?php the_field('text_see_all'); ?></span>
            </button>
        </div>
    <?php endif; ?>
</section>
<?php
get_template_part('template-parts/content/content', 'bottom');
?>
<?php get_footer(); ?>