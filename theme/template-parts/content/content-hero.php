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