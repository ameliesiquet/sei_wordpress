<section class="magazins__magazin1">
    <h2 aria-level="2" role="heading">La Bouqinerie du p'tit Augustin</h2>
    <?php
    $maison_1 = get_post(131);
    if ($maison_1):
        ?>
        <article class="magazins__magazin1__article">
            <div class="house-magazine">
                <h3 aria-level="3" role="heading"><?php echo get_field('magazin_title', $maison_1->ID); ?></h3>
                <p><?php echo get_field('magazin_second_title', $maison_1->ID); ?>
                    <span><?php echo get_field('magazin_content', $maison_1->ID); ?></span>
                </p>
                <div class="adress">
                    <p><?php echo get_field('maison_adress_title', $maison_1->ID); ?></p>
                    <span><?php echo get_field('maison_adress_street', $maison_1->ID); ?></span>
                    <span><?php echo get_field('maison_adress_postalcode', $maison_1->ID); ?></span>
                </div>
                <?php $image = get_field('magazin_image', $maison_1->ID);
                if ($image): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="maisons__hero__img">
                <?php else: ?>
                    <p>Image not found</p>
                <?php endif; ?>
            </div>
        </article>
    <?php else: echo"Maison not found" ?>
    <?php endif; ?>
</section>
<section class="magazins__magazin2">
    <h2 aria-level="2" role="heading">Le Bric à Brac</h2>
    <?php
    $maison_2 = get_post(135);

    if ($maison_2): ?>
        <article class="magazins__magazin2__article">
            <div class="house-magazine">
                <h3 aria-level="3" role="heading"><?php echo get_field('magazin_title', $maison_1->ID); ?></h3>
                <p><?php echo get_field('magazin_second_title', $maison_1->ID); ?>
                    <span><?php echo get_field('magazin_content', $maison_1->ID); ?></span>
                </p>
                <div class="adress">
                    <p><?php echo get_field('maison_adress_title', $maison_1->ID); ?></p>
                    <span><?php echo get_field('maison_adress_street', $maison_1->ID); ?></span>
                    <span><?php echo get_field('maison_adress_postalcode', $maison_1->ID); ?></span>
                </div>
                <?php $image = get_field('magazin_image', $maison_1->ID);
                if ($image): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                <?php else: ?>
                    <p>Image not found</p>
                <?php endif; ?>
            </div>
        </article>
    <?php else: echo"Maison not found" ?>
    <?php endif; ?>
</section>
