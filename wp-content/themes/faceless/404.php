<?php get_header(); ?> 

<div class="main section content">
    <section class="section">
        <div class="container">
            <div class="row d-flex justify-content-center page-404">
                <?php 
                    $title = get_field('title', 'options');
                    $description = get_field('description', 'options');
                    $button_text = get_field('button_text', 'options');
                ?>
                <div class="col-sm-6">
                    <?php if($title):?>
                    <h1 class="page-404__title"><?php echo $title;?></h1>
                    <?php endif;?>
                    <?php if($description):?>
                    <h2 class="page-404__text"><?php echo $description;?></h2>
                    <?php endif;?>
                    <?php if($button_text):?>
                    <div class="page-404__btn">
                        <a href="<?php echo esc_url(home_url()); ?>" class="btn"><?php echo $button_text;?></a>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>


