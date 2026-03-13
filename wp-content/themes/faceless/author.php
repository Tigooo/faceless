<?php get_header() ?>

<?php
    global $post;
    $linkedin = get_the_author_meta('linkedin');
    $author_id = get_the_author_meta('ID');
?>


<div class="min-h-screen bg-background">
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-gradient-to-r from-primary/20 to-purple-500/20 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-gradient-to-r from-pink-500/20 to-primary/20 rounded-full blur-3xl opacity-30 animate-pulse"
            style="animation-delay: 1s;"></div>
    </div>
    <main class="relative z-10 pt-24 pb-20">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="relative mb-12" style="opacity: 1; transform: none;">
                <div class="h-48 md:h-64 rounded-3xl bg-gradient-to-r from-primary via-purple-500 to-pink-500 relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMtNi42MjcgMC0xMiA1LjM3My0xMiAxMnM1LjM3MyAxMiAxMiAxMiAxMi01LjM3MyAxMi0xMi01LjM3My0xMi0xMi0xMnoiIHN0cm9rZT0icmdiYSgyNTUsMjU1LDI1NSwwLjEpIiBzdHJva2Utd2lkdGg9IjIiLz48L2c+PC9zdmc+')] opacity-20"></div>
                    <?php 
                        $author_twitter_link = get_the_author_meta('author_twitter_link');
                        $author_instagram_link = get_the_author_meta('author_instagram_link');
                        $author_youtube_link = get_the_author_meta('author_youtube_link');

                        if($author_twitter_link or $author_instagram_link or $author_youtube_link):
                    ?>
                    <div class="absolute top-4 right-4 md:top-8 md:right-8 flex gap-2" style="opacity: 1;">
                        <?php if($author_twitter_link):?>
                        <a href="<?php echo $author_twitter_link;?>"
                            class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5">
                                <path
                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                </path>
                            </svg>
                        </a>
                        <?php endif;?>
                        <?php if($author_instagram_link):?>
                        <a href="<?php echo $author_instagram_link;?>"
                            class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-instagram w-5 h-5">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                            </svg>
                        </a>
                        <?php endif;?>
                        <?php if($author_youtube_link):?>
                        <a href="<?php echo $author_youtube_link;?>" class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white hover:bg-white/30 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-youtube w-5 h-5">
                                <path
                                    d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17">
                                </path>
                                <path d="m10 15 5-3-5-3z"></path>
                            </svg>
                        </a>
                        <?php endif;?>
                    </div>
                    <?php endif;?>
                </div>
                <div class="relative -mt-20 md:-mt-24 mx-4 md:mx-8">
                    <div class="bg-card/80 backdrop-blur-xl border border-border/50 rounded-2xl p-6 md:p-8 shadow-xl">
                        <div class="flex flex-col md:flex-row gap-6 items-start">
                            <div class="-mt-20 md:-mt-24" style="opacity: 1; transform: none;">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-r from-primary to-purple-500 rounded-full blur-lg opacity-50"></div>
                                    <div class="flex shrink-0 overflow-hidden rounded-full w-32 h-32 md:w-40 md:h-40 border-4 border-background relative">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 152 ); ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                $first_name  = get_the_author_meta('first_name', $author_id);
                                $last_name   = get_the_author_meta('last_name', $author_id);
                                $display_name = get_the_author_meta('display_name', $author_id);

                                if (!empty($first_name) || !empty($last_name)) {
                                    $author_name = trim("$first_name $last_name");
                                } else {
                                    $author_name = !empty($display_name) ? $display_name : 'Guest Author';
                                }

                                $bio = get_the_author_meta('description', $author_id);
                            ?>
                            <div class="flex-1">
                                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                                    <div>
                                        <h1 class="text-2xl md:text-3xl font-bold text-foreground mb-1"><?php echo $author_name;?></h1>
                                        <?php if($bio):?>
                                        <p class="text-muted-foreground max-w-2xl leading-relaxed"><?php echo $bio;?></p>
                                        <?php endif;?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                            $user_id_string = 'user_' . $author_id; 
                            $repeater_field_name = 'author_featured'; 

                            if( have_rows( $repeater_field_name, $user_id_string ) ):
                        ?>
                        <div class="mt-8 pt-6 border-t border-border/50">
                            <p class="text-sm text-muted-foreground text-center mb-4">Featured In</p>
                            <div class="flex flex-wrap items-center justify-center gap-6 md:gap-10">
                                <?php while(have_rows( $repeater_field_name, $user_id_string )): the_row();
                                    $author_feature_item = get_sub_field('author_feature_item');

                                    if($author_feature_item):
                                ?>
                                <span  class="text-lg md:text-xl font-semibold text-muted-foreground/60 hover:text-foreground transition-colors" style="opacity: 1; transform: none;">
                                    <?php echo $author_feature_item;?>
                                </span>
                                <?php endif; endwhile;?>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <?php
                $author_id = get_the_author_meta('ID');
                $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

                $posts = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'order'     => 'DESC',
                    'author__in'     => $author_id,
                    'paged' => $paged
                );
                $author_query = new WP_Query($posts);

                if ( $author_query->have_posts() ):
            ?>
            <section style="opacity: 1; transform: none;">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Latest Articles</h2>
                    <span class="text-muted-foreground">6 articles</span>
                </div>
                <div id="authorPosts" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php
                        while ($author_query->have_posts()) : $author_query->the_post();
                        $link = get_permalink();
                        $src = get_the_post_thumbnail_url($post->ID, 'full');
                        $thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        $date = get_the_date( 'd M Y ', $post->ID );
                        $excerpt = get_the_excerpt($post->ID);
                        $post_min_read = get_field('post_min_read', $post->ID);
                        $post_date     = get_the_date('M j, Y');

                        $categories    = get_the_category($post->ID);
                        $category_name = !empty($categories) ? $categories[0]->name : '';
                        $excerpt       = get_the_excerpt();
                    ?>
                    <article class="group" style="opacity: 1; transform: none;">
                        <a class="block" href="<?php echo $link?>" tite="<?php echo the_title();?>">
                            <div class="bg-card/60 backdrop-blur-sm border border-border/50 rounded-2xl overflow-hidden hover:border-primary/50 hover:shadow-xl hover:shadow-primary/10 transition-all duration-300">
                                <div class="aspect-video overflow-hidden relative">
                                    <?php if ($src) : ?>
                                        <img src="<?php echo $src;?>"  alt="<?php echo $alt;?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/template/post-placeholder.png" alt="<?php the_title(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <?php endif; ?>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <?php if ($category_name) : ?>
                                    <span  class="absolute top-3 left-3 px-3 py-1 bg-primary/90 text-white text-xs font-medium rounded-full"><?php echo $category_name;?></span>
                                    <?php endif;?>
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center gap-2 text-xs text-muted-foreground mb-3">
                                        <span><?php echo $post_date;?></span>
                                        <span>•</span>
                                        <?php if($post_min_read):?>
                                        <span><?php echo $post_min_read;?></span>
                                        <?php endif;?>
                                    </div>
                                    <h3 class="font-semibold text-foreground mb-2 line-clamp-2 group-hover:text-primary transition-colors">
                                        <?php the_title();?>
                                    </h3>
                                    <p class="text-sm text-muted-foreground line-clamp-2 mb-4">
                                        <?php echo mb_strlen($excerpt) > 113 ? mb_substr($excerpt, 0, 113) . '…' : $excerpt; ?>
                                    </p>
                                    <div class="flex items-center text-primary text-sm font-medium group-hover:gap-2 transition-all">
                                        Read more <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endwhile; wp_reset_postdata();?>
                </div>
                <div class="postsLoader p-6" id="postsLoader"></div>
                <div class="author__more p-6 flex justify-center" id="more">
                    <?php
                    $raw_url = get_next_posts_page_link($author_query->max_num_pages);
                    if ($raw_url) { ?>
                        <button data-href="<?php echo esc_url( $raw_url );?>"  class="text-white inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white hover:shadow-gradient-lg hover:scale-[1.03] h-10 px-5 shadow-lg shadow-primary/20 hover-btn theme-btn btn-style-one dg-btn regnow pum-trigger" style="cursor: pointer;">
                            <i class="btn-curve"></i>
                            <span class="btn-title btn-title--small"><p>Load More</p></span>
                        </button>
                    <?php } ?>
                </div>
            </section>
            <?php endif;?>
        </div>
    </main>
</div>

<?php get_footer() ?>