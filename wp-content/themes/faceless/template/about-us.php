<?php 
/* 
    Template Name: About Us 
*/ 
?>
<?php get_header(); ?>


<div class="min-h-screen bg-background">

    <main class="relative overflow-hidden">
        <?php if(have_rows('page_hero')):
            while(have_rows('page_hero')): the_row();
            $hero_bagde_text = get_sub_field('hero_bagde_text');
            $hero_title_back = get_sub_field('hero_title_back');
            $hero_title_colored = get_sub_field('hero_title_colored');
            $hero_text = get_sub_field('hero_text');

            $hero_btn_text = get_sub_field('hero_btn_text');
            $hero_btn_link = get_sub_field('hero_btn_link');

            $hero_btn_2_text = get_sub_field('hero_btn_2_text');
            $hero_btn_2_link = get_sub_field('hero_btn_2_link');

            $animated_circle_item_title_1 = get_sub_field('animated_circle_item_title_1');
            $animated_circle_item_title_2 = get_sub_field('animated_circle_item_title_2');
            $animated_circle_item_title_3 = get_sub_field('animated_circle_item_title_3');

            $animated_circle_item_text_1 = get_sub_field('animated_circle_item_text_1');
            $animated_circle_item_text_2 = get_sub_field('animated_circle_item_text_2');
            $animated_circle_item_text_3 = get_sub_field('animated_circle_item_text_3');

            ?>

        <section class="relative pt-32 pb-20 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">
                    <div style="opacity: 1; transform: none;">
                        <?php if($hero_bagde_text):?>
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4">
                                <path
                                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                                </path>
                                <path d="M20 3v4"></path>
                                <path d="M22 5h-4"></path>
                                <path d="M4 17v2"></path>
                                <path d="M5 18H3"></path>
                            </svg><?php echo $hero_bagde_text;?>
                        </div>
                        <?php endif;?>
                        <?php if($hero_title_back or $hero_title_colored):?>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold leading-[1.1] mb-6">
                            <?php echo $hero_title_back ? $hero_title_back : '';?> <span
                                class="text-gradient"><?php echo $hero_title_colored ? $hero_title_colored : '';?></span>
                        </h1>
                        <?php endif;?>
                        <?php if($hero_text):?>
                        <p class="text-muted-foreground text-lg md:text-xl mb-8 max-w-lg">
                            <?php echo $hero_text;?>
                        </p>
                        <?php endif;?>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <?php if($hero_btn_text and $hero_btn_link):?>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] h-12 bg-gradient-main hover:opacity-90 text-primary-foreground rounded-full px-8 py-6 text-base"
                                    href="<?php echo $hero_btn_link;?>">
                                    <?php echo $hero_btn_text;?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 w-4 h-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                            <?php endif;?>
                            <?php if($hero_btn_2_text and $hero_btn_2_link):?>
                            <a href="<?php echo $hero_btn_2_link;?>"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 h-12 rounded-full px-8 py-6 text-base"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-handshake mr-2 w-4 h-4">
                                    <path d="m11 17 2 2a1 1 0 1 0 3-3"></path>
                                    <path
                                        d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4">
                                    </path>
                                    <path d="m21 3 1 11h-2"></path>
                                    <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path>
                                    <path d="M3 4h8"></path>
                                </svg><?php echo $hero_btn_2_text;?>
                            </a>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="relative" style="opacity: 1; transform: none;">
                        <div class="relative aspect-square max-w-lg mx-auto">
                            <div class="animate-float-rotate absolute inset-0 rounded-full bg-gradient-to-r from-primary via-secondary to-accent p-[3px]"
                                style="transform: rotate(40.272deg);">
                                <div class="w-full h-full rounded-full bg-background"></div>
                            </div>
                            <div
                                class="absolute inset-8 rounded-full bg-gradient-to-br from-primary/10 via-secondary/5 to-accent/10 flex items-center justify-center">
                                <?php if($animated_circle_item_title_1 and $animated_circle_item_text_1):?>
                                <div class="absolute animate-float-6 -top-4 -right-4 bg-card border border-border rounded-2xl px-5 py-4 shadow-lg"
                                    style="transform: translateY(2.83938px);">
                                    <div class="text-2xl font-display font-bold text-gradient">
                                        <?php echo $animated_circle_item_title_1;?></div>
                                    <div class="text-xs text-muted-foreground">
                                        <?php echo $animated_circle_item_text_1;?></div>
                                </div>
                                <?php endif;?>
                                <?php if($animated_circle_item_title_2 and $animated_circle_item_text_2):?>
                                <div class="absolute animate-float-5 -bottom-4 -left-4 bg-card border border-border rounded-2xl px-5 py-4 shadow-lg"
                                    style="transform: translateY(4.35733px);">
                                    <div class="text-2xl font-display font-bold text-gradient">
                                        <?php echo $animated_circle_item_title_2;?></div>
                                    <div class="text-xs text-muted-foreground">
                                        <?php echo $animated_circle_item_text_2;?></div>
                                </div>
                                <?php endif;?>
                                <?php if($animated_circle_item_title_3 and $animated_circle_item_text_3):?>
                                <div class="absolute animate-float-5 top-1/2 -right-8 bg-card border border-border rounded-2xl px-5 py-4 shadow-lg"
                                    style="transform: translateY(-1.3067px);">
                                    <div class="text-2xl font-display font-bold text-gradient">
                                        <?php echo $animated_circle_item_title_3;?></div>
                                    <div class="text-xs text-muted-foreground">
                                        <?php echo $animated_circle_item_text_3;?></div>
                                </div>
                                <?php endif;?>
                                <div class="relative w-full h-full flex items-center justify-center">
                                    <div class="animate-float-9 absolute w-32 h-32 rounded-full bg-gradient-main"></div>
                                    <div class="animate-float-8 absolute w-40 h-40 rounded-full bg-gradient-main"></div>
                                    <div class="animate-float-7 relative flex flex-col items-center">
                                        <div
                                            class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-main flex items-center justify-center shadow-2xl">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-ghost w-10 h-10 sm:w-12 sm:h-12 text-primary-foreground">
                                                <path d="M9 10h.01"></path>
                                                <path d="M15 10h.01"></path>
                                                <path
                                                    d="M12 2a8 8 0 0 0-8 8v12l3-3 2.5 2.5L12 19l2.5 2.5L17 19l3 3V10a8 8 0 0 0-8-8z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; endif;?>

        <?php if(have_rows('trusted_item')):
            $trusted_section_title = get_field('trusted_section_title');
            ?>
        <section class="py-16 px-4 border-y border-border/30">
            <div class="max-w-6xl mx-auto">
                <?php if($trusted_section_title):?>
                <p class="text-center text-sm text-muted-foreground mb-8 uppercase tracking-widest">
                    <?php echo $trusted_section_title;?>
                </p>
                <?php endif;?>
                <?php if(have_rows('trusted_item')): ?>
                <div class="flex flex-wrap items-center justify-center gap-10 md:gap-16">
                    <?php while(have_rows('trusted_item')): the_row();
                        $trusted_item_text = get_sub_field('trusted_item_text');
                    ?>
                    <?php if($trusted_item_text):?>
                    <span
                        class="text-2xl md:text-3xl font-display font-bold text-muted-foreground/25 hover:text-muted-foreground/50 transition-colors duration-300"
                        style="opacity: 1;"><?php echo $trusted_item_text;?>
                    </span>
                    <?php endif?>
                    <?php endwhile;?>
                </div>
                <?php endif;?>
            </div>
        </section>
        <?php endif;?>

        <?php if(have_rows('partnerships')): 
            while(have_rows('partnerships')): the_row(); 
            $partnerships_subtitle = get_sub_field('partnerships_subtitle');
            $partnerships_title_black = get_sub_field('partnerships_title_black');
            $partnerships_title_black_2 = get_sub_field('partnerships_title_black_2');
            $partnerships_title_colored = get_sub_field('partnerships_title_colored');
            $partnership_footer_text = get_sub_field('partnership_footer_text');
            ?>
        <section class="py-28 px-4 relative overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-br from-primary/5 via-secondary/5 to-accent/5 rounded-full blur-3xl">
                </div>
            </div>
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-16" style="opacity: 1; transform: none;">
                    <?php if($partnerships_subtitle): ?>
                    <p class="text-primary font-medium mb-4 uppercase tracking-wider text-sm">
                        <?php echo $partnerships_subtitle;?>
                    </p>
                    <?php endif;?>
                    <?php if($partnerships_title_black and $partnerships_title_colored):?>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-bold leading-snug">
                        <?php echo $partnerships_title_black;?>
                        <span class="text-gradient"><?php echo $partnerships_title_colored;?></span>
                        <?php echo $partnerships_title_black_2;?>
                    </h2>
                    <?php endif;?>
                </div>
                <?php if(have_rows('partnership_item')): $partnerItemCount = 0;?>
                <div class="grid md:grid-cols-3 gap-6">

                    <?php  while(have_rows('partnership_item')): the_row(); $partnerItemCount++;
                        $partnership_item_icon = get_sub_field('partnership_item_icon');
                        $partnership_item_name = get_sub_field('partnership_item_name');
                        $partnership_item_text = get_sub_field('partnership_item_text');

                        $classes = [
                            1 => "inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-secondary mb-6 group-hover:scale-110 transition-transform duration-300",
                            2 => "inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-secondary to-accent mb-6 group-hover:scale-110 transition-transform duration-300",
                            3 => "inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-primary mb-6 group-hover:scale-110 transition-transform duration-300",
                            4 => "inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-primary via-secondary to-accent mb-6 group-hover:scale-110 transition-transform duration-300",
                        ];

                        $index = ($partnerItemCount - 1) % 4 + 1;

                        $className = $classes[$index];
                    ?>
                    <div class="group relative" style="opacity: 1; transform: none;">
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-br from-primary to-secondary rounded-3xl opacity-0 group-hover:opacity-20 blur-xl transition-opacity duration-500">
                        </div>
                        <div
                            class="relative bg-card border border-border/50 rounded-3xl p-8 h-full hover:border-primary/20 transition-all duration-300">
                            <?php if($partnership_item_icon):?>
                            <div class="partners__icon <?php echo $className;?>">
                                <?php echo $partnership_item_icon;?>
                            </div>
                            <?php endif;?>
                            <?php if($partnership_item_name):?>
                            <h3 class="text-xl font-display font-bold mb-3"><?php echo $partnership_item_name;?></h3>
                            <?php endif;?>
                            <?php if($partnership_item_text):?>
                            <p class="text-muted-foreground leading-relaxed">
                                <?php echo $partnership_item_text;?>
                            </p>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php endif;?>
                <?php if($partnership_footer_text):?>
                <div class="mt-16 text-center" style="opacity: 1; transform: none;">
                    <p class="text-muted-foreground text-lg"><?php echo $partnership_footer_text;?></p>
                </div>
                <?php endif;?>
            </div>
        </section>
        <?php endwhile; endif;?>

        <?php if(have_rows('brand_item')):
            $brands_title_black = get_field('brands_title_black');
            $brands_title_colored = get_field('brands_title_colored');
            ?>
        <section class="py-20 px-4 bg-muted/30">
            <div class="max-w-4xl mx-auto">
                <?php if($brands_title_black and $brands_title_colored):?>
                <div class="text-center mb-12" style="opacity: 1; transform: none;">
                    <h2 class="text-3xl sm:text-4xl font-display font-bold">
                        <?php echo $brands_title_black;?> <span
                            class="text-gradient"><?php echo $brands_title_colored;?></span>
                    </h2>
                </div>
                <?php endif;?>
                <div class="grid sm:grid-cols-2 gap-8">
                    <?php while(have_rows('brand_item')): the_row();
                        $brand_item_icon = get_sub_field('brand_item_icon');
                        $brand_item_name = get_sub_field('brand_item_name');
                        $brand_item_text = get_sub_field('brand_item_text');
                    ?>
                    <div class="flex gap-4" style="opacity: 1; transform: none;">
                        <?php if($brand_item_icon):?>
                        <div
                            class="brang__icon flex-shrink-0 w-12 h-12 rounded-2xl bg-gradient-to-br from-primary/10 to-secondary/10 flex items-center justify-center">
                            <?php echo $brand_item_icon;?>
                        </div>
                        <?php endif;?>
                        <div>
                            <?php if($brand_item_name):?>
                            <h3 class="font-display font-bold mb-1"><?php echo $brand_item_name;?></h3>
                            <?php endif;?>
                            <?php if($brand_item_text):?>
                            <p class="text-muted-foreground text-sm">
                                <?php echo $brand_item_text;?>
                            </p>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </section>
        <?php endif;?>

        <?php if(have_rows('subscribe')):
            while(have_rows('subscribe')): the_row();
            $cta_icon = get_sub_field('subscribe_icon');
            $cta_title = get_sub_field('subscribe_title');
            $cta_text = get_sub_field('subscribe_text');
            $subscribe_bottom_text = get_sub_field('subscribe_bottom_text');
            $subscribe_bottom_link_text = get_sub_field('subscribe_bottom_link_text');
            $subscribe_bottom_link = get_sub_field('subscribe_bottom_link');
            ?>
        <section class="py-28 px-4">
            <div class="max-w-xl mx-auto text-center" style="opacity: 1; transform: none;">
                <?php if($cta_icon):?>
                <div
                    class="cta__icon inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-main mb-6">
                    <?php echo $cta_icon;?>
                </div>
                <?php endif;?>
                <?php if($cta_title):?>
                <h2 class="text-2xl md:text-3xl font-display font-bold mb-4"><?php echo $cta_title;?></h2>
                <?php endif;?>
                <?php if($cta_text):?>
                <p class="text-muted-foreground mb-8">
                    <?php echo $cta_text;?>
                </p>
                <?php endif;?>
                <div class="flex flex-col sm:flex-row gap-3">
                    <?php echo do_shortcode('[contact-form-7 id="27d6ae0" title="Home sobscribe form"]');?>
                </div>
                <?php if($subscribe_bottom_text and $subscribe_bottom_link_text and $subscribe_bottom_link):?>
                <p class="text-muted-foreground text-sm mt-6">
                    <?php echo $subscribe_bottom_text;?>
                    <a href="<?php echo $subscribe_bottom_link;?>" class="text-primary hover:underline"><?php echo $subscribe_bottom_link_text;?></a>
                </p>
                <?php endif;?>
            </div>
        </section>
        <?php endwhile; endif;?>
        <div class="max-w-6xl mx-auto px-4">
            <div class="h-px bg-border/50"></div>
        </div>
    </main>
</div>


<?php get_footer(); ?>