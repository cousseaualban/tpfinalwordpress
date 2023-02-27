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
    <div class="antipastis">
        <?php if (have_rows('recette_1')): ?>
            <?php while (have_rows('recette_1')):
                the_row(); ?>
                <?php the_sub_field('ingredients_1'); ?>
                <hr>
                <?php the_sub_field('preparation_1'); ?>
                <hr>
                <?php the_sub_field('conseils_1'); ?>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="risotto">
        <?php if (have_rows('recette_2')): ?>
            <?php while (have_rows('recette_2')):
                the_row(); ?>
                <?php the_sub_field('ingredients_2'); ?>
                <hr>
                <?php the_sub_field('preparation_2'); ?>
                <hr>
                <?php the_sub_field('conseils_2'); ?>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="dessert">
        <?php if (have_rows('recette_3')): ?>
            <?php while (have_rows('recette_3')):
                the_row(); ?>
                <?php the_sub_field('ingredients_3'); ?>
                <hr>
                <?php the_sub_field('preparations_3'); ?>
                <hr>
                <?php the_sub_field('conseils_3'); ?>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>