<?php

/**
 * Template Name: Atelier
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
        <hr class="border-white/50 my-[90px] max-w-[329px] mx-auto">
        <h2 class="font-RalewayLight text-[48px] text-[#D9D9D9]/70 mt-[130px]">
            <?php the_field('sub_title'); ?>
        </h2>
    </div>
</section>
<section class="px-8 md:max-w-[1250px] mt-[95px] mx-auto">
    <div class="text-center font-RalewayLight text-[17px] mb-6 tracking-wide md:leading-[40px] md:leading-[10%]"><?php the_field('introduction'); ?></div>
</section>
<!-- MOBILE -->
<section class="px-8 mt-[100px] md:mt-[300px] md:hidden splide" id="slider1">
    <div class="splide__track">
        <div class="splide__list">
            <?php
            if (have_rows('images')):
                while (have_rows('images')) : the_row();
                    $image = get_sub_field('image');
                    if ($image):
            ?>
                        <div class="splide__slide">
                            <div class="relative aspect-[1/1.06] overflow-hidden">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full h-full object-cover">
                                <!-- overlay -->
                                <div data-image="<?php echo esc_url($image['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                            </div>
                        </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<section class="mt-[50px]">
    <?php
    if (have_rows('images')):
    ?>
        <section class="max-w-[911px] w-[911px] mx-auto px-8 md:px-0  hidden md:block ">
            <?php while (have_rows('images')) : the_row(); ?>
                <?php
                $image = get_sub_field('image');
                $size = get_sub_field('size');
                ?>
                <?php if ($image):
                    $size = get_sub_field('size');
                    $class = $size == 'half' ? 'w-1/2' : 'w-full';
                ?>
                    <div class="relative  overflow-hidden  mt-[200px] <?php echo $class; ?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="w-full">
                        <div data-image="<?php echo esc_url($image['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100">
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </section>
    <?php
    endif;
    ?>
</section>
<?php
get_template_part('template-parts/content/content', 'bottom');
?>

<?php get_footer(); ?>