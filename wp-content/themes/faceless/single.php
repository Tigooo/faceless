<?php get_header(); ?>



    <div id="root">
        <div class="min-h-screen bg-background">

            <div class="fixed inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-1/4 -left-32 w-96 h-96 bg-gradient-to-br from-primary/10 to-accent/10 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full blur-3xl animate-pulse"style="animation-delay: 1s;"></div>
            </div>
            <main class="relative pt-24 pb-20">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 max-w-7xl mx-auto">
                        
                    <aside class="hidden lg:block lg:col-span-3" style="opacity: 1; transform: none;">
                            <div class="lg:sticky lg:top-28">
                                <div class="bg-white/70 dark:bg-card/50 backdrop-blur-xl rounded-2xl border border-border/50 p-6 shadow-lg">
                                    <h3 class="font-bold text-foreground mb-4">Content</h3>
                                    <?php 
                                        $post_min_read = get_field('post_min_read');

                                        if($post_min_read):
                                    ?>
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-foreground"><?php echo $post_min_read?></p>
                                            <div class="w-full h-1.5 bg-muted rounded-full mt-1 overflow-hidden">
                                                <div class="singleScrollProgress h-full bg-gradient-main rounded-full"style="width: 0;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <nav class="tableOfContent max-h-48 overflow-y-auto space-y-1 scrollbar-thin scrollbar-thumb-primary/20 scrollbar-track-transparent pr-2">
                                        
                                    </nav>
                                    <?php
                                        $post_url     = urlencode( get_permalink() );
                                        $post_title   = urlencode( get_the_title() );
                                        $linkedin_url = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $post_url;
                                        $twitter_url  = 'https://twitter.com/intent/tweet?url=' . $post_url . '&text=' . $post_title;
                                        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
                                    ?>

                                    <div class="mt-6 pt-6 border-t border-border/50">
                                        <p class="text-sm text-muted-foreground mb-3">Share this article</p>
                                        <div class="flex items-center gap-2">

                                            <!-- LinkedIn -->
                                            <a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank" rel="noopener noreferrer"
                                                class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5">
                                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                    <rect width="4" height="12" x="2" y="9"></rect>
                                                    <circle cx="4" cy="4" r="2"></circle>
                                                </svg>
                                            </a>

                                            <!-- Twitter / X -->
                                            <a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer"
                                                class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5">
                                                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                                                </svg>
                                            </a>

                                            <!-- Facebook -->
                                            <a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer"
                                                class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-5 h-5">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>
                                            </a>

                                            <!-- Copy Link -->
                                            <button data-url="<?php echo esc_url( get_permalink() ); ?>"
                                                class="copyShareLink w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                                </svg>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>


                        <?php 
                            $author_id = get_post_field('post_author', get_the_ID());

                            $first_name  = get_the_author_meta('first_name', $author_id);
                            $last_name   = get_the_author_meta('last_name', $author_id);
                            $display_name = get_the_author_meta('display_name', $author_id);

                            $specialization = get_field('author_role', 'user_'. $author_id );

                            if (!empty($first_name) || !empty($last_name)) {
                                $author_name = trim("$first_name $last_name");
                            } else {
                                $author_name = !empty($display_name) ? $display_name : 'Guest Author';
                            }

                            $author_link = get_author_posts_url($author_id);
                        ?>
                        <article id="article-content" class="lg:col-span-6" style="opacity: 1; transform: none;">
                            <div class="mb-8" style="opacity: 1; transform: none;">
                                <div class="flex items-center gap-6 mb-6">
                                    <a class="flex items-center gap-3 group" href="#">
                                        <span class="relative flex shrink-0 overflow-hidden rounded-full w-12 h-12 ring-2 ring-primary/20 group-hover:ring-primary/50 transition-all">
                                            <div class="aspect-square h-full w-full">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                                            </div>
                                        </span>
                                        <div>
                                            <p class="font-semibold text-foreground group-hover:text-primary transition-colors"><?php echo $author_name;?></p>
                                            <?php if($specialization):?>
                                            <p class="text-sm text-muted-foreground"><?php echo $specialization;?></p>
                                            <?php endif;?>
                                        </div>
                                    </a>
                                    <div class="flex items-center gap-1.5 text-sm text-muted-foreground"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-refresh-cw w-4 h-4">
                                            <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                            <path d="M21 3v5h-5"></path>
                                            <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                            <path d="M8 16H3v5"></path>
                                        </svg><span>Updated <?php echo get_the_modified_date(); ?></span></div>
                                </div>
                                <?php 
                                    $post_hero_btn_text = get_field('post_hero_btn_text');
                                    $post_hero_btn_link = get_field('post_hero_btn_link');

                                    if($post_hero_btn_text and $post_hero_btn_link):
                                ?>
                                <div class="mb-8" style="opacity: 1; transform: none;">
                                    <a href="<?php echo $post_hero_btn_link;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient-lg hover:shadow-2xl hover:scale-[1.05] font-bold h-14 px-10 text-base group relative overflow-hidden"><span
                                            class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-sparkles w-5 h-5 mr-2">
                                            <path
                                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                            </path>
                                            <path d="M20 3v4"></path>
                                            <path d="M22 5h-4"></path>
                                            <path d="M4 17v2"></path>
                                            <path d="M5 18H3"></path>
                                        </svg>
                                        <?php echo $post_hero_btn_text;?>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <?php endif;?>
                                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground leading-tight"><?php the_title();?></h1>
                            </div>
                            <div class="relative rounded-2xl overflow-hidden mb-8 aspect-video bg-gradient-to-br from-primary/20 to-accent/20">
                                <?php 
                                    $src = get_the_post_thumbnail_url($post->ID, 'full');
                                    $thumbnail_id = get_post_thumbnail_id( $post->ID );
                                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                ?>
                                <?php if($src):?>
                                <img src="<?php echo $src;?>"  alt="<?php echo $alt;?>" class="w-full h-full object-cover" >
                                <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/template/post-placeholder.png" class="w-full h-full object-cover" >
                                <?php endif;?>
                            </div>
                            
                            <div class="lg:hidden my-8">
                                <div
                                    class="bg-white/70 dark:bg-card/50 backdrop-blur-xl rounded-2xl border border-border/50 p-6 shadow-lg">
                                    <h3 class="font-bold text-foreground mb-4">Content</h3>
                                    <?php 
                                        $post_min_read = get_field('post_min_read');

                                        if($post_min_read):
                                    ?>
                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clock w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-foreground"><?php echo $post_min_read;?></p>
                                            <div class="w-full h-1.5 bg-muted rounded-full mt-1 overflow-hidden">
                                                <div  class="singleScrollProgress h-full bg-gradient-main rounded-full" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <nav class="tableOfContent max-h-48 overflow-y-auto space-y-1 scrollbar-thin scrollbar-thumb-primary/20 scrollbar-track-transparent pr-2"></nav>
                                    <?php
                                        $post_url     = urlencode( get_permalink() );
                                        $post_title   = urlencode( get_the_title() );
                                        $linkedin_url = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $post_url;
                                        $twitter_url  = 'https://twitter.com/intent/tweet?url=' . $post_url . '&text=' . $post_title;
                                        $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
                                    ?>

                                    <div class="mt-6 pt-6 border-t border-border/50">
                                        <p class="text-sm text-muted-foreground mb-3">Share this article</p>
                                        <div class="flex items-center gap-2">

                                            <!-- LinkedIn -->
                                            <a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank" rel="noopener noreferrer"
                                                class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin w-5 h-5">
                                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                    <rect width="4" height="12" x="2" y="9"></rect>
                                                    <circle cx="4" cy="4" r="2"></circle>
                                                </svg>
                                            </a>

                                            <!-- Twitter / X -->
                                            <a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank" rel="noopener noreferrer"
                                                class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5">
                                                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                                                </svg>
                                            </a>

                                            <!-- Facebook -->
                                            <a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener noreferrer"
                                                class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-5 h-5">
                                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                </svg>
                                            </a>

                                            <!-- Copy Link -->
                                            <button data-url="<?php echo esc_url( get_permalink() ); ?>"
                                                class="copyShareLink w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy w-5 h-5">
                                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                                </svg>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php if( have_rows('single_post_blocks') ){?>
                            <!-- BLOCKS START -->
                            <div class="single__content">
                                <?php while ( have_rows('single_post_blocks') ) : the_row();?>
                                    
                                    <?php if( get_row_layout() == 'text_block' ){
                                        $text_block_default = get_sub_field('text_block_default');
                                    ?>
                                        <?php if($text_block_default):?>
                                        <div class="prose prose-lg max-w-none
                                            prose-headings:font-bold prose-headings:text-foreground
                                            prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4
                                            prose-p:text-muted-foreground prose-p:leading-relaxed
                                            prose-a:text-primary prose-a:no-underline hover:prose-a:underline
                                            prose-ul:text-muted-foreground prose-li:marker:text-primary
                                            prose-strong:text-foreground">
                                            <?php echo $text_block_default;?>
                                        </div>
                                        <?php endif;?>
                                    <?php } elseif ( get_row_layout() == 'checklist_table_block' ) {
                                        $checklist_tabel_title = get_sub_field('checklist_tabel_title');
                                        ?>
                                        <div class="my-10 overflow-hidden rounded-2xl border border-border/50 bg-white/80 dark:bg-card/50 backdrop-blur-xl shadow-xl relative" style="opacity: 1; transform: none;">
                                            <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 via-accent/20 to-secondary/20 rounded-2xl blur-xl opacity-50 -z-10"></div>
                                            <?php if($checklist_tabel_title):?>
                                            <div class="px-6 py-4 border-b border-border/50 bg-gradient-to-r from-primary/10 via-accent/5 to-secondary/10">
                                                <h4 class="font-bold text-foreground flex items-center gap-2">
                                                    <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-primary to-accent"></span>
                                                    <?php echo $checklist_tabel_title;?>
                                                </h4>
                                            </div>
                                            <?php endif;?>
                                            <div class="overflow-x-auto">
                                                <table class="w-full">
                                                    <?php if(have_rows('table_headings')):
                                                        $tableHeadCount = 0;
                                                        ?>
                                                    <thead>
                                                        <tr>
                                                            <?php while(have_rows('table_headings')): the_row(); $tableHeadCount++;
                                                                $table_heading_text = get_sub_field('table_heading_text');
                                                                if($table_heading_text):

                                                                switch ($tableHeadCount) {
                                                                    case 1:
                                                                        $widthClass = '25%';
                                                                        break;
                                                                    case 2:
                                                                        $widthClass = '35%';
                                                                        break;
                                                                    case 3:
                                                                        $widthClass = '20%';
                                                                        break;
                                                                    case 4:
                                                                        $widthClass = '20%';
                                                                        break;
                                                                    default: 
                                                                        $widthClass = '20%';
                                                                }
                                                            ?>
                                                            <th class="px-6 py-4 text-left font-semibold text-foreground/90 text-sm uppercase tracking-wider bg-gradient-to-r <?php echo $tableHeadCount === 1 ? 'from-primary/15 to-primary/5' : 'from-transparent via-accent/5 to-transparent';?>" 
                                                            style="width: <?php echo $widthClass;?>;"
                                                            >
                                                                <?php echo $table_heading_text;?>
                                                            </th>
                                                            <?php endif; endwhile;?>
                                                        </tr>
                                                    </thead>
                                                    <?php endif;?>

                                                    <?php if(have_rows('table_row')):?>
                                                    <tbody>
                                                        <?php while(have_rows('table_row')): the_row();
                                                            $is_checked = get_sub_field('is_checked');
                                                        ?>
                                                        <tr class="group transition-all duration-300 hover:bg-gradient-to-r hover:from-primary/5 hover:via-accent/5 hover:to-secondary/5 bg-muted/20"
                                                            style="opacity: 1; transform: none;">
                                                            <?php if(have_rows('table_row_item')): 
                                                                $tableRowIndex = 0;
                                                                while(have_rows('table_row_item')): the_row(); $tableRowIndex++;
                                                                    $table_row_item_text = get_sub_field('table_row_item_text');
                                                                    if($table_row_item_text):
                                                                ?>
                                                                <td
                                                                    class="px-6 py-5 border-b border-border/20 text-sm <?php echo $tableRowIndex === 1 ? 'font-semibold' : '';?>  text-foreground">
                                                                    <span><?php echo $table_row_item_text;?></span>
                                                                </td>
                                                                <?php endif; endwhile;?>
                                                                
                                                                <?php if(isset($is_checked[0]) and $is_checked[0] === 'yes'):?>
                                                                <td
                                                                    class="px-6 py-5 border-b border-border/20 text-sm text-muted-foreground">
                                                                    <div class="flex items-center justify-center">
                                                                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/25"
                                                                            style="transform: none;">
                                                                            <svg
                                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="3"
                                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                                class="lucide lucide-check w-4 h-4 text-white">
                                                                                <path d="M20 6 9 17l-5-5"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <?php else :?>
                                                                <td class="px-6 py-5 border-b border-border/20 text-sm text-muted-foreground">
                                                                    <div class="flex items-center justify-center">
                                                                        <div class="w-8 h-8 rounded-full border-2 border-dashed border-muted-foreground/30 flex items-center justify-center">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle w-3 h-3 text-muted-foreground/30">
                                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <?php  endif; ?>
                                                            <?php endif;?>
                                                        </tr>
                                                        <?php endwhile;?>

                                                    </tbody>
                                                    <?php endif;?>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } elseif ( get_row_layout() == 'sponsored_banner' ) {
                                        $sponsored_banner_subtitle = get_sub_field('sponsored_banner_subtitle'); 
                                        $sponsored_banner_title = get_sub_field('sponsored_banner_title'); 
                                        $sponsored_banner_text = get_sub_field('sponsored_banner_text'); 
                                        $sponsored_banner_btn_text = get_sub_field('sponsored_banner_btn_text'); 
                                        $sponsored_banner_btn_link = get_sub_field('sponsored_banner_btn_link'); 
                                        ?>
                                        <div class="my-10 relative overflow-hidden rounded-2xl p-[1px] bg-gradient-to-r from-primary via-accent to-secondary"
                                            style="opacity: 1; transform: none;">
                                            <div  class="relative bg-white/95 dark:bg-card/95 backdrop-blur-xl rounded-2xl p-6 md:p-8 overflow-hidden">
                                                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/30 to-accent/30 rounded-full blur-3xl animate-pulse"></div>
                                                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-br from-secondary/30 to-primary/30 rounded-full blur-2xl animate-pulse"
                                                    style="animation-delay: 1s;"></div>
                                                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-4">
                                                    <div class="flex items-center gap-4">
                                                        <div
                                                            class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/25">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-sparkles w-7 h-7 text-white">
                                                                <path
                                                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                                                </path>
                                                                <path d="M20 3v4"></path>
                                                                <path d="M22 5h-4"></path>
                                                                <path d="M4 17v2"></path>
                                                                <path d="M5 18H3"></path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <?php if($sponsored_banner_subtitle):?>
                                                            <span  class="text-xs font-medium text-primary uppercase tracking-wider"><?php echo $sponsored_banner_subtitle;?></span>
                                                            <?php endif;?>
                                                            <?php if($sponsored_banner_title):?>
                                                            <h4 class="font-bold text-lg text-foreground"><?php echo $sponsored_banner_title;?></h4>
                                                            <?php endif;?>
                                                            <?php if($sponsored_banner_text):?>
                                                            <p class="text-sm text-muted-foreground"><?php echo $sponsored_banner_text;?></p>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <?php if($sponsored_banner_btn_link and $sponsored_banner_btn_text):?>
                                                    <a href="<?php echo $sponsored_banner_btn_link;?>" class="inline-flex items-center justify-center gap-2 rounded-full text-sm ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient-lg hover:shadow-2xl hover:scale-[1.05] font-bold h-12 px-7 py-2 group whitespace-nowrap">Try
                                                        <?php echo $sponsored_banner_btn_text?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform">
                                                            <path d="M5 12h14"></path>
                                                            <path d="m12 5 7 7-7 7"></path>
                                                        </svg>
                                                    </a>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } elseif ( get_row_layout() == 'square_banner' ) {
                                        $square_banner_small_text = get_sub_field('square_banner_small_text');
                                        $square_banner_title = get_sub_field('square_banner_title');
                                        $square_banner_text = get_sub_field('square_banner_text');
                                        $square_banner_btn_text = get_sub_field('square_banner_btn_text');
                                        $square_banner_btn_link = get_sub_field('square_banner_btn_link');
                                        ?>
                                        <div class="my-10 relative" style="opacity: 1; transform: none;">
                                            <div
                                                class="flex items-stretch gap-0 bg-gradient-to-r from-muted/50 to-transparent rounded-r-2xl overflow-hidden border border-border/30">
                                                <div class="w-1.5 bg-gradient-to-b from-primary via-accent to-secondary shrink-0">
                                                </div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 p-6 flex-1">
                                                    <div class="flex items-center gap-3">
                                                        <div
                                                            class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-primary">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div>
                                                            <div class="flex items-center gap-2">
                                                                <?php if($square_banner_small_text):?>
                                                                <span  class="text-[10px] font-bold text-muted-foreground uppercase tracking-widest"><?php echo $square_banner_small_text;?></span>
                                                                <?php endif;?>
                                                                <?php if($square_banner_title):?>
                                                                <span class="text-foreground font-semibold"><?php echo $square_banner_title;?></span>
                                                                <?php endif;?>
                                                            </div>
                                                            <?php if($square_banner_text):?>
                                                            <p class="text-sm text-muted-foreground"><?php echo $square_banner_text?></p>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <?php if($square_banner_btn_link and $square_banner_btn_text):?>
                                                    <a href="<?php echo $square_banner_btn_link;?>"  class="text-sm font-semibold text-primary hover:text-accent transition-colors flex items-center gap-1 group">
                                                        <?php echo $square_banner_btn_text;?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-external-link w-3.5 h-3.5 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                                            <path d="M15 3h6v6"></path>
                                                            <path d="M10 14 21 3"></path>
                                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'gradient_banner_block') {
                                            $gradient_banner_badge_text = get_sub_field('gradient_banner_badge_text');
                                            $gradient_banner_title = get_sub_field('gradient_banner_title');
                                            $gradient_banner_text = get_sub_field('gradient_banner_text');
                                            $gradient_banner_btn_text = get_sub_field('gradient_banner_btn_text');
                                            $gradient_banner_btn_link = get_sub_field('gradient_banner_btn_link');
                                        ?>
                                        <div class="my-10 relative overflow-hidden rounded-3xl" style="opacity: 1; transform: none;">
                                        <div class="absolute inset-0 bg-gradient-to-r from-primary via-accent to-secondary opacity-90"></div>
                                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yIDItNCAyLTRzMiAyIDIgNC0yIDQtMiA0LTItMi0yLTR6Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-30"></div>
                                        <div class="absolute top-4 right-10 w-3 h-3 rounded-full bg-white/40" style="transform: translateX(-0.259906px) translateY(-0.519811px);"></div>
                                        <div class="absolute bottom-6 left-16 w-2 h-2 rounded-full bg-white/30" style="transform: translateX(-1.32961px) translateY(-2.65922px);"></div>
                                        <div class="absolute top-1/2 right-1/4 w-4 h-4 rounded-full bg-white/20" style="transform: translateY(13.5976px);"></div>
                                        <div class="relative z-10 p-8 md:p-10 text-center">
                                            <?php if($gradient_banner_badge_text):?>
                                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/20 backdrop-blur-sm text-white/90 text-xs font-medium mb-4"
                                                style="transform: none;"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-zap w-3.5 h-3.5">
                                                    <path
                                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                    </path>
                                                </svg>
                                                <?php echo $gradient_banner_badge_text;?>
                                            </div>
                                            <?php endif;?>
                                            <?php if($gradient_banner_title):?>
                                            <h3 class="text-2xl md:text-3xl font-bold text-white mb-2"><?php echo $gradient_banner_title;?></h3>
                                            <?php endif;?>
                                            <?php if($gradient_banner_text):?>
                                            <p class="text-white/80 mb-6 max-w-md mx-auto"><?php echo $gradient_banner_text;?></p>
                                            <?php endif;?>
                                            <?php if($gradient_banner_btn_text and $gradient_banner_btn_link):?>
                                            <a href="<?php echo $gradient_banner_btn_link;?>"  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-14 px-10 text-base bg-white text-primary hover:bg-white/90 shadow-xl shadow-black/20 group">Start
                                                <?php echo $gradient_banner_btn_text;?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <?php } elseif (get_row_layout() === 'square_white_banner_block') {
                                            $square_white_banner_bagde_text = get_sub_field('square_white_banner_bagde_text');
                                            $square_white_banner_title = get_sub_field('square_white_banner_title');
                                            $square_white_banner_text = get_sub_field('square_white_banner_text');
                                            $square_white_banner_btn_text = get_sub_field('square_white_banner_btn_text');
                                            $square_white_banner_btn_link = get_sub_field('square_white_banner_btn_link');
                                        ?>
                                        <div class="my-8 inline-flex w-full" style="opacity: 1; transform: none;">
                                            <div  class="w-full group relative bg-white/70 dark:bg-card/50 backdrop-blur-sm rounded-xl border border-border/50 p-4 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/10 transition-all duration-300 ">
                                                <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-accent/5 to-secondary/5 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                                <div class="wrap-mobile relative z-10 flex items-center justify-between gap-4">
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary/10 to-accent/10 border border-primary/20 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-sparkles w-5 h-5 text-primary">
                                                                <path
                                                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                                                </path>
                                                                <path d="M20 3v4"></path>
                                                                <path d="M22 5h-4"></path>
                                                                <path d="M4 17v2"></path>
                                                                <path d="M5 18H3"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-1 min-w-0">
                                                            <?php if($square_white_banner_bagde_text):?>
                                                            <div class="flex items-center gap-2">
                                                                <span class="text-[9px] font-bold text-muted-foreground/70 uppercase tracking-widest px-1.5 py-0.5 bg-muted/50 rounded"><?php echo $square_white_banner_bagde_text;?></span>
                                                            </div>
                                                            <?php endif;?>
                                                            <?php if($square_white_banner_title):?>
                                                            <p class="font-semibold text-foreground truncate"><?php echo $square_white_banner_title?></p>
                                                            <?php endif;?>
                                                            <?php if($square_white_banner_text):?>
                                                            <p class="text-xs text-muted-foreground truncate"><?php echo $square_white_banner_text;?></p>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                    <?php if($square_white_banner_btn_text and $square_white_banner_btn_link):?>
                                                    <a href="<?php echo $square_white_banner_btn_link;?>" class="shrink-0">
                                                        <span class="inline-flex items-center gap-1 text-sm font-semibold text-primary group-hover:text-accent transition-colors">
                                                            <?php echo $square_white_banner_btn_text;?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif (get_row_layout() === 'recommended_tools_block') {
                                        $recommended_tools_subtitle = get_sub_field('recommended_tools_subtitle');
                                        $recommended_tools_title = get_sub_field('recommended_tools_title');
                                        ?>
                                        <div class="my-10 relative" style="opacity: 1; transform: none;">
                                            <div class="flex items-center justify-between mb-6">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/25">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-crown w-5 h-5 text-white">
                                                            <path
                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                            </path>
                                                            <path d="M5 21h14"></path>
                                                        </svg></div>
                                                    <div>
                                                        <?php if($recommended_tools_subtitle):?>
                                                        <span class="text-xs font-medium text-primary uppercase tracking-wider"><?php echo $recommended_tools_subtitle;?></span>
                                                        <?php endif;?>
                                                        <?php if($recommended_tools_title):?>
                                                        <h4 class="font-bold text-foreground"><?php echo $recommended_tools_title;?></h4>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php if(have_rows('recommended_tool_item')):?>
                                            <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-thin scrollbar-thumb-primary/20 scrollbar-track-transparent -mx-2 px-2">
                                                <?php while(have_rows('recommended_tool_item')): the_row();
                                                    $recommended_tool_icon = get_sub_field('recommended_tool_icon');
                                                    $recommended_tool_name = get_sub_field('recommended_tool_name');
                                                    $recommended_tool_text = get_sub_field('recommended_tool_text');
                                                    $recommended_tool_link_text = get_sub_field('recommended_tool_link_text');
                                                    $recommended_tool_link = get_sub_field('recommended_tool_link');
                                                ?>
                                                <div class="group relative min-w-[280px] max-w-[280px] bg-white/80 dark:bg-card/50 backdrop-blur-xl rounded-2xl border border-border/50 p-5 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/10 transition-all duration-300 cursor-pointer"
                                                    style="opacity: 1; transform: none;">
                                                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-accent/5 to-secondary/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                                    <div class="relative z-10">
                                                        <?php if($recommended_tool_icon):?>
                                                        <div class="single__recomendet-icon w-12 h-12 rounded-xl bg-gradient-to-br from-primary/10 to-accent/10 border border-primary/20 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                                            <?php echo $recommended_tool_icon;?>
                                                        </div>
                                                        <?php endif;?>
                                                        <?php if($recommended_tool_name):?>
                                                        <h5 class="font-bold text-foreground mb-1"><?php echo $recommended_tool_name;?></h5>
                                                        <?php endif;?>
                                                        <?php if($recommended_tool_text):?>
                                                        <p class="text-sm text-muted-foreground mb-4 line-clamp-2"><?php echo $recommended_tool_text;?></p>
                                                        <?php endif;?>
                                                        <?php if($recommended_tool_link_text and $recommended_tool_link):?>
                                                        <a href="<?php echo $recommended_tool_link;?>" class="inline-flex items-center gap-1 text-sm font-semibold text-primary group-hover:text-accent transition-colors">
                                                            <?php echo $recommended_tool_link_text;?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </a>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                                <?php endwhile;?>
                                            </div>
                                            <?php endif;?>
                                        </div>

                                    <?php } elseif (get_row_layout() === 'fixed_carousel_block') {
                                        $fixed_carousel_title_icon = get_sub_field('fixed_carousel_title_icon');
                                        $fixed_carousel_title = get_sub_field('fixed_carousel_title');
                                        ?>
                                        <div class="my-10 relative overflow-hidden rounded-3xl p-[1px] bg-gradient-to-r from-primary via-accent to-secondary" style="opacity: 1; transform: none;">
                                            <div class="bg-white/95 dark:bg-card/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-primary/10 to-accent/10 rounded-full blur-3xl"></div>
                                                <div class="absolute bottom-0 left-0 w-48 h-48 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full blur-3xl"></div>
                                                <div class="relative z-10 flex items-center gap-3 mb-6">
                                                    <?php if($fixed_carousel_title_icon ):?>
                                                    <div class="single__icon single__icon-white flex items-center justify-center w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-accent">
                                                        <?php echo $fixed_carousel_title_icon;?>
                                                    </div>
                                                    <?php endif;?>
                                                    <?php if($fixed_carousel_title ):?>
                                                    <div>
                                                        <span class="text-xs font-bold text-muted-foreground uppercase tracking-widest"><?php echo $fixed_carousel_title;?></span>
                                                    </div>
                                                    <?php endif;?>
                                                </div>

                                                <?php if(have_rows('fixed_carousel_item')):?>
                                                <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                                    <?php while(have_rows('fixed_carousel_item')): the_row();
                                                        $fixed_carousel_item_icon = get_sub_field('fixed_carousel_item_icon');
                                                        $fixed_carousel_item_name = get_sub_field('fixed_carousel_item_name');
                                                        $fixed_carousel_item_text = get_sub_field('fixed_carousel_item_text');
                                                        $fixed_carousel_item_btn_text = get_sub_field('fixed_carousel_item_btn_text');
                                                        $fixed_carousel_item_btn_link = get_sub_field('fixed_carousel_item_btn_link');
                                                    ?>
                                                    <div class="group relative bg-muted/30 hover:bg-gradient-to-br hover:from-primary/10 hover:via-accent/5 hover:to-secondary/10 rounded-2xl p-5 border border-transparent hover:border-primary/20 transition-all duration-300 cursor-pointer" style="opacity: 1; transform: none;">
                                                        <div class=" flex items-start gap-4">
                                                            <?php if($fixed_carousel_item_icon):?>
                                                            <div class="single__icon single__icon-cyan w-11 h-11 rounded-xl bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                                                                <?php echo $fixed_carousel_item_icon;?>
                                                            </div>
                                                            <?php endif;?>
                                                            <div class="flex-1 min-w-0">
                                                                <?php if($fixed_carousel_item_name):?>
                                                                <h5 class="font-bold text-foreground mb-0.5"><?php echo $fixed_carousel_item_name;?></h5>
                                                                <?php endif;?>
                                                                <?php if($fixed_carousel_item_text):?>
                                                                <p class="text-xs text-muted-foreground mb-3 line-clamp-2"><?php echo $fixed_carousel_item_text;?></p>
                                                                <?php endif;?>
                                                                <?php if($fixed_carousel_item_btn_text and $fixed_carousel_item_btn_link):?>
                                                                <a href="<?php echo $fixed_carousel_item_btn_link;?>" class="inline-flex items-center gap-1 text-xs font-semibold text-primary group-hover:text-accent transition-colors">
                                                                    <?php echo $fixed_carousel_item_btn_text;?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-external-link w-3 h-3">
                                                                        <path d="M15 3h6v6"></path>
                                                                        <path d="M10 14 21 3"></path>
                                                                        <path
                                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                        </path>
                                                                    </svg>
                                                                </a>
                                                                <?php endif;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endwhile;?>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'running_block') {
                                        $running_block_btn_title = get_sub_field('running_block_btn_title');
                                        ?>
                                        <div class="my-10 relative overflow-hidden rounded-2xl bg-gradient-to-r from-primary via-accent to-secondary p-[1px]" style="opacity: 1;">
                                            <div class="bg-white/95 dark:bg-card/95 backdrop-blur-xl rounded-2xl py-4 overflow-hidden">
                                                <?php if($running_block_btn_title):?>
                                                <div class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white dark:bg-card px-3 py-1 rounded-full border border-border/50 shadow-sm">
                                                    <span class="text-[10px] font-bold text-muted-foreground uppercase tracking-widest"><?php echo $running_block_btn_title;?></span>
                                                </div>
                                                <?php endif;?>
                                                <div  class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-white dark:from-card to-transparent z-10"></div>
                                                <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-white dark:from-card to-transparent z-10"></div>
                                                <?php if(have_rows('running_block_item')): ?>
                                                <div class="flex animate-marquee">
                                                    <?php while(have_rows('running_block_item')): the_row();
                                                        $running_block_icon = get_sub_field('running_block_icon');
                                                        $running_block_title = get_sub_field('running_block_title');
                                                        $running_block_text = get_sub_field('running_block_text');
                                                        $running_block_link = get_sub_field('running_block_link');
                                                        $running_block_link_text = get_sub_field('running_block_link_text');
                                                    ?>
                                                    <div class="flex items-center gap-6 px-8 shrink-0">
                                                        <div class="flex items-center gap-3 group">
                                                            <?php if($running_block_icon):?>
                                                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary/10 to-accent/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                                <?php echo $running_block_icon;?>
                                                            </div>
                                                            <?php endif;?>
                                                            
                                                            <div class="flex items-center gap-2">
                                                                <?php if($running_block_title):?>
                                                                <span class="font-semibold text-foreground whitespace-nowrap"><?php echo $running_block_title; ?></span>
                                                                <?php endif;?>
                                                                <span class="text-muted-foreground">•</span>
                                                                <?php if($running_block_text):?>
                                                                <span class="text-sm text-muted-foreground whitespace-nowrap"><?php echo $running_block_text;?></span>
                                                                <?php endif;?>
                                                            </div>
                                                            <?php if($running_block_link and $running_block_link_text):?>
                                                            <a href="<?php echo $running_block_link;?>" class="text-xs font-semibold text-primary group-hover:text-accent transition-colors whitespace-nowrap"><?php echo $running_block_link_text;?></a>
                                                            <?php endif;?>
                                                        </div>
                                                        <div class="w-px h-6 bg-border/50"></div>
                                                    </div>
                                                    <?php endwhile;?>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'also_read_banner_block') {
                                        $also_read_banner_img = get_sub_field('also_read_banner_img');
                                        $also_read_banner_subtitle = get_sub_field('also_read_banner_subtitle');
                                        $also_read_banner_title = get_sub_field('also_read_banner_title');
                                        $also_read_banner_text = get_sub_field('also_read_banner_text');
                                        $also_read_banner_link = get_sub_field('also_read_banner_link');
                                        ?>
                                    <div class="my-8" style="opacity: 1; transform: none;">
                                        <a class="block group" href="<?php echo $also_read_banner_link ? $also_read_banner_link : '#';?>">
                                            <div class="flex items-stretch gap-0 bg-muted/30 hover:bg-gradient-to-r hover:from-primary/5 hover:via-accent/5 hover:to-secondary/5 rounded-xl overflow-hidden border border-border/50 hover:border-primary/30 transition-all duration-300">
                                                <div class="w-1 bg-gradient-to-b from-primary via-accent to-secondary shrink-0"> </div>
                                                <?php if($also_read_banner_img):?>
                                                <div class="w-20 md:w-28 shrink-0 overflow-hidden">
                                                    <img src="<?php echo $also_read_banner_img['url'];?>" alt="<?php echo $also_read_banner_img['alt'];?>"  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                </div>
                                                <?php endif;?>
                                                <div class="flex-1 p-4 flex items-center">
                                                    <div class="flex-1 min-w-0">
                                                        <?php if($also_read_banner_subtitle):?>
                                                        <div class="flex items-center gap-2 mb-1"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-sparkles w-3.5 h-3.5 text-primary">
                                                                <path
                                                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                                                </path>
                                                                <path d="M20 3v4"></path>
                                                                <path d="M22 5h-4"></path>
                                                                <path d="M4 17v2"></path>
                                                                <path d="M5 18H3"></path>
                                                            </svg>
                                                            <span class="text-[10px] font-bold text-muted-foreground uppercase tracking-widest"><?php echo $also_read_banner_subtitle?></span>
                                                        </div>
                                                        <?php endif;?>
                                                        <?php if($also_read_banner_title):?>
                                                        <h5 class="font-semibold text-foreground group-hover:text-primary transition-colors line-clamp-1 text-sm md:text-base">
                                                            <?php echo $also_read_banner_title;?>
                                                        </h5>
                                                        <?php endif;?>
                                                        <?php if($also_read_banner_text):?>
                                                        <p class="text-xs text-muted-foreground line-clamp-1 hidden md:block">
                                                            <?php echo $also_read_banner_text;?>
                                                        </p>
                                                        <?php endif;?>
                                                    </div>
                                                    <div class="shrink-0 ml-4">
                                                        <div
                                                            class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/25 group-hover:scale-110 transition-transform">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-5 h-5 text-white">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <?php } elseif (get_row_layout() === 'accordion_banner_block') {
                                        $accordion_banner_block_icon = get_sub_field('accordion_banner_block_icon');
                                        $accordion_banner_block_title = get_sub_field('accordion_banner_block_title');
                                        $accordion_banner_block_text = get_sub_field('accordion_banner_block_text');
                                        $accordion_banner_block_footer_text = get_sub_field('accordion_banner_block_footer_text');
                                        ?>
                                        <div class="my-10 relative overflow-hidden rounded-2xl border border-border/50 bg-white/80 dark:bg-card/50 backdrop-blur-xl shadow-xl" style="opacity: 1; transform: none;">
                                            <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 via-accent/20 to-secondary/20 rounded-2xl blur-xl opacity-50 -z-10"></div>
                                            <div class="px-6 py-5 border-b border-border/50 bg-gradient-to-r from-primary/10 via-accent/5 to-secondary/10">
                                                <div class="flex items-center gap-3">
                                                    <?php if($accordion_banner_block_icon):?>
                                                    <div class="single__faqs-icon w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/25">
                                                        <?php echo $accordion_banner_block_icon;?>
                                                    </div>
                                                    <?php endif;?>

                                                    <div>
                                                        <?php if($accordion_banner_block_title):?>
                                                        <h4 class="font-bold text-foreground"><?php echo $accordion_banner_block_title;?></h4>
                                                        <?php endif;?>
                                                        <?php if($accordion_banner_block_text):?>
                                                        <p class="text-sm text-muted-foreground"><?php echo $accordion_banner_block_text;?></p>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php if(have_rows('accordion_banner_block_item')):
                                                $accordionCount = 0;
                                                ?>
                                            <div class="single__faqs divide-y divide-border/30">
                                                <?php while(have_rows('accordion_banner_block_item')): the_row(); $accordionCount++;
                                                    $accordion_banner_block_item_name = get_sub_field('accordion_banner_block_item_name');
                                                    $accordion_banner_block_item_content = get_sub_field('accordion_banner_block_item_content');

                                                    if($accordion_banner_block_item_name and $accordion_banner_block_item_content):
                                                ?>
                                                <div class="single__faqs-item relative">
                                                    <button class="single__faqs-btn w-full px-6 py-4 flex items-center gap-4 text-left transition-all duration-300 hover:bg-gradient-to-r hover:from-primary/5 hover:via-transparent hover:to-transparent bg-gradient-to-r from-primary/5 via-transparent to-transparent">
                                                        <div class="single__faqs-num w-8 h-8 rounded-full flex items-center justify-center shrink-0 transition-all duration-300 bg-muted/50 text-muted-foreground <?php echo $accordionCount === 1 ? 'bg-gradient-to-br from-primary to-accent text-white shadow-lg shadow-primary/25' : ''; ?> ">
                                                            <span class="text-sm font-bold"><?php echo $accordionCount;?></span>
                                                        </div>
                                                        <span class="single__faqs-name flex-1 font-semibold transition-colors text-foreground"><?php echo $accordion_banner_block_item_name;?></span>
                                                        <div class="shrink-0 <?php  echo $accordionCount === 1 ? 'text-primary' : 'text-muted-foreground'; ?>  single__faqs-arrow" style="<?php echo $accordionCount === 1 ? 'transform: rotate(180deg)': 'transform: none' ; ?>">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down w-5 h-5">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                    <div class="overflow-hidden single__faqs-content <?php  echo $accordionCount === 1 ? 'single__faqs-content-show' : '';?>">
                                                        <div class="px-6 pb-5 pl-[4.5rem]">
                                                            <div class="relative">
                                                                <div class="absolute -left-[1.75rem] top-0 bottom-0 w-px bg-gradient-to-b from-primary/30 to-transparent"> </div>
                                                                <p class="text-muted-foreground leading-relaxed">
                                                                    <?php echo $accordion_banner_block_item_content;?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; endwhile;?>

                                            </div>
                                            <div class="px-6 py-4 border-t border-border/30 bg-muted/20">
                                                <div class="flex items-center gap-2 text-sm text-muted-foreground">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-circle-check w-4 h-4 text-primary">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="m9 12 2 2 4-4"></path>
                                                    </svg>
                                                    <?php if($accordion_banner_block_footer_text):?>
                                                    <span><?php echo $accordionCount;?> <?php echo $accordion_banner_block_footer_text;?></span>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'highlight_block') {
                                        $highlight_block_icon = get_sub_field('highlight_block_icon');
                                        $highlight_block_title = get_sub_field('highlight_block_title');
                                        $highlight_block_text = get_sub_field('highlight_block_text');
                                        ?>
                                        <div class="my-10 relative" style="opacity: 1; transform: none;">
                                            <div class="absolute -top-5 left-6 z-10" style="transform: translateY(-4.42161px);">
                                                <?php if($highlight_block_icon):?>
                                                <div class="single__icon single__icon-white w-12 h-12 rounded-2xl bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center shadow-xl shadow-primary/30 rotate-12">
                                                    <?php echo $highlight_block_icon;?>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                            <div class="pt-4 pl-1">
                                                <div
                                                    class="relative bg-gradient-to-br from-primary/[0.08] via-accent/[0.05] to-secondary/[0.08] rounded-2xl border border-primary/20 overflow-hidden">
                                                    <div class="absolute inset-0 opacity-30">
                                                        <div  class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-primary/20 to-transparent rounded-full blur-2xl"></div>
                                                        <div class="absolute bottom-0 left-1/3 w-24 h-24 bg-gradient-to-tr from-accent/20 to-transparent rounded-full blur-2xl"></div>
                                                    </div>
                                                    <div class="relative p-6 pt-5">
                                                        <?php if($highlight_block_title):?>
                                                        <span class="inline-block text-xs font-bold uppercase tracking-widest text-primary mb-2"><?php echo $highlight_block_title;?></span>
                                                        <?php endif;?>
                                                        <?php if($highlight_block_text):?>
                                                        <p class="text-foreground/85 leading-relaxed">
                                                            <?php echo $highlight_block_text;?>
                                                        </p>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } elseif (get_row_layout() === 'highlight_block_2') {
                                        $highlight_block_icon_2 = get_sub_field('highlight_block_icon');
                                        $highlight_block_title_2 = get_sub_field('highlight_block_title');
                                        $highlight_block_text_2 = get_sub_field('highlight_block_text');
                                        ?>
                                        <div class="my-10 relative group" style="opacity: 1; transform: none;">
                                            <div class="absolute -inset-[2px] bg-gradient-to-r from-primary via-accent to-secondary rounded-2xl opacity-60 blur-md group-hover:opacity-80 transition-opacity duration-500"></div>
                                            <div class="absolute -inset-[1px] bg-gradient-to-r from-primary via-accent to-secondary rounded-2xl opacity-80"></div>
                                            <div class="relative bg-background rounded-2xl p-6 overflow-hidden">
                                                <?php if($highlight_block_icon_2):?>
                                                <div class="single__icon single__icon-cayen absolute top-4 right-4 opacity-10">
                                                    <?php echo $highlight_block_icon_2;?>
                                                </div>
                                                <?php endif;?>
                                                <div class="relative z-10 flex items-start gap-4">
                                                    <div
                                                        class="shrink-0 w-10 h-10 rounded-xl bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-zap w-5 h-5 text-primary">
                                                            <path
                                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                            </path>
                                                        </svg></div>
                                                    <div class="flex-1">
                                                        <?php if($highlight_block_title_2):?>
                                                        <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest bg-gradient-to-r from-primary via-accent to-secondary bg-clip-text text-transparent mb-2">
                                                            <span class="w-8 h-px bg-gradient-to-r from-primary to-accent">
                                                            </span><?php echo $highlight_block_title_2;?>
                                                        </span>
                                                        <?php endif;?>
                                                        <?php if($highlight_block_text_2):?>
                                                        <p class="text-foreground/85 leading-relaxed"><?php echo $highlight_block_text_2;?></p>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'pros_cons_block') {
                                        $pros_and_cons_block_title = get_sub_field('pros_and_cons_block_title');
                                        ?>
                                        <div class="my-10" style="opacity: 1; transform: none;">
                                            <?php if($pros_and_cons_block_title):?>
                                            <h4 class="font-bold text-foreground mb-4 flex items-center gap-2">
                                                <span class="w-1.5 h-6 rounded-full bg-gradient-to-b from-primary to-accent"></span>
                                                <?php echo $pros_and_cons_block_title;?>
                                            </h4>
                                            <?php endif;?>
                                            <?php if(have_rows('pros_and_cons_box_item')): $consPRosCount = 0;?>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <?php while(have_rows('pros_and_cons_box_item')): the_row(); $consPRosCount ++;
                                                    $pros_and_cons_box_title = get_sub_field('pros_and_cons_box_title');
                                                    ?>
                                                <div class="relative overflow-hidden rounded-2xl" style="opacity: 1; transform: none;">
                                                    <div  class="<?php echo $consPRosCount === 1 ? 'absolute inset-0 bg-gradient-to-br from-primary/20 to-accent/10 rounded-2xl' : 'absolute inset-0 bg-gradient-to-br from-secondary/20 to-accent/10 rounded-2xl'?>"></div>
                                                    <div class="<?php echo $consPRosCount === 1 ? 'relative bg-white/80 dark:bg-card/80 backdrop-blur-xl rounded-2xl border border-primary/20 overflow-hidden': 'relative bg-white/80 dark:bg-card/80 backdrop-blur-xl rounded-2xl border border-secondary/20 overflow-hidden';?> ">
                                                        <?php if($pros_and_cons_box_title):?>
                                                        <div class="<?php echo $consPRosCount === 1 ? 'px-5 py-4 bg-gradient-to-r from-primary/15 to-accent/10 border-b border-primary/10': 'px-5 py-4 bg-gradient-to-r from-secondary/15 to-accent/10 border-b border-secondary/10';?>">
                                                            <div class="flex items-center gap-3">
                                                                
                                                                <?php echo $consPRosCount === 1 ?
                                                                '
                                                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg shadow-primary/25">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-thumbs-up w-4 h-4 text-white">
                                                                        <path d="M7 10v12"></path>
                                                                        <path
                                                                            d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                '
                                                                : 
                                                                '
                                                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-secondary to-accent flex items-center justify-center shadow-lg shadow-secondary/25">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-thumbs-down w-4 h-4 text-white">
                                                                        <path d="M17 14V2"></path>
                                                                        <path
                                                                            d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22a3.13 3.13 0 0 1-3-3.88Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                '
                                                                ;?>
                                                                <span class="font-bold text-foreground"><?php echo $pros_and_cons_box_title;?></span>
                                                            </div>
                                                        </div>
                                                        <?php endif;?>
                                                        <?php if(have_rows('pros_and_cons_box_list_item')):?>
                                                        <div class="p-5 space-y-3">

                                                            <?php while(have_rows('pros_and_cons_box_list_item')): the_row();
                                                                $pros_and_cons_box_list_text = get_sub_field('pros_and_cons_box_list_text');
                                                            ?>
                                                            <div class="flex items-start gap-3" style="opacity: 1; transform: none;">
                                                                
                                                                <?php echo $consPRosCount === 1 ?
                                                                '
                                                                <div class="shrink-0 w-5 h-5 rounded-full bg-primary/15 flex items-center justify-center mt-0.5">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="3" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-check w-3 h-3 text-primary">
                                                                        <path d="M20 6 9 17l-5-5"></path>
                                                                    </svg>
                                                                </div>
                                                                '
                                                                :
                                                                '
                                                                <div class="shrink-0 w-5 h-5 rounded-full bg-secondary/15 flex items-center justify-center mt-0.5">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="3" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-x w-3 h-3 text-secondary">
                                                                        <path d="M18 6 6 18"></path>
                                                                        <path d="m6 6 12 12"></path>
                                                                    </svg>
                                                                </div>
                                                                ';?>
                                                                <?php if($pros_and_cons_box_list_text):?>
                                                                <span class="text-sm text-foreground/80"><?php echo $pros_and_cons_box_list_text;?></span>
                                                                <?php endif;?>
                                                            </div>
                                                            <?php endwhile;?>
                                                        </div>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                                <?php endwhile;?>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'youtube_link_block') {
                                        $youtube_link_block_poster = get_sub_field('youtube_link_block_poster');
                                        $youtube_video_id = get_sub_field('youtube_video_id');
                                        $youtube_video_title = get_sub_field('youtube_video_title');
                                        $youtube_block_btn_text = get_sub_field('youtube_block_btn_text');
                                        ?>
                                        <?php if($youtube_video_id):?>
                                        <div class="video-wrapper my-10 relative group" data-video="<?php echo $youtube_video_id;?>" style="opacity: 1; transform: none;">
                                            <div class="absolute -inset-2 bg-gradient-to-r from-primary/30 via-accent/30 to-secondary/30 rounded-3xl blur-xl opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
                                                <div class="relative overflow-hidden rounded-2xl border border-border/50 bg-black shadow-2xl">
                                                    <div class="block relative aspect-video overflow-hidden " >

                                                        <!-- Thumbnail -->
                                                        <div class="video-thumbnail absolute inset-0 cursor-pointer">
                                                            <?php if($youtube_link_block_poster):?>
                                                            <img  src="<?php echo $youtube_link_block_poster['url']?>" alt="<?php echo $youtube_link_block_poster['alt']?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                                            <?php endif;?>
                                                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                                                            <!-- Play Button -->
                                                            <div class="absolute inset-0 flex items-center justify-center">
                                                            <div class="relative w-20 h-20 rounded-full bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center shadow-2xl shadow-primary/40">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-8 h-8 text-white ml-1">
                                                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <!-- Player -->
                                                    <div class="video-player absolute inset-0 hidden"></div>
                                                </div>
                                                <div class="px-5 py-4 bg-white dark:bg-card border-t border-border/50">
                                                    <div class="flex items-center justify-between gap-4">
                                                        <?php if($youtube_video_title):?>
                                                        <div class="flex-1 min-w-0">
                                                            <h4 class="font-semibold text-foreground truncate"><?php echo $youtube_video_title;?></h4>
                                                        </div>
                                                        <?php endif;?>
                                                        <?php if($youtube_block_btn_text):?>
                                                        <button class="myPlayBtn shrink-0 px-5 py-2.5 rounded-xl bg-gradient-to-r from-primary via-accent to-secondary text-white text-sm font-semibold hover:shadow-lg hover:shadow-primary/30 hover:scale-105 transition-all duration-300 flex items-center gap-2"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="white" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-play w-4 h-4">
                                                                <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                                            </svg>
                                                            <?php echo $youtube_block_btn_text;?>
                                                        </button>
                                                        <?php endif;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif;?>

                                    <?php } elseif (get_row_layout() === 'download_block') {
                                        $download_file = get_sub_field('download_file');
                                        $download_file_format = get_sub_field('download_file_format');
                                        $download_file_block_title = get_sub_field('download_file_block_title');
                                        $download_file_block_text = get_sub_field('download_file_block_text');
                                        $download_file_block_btn_text = get_sub_field('download_file_block_btn_text');
                                        ?>
                                        <?php if($download_file):?>
                                        <div class="my-10 relative group" style="opacity: 1; transform: none;">
                                            <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 via-accent/20 to-secondary/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
                                            <div class="relative bg-white/90 dark:bg-card/90 backdrop-blur-xl rounded-2xl border border-border/50 overflow-hidden shadow-lg">
                                                <div class="flex flex-col sm:flex-row items-stretch">
                                                    <div class="sm:w-32 bg-gradient-to-br from-primary via-accent to-secondary p-6 flex items-center justify-center">
                                                        <div class="relative" style="transform: translateY(-4.98957px);">
                                                            <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-file-text w-12 h-12 text-white">
                                                                <path
                                                                    d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                                </path>
                                                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                                <path d="M10 9H8"></path>
                                                                <path d="M16 13H8"></path>
                                                                <path d="M16 17H8"></path>
                                                            </svg>
                                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 rounded-full bg-white flex items-center justify-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-download w-3 h-3 text-primary">
                                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                                    <line x1="12" x2="12" y1="15" y2="3"></line>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex-1 p-5 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                                                        <div class="flex-1">
                                                            <div class="flex items-center gap-2 mb-1">
                                                                <?php if($download_file_format):?>
                                                                <span class="text-[10px] font-bold uppercase tracking-widest text-primary">PDF</span>
                                                                <?php endif;?>
                                                                <span class="text-muted-foreground">•</span>
                                                                <span class="text-xs text-muted-foreground"><?php  echo round($download_file['filesize'] / 1024 / 1024, 2) . ' MB';?></span>
                                                            </div>
                                                            <?php if($download_file_block_title):?>
                                                            <h4 class="font-bold text-foreground mb-1"><?php echo $download_file_block_title;?> </h4>
                                                            <?php endif;?>
                                                            <?php if($download_file_block_text):?>
                                                            <p class="text-sm text-muted-foreground"><?php echo $download_file_block_text;?></p>
                                                            <?php endif;?>
                                                        </div>
                                                        <a href="<?php echo $download_file['url'];?>" download class="shrink-0 inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-gradient-to-r from-primary via-accent to-secondary text-white font-semibold hover:shadow-lg hover:shadow-primary/30 hover:scale-105 transition-all duration-300"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-download w-4 h-4">
                                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                                <polyline points="7 10 12 15 17 10"></polyline>
                                                                <line x1="12" x2="12" y1="15" y2="3"></line>
                                                            </svg>
                                                            <?php echo $download_file_block_btn_text ? $download_file_block_btn_text : 'Download Free';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if(have_rows('download_file_footer_list')):?>
                                                <div class="px-6 py-3 bg-muted/30 border-t border-border/30 flex flex-wrap items-center gap-4 text-xs text-muted-foreground">
                                                    <?php while(have_rows('download_file_footer_list')): the_row();
                                                        $download_file_footer_list_text= get_sub_field('download_file_footer_list_text');
                                                        if($download_file_footer_list_text):
                                                    ?>
                                                    <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-circle-check-big w-3.5 h-3.5 text-primary">
                                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                            <path d="m9 11 3 3L22 4"></path>
                                                        </svg>
                                                        <?php echo $download_file_footer_list_text;?>
                                                    </span>
                                                    <?php endif; endwhile;?>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <?php endif;?>
                                    <?php } elseif (get_row_layout() === 'before_and_after_block') {
                                        $before_and_after_block_title = get_sub_field('before_and_after_block_title');
                                        ?>
                                        <div class="my-10" style="opacity: 1; transform: none;">
                                            <?php if($before_and_after_block_title):?>
                                            <h4 class="font-bold text-foreground mb-4 flex items-center gap-2">
                                                <span  class="w-1.5 h-6 rounded-full bg-gradient-to-b from-primary to-accent"></span>
                                                <?php echo $before_and_after_block_title;?>
                                            </h4>
                                            <?php endif;?>
                                            <div class="relative">
                                                <div class="absolute -inset-1 bg-gradient-to-r from-primary/20 via-accent/20 to-secondary/20 rounded-2xl blur-xl opacity-50"></div>
                                                <div class="relative bg-white/90 dark:bg-card/90 backdrop-blur-xl rounded-2xl border border-border/50 overflow-hidden shadow-xl p-5">
                                                    <div class="grid grid-cols-1 md:grid-cols-[1fr,auto,1fr] gap-4 items-center">
                                                        <?php if(have_rows('before_block')):
                                                            while(have_rows('before_block')): the_row();
                                                            $before_block_image = get_sub_field('before_block_image');
                                                            $before_block_text = get_sub_field('before_block_text');
                                                            ?>
                                                        <div class="relative" style="opacity: 1; transform: none;">
                                                            <div class="absolute top-3 left-3 z-10 px-3 py-1 rounded-lg bg-muted/80 backdrop-blur-sm text-xs font-bold text-muted-foreground uppercase tracking-wider">
                                                                Before
                                                            </div>
                                                            <?php if($before_block_image):?>
                                                            <div class="overflow-hidden rounded-xl border border-border/50">
                                                                <img src="<?php echo $before_block_image['url'];?>" alt="<?php echo $before_block_image['alt'];?>" class="w-full aspect-video object-cover">
                                                            </div>
                                                            <?php endif;?>
                                                            <?php if($before_block_text):?>
                                                            <p class="mt-2 text-sm text-muted-foreground text-center">
                                                                <?php echo $before_block_text;?>
                                                            </p>
                                                            <?php endif;?>
                                                        </div>
                                                        <?php endwhile; endif;?>
                                                        <div class="hidden md:flex items-center justify-center">
                                                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center shadow-lg shadow-primary/25"
                                                                style="transform: translateX(4.13049px);">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-6 h-6 text-white">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex md:hidden items-center justify-center py-2">
                                                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center shadow-lg shadow-primary/25 rotate-90"
                                                                style="transform: translateY(4.13049px);">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-5 h-5 text-white">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <?php if(have_rows('after_block')):
                                                            while(have_rows('after_block')): the_row();
                                                            $after_block_image = get_sub_field('after_block_image');
                                                            $after_block_text = get_sub_field('after_block_text');
                                                            ?>
                                                        <div class="relative" style="opacity: 1; transform: none;">
                                                            <div class="absolute top-3 left-3 z-10 px-3 py-1 rounded-lg bg-gradient-to-r from-primary to-accent text-xs font-bold text-white uppercase tracking-wider">
                                                                After
                                                            </div>
                                                            <?php if($after_block_image):?>
                                                            <div class="overflow-hidden rounded-xl border-2 border-primary/30 shadow-lg shadow-primary/10">
                                                                <img src="<?php echo $after_block_image['url']?>" alt="<?php echo $after_block_image['alt']?>" class="w-full aspect-video object-cover">
                                                            </div>
                                                            <?php endif;?>
                                                            <?php if($after_block_text):?>
                                                            <p class="mt-2 text-sm text-muted-foreground text-center">
                                                                <?php echo $after_block_text;?>
                                                            </p>
                                                            <?php endif;?>
                                                        </div>
                                                        <?php endwhile; endif;?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'subscribe_block') {
                                        $subscribe_block_title = get_sub_field('subscribe_block_title');
                                        $subscribe_block_text = get_sub_field('subscribe_block_text');
                                        ?>
                                        <div class="my-10 relative overflow-hidden" style="opacity: 1; transform: none;">
                                            <div class="absolute inset-0 bg-gradient-to-r from-primary via-accent to-secondary rounded-2xl"></div>
                                            <div class="relative m-[2px] bg-white dark:bg-card rounded-2xl overflow-hidden">
                                                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-primary/10 to-transparent rounded-full blur-3xl"></div>
                                                <div class="absolute bottom-0 left-0 w-48 h-48 bg-gradient-to-tr from-secondary/10 to-transparent rounded-full blur-3xl"></div>
                                                <div class="relative z-10 p-6 md:p-8">
                                                    <div class="flex flex-col md:flex-row items-center gap-6">
                                                        <div class="shrink-0">
                                                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center shadow-xl shadow-primary/25"
                                                                style="transform: rotate(4.21738deg);">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-mail w-8 h-8 text-white">
                                                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1 text-center md:text-left">
                                                            <?php if($subscribe_block_title):?>
                                                            <h4 class="text-lg font-bold text-foreground mb-1 flex items-center justify-center md:justify-start gap-2">
                                                                <?php echo $subscribe_block_title;?>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-sparkles w-4 h-4 text-primary">
                                                                    <path
                                                                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                                                    </path>
                                                                    <path d="M20 3v4"></path>
                                                                    <path d="M22 5h-4"></path>
                                                                    <path d="M4 17v2"></path>
                                                                    <path d="M5 18H3"></path>
                                                                </svg>
                                                            </h4>
                                                            <?php endif;?>
                                                            <?php if($subscribe_block_text):?>
                                                            <p class="text-sm text-muted-foreground mb-3">
                                                                <?php echo $subscribe_block_text;?>
                                                            </p>
                                                            <?php endif;?>
                                                            <?php if(have_rows('subscribe_block_list')):?>
                                                            <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 mb-4">
                                                                <?php while(have_rows('subscribe_block_list')): the_row();
                                                                    $subscribe_block_list_item_text = get_sub_field('subscribe_block_list_item_text');
                                                                    if($subscribe_block_list_item_text):
                                                                ?>
                                                                <span class="flex items-center gap-1.5 text-xs text-muted-foreground"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check-big w-3.5 h-3.5 text-primary">
                                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                                        <path d="m9 11 3 3L22 4"></path>
                                                                    </svg>
                                                                    <?php echo $subscribe_block_list_item_text;?>
                                                                </span>
                                                                <?php endif;?>
                                                                <?php endwhile;?>
                                                            </div>
                                                            <?php endif;?>
                                                            <?php echo do_shortcode('[contact-form-7 id="c678035" title="Single sobscribe form"]');?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'key_takeaways_block') {
                                        $key_takeaways_block_title = get_sub_field('key_takeaways_block_title');
                                        ?>
                                        <div class="my-8 rounded-2xl bg-gradient-to-br from-primary/5 to-accent/5 p-6 md:p-8 border-l-4 border-primary" style="opacity: 1; transform: none;">
                                            <?php if($key_takeaways_block_title):?>
                                            <div class="flex items-center gap-3 mb-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-5 h-5 text-primary">
                                                    <path
                                                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                                    </path>
                                                    <path d="M20 3v4"></path>
                                                    <path d="M22 5h-4"></path>
                                                    <path d="M4 17v2"></path>
                                                    <path d="M5 18H3"></path>
                                                </svg>
                                                <h3 class="text-xl font-bold text-foreground"><?php echo $key_takeaways_block_title;?></h3>
                                            </div>
                                            <?php endif;?>
                                            <?php if(have_rows('key_takeaways_lits')):?>
                                            <ul class="space-y-3">
                                                <?php while(have_rows('key_takeaways_lits')): the_row();
                                                    $key_takeaways_lits_text = get_sub_field('key_takeaways_lits_text');
                                                    if($key_takeaways_lits_text):
                                                ?>
                                                <li class="flex items-start gap-3" style="opacity: 1; transform: none;">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-circle-check w-5 h-5 text-primary shrink-0 mt-0.5">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="m9 12 2 2 4-4"></path>
                                                    </svg>
                                                    <span class="text-foreground/80"><?php echo $key_takeaways_lits_text;?></span>
                                                </li>
                                                <?php endif; endwhile; ?>
                                            </ul>
                                            <?php endif;?>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'statistics_block') {
                                        $statistics_block_title = get_sub_field('statistics_block_title');
                                        $statistics_block_text = get_sub_field('statistics_block_text');
                                        $statistics_block_sub_text = get_sub_field('statistics_block_sub_text');
                                        ?>
                                        <div class="my-8 relative overflow-hidden rounded-2xl bg-gradient-to-br from-primary via-accent to-secondary p-8 md:p-12 text-center" style="opacity: 1; transform: none;">
                                            <div class="absolute inset-0 opacity-20">
                                                <div class="absolute top-4 left-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-sparkles w-8 h-8 text-white">
                                                        <path
                                                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                                        </path>
                                                        <path d="M20 3v4"></path>
                                                        <path d="M22 5h-4"></path>
                                                        <path d="M4 17v2"></path>
                                                        <path d="M5 18H3"></path>
                                                    </svg>
                                                </div>
                                                <div class="absolute bottom-4 right-4"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-trending-up w-12 h-12 text-white">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <?php if($statistics_block_title):?>
                                                <p class="text-5xl md:text-7xl font-black text-white" style="transform: none;">
                                                    <span class="tabular-nums"><?php echo $statistics_block_title;?></span>
                                                </p>
                                                <?php endif;?>
                                                <?php if($statistics_block_text):?>
                                                <p class="text-lg md:text-xl text-white/90 mt-3 font-medium"><?php echo $statistics_block_text?></p>
                                                <?php endif;?>
                                                <?php if($statistics_block_sub_text):?>
                                                <p class="text-sm text-white/60 mt-4"><?php echo $statistics_block_sub_text?></p>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'copy_paste_block') {
                                        $copy_paste_block_title = get_sub_field('copy_paste_block_title');
                                        $copy_paste_block_subtitle = get_sub_field('copy_paste_block_subtitle');
                                        $copy_paste_block_text = get_sub_field('copy_paste_block_text');
                                        ?>
                                        <div class="my-8 rounded-2xl overflow-hidden border border-primary/20 bg-gradient-to-br from-primary/5 via-accent/5 to-secondary/5" tyle="opacity: 1; transform: none;">
                                            <div class="flex items-center justify-between px-5 py-3 bg-gradient-to-r from-primary via-accent to-secondary">
                                                <?php if($copy_paste_block_title):?>
                                                <div class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-sparkles w-4 h-4 text-white">
                                                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"> </path>
                                                        <path d="M20 3v4"></path>
                                                        <path d="M22 5h-4"></path>
                                                        <path d="M4 17v2"></path>
                                                        <path d="M5 18H3"></path>
                                                    </svg>
                                                    <span class="text-sm font-medium text-white"><?php echo $copy_paste_block_title;?></span>
                                                </div>
                                                <?php endif;?>
                                                <button class="copyInerText flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/20 hover:bg-white/30 transition-colors">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-copy w-4 h-4 text-white">
                                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                                    </svg>
                                                    <span class="text-xs font-medium text-white">Copy</span>
                                                </button>
                                            </div>
                                            <?php if($copy_paste_block_subtitle):?>
                                            <p class="px-5 py-3 text-sm text-muted-foreground border-b border-border/50"><?php echo $copy_paste_block_subtitle?></p>
                                            <?php endif;?>
                                            <?php if($copy_paste_block_text):?>
                                            <div class="p-5">
                                                <pre class="copiedInnerText whitespace-pre-wrap text-foreground/90 text-sm leading-relaxed font-mono"><?php echo $copy_paste_block_text;?></pre>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                    <?php } elseif (get_row_layout() === 'software_review_block') {
                                        $software_review_block_title = get_sub_field('software_review_block_title');
                                        ?>

                                        <div class="my-8 rounded-2xl overflow-hidden border border-border bg-white dark:bg-card shadow-sm" style="opacity: 1; transform: none;">
                                            <?php if($software_review_block_title):?>
                                            <div class="px-6 py-4 bg-gradient-to-r from-primary/10 via-accent/10 to-secondary/10 border-b border-border">
                                                <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-zap w-5 h-5 text-primary">
                                                        <path
                                                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                        </path>
                                                    </svg>
                                                    <h3 class="text-lg font-bold text-foreground"><?php echo $software_review_block_title;?></h3>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                            <div class="overflow-x-auto">
                                                <table class="w-full">
                                                    <?php if(have_rows('software_review_block_headings')): $softHEadCount = 0;?>
                                                    <thead>
                                                        <tr class="bg-muted/50">
                                                            <?php while(have_rows('software_review_block_headings')): the_row(); $softHEadCount++;
                                                                $table_heading_text = get_sub_field('table_heading_text');
                                                                if($table_heading_text):
                                                                ?>
                                                            <?php if($softHEadCount === 2):?>
                                                            <th class="py-4 px-6 text-sm font-semibold text-center bg-gradient-to-b from-primary/20 to-primary/10 text-primary">
                                                                <div class="flex items-center justify-center gap-1"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" class="lucide lucide-crown w-4 h-4">
                                                                        <path
                                                                            d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                        </path>
                                                                        <path d="M5 21h14"></path>
                                                                    </svg>
                                                                    <?php echo $table_heading_text;?>
                                                                </div>
                                                            </th>
                                                            <?php else : ?>
                                                            <th class="py-4 px-6 text-sm font-semibold text-left text-foreground text-foreground/70">
                                                                <div class="flex items-center justify-center gap-1"><?php echo $table_heading_text;?></div>
                                                            </th>
                                                            <?php endif;?>

                                                            <?php endif; endwhile;?>
                                                        </tr>
                                                    </thead>
                                                    <?php endif;?>

                                                    <?php if(have_rows('software_review_row')):?>
                                                    <tbody>
                                                        <?php while(have_rows('software_review_row')): the_row();?>
                                                        <tr class="border-b border-border/50 last:border-0 hover:bg-muted/30 transition-colors" style="opacity: 1;">
                                                            
                                                            <?php if(have_rows('software_review_row_item')):?>
                                                                <?php while(have_rows('software_review_row_item')): the_row();
                                                                    $software_review_row_item_text = get_sub_field('software_review_row_item_text');
                                                                    $checkmark = get_sub_field('checkmark');
                                                                ?>

                                                                <?php if(empty($checkmark)  and empty($checkmark)):?>
                                                                    <td class="py-4 px-6 text-sm text-foreground font-medium">
                                                                        <?php echo $software_review_row_item_text ? $software_review_row_item_text : '';?> 
                                                                    </td>
                                                                <?php else:?>
                                                                    <?php if($checkmark == "done"):?>
                                                                    <td>
                                                                        <div class="flex justify-center">
                                                                            <div class="p-1 rounded-full bg-green-100 dark:bg-green-900/30">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                                    class="lucide lucide-check w-4 h-4 text-green-600 dark:text-green-400">
                                                                                    <path d="M20 6 9 17l-5-5"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <?php elseif($checkmark == "uncheck"):?>
                                                                    <td>
                                                                        <div class="flex justify-center">
                                                                            <div class="p-1 rounded-full bg-red-100 dark:bg-red-900/30"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                                    class="lucide lucide-x w-4 h-4 text-red-500 dark:text-red-400">
                                                                                    <path d="M18 6 6 18"></path>
                                                                                    <path d="m6 6 12 12"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <?php endif;?>
                                                                <?php endif;?>
                                                                <?php endwhile;?>
                                                            <?php endif;?>

                                                        </tr>
                                                        <?php endwhile;?>
                                                        
                                                    </tbody>
                                                    <?php endif;?>
                                                </table>
                                            </div>
                                        </div>

                                    <?php } elseif (get_row_layout() === 'software_review_2_block') {
                                        $software_review_2_block_title = get_sub_field('software_review_2_block_title');
                                        ?>
                                        <div class="my-8" style="opacity: 1; transform: none;">
                                            <?php if($software_review_2_block_title):?>
                                            <h3 class="text-xl font-bold text-foreground mb-6"><?php echo $software_review_2_block_title;?></h3>
                                            <?php endif;?>
                                            <?php if(have_rows('software_review_2_block_item')): $softwareReviewCount = 0;?>
                                            <div class="grid md:grid-cols-3 gap-4">
                                                <?php while(have_rows('software_review_2_block_item')): the_row(); $softwareReviewCount++;
                                                    $software_review_2_block_item_name = get_sub_field('software_review_2_block_item_name');
                                                    $software_review_2_block_item_left = get_sub_field('software_review_2_block_item_left');
                                                    $software_review_2_block_item_right = get_sub_field('software_review_2_block_item_right');
                                                ?>


                                                <?php if($softwareReviewCount === 2):?>
                                                <div class="relative rounded-2xl border overflow-hidden border-primary shadow-lg shadow-primary/10" style="opacity: 1; transform: none;">
                                                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary via-accent to-secondary"> </div>
                                                    <div class="p-5 text-center bg-gradient-to-b from-primary/10 to-transparent">
                                                        <div class="flex justify-center mb-2">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-crown w-5 h-5 text-primary">
                                                                <path
                                                                    d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                </path>
                                                                <path d="M5 21h14"></path>
                                                            </svg>
                                                        </div>
                                                        <h4 class="font-bold text-foreground">Pro</h4>
                                                    </div>
                                                    <div class="p-4 space-y-4 bg-white dark:bg-card">
                                                        <div class="flex items-center justify-between">
                                                            <span class="text-sm text-muted-foreground">Videos per month</span>
                                                            <span class="text-sm text-foreground/80">Unlimited</span>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                            <span class="text-sm text-muted-foreground">AI Script Writing</span>
                                                            <div class="flex justify-center">
                                                                <div class="p-1 rounded-full bg-green-100 dark:bg-green-900/30">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-check w-4 h-4 text-green-600 dark:text-green-400">
                                                                        <path d="M20 6 9 17l-5-5"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                            <span class="text-sm text-muted-foreground">Premium Voices</span>
                                                            <div class="flex justify-center">
                                                                <div class="p-1 rounded-full bg-green-100 dark:bg-green-900/30"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-check w-4 h-4 text-green-600 dark:text-green-400">
                                                                        <path d="M20 6 9 17l-5-5"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                            <span class="text-sm text-muted-foreground">Priority Support</span>
                                                            <div class="flex justify-center">
                                                                <div class="p-1 rounded-full bg-red-100 dark:bg-red-900/30"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-x w-4 h-4 text-red-500 dark:text-red-400">
                                                                        <path d="M18 6 6 18"></path>
                                                                        <path d="m6 6 12 12"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center justify-between">
                                                            <span class="text-sm text-muted-foreground">Custom Branding</span>
                                                            <div class="flex justify-center">
                                                                <div class="p-1 rounded-full bg-green-100 dark:bg-green-900/30">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-check w-4 h-4 text-green-600 dark:text-green-400">
                                                                        <path d="M20 6 9 17l-5-5"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php else:?>
                                                <div class="relative rounded-2xl border overflow-hidden border-border" style="opacity: 1; transform: none;">
                                                    <?php if($software_review_2_block_item_name):?>
                                                        <div class="p-5 text-center bg-muted/30">
                                                            <h4 class="font-bold text-foreground"><?php echo $software_review_2_block_item_name;?></h4>
                                                        </div>
                                                    <?php endif;?>
                                                    <div class="p-4 space-y-4 bg-white dark:bg-card">
                                                        <?php if($software_review_2_block_item_left or $software_review_2_block_item_right):?>
                                                        <div class="flex items-center justify-between">
                                                            <?php if($software_review_2_block_item_left):?>
                                                            <span class="text-sm text-muted-foreground"><?php echo $software_review_2_block_item_left;?></span>
                                                            <?php endif;?>
                                                            <?php if($software_review_2_block_item_right):?>
                                                            <span class="text-sm text-foreground/80"><?php echo $software_review_2_block_item_right;?></span>
                                                            <?php endif;?>
                                                        </div>
                                                        <?php endif;?>

                                                        <?php if(have_rows('software_review_2_block_item_list')):
                                                            while(have_rows('software_review_2_block_item_list')): the_row();
                                                            $software_review_2_block_item_list_text = get_sub_field('software_review_2_block_item_list_text');
                                                            $software_review_2_block_item_list_checkmark = get_sub_field('software_review_2_block_item_list_checkmark');
                                                            ?>
                                                        <div class="flex items-center justify-between">
                                                            <?php if($software_review_2_block_item_list_text):?>
                                                            <span class="text-sm text-muted-foreground"><?php echo $software_review_2_block_item_list_text;?></span>
                                                            <?php endif;?>
                                                            <?php if($software_review_2_block_item_list_checkmark === 'checked'):?>
                                                            <div class="flex justify-center">
                                                                <div class="p-1 rounded-full bg-green-100 dark:bg-green-900/30">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-check w-4 h-4 text-green-600 dark:text-green-400">
                                                                        <path d="M20 6 9 17l-5-5"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <?php else : ?>
                                                            <div class="flex justify-center">
                                                                <div class="p-1 rounded-full bg-red-100 dark:bg-red-900/30">
                                                                    <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        class="lucide lucide-x w-4 h-4 text-red-500 dark:text-red-400">
                                                                        <path d="M18 6 6 18"></path>
                                                                        <path d="m6 6 12 12"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <?php endif;?>    
                                                        </div>
                                                        <?php endwhile; endif;?>
                                                    </div>
                                                </div>
                                                <?php endif;?>
                                                
                                                <?php endwhile;?>
                                                
                                            </div>
                                            <?php endif;?>
                                        </div>

                                    <?php } elseif (get_row_layout() === 'steps_block') {
                                        $steps_block_title = get_sub_field('steps_block_title');
                                        ?>
                                        <div class="my-8 rounded-2xl bg-gradient-to-br from-primary/5 via-accent/5 to-secondary/5 p-6 md:p-8 border border-primary/20" style="opacity: 1; transform: none;">
                                            <?php if($steps_block_title):?>
                                            <h3 class="text-xl font-bold text-foreground mb-8 text-center"><?php echo $steps_block_title;?></h3>
                                            <?php endif;?>

                                            <?php if(have_rows('steps_block_item')): $stepBlockCount = 0;?>
                                            <div class="relative">
                                                <div class="absolute top-6 left-0 right-0 h-0.5 bg-gradient-to-r from-primary via-accent to-secondary hidden md:block"></div>
                                                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 md:gap-4">
                                                    <?php while(have_rows('steps_block_item')): the_row(); $stepBlockCount++;
                                                        $step_name = get_sub_field('step_name');
                                                        $step_text = get_sub_field('step_text');
                                                        ?>
                                                    <div class="relative text-center" style="opacity: 1; transform: none;">
                                                        <div class="relative z-10 mx-auto w-12 h-12 rounded-full bg-gradient-to-br from-primary via-accent to-secondary flex items-center justify-center mb-4 shadow-lg shadow-primary/20">
                                                            <span class="text-white font-bold"><?php echo $stepBlockCount;?></span>
                                                        </div>
                                                        <?php if($step_name):?>
                                                        <h4 class="font-semibold text-foreground mb-2"><?php echo $step_name;?></h4>
                                                        <?php endif;?>
                                                        <?php if($step_text):?>
                                                        <p class="text-sm text-muted-foreground"><?php echo $step_text;?></p>
                                                        <?php endif;?>
                                                    </div>
                                                    <?php endwhile;?>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                        </div>

                                    <?php } elseif (get_row_layout() === 'workflow_block') {
                                        $workflow_block_title = get_sub_field('workflow_block_title');

                                        $workflow_block_title_1 = get_sub_field('workflow_block_title_1');
                                        $workflow_block_title_2 = get_sub_field('workflow_block_title_2');
                                        $workflow_block_title_3 = get_sub_field('workflow_block_title_3');
                                        $workflow_block_badge_text_3 = get_sub_field('workflow_block_badge_text_3');
                                        $workflow_block_title_4 = get_sub_field('workflow_block_title_4');
                                        $workflow_block_title_5 = get_sub_field('workflow_block_title_5');

                                        $workflow_block_text_1 = get_sub_field('workflow_block_text_1');
                                        $workflow_block_text_2 = get_sub_field('workflow_block_text_2');
                                        $workflow_block_text_3 = get_sub_field('workflow_block_text_3');
                                        $workflow_block_text_4 = get_sub_field('workflow_block_text_4');
                                        $workflow_block_text_5 = get_sub_field('workflow_block_text_5');


                                        ?>
                                        <div class="my-8 rounded-2xl overflow-hidden border border-border bg-white dark:bg-card shadow-sm" style="opacity: 1; transform: none;">
                                            <?php if($workflow_block_title):?>
                                            <div class="px-6 py-4 bg-gradient-to-r from-primary via-accent to-secondary">
                                                <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-rocket w-5 h-5 text-white">
                                                        <path
                                                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                                        </path>
                                                        <path
                                                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                                        </path>
                                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                                    </svg>
                                                    <h3 class="text-lg font-bold text-white"><?php echo $workflow_block_title;?></h3>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                            <div class="p-6 space-y-0">
                                                
                                                <?php if($workflow_block_title_1 and $workflow_block_text_1):?>
                                                <div class="relative flex gap-4" style="opacity: 1; transform: none;">
                                                    <div class="flex flex-col items-center">
                                                        <div
                                                            class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-green-100 dark:bg-green-900/30">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-circle-check w-5 h-5 text-green-600 dark:text-green-400">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="m9 12 2 2 4-4"></path>
                                                            </svg></div>
                                                        <div class="w-0.5 flex-1 min-h-[40px] bg-green-300 dark:bg-green-700"></div>
                                                    </div>
                                                    <div class="pb-8 ">
                                                        <h4 class="font-semibold text-foreground"><?php echo $workflow_block_title_1;?></h4>
                                                        <p class="text-sm text-muted-foreground mt-1"><?php echo $workflow_block_text_1;?></p>
                                                    </div>
                                                </div>
                                                <?php endif;?>

                                                <?php if($workflow_block_title_2 and $workflow_block_text_2):?>
                                                <div class="relative flex gap-4" style="opacity: 1; transform: none;">
                                                    <div class="flex flex-col items-center">
                                                        <div
                                                            class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-green-100 dark:bg-green-900/30">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-circle-check w-5 h-5 text-green-600 dark:text-green-400">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="m9 12 2 2 4-4"></path>
                                                            </svg></div>
                                                        <div class="w-0.5 flex-1 min-h-[40px] bg-green-300 dark:bg-green-700"></div>
                                                    </div>
                                                    <div class="pb-8 ">
                                                        <h4 class="font-semibold text-foreground"><?php echo $workflow_block_title_2;?></h4>
                                                        <p class="text-sm text-muted-foreground mt-1"><?php echo $workflow_block_text_2;?> </p>
                                                    </div>
                                                </div>
                                                <?php endif;?>

                                                <?php if($workflow_block_title_3 and $workflow_block_text_3):?>
                                                <div class="relative flex gap-4" style="opacity: 1; transform: none;">
                                                    <div class="flex flex-col items-center">
                                                        <div
                                                            class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-gradient-to-br from-primary to-accent">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-circle w-5 h-5 text-white fill-white">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                            </svg></div>
                                                        <div class="w-0.5 flex-1 min-h-[40px] bg-border"></div>
                                                    </div>
                                                    <div class="pb-8 ">
                                                        <h4 class="font-semibold text-primary">
                                                            <?php echo $workflow_block_title_2;?>
                                                            <?php if($workflow_block_badge_text_3):?>
                                                            <span class="ml-2 text-xs px-2 py-0.5 rounded-full bg-primary/10 text-primary"><?php echo $workflow_block_badge_text_3;?></span>
                                                            <?php endif;?>
                                                        </h4>
                                                        <p class="text-sm text-muted-foreground mt-1">Diversify with affiliates and sponsors</p>
                                                    </div>
                                                </div>
                                                <?php endif;?>

                                                <?php if($workflow_block_title_4 and $workflow_block_text_4):?>
                                                <div class="relative flex gap-4" style="opacity: 1; transform: none;">
                                                    <div class="flex flex-col items-center">
                                                        <div
                                                            class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-muted">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-circle w-5 h-5 text-muted-foreground">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                            </svg></div>
                                                        <div class="w-0.5 flex-1 min-h-[40px] bg-border"></div>
                                                    </div>
                                                    <div class="pb-8 ">
                                                        <h4 class="font-semibold text-foreground"><?php echo $workflow_block_title_4;?></h4>
                                                        <p class="text-sm text-muted-foreground mt-1"><?php echo $workflow_block_text_4;?></p>
                                                    </div>
                                                </div>
                                                <?php endif;?>

                                                <?php if($workflow_block_title_5 and $workflow_block_text_5):?>
                                                <div class="relative flex gap-4" style="opacity: 1; transform: none;">
                                                    <div class="flex flex-col items-center">
                                                        <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0 bg-muted">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-flag w-5 h-5 text-muted-foreground">
                                                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z">
                                                                </path>
                                                                <line x1="4" x2="4" y1="22" y2="15"></line>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="pb-8 pb-0">
                                                        <h4 class="font-semibold text-foreground"><?php echo $workflow_block_title_5;?></h4>
                                                        <p class="text-sm text-muted-foreground mt-1"><?php echo $workflow_block_text_5;?></p>
                                                    </div>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    <?php }?>

                                    <?php endwhile; ?>
                                <?php }?>
                            </div>    
                            <!-- BLOCKS END -->
          
                            <?php 
                                $author_id = get_post_field('post_author', get_the_ID());

                                $first_name  = get_the_author_meta('first_name', $author_id);
                                $last_name   = get_the_author_meta('last_name', $author_id);
                                $display_name = get_the_author_meta('display_name', $author_id);
                                $bio = get_the_author_meta('description', $author_id);

                                $specialization = get_field('author_role', 'user_'. $author_id );

                                if (!empty($first_name) || !empty($last_name)) {
                                    $author_name = trim("$first_name $last_name");
                                } else {
                                    $author_name = !empty($display_name) ? $display_name : 'Guest Author';
                                }

                                $author_link = get_author_posts_url($author_id);
                            ?>

                            <div class="mt-16 p-8 bg-white/70 dark:bg-card/50 backdrop-blur-xl rounded-2xl border border-border/50 shadow-lg" style="opacity: 1; transform: none;">
                                <div class="flex flex-col md:flex-row gap-6">
                                    <a class="shrink-0" href="<?php echo $author_link;?>">
                                        <span class="relative flex shrink-0 overflow-hidden rounded-full w-20 h-20 ring-4 ring-primary/20 hover:ring-primary/40 transition-all">
                                            <div class="aspect-square h-full w-full">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                                            </div>
                                    <div class="flex-1">
                                        <p class="text-sm text-primary font-medium mb-1">Written by</p>

                                        <a class="text-xl font-bold text-foreground hover:text-primary transition-colors" href="<?php echo esc_url($author_link); ?>">
                                            <?php echo esc_html($author_name); ?>
                                        </a>
                                        <?php if($specialization):?>
                                        <p class="text-sm text-muted-foreground mb-3"><?php echo $specialization;?></p>
                                        <?php endif;?>
                                        <?php if($bio):?>
                                        <p class="text-muted-foreground leading-relaxed"><?php echo $bio;?></p>
                                        <?php endif;?>
                                            <a href="<?php echo esc_url($author_link); ?>" class="inline-flex items-center gap-2 mt-4 text-primary font-medium hover:gap-3 transition-all">View
                                            Profile<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            
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
                            <section class="mt-16" style="opacity: 1; transform: none;">
                                <h2 class="text-2xl font-bold text-foreground mb-8">Related Articles</h2>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                                    <?php
                                        while($related_cats_post->have_posts()): $related_cats_post->the_post();
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
                                    <article class="group" style="opacity: 1; transform: none;">
                                        <a href="<?php echo $link;?>" title="<?php the_title();?>">
                                            <div
                                                class="relative rounded-xl overflow-hidden aspect-[4/3] mb-4 bg-gradient-to-br from-primary/30 via-accent/20 to-secondary/30">
                                                <?php if($src):?>
                                                <img  src="<?php echo $src;?>" alt="10 AI Tools Every Faceless Creator Needs"  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                <?php else : ?>
                                                <img  src="" alt="10 AI Tools Every Faceless Creator Needs"  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                <?php endif;?>
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                </div>
                                            </div>
                                            <?php if($category_name):?>
                                            <span class="text-xs font-medium text-primary"><?php echo $category_name;?></span>
                                            <?php endif;?>
                                            <h3 class="font-semibold text-foreground group-hover:text-primary transition-colors line-clamp-2 mt-1">
                                                <?php the_title()?>
                                            </h3>
                                            <p class="text-sm text-muted-foreground mt-1"><?php echo $author_name;?></p>
                                        </a>
                                    </article>
                                    <?php endwhile; wp_reset_query();?>

                                </div>
                            </section>
                            <?php endif;?>

                        </article>

                        <?php if(have_rows('rigth_sidebar') or have_rows('rigth_sidebar_subscribe')):?>
                        <aside class="hidden lg:block lg:col-span-3" style="opacity: 1; transform: none;">
                            <div class="sticky top-28 space-y-6">
                                
                                <?php while(have_rows('rigth_sidebar')): the_row();
                                    $rigth_sidebar_item_top_title = get_sub_field('rigth_sidebar_item_top_title');
                                    $rigth_sidebar_item_title = get_sub_field('rigth_sidebar_item_title');
                                    $rigth_sidebar_item_text = get_sub_field('rigth_sidebar_item_text');
                                    $rigth_sidebar_item_btn_text = get_sub_field('rigth_sidebar_item_btn_text');
                                    $rigth_sidebar_item_btn_link = get_sub_field('rigth_sidebar_item_btn_link');
                                    ?>
                                <div class="group relative overflow-hidden rounded-2xl p-6 cursor-pointer" style="opacity: 1; transform: none;">
                                    <div class="absolute inset-0 bg-gradient-to-br from-primary via-accent to-secondary opacity-90"></div>
                                    <div  class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/30 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000"></div>
                                    <div class="relative z-10 text-white">
                                        <?php if($rigth_sidebar_item_top_title):?>
                                        <span class="text-xs font-medium opacity-80"><?php echo $rigth_sidebar_item_top_title;?></span>
                                        <?php endif;?>
                                        <?php if($rigth_sidebar_item_title):?>
                                        <h4 class="text-xl font-bold mt-2"><?php echo $rigth_sidebar_item_title;?></h4>
                                        <?php endif;?>
                                        <?php if($rigth_sidebar_item_text):?>
                                        <p class="text-sm opacity-90 mt-1"><?php echo $rigth_sidebar_item_text;?></p>
                                        <?php endif;?>
                                        <?php if($rigth_sidebar_item_btn_text and $rigth_sidebar_item_btn_link):?>
                                        <a href="<?php echo $rigth_sidebar_item_btn_link;?>" class="text-white mt-4 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium hover:bg-white/30 transition-colors inline-flex items-center gap-2">
                                            <?php echo $rigth_sidebar_item_btn_text;?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-3 h-3">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <?php endif;?>
                                    </div>
                                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                                    <div class="absolute -top-4 -left-4 w-16 h-16 bg-white/10 rounded-full blur-lg"></div>
                                </div>
                                <?php endwhile;?>

                                <?php while(have_rows('rigth_sidebar_subscribe')): the_row();
                                    $subscribe_block_title = get_sub_field('subscribe_block_title');
                                    $subscribe_block_text = get_sub_field('subscribe_block_text');
                                    $subscribe_block_btn_text = get_sub_field('subscribe_block_btn_text');
                                    $subscribe_block_btn_link = get_sub_field('subscribe_block_btn_link');
                                    ?>
                                <div class="bg-white/70 dark:bg-card/50 backdrop-blur-xl rounded-2xl border border-border/50 p-6 shadow-lg">
                                    <?php if($subscribe_block_title):?>
                                    <div class="w-12 h-12 rounded-full bg-gradient-main flex items-center justify-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-mail w-6 h-6 text-white">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-foreground mb-2"><?php echo $subscribe_block_title;?></h4>
                                    <?php endif;?>
                                    <?php if($subscribe_block_text):?>
                                    <p class="text-sm text-muted-foreground mb-4"><?php echo $subscribe_block_text;?></p>
                                    <?php endif;?>
                                    <?php if($subscribe_block_btn_text and $subscribe_block_btn_link):?>
                                    <a href="<?php echo $subscribe_block_btn_link;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient-lg hover:shadow-2xl hover:scale-[1.05] font-bold h-10 px-5 w-full">
                                        <?php echo $subscribe_block_btn_text;?>
                                    </a>
                                    <?php endif;?>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </aside>
                        <?php endif;?>
                    </div>
                </div>
            </main>
            
        </div>
    </div>


    <?php get_footer(); ?>