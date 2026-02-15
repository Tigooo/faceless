<?php 
/* 
    Template Name: Home
*/ 
?>
<?php get_header(); ?>


<div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none">
    <ol
        tabindex="-1"
        class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]"
    ></ol>
</div>
<section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text" aria-atomic="false"></section>
<div class="min-h-screen bg-background">
    <main>
        <section class="relative min-h-screen overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-to-br from-[#E8F4FC] via-[#F0E6FF] to-[#FFE6F0]"></div>
                <div
                    class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] rounded-full bg-gradient-to-br from-[#00D9FF]/40 to-[#00FFA3]/20 blur-[80px] animate-orb-1"
                ></div>
                <div
                    class="absolute top-[20%] right-[-15%] w-[500px] h-[500px] rounded-full bg-gradient-to-br from-[#7B61FF]/30 to-[#FF00E5]/20 blur-[80px] animate-orb-2"
                ></div>
                <div
                    class="absolute bottom-[-10%] left-[30%] w-[700px] h-[700px] rounded-full bg-gradient-to-br from-[#FF6B00]/20 to-[#FFE600]/20 blur-[100px] animate-orb-3"
                ></div>
                <div class="absolute top-[15%] left-[10%] w-3 h-3 rounded-full bg-gradient-to-r from-primary to-secondary animate-float-1"></div>
                <div class="absolute top-[25%] right-[15%] w-4 h-4 rounded-full bg-gradient-to-r from-secondary to-accent animate-float-2"></div>
                <div class="absolute top-[60%] left-[5%] w-2 h-2 rounded-full bg-gradient-to-r from-accent to-primary animate-float-3"></div>
                <div class="absolute bottom-[30%] right-[10%] w-3 h-3 rounded-full bg-gradient-to-r from-primary to-accent animate-float-1"></div>
                <div class="absolute top-[40%] left-[20%] w-2 h-2 rounded-full bg-secondary animate-float-2"></div>
                <div class="absolute bottom-[20%] left-[15%] w-4 h-4 rounded-full bg-primary/60 animate-float-3"></div>
                <div
                    class="absolute inset-0 bg-[linear-gradient(rgba(0,0,0,0.015)_1.5px,transparent_1.5px),linear-gradient(90deg,rgba(0,0,0,0.015)_1.5px,transparent_1.5px)] bg-[size:60px_60px]"
                ></div>
            </div>
            <div class="container mx-auto px-6 relative z-10 pt-28 pb-20">
                <?php if(have_rows('hero')):
                    while(have_rows('hero')): the_row();
                    $top_badge_icon = get_sub_field('top_badge_icon');
                    $top_badge_text = get_sub_field('top_badge_text');
                    $top_badge_rate = get_sub_field('top_badge_rate');
                    $fiirst_title = get_sub_field('fiirst_title');
                    $last_title = get_sub_field('last_title');
                    $hero_description = get_sub_field('hero_description');
                    $first_btn_text = get_sub_field('first_btn_text');
                    $first_btn_link = get_sub_field('first_btn_link');
                    $last_btn_text = get_sub_field('last_btn_text');
                    $last_btn_link = get_sub_field('last_btn_link');
                    ?>
                <div class="flex justify-center mb-10 animate-fade-up">
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary via-secondary to-accent rounded-full blur-md opacity-60 group-hover:opacity-100 transition-all duration-500 animate-gradient-x"></div>
                        <div class="relative flex items-center gap-3 px-6 py-3 rounded-full bg-white/80 backdrop-blur-xl border border-white/50 shadow-2xl">
                            <?php if($top_badge_icon):?>
                            <div class="hero__badge-icon flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-r from-primary to-secondary">
                                <?php echo $top_badge_icon;?>
                            </div>
                            <?php endif;?>
                            <?php if($top_badge_text):?>
                            <span class="font-bold text-foreground"><?php echo $top_badge_text;?></span>
                            <?php endif;?>
                            <?php if($top_badge_rate):?>
                            <div class="flex items-center gap-1 px-3 py-1 rounded-full bg-gradient-to-r from-yellow-100 to-orange-100 border border-yellow-200">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-star w-3.5 h-3.5 fill-yellow-500 text-yellow-500"
                                >
                                    <path
                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"
                                    ></path></svg><span class="text-sm font-bold text-yellow-700"><?php echo $top_badge_rate;?></span>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="text-center max-w-6xl mx-auto mb-10">
                    <?php if($fiirst_title and $last_title):?>
                    <h1 class="animate-fade-up-delay-1 font-display text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-bold tracking-tight leading-[0.95] mb-8">
                        <span class="inline-block"><?php echo $fiirst_title;?></span><br />
                        <span class="relative inline-block">
                            <span class="relative z-10 bg-gradient-to-r from-[#00D9FF] via-[#7B61FF] to-[#FF00E5] bg-clip-text text-transparent animate-gradient-x bg-[length:200%_auto]"><?php echo $last_title;?></span>
                            <svg class="absolute -bottom-4 left-0 w-full h-6" viewBox="0 0 400 24" preserveAspectRatio="none">
                                <path
                                    d="M0 12 Q100 24 200 12 T400 12"
                                    stroke="url(#magic-gradient)"
                                    stroke-width="6"
                                    fill="none"
                                    stroke-linecap="round"
                                    class="animate-draw"
                                ></path>
                                <defs>
                                    <linearGradient id="magic-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" stop-color="#00D9FF"></stop>
                                        <stop offset="50%" stop-color="#7B61FF"></stop>
                                        <stop offset="100%" stop-color="#FF00E5"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                    </h1>
                    <?php endif;?>
                    <?php if($hero_description):?>
                    <p class="animate-fade-up-delay-2 text-xl md:text-2xl text-muted-foreground max-w-3xl mx-auto font-medium">
                        <?php echo $hero_description;?>
                    </p>
                    <?php endif;?>
                </div>
                
                <div class="animate-fade-up-delay-2 flex flex-wrap items-center justify-center gap-5 mb-16">
                    <?php if($first_btn_link and $first_btn_text):?>
                    <a href="<?php echo $first_btn_link;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white hover:shadow-2xl hover:scale-[1.05] font-bold h-16 px-12 text-lg group relative overflow-hidden shadow-2xl shadow-primary/25">
                        <span class="relative z-10 flex items-center gap-2">
                            <?php echo $first_btn_text;?>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-1 transition-transform"
                            >
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </span>
                    </a>
                    <?php endif;?>
                    <?php if($last_btn_link and $last_btn_text):?>
                    <a href="<?php echo $last_btn_link?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border-2 border-foreground/20 bg-white/50 text-foreground hover:bg-white hover:border-primary/40 hover:scale-[1.03] h-16 px-12 text-lg group backdrop-blur-xl">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-play w-5 h-5 group-hover:scale-110 transition-transform"
                        >
                            <polygon points="6 3 20 12 6 21 6 3"></polygon>
                        </svg>
                        <?php echo $last_btn_text;?>
                    </a>
                    <?php endif;?>
                </div>
                <?php endwhile; endif;?>

                <?php if(have_rows('hero_banner')):
                    while(have_rows('hero_banner')): the_row();
                    $hero_banner_icon = get_sub_field('hero_banner_icon');
                    $hero_banner_title = get_sub_field('hero_banner_title');
                    $hero_banner_text = get_sub_field('hero_banner_text');
                    $hero_banner_btn_text = get_sub_field('hero_banner_btn_text');
                    $hero_banner_btn_link = get_sub_field('hero_banner_btn_link');
                    ?>
                <div class="animate-fade-up-delay-3 flex justify-center mb-20">
                    <div class="group relative max-w-2xl w-full">
                        <div class="absolute -inset-[2px] bg-gradient-to-r from-[#00D9FF] via-[#7B61FF] to-[#FF00E5] rounded-3xl opacity-80 blur-sm group-hover:opacity-100 group-hover:blur-md transition-all duration-500 animate-gradient-x bg-[length:200%_auto]"></div>
                        <div class="relative flex flex-col sm:flex-row items-center justify-between gap-4 px-8 py-6 rounded-3xl bg-white/90 backdrop-blur-xl border border-white/50 shadow-2xl overflow-hidden">
                            <div class="absolute top-0 left-0 w-40 h-40 bg-gradient-to-br from-primary/20 to-secondary/10 blur-3xl -translate-x-10 -translate-y-10"></div>
                            <div class="absolute bottom-0 right-0 w-40 h-40 bg-gradient-to-br from-accent/20 to-secondary/10 blur-3xl translate-x-10 translate-y-10" ></div>
                            <div class="relative flex items-center gap-4">
                                <?php if($hero_banner_icon):?>
                                <div class="hero__banner-icon flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-[#7B61FF] to-[#FF00E5] shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                                    <?php echo $hero_banner_icon;?>
                                </div>
                                <?php endif;?>
                                <div class="text-left">
                                    <?php if($hero_banner_title):?>
                                    <h3 class="font-display font-bold text-xl text-foreground"><?php echo $hero_banner_title;?></h3>
                                    <?php endif;?>
                                    <?php if($hero_banner_text):?>
                                    <p class="text-sm text-muted-foreground"><?php echo $hero_banner_text;?></p>
                                    <?php endif;?>
                                </div>
                            </div>
                            <?php if($hero_banner_btn_text and $hero_banner_btn_link):?>
                            <a href="<?php echo $hero_banner_btn_link;?>"  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white hover:shadow-2xl hover:scale-[1.05] font-bold h-14 px-10 text-base relative z-10 group/btn shadow-xl shadow-primary/20">
                                <span class="flex items-center gap-2" >
                                    <?php echo $hero_banner_btn_text;?>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 group-hover/btn:translate-x-1 transition-transform"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                            </a>
                            <?php endif;?>
                            <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-[100%] bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-1000 skew-x-12"></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
                <?php 
                    $hero_items_title = get_field('hero_items_title');
                ?>
                <div class="animate-fade-up-delay-3 mb-20">
                    <?php if($hero_items_title):?>
                    <div class="flex items-center justify-center gap-4 mb-10">
                        <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-primary to-transparent"></div>
                        <span
                            class="px-5 py-2 rounded-full bg-gradient-to-r from-primary/10 via-secondary/10 to-accent/10 border border-primary/20 text-sm font-bold text-foreground uppercase tracking-wider"
                            ><?php echo $hero_items_title;?></span
                        >
                        <div class="h-[2px] w-20 bg-gradient-to-r from-transparent via-accent to-transparent"></div>
                    </div>
                    <?php endif;?>
                    
                    <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                        <?php if(have_rows('hero_item_1')):
                         while(have_rows('hero_item_1')): the_row();
                            $hero_item_link = get_sub_field('hero_item_link');
                            $hero_item_link_text = get_sub_field('hero_item_link_text');
                            $hero_item_icon = get_sub_field('hero_item_icon');
                            $hero_item_category = get_sub_field('hero_item_category');
                            $hero_item_views = get_sub_field('hero_item_views');
                            $hero_item_title = get_sub_field('hero_item_title');
                        ?>
                        <a href="<?php echo $hero_item_link? $hero_item_link : '';?>" class="group relative" style="animation-delay: 0.7s">
                            <div class="absolute -inset-1 bg-gradient-to-r from-[#00D9FF] to-[#00FFA3] rounded-3xl blur-xl opacity-0 group-hover:opacity-60 transition-all duration-500"></div>
                            <div class="relative bg-white/70 backdrop-blur-xl rounded-3xl p-6 border border-white/60 shadow-xl transition-all duration-500 group-hover:-translate-y-3 group-hover:shadow-2xl overflow-hidden">
                                <?php if($hero_item_icon):?>
                                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#00D9FF] to-[#00FFA3] opacity-10 blur-2xl rounded-full translate-x-10 -translate-y-10 group-hover:opacity-30 transition-opacity duration-500"></div>
                                <div class="hero__itmes-icon relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[#00D9FF] to-[#00FFA3] flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                                    <?php echo $hero_item_icon;?>    
                                </div>
                                <?php endif;?>
                                <div class="flex items-center gap-2 mb-3">
                                    <?php if($hero_item_category):?>
                                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-[#00D9FF] to-[#00FFA3] text-white"><?php echo $hero_item_category;?></span>
                                        <?php endif;?>
                                        <?php if($hero_item_views):?>
                                        <span class="text-xs text-muted-foreground font-medium"><?php echo $hero_item_views;?></span>
                                        <?php endif;?>
                                </div>
                                <?php if($hero_item_title):?>
                                <h3 class="font-display font-bold text-lg text-foreground leading-snug mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-foreground group-hover:to-foreground/70 transition-all duration-300">
                                    <?php echo $hero_item_title;?>
                                </h3>
                                <?php endif;?>
                                <?php if($hero_item_link_text):?>
                                <div class="flex items-center gap-2 text-sm font-semibold text-primary opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                    <?php echo $hero_item_link_text;?><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                                <?php endif;?>
                                <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent transition-transform duration-1000 skew-x-12"></div>
                            </div>
                        </a>
                        <?php endwhile; endif;?>

                        <?php if(have_rows('hero_item_2')):
                         while(have_rows('hero_item_2')): the_row();
                            $hero_item_link_2 = get_sub_field('hero_item_link');
                            $hero_item_link_text_2 = get_sub_field('hero_item_link_text');
                            $hero_item_icon_2 = get_sub_field('hero_item_icon');
                            $hero_item_category_2 = get_sub_field('hero_item_category');
                            $hero_item_views_2 = get_sub_field('hero_item_views');
                            $hero_item_title_2 = get_sub_field('hero_item_title');
                        ?>
                        <a href="<?php echo $hero_item_link_2? $hero_item_link_2 : '';?>" class="group relative" style="animation-delay: 0.7s">
                            <div class="absolute -inset-1 bg-gradient-to-r from-[#FF00E5] to-[#FF6B00] rounded-3xl blur-xl opacity-0 group-hover:opacity-60 transition-all duration-500" ></div>
                            <div class="relative bg-white/70 backdrop-blur-xl rounded-3xl p-6 border border-white/60 shadow-xl transition-all duration-500 group-hover:-translate-y-3 group-hover:shadow-2xl overflow-hidden" >
                                <?php if($hero_item_icon_2):?>
                                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF00E5] to-[#FF6B00] opacity-10 blur-2xl rounded-full translate-x-10 -translate-y-10 group-hover:opacity-30 transition-opacity duration-500" ></div>
                                <div class="relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[#FF00E5] to-[#FF6B00] flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                                    <?php echo $hero_item_icon_2;?>    
                                </div>
                                <?php endif;?>
                                <div class="flex items-center gap-2 mb-3">
                                    <?php if($hero_item_category_2):?>
                                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-[#FF00E5] to-[#FF6B00] text-white"><?php echo $hero_item_category_2;?></span>
                                        <?php endif;?>
                                        <?php if($hero_item_views_2):?>
                                        <span class="text-xs text-muted-foreground font-medium"><?php echo $hero_item_views_2;?></span>
                                        <?php endif;?>
                                </div>
                                <?php if($hero_item_title_2):?>
                                <h3 class="font-display font-bold text-lg text-foreground leading-snug mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-foreground group-hover:to-foreground/70 transition-all duration-300">
                                    <?php echo $hero_item_title_2;?>
                                </h3>
                                <?php endif;?>
                                <?php if($hero_item_link_text_2):?>
                                <div class="flex items-center gap-2 text-sm font-semibold text-primary opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                    <?php echo $hero_item_link_text_2;?><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                                <?php endif;?>
                                <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent transition-transform duration-1000 skew-x-12"></div>
                            </div>
                        </a>
                        <?php endwhile; endif;?>

                        <?php if(have_rows('hero_item_3')):
                         while(have_rows('hero_item_3')): the_row();
                            $hero_item_link_3 = get_sub_field('hero_item_link');
                            $hero_item_link_text_3 = get_sub_field('hero_item_link_text');
                            $hero_item_icon_3 = get_sub_field('hero_item_icon');
                            $hero_item_category_3 = get_sub_field('hero_item_category');
                            $hero_item_views_3 = get_sub_field('hero_item_views');
                            $hero_item_title_3 = get_sub_field('hero_item_title');
                        ?>
                        <a href="<?php echo $hero_item_link_3? $hero_item_link_3 : '';?>" class="group relative" style="animation-delay: 0.7s">
                            <div class="absolute -inset-1 bg-gradient-to-r from-[#7B61FF] to-[#00D9FF] rounded-3xl blur-xl opacity-0 group-hover:opacity-60 transition-all duration-500"></div>
                            <div class="relative bg-white/70 backdrop-blur-xl rounded-3xl p-6 border border-white/60 shadow-xl transition-all duration-500 group-hover:-translate-y-3 group-hover:shadow-2xl overflow-hidden" >
                                <?php if($hero_item_icon_3):?>
                                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#7B61FF] to-[#00D9FF] opacity-10 blur-2xl rounded-full translate-x-10 -translate-y-10 group-hover:opacity-30 transition-opacity duration-500" ></div>
                                <div  class="relative w-14 h-14 rounded-2xl bg-gradient-to-br from-[#7B61FF] to-[#00D9FF] flex items-center justify-center mb-5 shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-500" >
                                    <?php echo $hero_item_icon_3;?>    
                                </div>
                                <?php endif;?>
                                <div class="flex items-center gap-2 mb-3">
                                    <?php if($hero_item_category_3):?>
                                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-[#7B61FF] to-[#00D9FF] text-white" ><?php echo $hero_item_category_3;?></span>
                                        <?php endif;?>
                                        <?php if($hero_item_views_3):?>
                                        <span class="text-xs text-muted-foreground font-medium"><?php echo $hero_item_views_3;?></span>
                                        <?php endif;?>
                                </div>
                                <?php if($hero_item_title_3):?>
                                <h3 class="font-display font-bold text-lg text-foreground leading-snug mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-foreground group-hover:to-foreground/70 transition-all duration-300">
                                    <?php echo $hero_item_title_3;?>
                                </h3>
                                <?php endif;?>
                                <?php if($hero_item_link_text_3):?>
                                <div class="flex items-center gap-2 text-sm font-semibold text-primary opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                    <?php echo $hero_item_link_text_3;?><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </div>
                                <?php endif;?>
                                <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent transition-transform duration-1000 skew-x-12"></div>
                            </div>
                        </a>
                        <?php endwhile; endif;?>
                    </div>
                </div>
                <div class="animate-fade-up-delay-3">
                    <?php
                        $hero_menu_title = get_field('hero_menu_title');
                        if($hero_menu_title):
                    ?>
                    <p class="text-center text-sm text-muted-foreground mb-8 uppercase tracking-widest font-medium"><?php echo $hero_menu_title;?></p>
                    <?php endif;?>
                    <?php if(have_rows('hero_menu_item')):?>
                    <div class="flex flex-wrap items-center justify-center gap-12 md:gap-16">
                        <?php while(have_rows('hero_menu_item')): the_row();
                            $menu_text = get_sub_field('menu_text');
                            $menu_link = get_sub_field('menu_link');

                            if($menu_link and $menu_text):
                        ?>
                        <a href="<?php echo $menu_link;?>" class="cursor-pointer text-2xl md:text-3xl font-display font-bold text-muted-foreground/30 hover:text-muted-foreground/60 transition-all duration-500 cursor-default hover:scale-110">
                            <?php echo $menu_text;?>
                        </a>
                        <?php endif; endwhile;?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <?php if(have_rows('free_tools')):
            while(have_rows('free_tools')): the_row();
            $free_tools_badge_text = get_sub_field('free_tools_badge_text');
            $free_tools_title_black = get_sub_field('free_tools_title_black');
            $free_tools_title_colored = get_sub_field('free_tools_title_colored');
            $free_tools_description = get_sub_field('free_tools_description');
            ?>
        <section id="tools" class="py-32 relative overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div  class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-full blur-3xl animate-pulse-slow"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-gradient-to-br from-secondary/20 to-accent/20 rounded-full blur-3xl animate-pulse-slower"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-radial from-primary/5 to-transparent rounded-full"></div>
            </div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-20 relative">
                    <?php if($free_tools_badge_text):?>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-primary/10 via-secondary/10 to-accent/10 border border-primary/20 mb-6">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-zap w-4 h-4 text-primary animate-pulse"
                        >
                        <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                        </svg>
                        <span class="text-sm font-semibold bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent">
                            <?php echo $free_tools_badge_text;?>
                        </span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-sparkles w-4 h-4 text-accent animate-pulse"
                        >
                            <path
                                d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"
                            ></path>
                            <path d="M20 3v4"></path>
                            <path d="M22 5h-4"></path>
                            <path d="M4 17v2"></path>
                            <path d="M5 18H3"></path>
                        </svg>
                    </div>
                    <?php endif;?>

                    <?php if($free_tools_title_black and $free_tools_title_colored):?>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold mb-6">
                        <span class="text-foreground"><?php echo $free_tools_title_black;?> </span>
                        <span class="relative">
                            <span class="bg-gradient-to-r from-primary via-secondary to-accent bg-clip-text text-transparent"><?php echo $free_tools_title_colored;?></span>
                            <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none">
                                <path
                                    d="M2 10C50 4 100 2 150 6C200 10 250 4 298 8"
                                    stroke="url(#gradient-line)"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    class="animate-draw"
                                ></path>
                                <defs>
                                    <linearGradient id="gradient-line" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" stop-color="hsl(var(--primary))"></stop>
                                        <stop offset="50%" stop-color="hsl(var(--secondary))"></stop>
                                        <stop offset="100%" stop-color="hsl(var(--accent))"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                    </h2>
                    <?php endif;?>
                    <?php if($free_tools_description):?>
                    <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                        <?php echo $free_tools_description;?>
                    </p>
                    <?php endif;?>
                </div>
                 <?php if(have_rows('free_tool_item')):
                    $classes = [
                            'relative w-16 h-16 rounded-2xl bg-gradient-to-br from-violet-500 via-purple-500 to-fuchsia-500 p-[1px] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3',
                            'relative w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 p-[1px] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3',
                            'relative w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-500 via-pink-500 to-rose-500 p-[1px] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3',
                            'relative w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 via-indigo-500 to-violet-500 p-[1px] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3',
                            'relative w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-500 via-orange-500 to-red-500 p-[1px] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3',
                            'relative w-16 h-16 rounded-2xl bg-gradient-to-br from-cyan-500 via-blue-500 to-purple-500 p-[1px] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3'
                        ];

                        $toolItemCount = 0;
                    ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <?php while(have_rows('free_tool_item')): the_row(); ;

                        $currentClass = $classes[$toolItemCount % count($classes)];

                        $tool_icon = get_sub_field('tool_icon');
                        $tool_views_count = get_sub_field('tool_views_count');
                        $tool_title = get_sub_field('tool_title');
                        $tool_text = get_sub_field('tool_text');
                        $tool_price = get_sub_field('tool_price');
                        $tool_link = get_sub_field('tool_link');

                        $free_tool_item_link_text = get_field('free_tool_item_link_text');

                        $toolItemCount++;
                    ?>
                    <a href="<?php echo $tool_link ? $tool_link: '';?>" class="group relative cursor-pointer lg:row-span-1" style="animation-delay: 0ms">
                        <div class="relative h-full p-[1px] rounded-3xl bg-gradient-to-br from-border/50 via-transparent to-border/50 transition-all duration-500 group-hover:from-primary/50 group-hover:via-secondary/30 group-hover:to-accent/50">
                            <div class="relative h-full bg-background/80 backdrop-blur-xl rounded-3xl p-8 overflow-hidden transition-all duration-500 group-hover:bg-background/90 group-hover:shadow-2xl group-hover:shadow-primary/10 group-hover:-translate-y-2">
                                <div class="absolute -top-20 -right-20 w-40 h-40 bg-violet-500/20 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" ></div>
                                <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-violet-500/20 rounded-full blur-3xl opacity-0 group-hover:opacity-60 transition-opacity duration-700" ></div>
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                    <div class="absolute w-1 h-1 bg-primary/40 rounded-full animate-float-particle"
                                        style="left: 20%; top: 30%; animation-delay: 0s"
                                    ></div>
                                    <div class="absolute w-1 h-1 bg-primary/40 rounded-full animate-float-particle"
                                        style="left: 35%; top: 40%; animation-delay: 0.2s"
                                    ></div>
                                    <div class="absolute w-1 h-1 bg-primary/40 rounded-full animate-float-particle"
                                        style="left: 50%; top: 50%; animation-delay: 0.4s"
                                    ></div>
                                    <div class="absolute w-1 h-1 bg-primary/40 rounded-full animate-float-particle"
                                        style="left: 65%; top: 60%; animation-delay: 0.6s"
                                    ></div>
                                    <div class="absolute w-1 h-1 bg-primary/40 rounded-full animate-float-particle"
                                        style="left: 80%; top: 70%; animation-delay: 0.8s"
                                    ></div>
                                </div>
                                <div class="relative z-10">
                                    <div class="flex items-start justify-between mb-6">
                                        <div class="<?php echo $currentClass; ?>">
                                            <?php if($tool_icon):?>
                                            <div class="w-full h-full rounded-2xl bg-background/20 backdrop-blur-sm flex items-center justify-center">
                                                <?php echo $tool_icon;?>
                                            </div>
                                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-violet-500 via-purple-500 to-fuchsia-500 opacity-0 group-hover:opacity-50 blur-xl transition-opacity duration-500"></div>
                                            <?php endif;?>
                                        </div>
                                        <?php if($tool_views_count):?>
                                        <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gradient-to-r from-muted/80 to-muted/40 border border-border/50 backdrop-blur-sm">
                                            <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                                            <span class="text-xs font-semibold text-muted-foreground"><?php echo $tool_views_count;?></span>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                    <?php if($tool_title):?>
                                    <h3 class="text-xl font-bold font-display mb-3 transition-all duration-300 group-hover:bg-gradient-to-r group-hover:from-foreground group-hover:via-primary group-hover:to-secondary group-hover:bg-clip-text group-hover:text-transparent">
                                        <?php echo $tool_title;?>
                                    </h3>
                                    <?php endif;?>
                                    <?php if($tool_text):?>
                                    <p class="text-muted-foreground text-sm leading-relaxed mb-6">
                                        <?php echo $tool_text;?>
                                    </p>
                                    <?php endif;?>
                                    <?php if($tool_price):?>
                                    <div class="flex items-center justify-between pt-5 border-t border-border/30">
                                        <div class="flex items-center gap-2">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-sparkles w-4 h-4 text-primary/60"
                                            >
                                                <path
                                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"
                                                ></path>
                                                <path d="M20 3v4"></path>
                                                <path d="M22 5h-4"></path>
                                                <path d="M4 17v2"></path>
                                                <path d="M5 18H3"></path></svg><span class="text-xs text-muted-foreground font-medium"><?php echo $tool_price;?></span>
                                        </div>
                                        <div class="flex items-center gap-2 text-sm font-semibold opacity-0 group-hover:opacity-100 transition-all duration-300 translate-x-4 group-hover:translate-x-0"
                                        >
                                            <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent"><?php echo $free_tool_item_link_text ? $free_tool_item_link_text : 'Try Now';?></span>
                                            <div
                                                class="w-6 h-6 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right w-3 h-3 text-white"
                                                >
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                </div>
                                <div
                                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none overflow-hidden rounded-3xl"
                                >
                                    <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-[200%] transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile;?>
                </div>
                <?php endif;?>
                <?php if(have_rows('free_tools_more_banner')):
                    while(have_rows('free_tools_more_banner')): the_row();
                    $free_tool_more_banner_text = get_sub_field('free_tool_more_banner_text');
                    $free_tool_more_banner_btn_text = get_sub_field('free_tool_more_banner_btn_text');
                    $free_tool_more_banner_btn_link = get_sub_field('free_tool_more_banner_btn_link');
                    ?>
                <div class="text-center mt-16">
                    <div class="inline-flex items-center gap-4 px-8 py-4 rounded-2xl bg-gradient-to-r from-muted/50 via-muted/30 to-muted/50 border border-border/50 backdrop-blur-sm">
                        <?php if($free_tool_more_banner_text):?>
                        <span class="text-muted-foreground"><?php echo $free_tool_more_banner_text;?></span>
                        <?php endif;?>
                        <?php if($free_tool_more_banner_btn_text and $free_tool_more_banner_btn_link):?>
                        <a href="<?php echo $free_tool_more_banner_btn_link;?>"
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-primary to-secondary text-white font-semibold text-sm transition-all duration-300 hover:shadow-lg hover:shadow-primary/25 hover:scale-105"
                            >
                            <span><?php echo $free_tool_more_banner_btn_text;?></span><svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-arrow-right w-4 h-4"
                            >
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                        <?php endif;?>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </section>
        <?php endwhile; endif;?>
        <?php
                        
                        
            $news = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'order'     => 'DESC'
            );
            $news_query = new WP_Query($news); 
            $count = 0;

            if ( $news_query->have_posts() ):
        ?>
        <?php if(have_rows('blog_posts')):
            while(have_rows('blog_posts')): the_row();
            $blog_posts_section_title = get_sub_field('blog_posts_section_title');
            $blog_posts_section_text = get_sub_field('blog_posts_section_text');
            $blog_posts_section_btn_text = get_sub_field('blog_posts_section_btn_text');
            $blog_posts_section_btn_link = get_sub_field('blog_posts_section_btn_link');
            ?>
        <section id="guides" class="py-24 lg:py-32 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-primary/5 via-secondary/10 to-background"></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-12">
                    <?php if($blog_posts_section_title):?>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-foreground mb-4"><?php echo $blog_posts_section_title;?></h2>
                    <?php endif;?>
                    <?php if($blog_posts_section_text):?>
                    <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                        <?php echo $blog_posts_section_text;?>
                    </p>
                    <?php endif;?>
                </div>
                <div class="flex justify-end gap-2 mb-6">
                    <button
                        class="home__prev w-10 h-10 rounded-full bg-card border border-border flex items-center justify-center hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all disabled:opacity-30 disabled:cursor-not-allowed disabled:hover:bg-card disabled:hover:text-foreground disabled:hover:border-border"
                        aria-label="Scroll left"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-chevron-left w-5 h-5"
                        >
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </button>
                    <button
                        class="home__next w-10 h-10 rounded-full bg-card border border-border flex items-center justify-center hover:bg-primary hover:text-primary-foreground hover:border-primary transition-all disabled:opacity-30 disabled:cursor-not-allowed disabled:hover:bg-card disabled:hover:text-foreground disabled:hover:border-border"
                        aria-label="Scroll right"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-chevron-right w-5 h-5"
                        >
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                </div>
                <div class="home__carousel">
                    <div class="swiper-wrapper">
                        <?php 
                            while ($news_query->have_posts()) : $news_query->the_post(); $count ++;
                            $link = get_permalink();
                            $src = get_the_post_thumbnail_url($post->ID);
                            $thumbnail_id = get_post_thumbnail_id( $post->ID );
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            $excerpt = get_the_excerpt();
                            
                            $excerpt_trimmed = mb_strlen($excerpt) > 113 
                            ? mb_substr($excerpt, 0, 113) . '…' 
                            : $excerpt;

                            $post_min_read = get_field('post_min_read', $post->ID);

                            $categories = get_the_category($post->ID);

                            if (!empty($categories)) {
                                $category_name = $categories[0]->name;
                            }

                        ?>
                        <article class="flex-shrink-0 w-[340px] md:w-[380px] snap-start group home__carousel-item swiper-slide">
                            <div  class="h-full rounded-3xl bg-card/80 backdrop-blur-sm border border-border/50 p-6 hover:border-primary/30 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300" >
                                <div class="relative rounded-2xl overflow-hidden mb-6 aspect-[4/3]">
                                    <?php if($src):?>
                                    <img
                                        src="<?php echo $src;?>"
                                        alt="<?php the_title();?>"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    />
                                    <?php else : ?>
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/template/post-placeholder.png"
                                        alt="Complete Faceless YouTube Automation Guide 2024"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                    />
                                    <?php endif;?>
                                    <?php if (!empty($categories)) : ?>
                                        <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-background/90 backdrop-blur-sm text-xs font-medium text-foreground">
                                            <?php echo esc_html($category_name); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if($post_min_read):?>
                                <div class="flex items-center gap-2 text-muted-foreground text-sm mb-3">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-clock w-4 h-4"
                                    >
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline></svg>
                                        <?php echo $post_min_read;?>
                                </div>
                                <?php endif;?>
                                <h3 class="text-xl font-bold text-foreground mb-3 line-clamp-2 group-hover:text-primary transition-colors">
                                    <?php the_title();?>
                                </h3>
                                <p class="text-muted-foreground text-sm mb-6 line-clamp-3">
                                    <?php echo esc_html($excerpt_trimmed);?>
                                </p>
                                <a href="<?php echo $link;?>"  class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] h-12 px-7 py-2 rounded-full">
                                Learn more
                                </a>
                            </div>
                        </article>
                        <?php endwhile; wp_reset_query();?>
                    </div>
                </div>

                <?php if($blog_posts_section_btn_text and $blog_posts_section_btn_link):?>
                <div class="text-center mt-12">
                    <a href="<?php echo $blog_posts_section_btn_link;?>" class="inline-flex items-center justify-center whitespace-nowrap font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 h-14 text-base rounded-full px-8 gap-2">
                        <?php echo $blog_posts_section_btn_text;?><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-arrow-right w-4 h-4"
                        >
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <?php endif;?>
            </div>
        </section>
        <?php endwhile; endif;?>
        <?php endif;?>

        <?php if(have_rows('subscribe_box')):
            while(have_rows('subscribe_box')): the_row();
            $subscribe_box_bagde_text = get_sub_field('subscribe_box_bagde_text');
            $subscribe_box_title_black = get_sub_field('subscribe_box_title_black');
            $subscribe_box_colored = get_sub_field('subscribe_box_colored');
            $subscribe_box_text = get_sub_field('subscribe_box_text');
            $subscribe_box_form_shortcode = get_sub_field('subscribe_box_form_shortcode');
            $subscribe_box_footer_text = get_sub_field('subscribe_box_footer_text');
            ?>
        <section id="subscribe" class="py-28 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-accent/5 to-secondary/10"></div>
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-radial from-primary/20 to-transparent rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-gradient-radial from-accent/20 to-transparent rounded-full blur-3xl animate-pulse"style="animation-delay: 1s" ></div>
            <div class="absolute top-20 left-10 w-3 h-3 rounded-full bg-primary/40 animate-bounce" style="animation-duration: 3s"></div>
            <div class="absolute top-40 right-20 w-2 h-2 rounded-full bg-accent/50 animate-bounce"  style="animation-duration: 2.5s; animation-delay: 0.5s"></div>
            <div class="absolute bottom-32 left-1/3 w-4 h-4 rounded-full bg-primary/30 animate-bounce" style="animation-duration: 4s; animation-delay: 1s" ></div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="relative rounded-3xl overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-main rounded-3xl p-[2px]">
                            <div class="absolute inset-[2px] bg-background rounded-3xl"></div>
                        </div>
                        <div class="relative bg-card/80 backdrop-blur-xl rounded-3xl p-8 sm:p-12 lg:p-16 border border-border/50">
                            <?php if($subscribe_box_bagde_text):?>
                            <div class="flex justify-center mb-8">
                                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-main text-white text-sm font-medium shadow-lg" >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-sparkles w-4 h-4"
                                    >
                                        <path
                                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"
                                        ></path>
                                        <path d="M20 3v4"></path>
                                        <path d="M22 5h-4"></path>
                                        <path d="M4 17v2"></path>
                                        <path d="M5 18H3"></path></svg><span><?php echo $subscribe_box_bagde_text;?></span>
                                </div>
                            </div>
                            <?php endif;?>
                            <div class="text-center mb-10">
                                <?php if($subscribe_box_title_black and $subscribe_box_colored):?>
                                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold mb-5">
                                    <?php echo $subscribe_box_title_black?> <span class="text-gradient"><?php echo $subscribe_box_colored?> </span>
                                </h2>
                                <?php endif;?>
                                <?php if($subscribe_box_text):?>
                                <p class="text-muted-foreground text-lg max-w-2xl mx-auto leading-relaxed">
                                    <?php echo $subscribe_box_text;?>
                                </p>
                                <?php endif;?>
                            </div>
                            <?php if(have_rows('subscribe_box_list_item')):?>
                            <div class="flex flex-wrap justify-center gap-4 sm:gap-8 mb-10">
                                <?php while(have_rows('subscribe_box_list_item')): the_row();
                                    $subscribe_box_list_item_text = get_sub_field('subscribe_box_list_item_text');
                                    if($subscribe_box_list_item_text):
                                ?>
                                <div class="flex items-center gap-2 text-sm text-muted-foreground">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-circle-check w-4 h-4 text-primary"
                                    >
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="m9 12 2 2 4-4"></path></svg>
                                        <span><?php echo $subscribe_box_list_item_text?></span>
                                </div>
                                <?php endif; endwhile;?>
                            </div>
                            <?php endif;?>
                            <div class="max-w-lg mx-auto">
                                <?php echo do_shortcode($subscribe_box_form_shortcode);?>
                                <?php if($subscribe_box_footer_text):?>
                                <p class="text-xs text-muted-foreground text-center mt-4"><?php echo $subscribe_box_footer_text;?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; endif;?>
    </main>
</div>

<?php get_footer(); ?>