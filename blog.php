<?php get_header();
//Template Name: Blog
?>

<?php $thumb = get_the_post_thumbnail_url(); ?>
<div class="image-class" style="background-image: url('<?php echo $thumb; ?>')"></div>

<main id="blog">
    <div class="container">
        <h1>
            <?php the_title() ?>
        </h1>
        <section id="allarticles">
            <!-- affiche 8 extraits d'article -->
            <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=8');
            ?>
            <!-- fin affiche 8 extraits d'article -->
            <!-- boucle wordpress pour afficher les extraits d'article -->
            <?php while ($recentPosts->have_posts()):
                $recentPosts->the_post(); ?>
                <!-- permet d'afficher un extrait d'article -->
                <div class="oneArticle">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <?php the_excerpt(); ?>
                    <button class="getArticle"><a href="<?php the_permalink() ?>" rel="bookmark">Aller sur
                            l'article</a></button>
                </div>
                <!-- fin permet d'afficher un extrait d'article -->
            <?php endwhile; ?>
            <!-- fin boucle wordpress pour afficher les extraits d'article -->
        </section>
    </div>
</main>
<?php get_footer(); ?>