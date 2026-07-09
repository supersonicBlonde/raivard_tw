<?php
$hero = get_field('hero');
if ($hero): ?>
    <section id="hero" class="mt-[138px]">
        <div class=" relative w-full overflow-hidden">
            <?php if ($hero['type'] === 'image' && ! empty($hero['media'])) : ?>
                <img src="<?php echo esc_url($hero['media']['url']); ?>" alt="<?php echo esc_attr($hero['media']['alt']); ?>" />
            <?php elseif ($hero['type'] === 'video' && ! empty($hero['video'])) : ?>
                <video
                    src="<?php echo esc_url($hero['video']['url']); ?>"
                    <?php if (! empty($hero['poster_video'])) : ?>poster="<?php echo esc_url($hero['poster_video']['url']); ?>" <?php endif; ?>
                    autoplay muted loop playsinline class="w-full h-auto">
                </video>
            <?php endif; ?>
        </div>
    </section>
<?php
endif ?>