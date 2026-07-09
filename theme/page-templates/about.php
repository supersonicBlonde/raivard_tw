<?php

/**
 * Template Name: A propos
 *
 * @package raivard_tw
 */

get_header();

?>

<?php
get_template_part('template-parts/content/content', 'hero');
?>
<section class="mt-[100px] md:mt-[250px] px-8 md:px-0  text-center px-8">
    <h1 class="font-CatavaloRegular md:font-CatavaloThin text-[31px] md:text-[58px] mb-12 tracking-wide md:tracking-none"><?php
                                                                                                                            the_title();
                                                                                                                            ?></h1>
    <hr class="border-white/50 my-[90px] max-w-[329px] mx-auto">
    <h2 class="font-RalewayThin text-[41px] mt-[145px] mb-12 uppercase"><?php the_field('page_title'); ?></h2>
</section>
<section class="max-w-[1270px] mx-auto mt-[283px] px-8">
    <?php for ($i = 1; $i <= 5; $i++):
        $field = get_field('2_col_' . $i);
        if ($field):
            $reverse = ($i % 2 === 0) ? ' md:flex-row-reverse' : ''; ?>
            <div class="md:flex <?php echo $reverse; ?> md:gap-[221px] justify-between mb-[150px] md:mb-[327px]">
                <div class="md:w-[48%] mb-12 md:mb-0">
                    <h3 class="font-RalewaySemiBold text-[25px] tracking-[20%] mb-[50px] uppercase"><?php echo $field['title']; ?></h3>
                    <div class="text-gray/90 leading-[35px] text-[17px]">
                        <?php echo $field['paragraph']; ?>
                    </div>
                </div>
                <div class="md:w-[48%]">
                    <div class="relative overflow-hidden">
                        <img src="<?php echo esc_url($field['image']['url']); ?>" alt="<?php echo esc_attr($field['image']['alt']); ?>" class="w-full h-auto object-cover" />
                        <!-- overlay -->
                        <div data-image="<?php echo esc_url($field['image']['url']); ?>" class="cursor-pointer absolute inset-0 bg-[#141618]/50 opacity-0 transition-opacity duration-200 hover:opacity-100"></div>
                    </div>
                </div>
            </div>
    <?php endif;
    endfor; ?>

</section>
<?php
get_template_part('template-parts/content/content', 'bottom');
?>

<?php get_footer(); ?>