<?php get_header(); ?>

<?php 
    $term = get_queried_object();
?>
<section class="main section content">
    <div class="container">
        <?php $category = get_category( get_query_var( 'cat' ) );  $cateSlug = $category->slug;  ?>

        <div class="row">
            <div class="col-12">
                <div class="title title--content"><?php single_cat_title(); ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if ( have_posts() ): ?>
                <div class="row">

                    <!-- ITEM -->
                    <?php 
                    $count = 0;
                        while (have_posts()) : the_post();  $count ++;
                        $link = get_permalink();
                            $src = get_the_post_thumbnail_url($post->ID, 'full');
                            $thumbnail_id = get_post_thumbnail_id( $post->ID );
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            $excerpt = get_the_excerpt();

                            $date = get_the_date('M d, Y');
                            $post_id = $post->ID;
                            $post_author_id = get_post_field('post_author', $post_id);
                            $firstname = get_the_author_meta('user_firstname', $post_author_id);
                            $lastname = get_the_author_meta('user_lastname', $post_author_id);
                       
                    ?>
                    <div class="<?php echo $count === 1 ? 'col-12': 'col-md-6 page__postitem';?>">
                        <a href="<?php echo $link;?>"
                            class="postitem <?php echo $count === 1 ? 'postitem--first': '';?>"
                            title="<?php the_title();?>">
                            <?php if($src):?>
                            <div class="postitem__img <?php echo $count === 1 ? 'postitem__img--first': '';?>">
                                <img src="<?php echo $src;?>" alt="<?php echo $alt;?>">
                            </div>
                            <?php endif;?>
                            <div class="postitem__content <?php echo $count === 1 ? 'postitem__content--first': '';?>">
                                <h2 class="postitem__title <?php echo $count === 1 ? 'postitem__title--first': '';?>">
                                    <?php the_title();?></h2>
                                <?php if($count != 1):?>
                                <span
                                    class="postitem__date"><?php echo $firstname . ' ' . $lastname . ' | ' . $date; ?></span>
                                <?php endif;?>
                                <div class="postitem__text <?php echo $count === 1 ? 'postitem__text--first': '';?>">
                                    <?php 
                                            $dots = ' ';
                                            if(strlen($excerpt) > 250){
                                                $dots = '...';
                                            }
                                        ?>
                                    <?php echo strip_tags(mb_substr($excerpt, 0, 400));?>
                                </div>
                                <span
                                    class="postitem__more <?php echo $count === 1 ? 'postitem__more--first': '';?>">Read
                                    more</span>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                    <!-- ITEM END-->

                    <div class="col-12 d-flex justify-content-center">
                        <?php if ( paginate_links() ) { ?>
                        <div class="pagination">
                            <?php 
                                    echo paginate_links( array(
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => false,
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );
                                ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <?php else : ?>

                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title"><span><?php echo _e('');?></span></h2>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

</section>


<?php get_footer()?>