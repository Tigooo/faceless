<?php 
/* 
    Template Name: Blog
*/ 
?>
<?php get_header(); ?>

<?php 
        $src = get_the_post_thumbnail_url($post->ID, 'full');
        $srcMedium = get_the_post_thumbnail_url($post->ID, 'medium');
        $thumbnail_id = get_post_thumbnail_id( $post->ID );
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    ?>

<section class="section page page--mtnull">
    <div class="row">
        <div class="col-12">
            <div class="page__head">
                <div class="container">
                    <h1 class="page__title page__title--light"><?php echo the_title();?></h1>
                    <div class="breadcrumbs breadcrumbs--light">
                        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo get_home_url(); ?>">
                                    <span itemprop="name"><?php echo _e('Home', 'formstroy');?></span></a>
                                <meta itemprop="position" content="1" />
                                 » 
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name"><?php the_title();?></span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page__contant page__contant--single">
                    <?php
                        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
                        
                        $news = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            'order'     => 'DESC',
                            'paged' => $paged
                        );
                        $news_query = new WP_Query($news); 
                        $count = 0;

                        if ( $news_query->have_posts() ):
                    ?>
                    <div class="row">
                        <?php 
                            while ($news_query->have_posts()) : $news_query->the_post(); $count ++;
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
                        <div class="<?php echo $count === 1 ? 'col-12': 'col-lg-4 col-md-6 page__postitem';?>">
                            <a href="<?php echo $link;?>" class="postitem <?php echo $count === 1 ? 'postitem--first': '';?>" title="<?php the_title();?>">
                                <?php if($src):?>
                                <div class="postitem__img <?php echo $count === 1 ? 'postitem__img--first': '';?>">
                                    <img src="<?php echo $src;?>" alt="<?php echo $alt;?>">
                                </div>
                                <?php endif;?>
                                <div class="postitem__content <?php echo $count === 1 ? 'postitem__content--first': '';?>">
                                    <h2 class="postitem__title <?php echo $count === 1 ? 'postitem__title--first': '';?>"><?php the_title();?></h2>
                                    <?php if($count != 1):?>
                                    <span class="postitem__date"><?php echo $firstname . ' ' . $lastname . ' | ' . $date; ?></span>
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
                                    <span class="postitem__more <?php echo $count === 1 ? 'postitem__more--first': '';?>">Read more</span>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; wp_reset_query();?>
                    </div>
                    
                    <div class="col-12 d-flex justify-content-center">
                        <div class="page-pagination">
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
                                    'total' => $news_query->max_num_pages
                                ) );
                            ?>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?> 



