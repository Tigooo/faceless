<?php 
/* 
    Template Name: Tools
*/ 
?>
<?php get_header(); ?>



<div class="min-h-screen bg-background">

    <main class="pt-16">
        <section class="relative py-20 lg:py-28 overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-20 left-10 w-80 h-80 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            <?php 
                $hero_badge_text = get_field('hero_badge_text');
                $hero_title = get_field('hero_title');
                $hero_title_colored = get_field('hero_title_colored');
                $hero_text = get_field('hero_text');
            ?>
            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    <div style="opacity: 1; transform: none;">
                        <?php if($hero_badge_text):?>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-primary/10 via-secondary/10 to-accent/10 border border-primary/20 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 text-primary animate-pulse">
                                <path
                                    d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                </path>
                            </svg>
                            <span class="text-sm font-semibold bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">
                                <?php echo $hero_badge_text;?>
                            </span>
                        </div>
                        <?php endif;?>
                        <?php if($hero_title and $hero_title_colored):?>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold mb-6 leading-tight">
                            <span class="text-foreground"><?php echo $hero_title;?></span>
                            <br>
                            <span class="relative inline-block">
                                <span class="bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent"><?php echo $hero_title_colored;?></span>
                                <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none">
                                    <path d="M2 10C50 4 100 2 150 6C200 10 250 4 298 8" stroke="url(#hero-gradient)"
                                        stroke-width="3" stroke-linecap="round" pathLength="1" stroke-dashoffset="0px"
                                        stroke-dasharray="1px 1px">
                                    </path>
                                    <defs>
                                        <linearGradient id="hero-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" stop-color="hsl(var(--primary))"></stop>
                                            <stop offset="50%" stop-color="hsl(var(--secondary))"></stop>
                                            <stop offset="100%" stop-color="hsl(var(--accent))"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                        </h1>
                        <?php endif;?>
                        <?php if($hero_text):?>
                        <p class="text-lg md:text-xl text-muted-foreground max-w-xl mb-8">
                            <?php echo $hero_text;?>
                        </p>
                        <?php endif;?>
                        <?php 
                            $hero_btn_text_1 = get_field('hero_btn_text_1');
                            $hero_btn_link_1 = get_field('hero_btn_link_1');

                            $hero_btn_text_2 = get_field('hero_btn_text_2');
                            $hero_btn_link_2 = get_field('hero_btn_link_2');
                        ?>
                        <div class="flex flex-wrap gap-4 mb-10">
                            <?php if($hero_btn_text_1 and $hero_btn_link_1 ):?>
                            <a href="<?php echo  $hero_btn_link_1;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] h-14 px-10 text-base group">
                                <?php echo $hero_btn_text_1;?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 ml-2 transition-transform group-hover:translate-x-1">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                            <?php endif;?>

                            <?php if($hero_btn_text_2 and $hero_btn_link_2 ):?>
                            <a href="<?php echo  $hero_btn_link_2;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border-2 bg-transparent hover:bg-muted h-14 px-10 text-base group border-border/50 hover:border-primary/50">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-play w-4 h-4 mr-2">
                                    <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                </svg>
                                <?php echo $hero_btn_text_2;?>
                            </a>
                            <?php endif;?>
                        </div>
                        <?php 
                            $hero_counter_icon_1 = get_field('hero_counter_icon_1');
                            $hero_counter_title_1 = get_field('hero_counter_title_1');
                            $hero_counter_text_1 = get_field('hero_counter_text_1');

                            $hero_counter_icon_2 = get_field('hero_counter_icon_2');
                            $hero_counter_title_2 = get_field('hero_counter_title_2');
                            $hero_counter_text_2 = get_field('hero_counter_text_2');

                            $hero_counter_icon_3 = get_field('hero_counter_icon_3');
                            $hero_counter_title_3 = get_field('hero_counter_title_3');
                            $hero_counter_text_3 = get_field('hero_counter_text_3');
                        ?>
                        <div class="flex flex-wrap items-center gap-8">
                            <?php if($hero_counter_icon_1 and $hero_counter_title_1 and $hero_counter_text_1):?>
                            <div class="flex items-center gap-3" style="opacity: 1; transform: none;">
                                <div class="tools__icon w-10 h-10 rounded-xl bg-gradient-to-br from-primary/10 to-secondary/10 border border-primary/20 flex items-center justify-center">
                                    <?php echo $hero_counter_icon_1;?>
                                </div>
                                <div>
                                    <div class="text-xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                                        <?php echo $hero_counter_title_1;?>
                                    </div>
                                    <div class="text-xs text-muted-foreground"><?php echo $hero_counter_text_1;?></div>
                                </div>
                            </div>
                            <?php endif;?>
                            <?php if($hero_counter_icon_2 and $hero_counter_title_2 and $hero_counter_text_2):?>
                            <div class="flex items-center gap-3" style="opacity: 1; transform: none;">
                                <div class="tools__icon w-10 h-10 rounded-xl bg-gradient-to-br from-primary/10 to-secondary/10 border border-primary/20 flex items-center justify-center">
                                    <?php echo $hero_counter_icon_2;?>
                                </div>
                                <div>
                                    <div class="text-xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                                        <?php echo $hero_counter_title_2;?>
                                    </div>
                                    <div class="text-xs text-muted-foreground"><?php echo $hero_counter_text_2;?></div>
                                </div>
                            </div>
                            <?php endif;?>
                            <?php if($hero_counter_icon_3 and $hero_counter_title_3 and $hero_counter_text_3):?>
                            <div class="flex items-center gap-3" style="opacity: 1; transform: none;">
                                <div  class="tools__icon w-10 h-10 rounded-xl bg-gradient-to-br from-primary/10 to-secondary/10 border border-primary/20 flex items-center justify-center">
                                    <?php echo $hero_counter_icon_3;?>
                                </div>
                                <div>
                                    <div class="text-xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                                        <?php echo $hero_counter_title_3;?>
                                    </div>
                                    <div class="text-xs text-muted-foreground"><?php echo $hero_counter_text_2;?></div>
                                </div>
                            </div>
                            <?php endif;?>

                        </div>
                    </div>

                    <?php 
                        $hero_circle_icon_1 = get_field('hero_circle_icon_1');
                        $hero_circle_title_1 = get_field('hero_circle_title_1');
                        $hero_circle_text_1 = get_field('hero_circle_text_1');

                        $hero_circle_icon_2 = get_field('hero_circle_icon_2');
                        $hero_circle_title_2 = get_field('hero_circle_title_2');
                        $hero_circle_text_2 = get_field('hero_circle_text_2');

                        $hero_circle_rate = get_field('hero_circle_rate');

                        $hero_circle_center_text = get_field('hero_circle_center_text');
                        $hero_circle_center_text_colored = get_field('hero_circle_center_text_colored');
                    ?>
                    <div class="relative" style="opacity: 1; transform: none;">
                        <div class="relative">
                            <div class="relative w-80 h-80 md:w-96 md:h-96 mx-auto">
                                <div class="animate-float-rotate absolute inset-0 rounded-full bg-gradient-to-r from-primary via-secondary to-accent p-[3px]"
                                    style="transform: rotate(76.26deg);">
                                    <div class="w-full h-full rounded-full bg-background"></div>
                                </div>
                                <?php if($hero_circle_center_text and $hero_circle_center_text_colored):?>
                                <div class="absolute inset-4 rounded-full bg-gradient-to-br from-primary/5 via-secondary/5 to-accent/5 border border-primary/10 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="animate-float-7">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calculator w-20 h-20 text-primary/80 mx-auto mb-4"><rect width="16" height="20" x="4" y="2" rx="2"></rect><line x1="8" x2="16" y1="6" y2="6"></line><line x1="16" x2="16" y1="14" y2="18"></line><path d="M16 10h.01"></path><path d="M12 10h.01"></path><path d="M8 10h.01"></path><path d="M12 14h.01"></path><path d="M8 14h.01"></path><path d="M12 18h.01"></path><path d="M8 18h.01"></path></svg>
                                        </div>
                                        <p class="text-sm font-medium text-muted-foreground"><?php echo $hero_circle_center_text;?></p>
                                        <p class="text-lg font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                                            <?php echo $hero_circle_center_text_colored;?>    
                                        </p>
                                    </div>
                                </div>
                                <?php endif;?>
                                <?php if($hero_circle_icon_1 and $hero_circle_title_1 and $hero_circle_text_1):?>
                                <div class="absolute animate-float-5 -top-4 -left-4 md:left-0"
                                    style="transform: translateY(-9.36115px);">
                                    <div
                                        class="p-4 rounded-2xl bg-background/90 backdrop-blur-xl border border-border/50 shadow-xl">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-violet-500 to-purple-500 flex items-center justify-center">
                                                <?php echo $hero_circle_icon_1;?>
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-foreground"><?php echo $hero_circle_title_1;?></p>
                                                <p class="text-xs text-muted-foreground"><?php echo $hero_circle_text_1;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif;?>

                                <?php if($hero_circle_icon_2 and $hero_circle_title_2 and $hero_circle_text_2):?>
                                <div class="absolute animate-float-5 -bottom-4 -right-4 md:right-0"
                                    style="transform: translateY(0.40284px);">
                                    <div  class="p-4 rounded-2xl bg-background/90 backdrop-blur-xl border border-border/50 shadow-xl">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
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
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-foreground"><?php echo $hero_circle_title_2;?> </p>
                                                <p class="text-xs text-muted-foreground"><?php echo $hero_circle_text_2;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif;?>
                                <div class="absolute top-1/2 -right-8 md:-right-4 -translate-y-1/2"
                                    style="transform: translateY(-6.80016px);">
                                    <div
                                        class="p-3 rounded-xl bg-background/90 backdrop-blur-xl border border-border/50 shadow-xl">
                                        <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-star w-4 h-4 text-amber-500 fill-amber-500">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                </path>
                                            </svg><span class="text-sm font-bold text-foreground">4.9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                    
        
        <section class="py-16 relative bg-muted/30">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12"
                    style="opacity: 1; transform: none;">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-display font-bold text-foreground mb-2">All Tools</h2>
                        <p class="text-muted-foreground">Browse our complete collection of creator tools</p>
                    </div>
                </div>
                <?php
                    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

                    $query = new WP_Query([
                        'post_type'      => 'tools',
                        'posts_per_page' => 12,
                        'order'          => 'DESC',
                        'paged'          => $paged,
                    ]);

                    if ($query->have_posts()) :
                        $post_index = 0;
                ?>
                <div id="tools" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php while ($query->have_posts()) : $query->the_post(); $post_index++;

                        $tool_icon = get_field('tool_icon');
                        $tool_text = get_field('tool_text');

                        $classes = [
                            1 => "from-violet-500 via-purple-500 to-fuchsia-500",
                            2 => "from-pink-500 via-rose-500 to-red-500",
                            3 => "from-orange-500 via-pink-500 to-rose-500",
                            4 => "from-blue-500 via-indigo-500 to-violet-500",
                            5 => "from-amber-500 via-orange-500 to-red-500",
                            6 => "from-cyan-500 via-blue-500 to-purple-500",
                            6 => "from-pink-500 via-rose-500 to-red-500",
                            7 => "from-green-500 via-emerald-500 to-teal-500",
                            8 => "from-indigo-500 via-purple-500 to-pink-500",
                            9 => "from-yellow-500 via-amber-500 to-orange-500",
                            10 => "from-red-500 via-pink-500 to-purple-500",
                            11 => "from-teal-500 via-cyan-500 to-blue-500",
                        ];

                        $classes2 = [
                            1 => "bg-violet-500/20",
                            2 => "bg-pink-500/20",
                            3 => "bg-pink-500/20",
                            4 => "bg-indigo-500/20",
                            5 => "bg-orange-500/20",
                            6 => "bg-blue-500/20",
                            6 => "bg-rose-500/20",
                            7 => "bg-emerald-500/20",
                            8 => "bg-purple-500/20",
                            9 => "bg-amber-500/20",
                            10 => "bg-pink-500/20",
                            11 => "bg-cyan-500/20",
                        ];

                        $index = ($post_index - 1) % 11 + 1;

                        $className = $classes[$index];
                        $className2 = $classes2[$index];
                    ?>
                    <a href="<?php the_permalink();?>">
                        <div class="group cursor-pointer h-full" style="opacity: 1; transform: none;">
                            <div class="relative h-full p-[1px] rounded-2xl bg-gradient-to-br from-border/50 via-transparent to-border/50 transition-all duration-500 group-hover:from-primary/50 group-hover:via-secondary/30 group-hover:to-accent/50">
                                <div class="relative h-full bg-background backdrop-blur-xl rounded-2xl p-6 overflow-hidden transition-all duration-500 group-hover:shadow-xl group-hover:shadow-primary/10 group-hover:-translate-y-1">
                                    <div class="absolute -top-10 -right-10 w-32 h-32 <?php echo $className2;?> rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                    <div class="relative z-10">
                                        <?php if($tool_icon):?>
                                        <div class="flex items-start justify-between mb-4">
                                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br <?php echo $className;?> p-[1px] transition-transform duration-500 group-hover:scale-110">
                                                <div class="tools__icon tools__icon--big tools__icon--white w-full h-full rounded-xl bg-background/20 backdrop-blur-sm flex items-center justify-center">
                                                    <?php echo $tool_icon;?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif;?>
                                        <h3 class="text-lg font-bold font-display mb-2 transition-all duration-300 group-hover:text-primary">
                                            <?php the_title();?>
                                        </h3>
                                        <?php if($tool_text):?>
                                        <p class="text-sm text-muted-foreground leading-relaxed mb-4 line-clamp-2">
                                            <?php echo $tool_text;?>
                                        </p>
                                        <?php endif;?>
                                        <div class="flex items-center justify-end pt-4 border-t border-border/30">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chevron-right w-5 h-5 text-muted-foreground group-hover:text-primary group-hover:translate-x-1 transition-all duration-300">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata()?>
                </div>
            
                <?php endif;?>
            </div>
        </section>

        <?php 
            $tools_cta_title = get_field('tools_cta_title');
            $tools_cta_title_colored = get_field('tools_cta_title_colored');
            $tools_cta_text = get_field('tools_cta_text');

            $tools_cta_btn_text_1 = get_field('tools_cta_btn_text_1');
            $tools_cta_btn_icon_1 = get_field('tools_cta_btn_icon_1');
            $tools_cta_btn_link_1 = get_field('tools_cta_btn_link_1');

            $tools_cta_btn_text_2 = get_field('tools_cta_btn_text_2');
            $tools_cta_btn_icon_2 = get_field('tools_cta_btn_icon_2');
            $tools_cta_btn_link_2 = get_field('tools_cta_btn_link_2');

            if(
               $tools_cta_title ||
               $tools_cta_title_colored ||
               $tools_cta_text
            ):
        ?>
        <section class="py-24 relative overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-radial from-primary/10 to-transparent rounded-full"></div>
            </div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center max-w-3xl mx-auto" style="opacity: 1; transform: none;">
                    <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">
                        <?php if($tools_cta_title):?>
                        <span class="text-foreground"><?php echo $tools_cta_title;?></span>
                        <?php endif;?>
                        <?php if($tools_cta_title_colored):?>
                        <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                            <?php echo $tools_cta_title_colored;?>
                        </span>
                        <?php endif;?>
                    </h2>
                    <?php if($tools_cta_text):?>
                    <p class="text-lg text-muted-foreground mb-8">
                        <?php echo $tools_cta_text;?>
                    </p>
                    <?php endif;?>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <?php if($tools_cta_btn_text_1 and $tools_cta_btn_link_1):?>
                        <a href="<?php echo $tools_cta_btn_link_1;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white hover:shadow-gradient-lg hover:scale-[1.03] h-14 px-10 text-base shadow-lg shadow-primary/25">
                            <?php echo $tools_cta_btn_text_1;?>
                            <span class="tools__icon--small">
                                <?php echo $tools_cta_btn_icon_1 ? $tools_cta_btn_icon_1 : '';?>
                            </span>
                        </a>
                        <?php endif;?>
                        <?php if($tools_cta_btn_text_2 and $tools_cta_btn_link_2):?>
                        <a href="<?php echo $tools_cta_btn_link_2;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 h-14 px-10 text-base">
                            <?php echo $tools_cta_btn_text_2;?>
                            <span class="tools__icon--small">
                                <?php echo $tools_cta_btn_icon_2 ? $tools_cta_btn_icon_2 : '';?>
                            </span>
                        </a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>
    </main>
    
</div>




<?php get_footer(); ?>