<?php
/**
 * The main template file
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>
        <section class="no-results not-found">
            <div class="container">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing here', 'kuchefinale' ); ?></h1>
                </header>

                <div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'kuchefinale' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php
get_footer();
?>