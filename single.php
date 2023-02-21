<?php get_header();
?>
<main id="actu">
    <!-- boucle wordpress -->
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <article>
                <!-- affiche le contenu -->
                <?php the_content(); ?>
                <!-- fin affiche le contenu -->
                <!-- affiche l'image mise en avant -->
                <?php the_post_thumbnail(); ?>
                <!-- fin affiche l'image mise en avant -->
            </article>
                <button class="backOnBlog"><a href="<?php echo get_permalink(17); ?>">Retourner sur le blog</a></button>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- fin boucle wordpress -->
</main>

<?php get_footer(); ?>