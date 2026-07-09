<?php

/**
 * Template Name: Home
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
            <div class="relative w-full h-screen overflow-hidden">
                <video
                    class="absolute top-0 left-0 w-full h-full object-cover"
                    src="<?php echo  home_url('/wp-content/uploads/2026/03/hero_video.mp4') ?>" ,
                    poster="<?php echo esc_url($hero['media']['url']); ?>"
                    autoplay
                    muted
                    loop
                    playsinline></video>
            </div>
        <?php endif; ?>
    </section>
<?php
endif;
?>
<section class="mt-[100px] md:mt-[345px] px-8 md:px-0 md:max-w-[900px] md:mx-auto text-left md:text-center">
    <div class="mb-8 hidden md:block">
        <img src="<?php echo home_url('/wp-content/uploads/2026/03/logo_raivard.png') ?>" alt="Logo Raivard" class="block mx-auto">
    </div>
    <?php
    $section1 = get_field('section_1');
    if ($section1):
    ?>
        <?php
        if ($section1['title_1']):
        ?>
            <h1 class="font-CatavaloRegular md:font-CatavaloThin text-[31px] md:text-[58px] mb-12 tracking-wide md:tracking-none"><?php echo $section1['title_1']; ?></h1>
            <hr class="border-white/50 my-[90px] max-w-[329px] mx-auto">
        <?php
        endif;
        ?>
        <?php
        if ($section1['paragraph_1']):
        ?>
            <div class="font-RalewayRegular text-lg mb-6 tracking-wide md:leading-[30px] md:leading-[35px] text-[#D9D9D9]">
                <?php echo $section1['paragraph_1']; ?>
            </div>
        <?php
        endif;
        ?>
        <?php
        if ($section1['title_2']):
        ?>
            <h2 class="font-RalewayLight text-[41px] tracking-[10%] text-[#D9D9D9B2] text-center mt-24 mb-12 uppercase"><?php echo $section1['title_2']; ?></h2>
        <?php
        endif;
        ?>
        <?php
        if ($section1['paragraph_2']):
        ?>
            <div class="font-RalewayRegular text-base mb-6 tracking-wider text-[#D9D9D9] md:leading-[30px] md:leading-[35px]">
                <?php echo $section1['paragraph_2']; ?>
            </div>
        <?php
        endif;
        ?>
    <?php
    endif;
    ?>
</section>
<!-- MOBILE -->
<section class="px-8 mt-[100px] md:mt-[300px] md:hidden splide" id="slider1">
    <div class="splide__track">
        <div class="splide__list">
            <?php $col1 = get_field("col_1");
            if ($col1):
            ?>
                <div class="splide__slide">
                    <?php
                    if (! empty($col1['thumbnail']) && is_array($col1['thumbnail'])) : ?>

                        <div class="relative aspect-[1/1.06] overflow-hidden">
                            <img src="<?php echo $col1['thumbnail']['url']; ?>" alt="<?php echo $col1['thumbnail']['alt']; ?>" class="w-full h-full object-cover">
                            <!-- overlay -->
                            <div data-image="<?php echo esc_url($col1['thumbnail']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                        </div>

                    <?php
                    endif;
                    ?>
                    <div class="px-5">
                        <div class="mt-12 font-RalewaySemiBold text-2xl uppercase tracking-wider">
                            <?php
                            echo $col1['titre'];
                            ?>
                        </div>
                        <div class="mt-3  mb-12 font-RalewayRegular text-sm tracking-wider text-[#D6D6D6]/50 opacity-50"><?php
                                                                                                                            echo $col1['subtitle'];
                                                                                                                            ?>
                        </div>
                        <div class="mt-6  mb-8 font-RalewayRegular text-sm tracking-[17%]"><?php
                                                                                            echo $col1['technic'];
                                                                                            ?>
                        </div>
                        <div class="my-6 font-RalewayLight text-sm leading-[30px] tracking-wider text-sm">
                            <?php
                            echo $col1['paragraph'];
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
            <?php
            $col2 = get_field("col_2");
            if ($col2):
            ?>
                <div class="splide__slide">
                    <?php
                    if (! empty($col2['thumbnail']) && is_array($col2['thumbnail'])) : ?>

                        <div class="relative aspect-[1/1.06] overflow-hidden">
                            <img src="<?php echo $col2['thumbnail']['url']; ?>" alt="<?php echo $col2['thumbnail']['alt']; ?>" class="w-full h-full object-cover">
                            <!-- overlay -->
                            <div data-image="<?php echo esc_url($col2['thumbnail']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                        </div>


                    <?php
                    endif;
                    ?>
                    <div class="px-5">
                        <div class="mt-12 font-RalewaySemiBold text-2xl uppercase tracking-wider">
                            <?php
                            echo $col2['titre'];
                            ?>
                        </div>
                        <div class="mt-3  mb-12 font-RalewayRegular text-sm tracking-wider text-gray1 opacity-50"><?php
                                                                                                                    echo $col2['subtitle'];
                                                                                                                    ?>
                        </div>
                        <div class="mt-6  mb-8 font-RalewayRegular text-sm tracking-[17%] text-gray2"><?php
                                                                                                        echo $col2['technic'];
                                                                                                        ?>
                        </div>
                        <div class="my-6 font-RalewayLight text-sm leading-[30px] tracking-wider text-sm">
                            <?php
                            echo $col2['paragraph'];
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
            <?php
            $col3 = get_field("col_3");
            if ($col3):
            ?>
                <div class="splide__slide">
                    <?php
                    if (! empty($col3['thumbnail']) && is_array($col3['thumbnail'])) : ?>
                        <div class="relative aspect-[1/1.06] overflow-hidden">
                            <img src="<?php echo $col3['thumbnail']['url']; ?>" alt="<?php echo $col3['thumbnail']['alt']; ?>" class="w-full h-full object-cover">
                            <!-- overlay -->
                            <div data-image="<?php echo esc_url($col3['thumbnail']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                        </div>

                    <?php
                    endif;
                    ?>
                    <div class="px-5">
                        <div class="mt-12 font-RalewaySemiBold text-2xl uppercase tracking-wider">
                            <?php
                            echo $col3['titre'];
                            ?>
                        </div>
                        <div class="mt-3  mb-12 font-RalewayRegular text-sm tracking-wider text-gray1 opacity-50"><?php
                                                                                                                    echo $col3['subtitle'];
                                                                                                                    ?>
                        </div>
                        <div class="mt-6  mb-8 font-RalewayRegular text-sm tracking-[17%] text-gray2"><?php
                                                                                                        echo $col3['technic'];
                                                                                                        ?>
                        </div>
                        <div class="my-6 font-RalewayLight text-sm leading-[30px] tracking-wider">
                            <?php
                            echo $col3['paragraph'];
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
<!-- DESKTOP -->
<section class="max-w-[1200px] mx-auto px-8 md:px-0 mt-[300px] hidden md:block">
    <div class="md:grid md:grid-cols-3 md:gap-12">
        <?php $col1 = get_field("col_1");
        if ($col1):
        ?>
            <div id="item1">
                <?php
                if (! empty($col1['thumbnail']) && is_array($col1['thumbnail'])) : ?>

                    <div class="relative aspect-[1/1.06] overflow-hidden">
                        <img src="<?php echo $col1['thumbnail']['url']; ?>" alt="<?php echo $col1['thumbnail']['alt']; ?>" class="w-full h-full object-cover">
                        <!-- overlay -->
                        <div data-image="<?php echo esc_url($col1['thumbnail']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                    </div>

                <?php
                endif;
                ?>
                <div class="px-5">
                    <div class="mt-12 font-RalewaySemiBold text-2xl uppercase tracking-wider">
                        <?php
                        echo $col1['titre'];
                        ?>
                    </div>
                    <div class="mt-3  mb-12 font-RalewayRegular text-sm tracking-wider text-[#D6D6D6]/50 opacity-50"><?php
                                                                                                                        echo $col1['subtitle'];
                                                                                                                        ?>
                    </div>
                    <div class="mt-6  mb-8 font-RalewayRegular text-sm tracking-[17%]"><?php
                                                                                        echo $col1['technic'];
                                                                                        ?>
                    </div>
                    <div class="my-6 font-RalewayLight text-sm leading-[30px] tracking-wider text-sm">
                        <?php
                        echo $col1['paragraph'];
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
        <?php
        $col2 = get_field("col_2");
        if ($col2):
        ?>
            <div id="item2">
                <?php
                if (! empty($col2['thumbnail']) && is_array($col2['thumbnail'])) : ?>

                    <div class="relative aspect-[1/1.06] overflow-hidden">
                        <img src="<?php echo $col2['thumbnail']['url']; ?>" alt="<?php echo $col2['thumbnail']['alt']; ?>" class="w-full h-full object-cover">
                        <!-- overlay -->
                        <div data-image="<?php echo esc_url($col2['thumbnail']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                    </div>


                <?php
                endif;
                ?>
                <div class="px-5">
                    <div class="mt-12 font-RalewaySemiBold text-2xl uppercase tracking-wider">
                        <?php
                        echo $col2['titre'];
                        ?>
                    </div>
                    <div class="mt-3  mb-12 font-RalewayRegular text-sm tracking-wider text-gray1 opacity-50"><?php
                                                                                                                echo $col2['subtitle'];
                                                                                                                ?>
                    </div>
                    <div class="mt-6  mb-8 font-RalewayRegular text-sm tracking-[17%] text-gray2"><?php
                                                                                                    echo $col2['technic'];
                                                                                                    ?>
                    </div>
                    <div class="my-6 font-RalewayLight text-sm leading-[30px] tracking-wider text-sm">
                        <?php
                        echo $col2['paragraph'];
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
        <?php
        $col3 = get_field("col_3");
        if ($col3):
        ?>
            <div id="item3">
                <?php
                if (! empty($col3['thumbnail']) && is_array($col3['thumbnail'])) : ?>
                    <div class="relative aspect-[1/1.06] overflow-hidden">
                        <img src="<?php echo $col3['thumbnail']['url']; ?>" alt="<?php echo $col3['thumbnail']['alt']; ?>" class="w-full h-full object-cover">
                        <!-- overlay -->
                        <div data-image="<?php echo esc_url($col3['thumbnail']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                    </div>

                <?php
                endif;
                ?>
                <div class="px-5">
                    <div class="mt-12 font-RalewaySemiBold text-2xl uppercase tracking-wider">
                        <?php
                        echo $col3['titre'];
                        ?>
                    </div>
                    <div class="mt-3  mb-12 font-RalewayRegular text-sm tracking-wider text-gray1 opacity-50"><?php
                                                                                                                echo $col3['subtitle'];
                                                                                                                ?>
                    </div>
                    <div class="mt-6  mb-8 font-RalewayRegular text-sm tracking-[17%] text-gray2"><?php
                                                                                                    echo $col3['technic'];
                                                                                                    ?>
                    </div>
                    <div class="my-6 font-RalewayLight text-sm leading-[30px] tracking-wider">
                        <?php
                        echo $col3['paragraph'];
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
<section class="max-w-[1200px] mx-auto mt-[223px] px-8 md:px-0" id="videos">
    <h2 class="text-center font-RalewayThin text-2xl mb-24 uppercase text-white"><?php the_field('title_section_video'); ?></h2>
    <?php $video_col_left = get_field('video_left'); ?>
    <div class="md:flex justify-between">
        <!-- COL 1 -->
        <div class="flex flex-col mb-12 md:mb-0">
            <div class="relative overflow-hidden">
                <img src="<?php echo $video_col_left['image']['url']; ?>" alt="<?php echo $video_col_left['image']['alt']; ?>" class=" w-full h-full flex-1 min-h-0">
                <!-- overlay -->
                <div class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100 pointer"></div>
            </div>
            <div class="text-left md:text-right my-1 text-[#cccccc] text-sm my-4"><?php echo $video_col_left['title']; ?></div>
        </div>

        <!-- COL 2 -->
        <div class="flex flex-col justify-between">
            <?php $video_right_1 = get_field('video_right_1'); ?>
            <div class="flex flex-col mb-12 md:mb-0">
                <div class="relative overflow-hidden">
                    <img src="<?php echo $video_right_1['image']['url']; ?>" alt="<?php echo $video_right_1['image']['alt']; ?>" class="cursor-pointer w-full h-full flex-1 min-h-0">
                    <!-- overlay -->
                    <div data-video="<?php echo home_url($video_col_left['video_link']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                </div>
                <div class="text-left my-1 text-[#cccccc] text-sm my-4"><?php echo $video_right_1['title']; ?></div>
            </div>
            <?php $video_right_2 = get_field('video_right_2'); ?>
            <div class="flex flex-col mb-12 md:mb-0">
                <div class="relative overflow-hidden">
                    <img src="<?php echo $video_right_2['image']['url']; ?>" alt="<?php echo $video_right_2['image']['alt']; ?>" class="w-full h-full flex-1 min-h-0">
                    <!-- overlay -->
                    <div data-video="<?php echo home_url($video_col_left['video_link']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                </div>
                <div class="text-left  my-1 text-[#cccccc] text-sm my-4"><?php echo $video_right_2['title']; ?></div>
            </div>
            <?php $video_right_3 = get_field('video_right_3'); ?>
            <div class="flex flex-col mb-12 md:mb-0">
                <div class="relative  overflow-hidden">
                    <img src="<?php echo $video_right_3['image']['url']; ?>" alt="<?php echo $video_right_3['image']['alt']; ?>" class="w-full h-full flex-1 min-h-0">
                    <!-- overlay -->
                    <div data-video="<?php echo home_url($video_col_left['video_link']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                </div>
                <div class="text-left my-1 text-[#cccccc] text-sm my-4"><?php echo $video_right_3['title']; ?></div>
            </div>
        </div>
    </div>
</section>
<?php
get_template_part('template-parts/content/content', 'bottom');
?>
<!-- MODAL -->
<div id="video-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 p-4">
    <div class="relative w-full max-w-4xl">
        <button
            id="video-modal-close"
            type="button"
            class="flex items-center absolute top-2 right-2 z-10 text-white text-3xl leading-none cursor-pointer bg-black/50 w-10 h-10 flex items-center justify-center">
            <div class="-mt-2">&times;</div>
        </button>
        <video id="modal-video" controls class="w-full h-auto max-h-[80vh]">
            <source id="modal-video-source" src="" type="video/mp4">
        </video>
    </div>
</div>
<?php get_footer(); ?>