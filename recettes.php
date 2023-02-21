<?php get_header();
//Template name: Recettes
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<h1><?php the_title();?></h1>
<div class="nosrecettes">
    <?php the_content() ?>
    <?php if (have_rows('recette_1')): ?>
        <?php while (have_rows('recette_1')):
            the_row(); ?>
            <?php the_sub_field('ingredients_1'); ?>
            <?php the_sub_field('preparation_1'); ?>
            <?php the_sub_field('conseils_1'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if (have_rows('recette_2')): ?>
        <?php while (have_rows('recette_2')):
            the_row(); ?>
            <?php the_sub_field('ingredients_2'); ?>
            <?php the_sub_field('preparation_2'); ?>
            <?php the_sub_field('conseils_2'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if (have_rows('recette_3')): ?>
        <?php while (have_rows('recette_3')):
            the_row(); ?>
            <?php the_sub_field('ingredients_3'); ?>
            <?php the_sub_field('preparations_3'); ?>
            <?php the_sub_field('conseils_3'); ?>
        <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>