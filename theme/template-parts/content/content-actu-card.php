<?php
/**
 * Template part for displaying a post card on the "Actus" page.
 *
 * @package raivard_tw
 */
?>
<div>
    <div class="relative overflow-hidden">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
        </a>
    </div>
    <h3 class="mt-6 font-Cormorant text-[22px]"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="mt-2 font-Cormorant text-[15px] text-[#514d4a]"><?php the_field('sous_titre'); ?>&nbsp;&rarr;</div>
</div>
