<?php get_header();
//Template name: About
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<h1> <?php the_title(); ?> </h1>
<div class="about">
    <?php the_content() ?>
</div>

<?php get_footer(); ?>