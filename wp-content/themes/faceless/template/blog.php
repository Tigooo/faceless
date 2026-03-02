<?php 
/* 
    Template Name: Blog
*/ 
?>
<?php get_header(); ?>

<div class="min-h-screen bg-background">
    <main class="relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-1/4 w-[800px] h-[800px] rounded-full bg-gradient-to-br from-primary/15 to-transparent blur-3xl animate-orb-1"></div>
            <div class="absolute top-1/2 right-0 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-secondary/15 to-transparent blur-3xl animate-orb-2"></div>
            <div class="absolute bottom-0 left-0 w-[700px] h-[700px] rounded-full bg-gradient-to-br from-accent/10 to-transparent blur-3xl animate-orb-3"></div>
            <div class="absolute top-[15%] left-[10%] w-3 h-3 rounded-full bg-gradient-to-r from-primary to-secondary animate-float-1"></div>
            <div class="absolute top-[25%] right-[15%] w-4 h-4 rounded-full bg-gradient-to-r from-secondary to-accent animate-float-2"></div>
            <div class="absolute top-[60%] left-[5%] w-2 h-2 rounded-full bg-gradient-to-r from-accent to-primary animate-float-3"></div>
        </div>

        <?php 
            $blog_bagde_text = get_field('blog_bagde_text');
            $blog_title_start = get_field('blog_title_start');
            $blog_title_colored = get_field('blog_title_colored');
            $blog_title_end = get_field('blog_title_end');
            $blog_description = get_field('blog_description');
        ?>
        <section class="relative pt-32 pb-16 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <?php if($blog_bagde_text):?>
                <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-subtle border border-primary/20 mb-8" style="opacity: 1; transform: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 text-primary">
                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg>
                    <span class="text-sm font-medium"><?php echo $blog_bagde_text;?></span>
                </div>
                <?php endif;?>
                <?php if($blog_title_start and $blog_title_colored and  $blog_title_end):?>
                <h1 class="text-5xl md:text-7xl font-display font-bold mb-6" style="opacity: 1; transform: none;">
                    <?php echo $blog_title_start;?> <span class="text-gradient"><?php echo $blog_title_colored;?></span> <?php echo $blog_title_end;?>
                </h1>
                <?php endif;?>
                <?php if($blog_description):?>
                <p class="text-muted-foreground text-lg md:text-xl max-w-2xl mx-auto" style="opacity: 1; transform: none;">
                    <?php echo $blog_description;?>
                </p>
                <?php endif;?>
            </div>
        </section>

        <?php
            $paged          = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
            $posts_per_page = 10; // 1 featured + 9 карточек

            $query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => $posts_per_page,
                'order'          => 'DESC',
                'paged'          => $paged,
            ]);

            if ($query->have_posts()) :
                $post_index = 0;
        ?>

        <?php while ($query->have_posts()) : $query->the_post(); $post_index++; ?>

        <?php
            $link          = get_permalink();
            $src           = get_the_post_thumbnail_url($post->ID);
            $thumbnail_id  = get_post_thumbnail_id($post->ID);
            $alt           = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $excerpt       = get_the_excerpt();
            $post_min_read = get_field('post_min_read', $post->ID);
            $post_date     = get_the_date('M j, Y');

            $categories    = get_the_category($post->ID);
            $category_name = !empty($categories) ? $categories[0]->name : '';

            $first_name  = get_the_author_meta('first_name');
            $last_name   = get_the_author_meta('last_name');
            $author_name = (!empty($first_name) || !empty($last_name))
                ? trim("$first_name $last_name")
                : get_the_author_meta('display_name');
        ?>

        <?php if ($post_index === 1) : // ——— FEATURED (первый пост на странице) ——— ?>

        <section class="relative px-4 pb-16">
            <div class="max-w-6xl mx-auto">
                <a href="<?php echo $link; ?>" title="<?php the_title(); ?>" class="group relative" style="opacity: 1; transform: none;">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#00D9FF] to-[#00FFA3] rounded-[2rem] blur-xl opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                    <div class="relative bg-card border border-border/50 rounded-[2rem] overflow-hidden">
                        <div class="grid lg:grid-cols-2">
                            <div class="relative aspect-[16/10] lg:aspect-auto overflow-hidden">
                                <?php if ($src) : ?>
                                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/template/post-placeholder.png" alt="<?php the_title(); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <?php endif; ?>
                                <div class="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent lg:bg-gradient-to-r"></div>
                                <div class="absolute top-6 left-6">
                                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-[#00D9FF] to-[#00FFA3] text-white text-sm font-bold shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4">
                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                            <path d="M20 3v4"></path>
                                            <path d="M22 5h-4"></path>
                                            <path d="M4 17v2"></path>
                                            <path d="M5 18H3"></path>
                                        </svg>
                                        Featured
                                    </div>
                                </div>
                            </div>
                            <div class="p-8 lg:p-12 flex flex-col justify-center">
                                <div class="flex items-center gap-3 mb-4">
                                    <?php if ($category_name) : ?>
                                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-[#00D9FF] to-[#00FFA3] text-white"><?php echo $category_name; ?></span>
                                    <?php endif; ?>
                                </div>
                                <h2 class="text-2xl md:text-3xl lg:text-4xl font-display font-bold mb-4 group-hover:text-gradient transition-all duration-300">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="text-muted-foreground text-lg mb-6 leading-relaxed">
                                    <?php echo esc_html(mb_strlen($excerpt) > 200 ? mb_substr($excerpt, 0, 200) . '…' : $excerpt); ?>
                                </p>
                                <div class="flex items-center gap-6 text-sm text-muted-foreground mb-8">
                                    <?php if ($author_name) : ?>
                                        <span class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-4 h-4">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <?php echo $author_name; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if ($post_min_read) : ?>
                                        <span class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                            <?php echo $post_min_read; ?>
                                        </span>
                                    <?php endif; ?>
                                    <span><?php echo $post_date; ?></span>
                                </div>
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] h-12 bg-gradient-main hover:opacity-90 text-primary-foreground rounded-full px-8 py-6 w-fit group/btn">
                                    Read Article
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4 group-hover/btn:translate-x-1 transition-transform">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Открываем секцию карточек сразу после featured -->
        <section class="relative px-4 pb-24">
            <div class="max-w-6xl mx-auto">
                <div class="flex items-center gap-4 mb-10" style="opacity: 1; transform: none;">
                    <h2 class="text-2xl font-display font-bold">Latest Posts</h2>
                    <div class="flex-1 h-px bg-border"></div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php else : // ——— КАРТОЧКИ (посты 2–10) ——— ?>

                    <article class="group relative" style="opacity: 1; transform: none;">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-[#FF00E5] to-[#FF6B00] rounded-3xl opacity-0 group-hover:opacity-20 blur-xl transition-opacity duration-500"></div>
                        <div class="relative bg-card border border-border/50 rounded-3xl overflow-hidden h-full hover:border-primary/20 transition-all duration-300 flex flex-col">
                            <a href="<?php echo $link; ?>">
                                <?php if ($category_name) : ?>
                                <div class="relative aspect-[16/10] overflow-hidden">
                                    <?php if ($src) : ?>
                                        <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/template/post-placeholder.png" alt="<?php the_title(); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <?php endif; ?>
                                    <div class="absolute inset-0 bg-gradient-to-t from-card via-transparent to-transparent"></div>
                                    <span class="absolute top-4 right-4 px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-[#FF00E5] to-[#FF6B00] text-white"><?php echo $category_name; ?></span>
                                </div>
                                <?php endif; ?>
                                <div class="p-6 flex flex-col flex-1">
                                    <h3 class="text-lg font-display font-bold mb-3 group-hover:text-gradient transition-all duration-300 leading-snug">
                                        <?php the_title(); ?>
                                    </h3>
                                    <p class="text-muted-foreground text-sm mb-5 leading-relaxed flex-1">
                                        <?php echo mb_strlen($excerpt) > 113 ? mb_substr($excerpt, 0, 113) . '…' : $excerpt; ?>
                                    </p>
                                    <div class="flex items-center justify-between text-xs text-muted-foreground pt-4 border-t border-border/50">
                                        <div class="flex items-center gap-4">
                                            <span class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-3 h-3">
                                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <?php echo $author_name; ?>
                                            </span>
                                            <?php if ($post_min_read) : ?>
                                            <span class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-3 h-3">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg>
                                                <?php echo $post_min_read; ?>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                        <span><?php echo $post_date; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </article>

        <?php endif; ?>

        <?php endwhile; wp_reset_postdata(); ?>

                </div><!-- /.grid -->

                <?php
                    $current = max(1, get_query_var('paged'));

                    $links = paginate_links([
                        'current'   => $current,
                        'total'     => $query->max_num_pages,
                        'type'      => 'array',
                        'end_size'  => 2,
                        'mid_size'  => 1,
                        'prev_next' => false,
                    ]);

                    if ($links) : ?>

                    <div class="flex items-center justify-center gap-2 mt-12">

                        <!-- Prev -->
                        <?php if ($current > 1) : ?>
                            <a href="<?php echo get_pagenum_link($current - 1); ?>"
                               class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-300 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 rounded-full w-10 h-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                            </a>
                        <?php else : ?>
                            <button disabled class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold border-2 border-border bg-transparent rounded-full w-10 h-10 opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                            </button>
                        <?php endif; ?>

                        <!-- Numbers -->
                        <?php foreach ($links as $link) :
                            if (strpos($link, 'current') !== false) :
                                $number = strip_tags($link); ?>
                                <span class="inline-flex items-center justify-center text-sm font-semibold shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] rounded-full w-10 h-10 bg-gradient-main text-primary-foreground">
                                    <?php echo $number; ?>
                                </span>
                            <?php else :
                                echo str_replace(
                                    '<a',
                                    '<a class="inline-flex items-center justify-center text-sm font-semibold border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 rounded-full w-10 h-10"',
                                    $link
                                );
                            endif;
                        endforeach; ?>

                        <!-- Next -->
                        <?php if ($current < $query->max_num_pages) : ?>
                            <a href="<?php echo get_pagenum_link($current + 1); ?>"
                               class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold transition-all duration-300 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 rounded-full w-10 h-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </a>
                        <?php else : ?>
                            <button disabled class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold border-2 border-border bg-transparent rounded-full w-10 h-10 opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </button>
                        <?php endif; ?>

                    </div>

                <?php endif; ?>

            </div><!-- /.max-w-6xl -->
        </section>

        <?php else : ?>
            <p class="text-center text-muted-foreground py-24">No posts found.</p>
        <?php endif; ?>

        <div class="max-w-6xl mx-auto px-4">
            <div class="h-px bg-border/50"></div>
        </div>
    </main>
</div>

<?php get_footer(); ?>