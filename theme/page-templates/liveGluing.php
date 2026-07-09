<?php

/**
 * Template Name: LiveGluing
 *
 * @package raivard_tw
 */

get_header();


get_template_part('template-parts/content/content', 'hero');

get_template_part('template-parts/content/content', 'title');
?>

<section class="px-8 md:max-w-[1250px] mt-[95px] mx-auto">
    <h3 class="font-RalewayRegular text-[20px] mt-[160px] tracking-[20%] text-center"><?php the_field('intro_title'); ?></h3>
    <div class="text-center font-RalewayLight text-[20px] mt-[135px] tracking-[20%] md:leading-[40px]"><?php the_field('intro_paragraphe'); ?></div>
</section>
<hr class="md:max-w-[1366px] mx-auto border-white/50 my-[193px]">

<section class="px-8 md:max-w-[1366px] mx-auto">
    <?php
    // Check value exists.
    if (have_rows('content')):
        // Raw layout names, used to peek at the next row's layout.
        $content_layouts = wp_list_pluck((array) get_field('content', false, false), 'acf_fc_layout');

        // Loop through rows.
        while (have_rows('content')) : the_row();
            $next_layout = $content_layouts[get_row_index()] ?? null;

            // Case: Paragraph layout.
            if (get_row_layout() == 'bloc_date_section'):
                $year = get_sub_field('year');
                $year_sub_title = get_sub_field('year_sub_title');
                $image = get_sub_field('image');
    ?>
                <div class="flex flex-col md:flex-row gap-12 md:gap-x-[15.08%]">
                    <div class="w-full md:w-[46.19%] mt-[150px]">
                        <h4 class="font-CatavaloRegular text-[200px] text-[#4A4A4A] leading-none"><?php
                                                                                                    echo substr($year, 0, -1);
                                                                                                    ?><span class="text-[270px]"><?php
                                                                                                                                    echo substr($year, -1);
                                                                                                                                    ?></span></h4>
                        <div class="font-RalewayExtraLight text-[24px] leading-[60px] tracking-[20%]"><?php
                                                                                                        echo $year_sub_title;
                                                                                                        ?></div>
                    </div>
                    <div id="col-right" class="w-full md:w-[38.73%]">
                        <?php
                        // Check value exists.
                        if (have_rows('col_right')):
                            // Loop through rows.
                            while (have_rows('col_right')) : the_row();

                                // Case: Image layout.
                                if (get_row_layout() == 'image'):

                                    $col_right_image = get_sub_field('image');

                        ?>
                                    <div class="relative overflow-hidden mb-[87px]">
                                        <img class="col-right-image" src="<?php
                                                                            echo $col_right_image['url']
                                                                            ?>" alt="<?php
                                                                                        echo $col_right_image['alt']
                                                                                        ?>">
                                        <!-- overlay -->
                                        <div data-image="<?php echo esc_url($col_right_image['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                                    </div>
                                <?php
                                // Case: Paragraph block layout.
                                elseif (get_row_layout() == 'bloc_paragraphe'):
                                    $bloc_paragraphe = get_sub_field('bloc_paragraphe');
                                    $title = $bloc_paragraphe['title'];
                                    $paragraph = $bloc_paragraphe['paragraph'];
                                ?>
                                    <div class="col-right-bloc-paragraphe text-[#D9D9D9E5] mb-[87px]">
                                        <h5 class="col-right-title font-RalewayMedium text-[24px] tracking-[10%] mb-[46px]"><?php echo $title; ?></h5>
                                        <div class="font-RalewayRegular text-[24px] tracking-[10%] leading-[30px]"><?php echo $paragraph; ?></div>
                                    </div>
                        <?php
                                endif;

                            // End loop.
                            endwhile;

                        // No value.
                        else :
                        // Do something...
                        endif;
                        ?>
                    </div>
                </div>
                <?php if ($next_layout !== 'img_3_col_row'): ?>
                    <hr class="mx-8 md:mx-auto md:max-w-[1366px] border-white/50 my-[193px]">
                <?php else: ?>
                    <div class="mb-[180px]"></div>
                <?php endif; ?>
                <?php
            elseif (get_row_layout() == 'img_3_col_row'):
                // Check rows exists.
                if (have_rows('colonne')):
                ?>
                    <section class="px-8 md:px-0 md:max-w-[1366px] mx-auto">
                        <div class="flex flex-col md:flex-row gap-10 md:gap-[8%]">
                            <?php
                            // Loop through rows.
                            while (have_rows('colonne')) : the_row();
                                $image = get_sub_field('image');
                                $caption = get_sub_field('caption');
                            ?>
                                <div class="w-full md:w-auto md:flex-1 md:min-w-0">
                                    <div class="relative overflow-hidden">
                                        <div class="w-full h-[320px] md:h-[200px] bg-cover bg-center" style="background-image: url('<?php
                                                                                                                                    echo $image['url']
                                                                                                                                    ?>');" role="img" aria-label="<?php
                                                                                                                                                                    echo $image['alt']
                                                                                                                                                                    ?>"></div>
                                        <!-- overlay -->
                                        <div data-image="<?php echo esc_url($image['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                                    </div>
                                    <div class="w-full mt-[30px] md:mt-[60px] text-[#D9D9D9CC] font-RalewayBold text-[15px] tracking-[10%] leading-[25px]"><?php
                                                                                                                                                            echo $caption
                                                                                                                                                            ?></div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </section>
                    <hr class="px-8 md:mx-auto md:max-w-[1366px] border-white/50 my-[193px]">
    <?php
                endif;

            endif;

        // End loop.
        endwhile;

    // No value.
    else :
    // Do something...
    endif;
    ?>
</section>
<?php
get_template_part('template-parts/content/content', 'quote');
?>
<?php get_footer(); ?>