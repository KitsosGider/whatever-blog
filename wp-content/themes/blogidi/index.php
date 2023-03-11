<?php get_header(); ?>
<div>
    <main>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        <?php else: ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </main>
    <aside>
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer() ?>
