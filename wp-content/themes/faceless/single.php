<?php get_header(); ?>


<?php 
        $src = get_the_post_thumbnail_url($post->ID, 'full');
        $srcMedium = get_the_post_thumbnail_url($post->ID, 'medium');
        $thumbnail_id = get_post_thumbnail_id( $post->ID );
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        $date = get_the_date('M d, Y');

        $post_id = $post->ID;
        $post_author_id = get_post_field('post_author', $post_id);
        $firstname = get_the_author_meta('user_firstname', $post_author_id);
        $lastname = get_the_author_meta('user_lastname', $post_author_id);
    ?>

<section class="section  page  page--mtnull">
    <div class="row">
        <div class="col-12">
            <div class="page__head">
                <div class="container">
                    <h1 class="page__title page__title--light"><?php echo the_title();?></h1>
                    <div class="breadcrumbs breadcrumbs--light">
                        <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo get_home_url(); ?>">
                                    <span itemprop="name"><?php echo _e('Home', 'masteralex');?></span></a>
                                <meta itemprop="position" content="1" />
                                »
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemprop="item" href="<?php echo get_home_url(); ?>/blog">
                                    <span itemprop="name"><?php echo _e('Blog', 'masteralex');?></span></a>
                                <meta itemprop="position" content="2" />
                                »
                            </li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name"><?php the_title();?></span>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                    <div class="page__date">
                        <span><?php echo $date;?></span>
                        - <span><?php echo $firstname . ' ' . $lastname?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-toc">
                    <button class="content-toc__btn">
                        <span>In this Article</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="content-toc__list">
                        <div id="tocInContent"></div>
                    </div>
                    
                </div>
                <div class="page__contant page__contant--single">
                    <?php the_content();?>
                </div>
                <div class="page__share">
                    <div class="share-box">
                        <h5 class="share-box__name"><?php echo _e('Share:', 'masteralex');?></h5>
                        <div class="share-box__links">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"
                                rel="nofollow" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title()?>" rel="nofollow" target="_blank" >
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>"
                                rel="nofollow" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php 
                    $post_id = $post->ID;
                    $post_author_id = get_post_field('post_author', $post_id);
                    $firstname = get_the_author_meta('user_firstname', $post_author_id);
                    $lastname = get_the_author_meta('user_lastname', $post_author_id);
                    $bio = get_the_author_meta('description', $post_author_id);
                ?>
                <div class="page__author">
                    <div class="author-box">
                        <div class="author-box__img">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
                        </div>
                        <div class="author-box__text">
                            <?php if($firstname or $lastname ):?>
                            <h4 class="author-box__name">
                                <?php echo $firstname? $firstname . ' ': ''?><?php echo $lastname? $lastname: ''?></h4>
                            <?php endif;?>
                            <?php if($bio):?>
                            <p class="author-box__bio"><?php echo $bio;?></p>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">

                    <div id="fixItem" class="sidebar--bggrey">
                        <?php if(have_rows('cta_box', 'options')){
                            while(have_rows('cta_box', 'options')): the_row();
                            $title = get_sub_field('title');
                            $sub_title = get_sub_field('sub_title');
                            $button_text = get_sub_field('button_text');
                            $button_link = get_sub_field('button_link');
                            $mini_list_text_for_link = get_sub_field('mini_list_text_for_link');
                            $mini_list_link = get_sub_field('mini_list_link');
                            ?>
                        <div class="sidebar__item sidebar__item--bg">
                            <div class="cta-box">
                                <?php if($title):?>
                                <p class="cta-box__name sidebar__title"><?php echo $title;?></p>
                                <?php endif;?>
                                <?php if($sub_title):?>
                                <p class="cta-box__text"><?php echo $sub_title;?></p>
                                <?php endif;?>
                                <?php if($button_text and $button_link):?>
                                <div class="cta-box__btn">
                                    <a href="<?php echo $button_link;?>" class="btn"><?php echo $button_text;?></a>
                                </div>
                                <?php endif;?>
                                <?php if(have_rows('mini_list')){?>
                                <ul class="cta-box__list">
                                <?php while(have_rows('mini_list')): the_row();
                                    $text_item = get_sub_field('text_item');
                                    if($text_item):
                                    ?>
                                    <li><?php echo $text_item;?></li>
                                    <?php endif; endwhile;?> 
                                    <?php if($mini_list_text_for_link and $mini_list_link):?>
                                    <li>
                                        <a href="<?php echo $mini_list_link;?>"><?php echo $mini_list_text_for_link;?></a>
                                    </li>
                                    <?php endif;?>
                                </ul>
                                <?php }?>
                            </div>
                        </div>
                        <?php endwhile; }?>

                        <div class="sidebar__item sidebar__item--toc" id="formToc">
                            <div class="sidebar__title">In this Article</div>
                            <div id="tocContent">
                                <?php  if(shortcode_exists( 'boomdevs_toc' )):
                                    echo do_shortcode('[boomdevs_toc]');
                                endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar__item">
                        <div class="sidebar__title">More Posts</div>
                        <div class="sidebar__related">
                            <?php 
                                $post_id = get_the_ID();
                                $cat_ids = array();
                                $categories = get_the_category( $post_id );

                                if(!empty($categories) && !is_wp_error($categories)):
                                    foreach ($categories as $category):
                                        array_push($cat_ids, $category->term_id);
                                    endforeach;
                                endif;

                                $current_post_type = get_post_type($post_id);

                                $query_args = array( 
                                    'category__in' => $cat_ids,
                                    'post_type' => $current_post_type,
                                    'post__not_in' => array($post_id),
                                    'posts_per_page' => '4'
                                );

                                $related_cats_post = new WP_Query( $query_args );

                                if($related_cats_post->have_posts()):
                            ?>

                            <?php
                                    while($related_cats_post->have_posts()): $related_cats_post->the_post();
                                        $link = get_permalink();
                                        $src = get_the_post_thumbnail_url($post->ID, 'medium');
                                        $thumbnail_id = get_post_thumbnail_id( $post->ID );
                                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                        $title = get_the_title();
                                        $excerpt = get_the_excerpt();
                                ?>
                            <a href="<?php echo $link?>" class="related-item">
                                <?php if($src):?>
                                <div class="related-item__img">
                                    <img src="<?php echo $src?>" alt="<?php echo $alt?>">
                                </div>
                                <?php endif;?>
                                <h3 class="related-item__title"><?php echo $title;?></h3>
                                <p class="related-item__text">
                                    <?php echo strip_tags(mb_substr($excerpt, 0, 150)) . '...';?></p>
                            </a>
                            <?php endwhile; wp_reset_postdata(); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>