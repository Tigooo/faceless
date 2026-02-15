<?php get_header(); ?>


<?php if ( have_posts() ): ?>
<section class="section">
    <div class="container">
        <div class="row">
            <?php 
                while (have_posts()) : the_post(); 
                    $link = get_permalink();
                    $src = get_the_post_thumbnail_url($post->ID, 'full');
            ?>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="post-item">
                    <a href="<?php echo $link; ?>" class="post-item__link">
                        <div class="post-item__image <?php if ($cateSlug == "videos") {?>post-item__image--video<?php }?>">
                            <img src="<?php echo $src;?>">
                        </div>
                        <div class="post-item__text">
                            <h5 class="post-item__name"><?php the_title()?></h5>
                            <div class="post-item__description">
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                        <div class="post-item__additional">
                            <div class="post-item__date"><?php echo get_the_date('F j, Y'); ?></div>
                            <div class="post-item__more">
                                <span>Learn more</span>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/arrows/more-arrow.svg">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>

        <?php if ( paginate_links() ) { ?>
        <div class="row">
            <div class="col-12">
                <div class="pagination">
                <?php 
                    echo paginate_links( array(
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                ?>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</section>
<?php else : ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title"><span>Sorry, no posts were found.</span></h2> 
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer()?>