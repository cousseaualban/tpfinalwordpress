<?php get_header();
//Template name: Contact
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<h1>
    <?php the_title(); ?>
</h1>

<div class="contact">
    <?php the_content() ?>

    <h2>Nos réseaux sociaux</h2>
    <div class="socialNetworks">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
</div>

<?php get_footer(); ?>