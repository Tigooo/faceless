<?php get_header(); ?> 


    <?php 
        $src = get_the_post_thumbnail_url($post->ID, 'full');
        $srcMedium = get_the_post_thumbnail_url($post->ID, 'medium');
        $thumbnail_id = get_post_thumbnail_id( $post->ID );
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    ?>
    
    <section class="section section--pt76 page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section__bread">
                        <div class="breadcrumbs">
                            <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope
                                    itemtype="https://schema.org/ListItem">
                                    <a itemprop="item" href="<?php echo get_home_url(); ?>">
                                    <span itemprop="name"><?php echo _e('Home', 'formstroy');?></span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope
                                    itemtype="https://schema.org/ListItem">
                                    <span itemprop="name"><?php the_title();?></span>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="page__contant">
                        <h1 class="page__title"><?php echo the_title();?></h1>
                        <?php if(has_post_thumbnail()):?>
                        <div class="page__img">
                            <img src="<?php echo $src?>" alt="<?php echo $alt;?>" title="<?php the_title();?>">
                        </div>
                        <?php endif;?>
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>


