<?php get_header();
//Template name: Recettes
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<h1>
    <?php the_title(); ?>
</h1>
<div class="nosrecettes">
    <?php the_content() ?>
    <div class="recette">
    <h2>Moules farcies</h2>
        <?php if (have_rows('recette_1')): ?>
            <?php while (have_rows('recette_1')):
                the_row(); ?>
                <?php $photo_1 = get_sub_field('photo_1'); ?>
                <?php $size = 'full'; ?>
                <?php if ($photo_1): ?>
                    <?php echo wp_get_attachment_image($photo_1, $size); ?>
                    <hr>
                    <?php the_sub_field('ingredients_1'); ?>
                    <hr>
                    <?php the_sub_field('preparation_1'); ?>
                    <hr>
                    <?php the_sub_field('conseils_1'); ?>
                    <hr>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="recette">
        <h2>Risotto aux potimarrons</h2>
        <?php if (have_rows('recette_2')): ?>
            <?php while (have_rows('recette_2')):
                the_row(); ?>
                <?php $photo_2 = get_sub_field('photo_2'); ?>
                <?php $size = 'full'; ?>
                <?php if ($photo_2): ?>
                    <?php echo wp_get_attachment_image($photo_2, $size); ?>
                    <hr>
                    <?php the_sub_field('ingredients_2'); ?>
                    <hr>
                    <?php the_sub_field('preparation_2'); ?>
                    <hr>
                    <?php the_sub_field('conseils_2'); ?>
                    <hr>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="recette">
    <h2>Biscuits aux noix</h2>
        <?php if (have_rows('recette_3')): ?>
            <?php while (have_rows('recette_3')):
                the_row(); ?>
                <?php $photo_3 = get_sub_field('photo_3'); ?>
                <?php $size = 'full'; ?>
                <?php if ($photo_3): ?>
                    <?php echo wp_get_attachment_image($photo_3, $size); ?>
                    <hr>
                    <?php the_sub_field('ingredients_3'); ?>
                    <hr>
                    <?php the_sub_field('preparations_3'); ?>
                    <hr>
                    <?php the_sub_field('conseils_3'); ?>
                    <hr>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>