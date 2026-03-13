<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="icon" href="<?php  get_site_icon_url();?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- HEADER -->
    <header class="header">
        <div
            class="header__row fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-xl border-b border-border/50 flex items-center">
            <div class="header__navs container mx-auto px-6 flex items-center justify-between">
                <?php 
                    $logo = get_field('logo', 'options');
                    if($logo):
                ?>
                <a href="<?php echo get_home_url();?>" class="header__logo flex items-center gap-2.5">
                    <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>">
                </a>
                <?php endif;?>
                <?php if(have_rows('menu', 'option')):
                    while(have_rows('menu', 'option')): the_row();
                    $right_top_text = get_sub_field('right_top_text');
                    $post_image = get_sub_field('post_image');
                    $post_title = get_sub_field('post_title');
                    $post_min_read = get_sub_field('post_min_read');
                    $post_category_text = get_sub_field('post_category_text');
                    $post_featured_text = get_sub_field('post_featured_text');
                    $post_view_count = get_sub_field('post_view_count');
                    $post_btn_text = get_sub_field('post_btn_text');
                    $post_btn_link = get_sub_field('post_btn_link');
                    $menu_footer_btn_link = get_sub_field('menu_footer_btn_link');
                    $menu_footer_btn_text = get_sub_field('menu_footer_btn_text');
                    ?>
                <div class="header__nav">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Faceless Hub</a>
                            <div class="header__sub-menu">
                                <div
                                    class="header__sub-box relative bg-white rounded-3xl border border-border/50 shadow-2xl overflow-hidden">
                                    <div class="header__sub-menurow flex items-center gap-1 p-3 border-b border-border/30 bg-muted/20">
                                        <?php if(have_rows('box_item')):
                                            $titlesCpunt = 0;
                                            while(have_rows('box_item')): the_row(); $titlesCpunt++;
                                            $box_item_title = get_sub_field('box_item_title');
                                            $box_item_element_icon_color = get_sub_field('box_item_element_icon_color');
                                            ?>
                                        <?php if($box_item_title):?>    
                                        <button data-color="<?php echo $box_item_element_icon_color ? $box_item_element_icon_color : '#000'?>"
                                                style="--icon-color: <?php echo $box_item_element_icon_color ? $box_item_element_icon_color : '#000'?>;" 
                                                data-content="<?php echo $box_item_title;?>"
                                                class="header__submenu-btn  relative px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 text-white <?php echo $titlesCpunt === 1 ? 'header__submenu-btn--active': ''; ?>">
                                            <span class="relative z-10"><?php echo $box_item_title;?></span>
                                        </button>
                                        <?php endif;?>
                                        <?php endwhile; endif;?>
                                        <div class="flex-1"></div>
                                        <div
                                            class="header__sub-creators flex items-center gap-2 px-3 py-1.5 rounded-full bg-gradient-to-r from-[#FF00E5]/10 to-[#FFB800]/10 border border-[#FF00E5]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trending-up w-3.5 h-3.5 text-[#FF00E5]">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg>
                                            <?php if($right_top_text):?>
                                            <span class="text-xs font-medium text-foreground"><?php echo $right_top_text;?></span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <?php if(have_rows('box_item')):
                                        $nitemsCpunt = 0;
                                        while(have_rows('box_item')): the_row(); $nitemsCpunt++;
                                        $nbox_item_title = get_sub_field('box_item_title');
                                        $nbox_item_element_icon_color = get_sub_field('box_item_element_icon_color');

                                        $box_items_data[] = [
                                            'title' => get_sub_field('box_item_title'),
                                            'color' => get_sub_field('box_item_element_icon_color'),
                                        ];
                                    ?>
                                    <?php endwhile; endif;?>
                                    <?php if(have_rows('box_item')):
                                        $itemsCpunt = 0;
                                        while(have_rows('box_item')): the_row(); $itemsCpunt++;
                                        $box_item_title = get_sub_field('box_item_title');
                                        $box_item_element_icon_color = get_sub_field('box_item_element_icon_color');
                                    ?>
                                    <div data-content="<?php echo $box_item_title ? $box_item_title: '';?>" class="header__sub-menucontent <?php echo $itemsCpunt === 1 ? 'header__sub-menucontent--active': '';?> flex">
                                        <div class="header__sub-image w-[320px] p-4 border-r border-border/30">
                                            <a
                                                href="#" class="group block relative rounded-2xl overflow-hidden">
                                                <div class="relative aspect-[4/3]">
                                                    <?php if($post_image):?>
                                                        <img src="<?php echo $post_image['url'];?>" alt="<?php echo $post_image['alt'];?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                                    <?php endif;?>    
                                                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                                                    <div
                                                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 overflow-hidden">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/25 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                                                    </div>
                                                    <div
                                                        class="absolute top-3 left-3 flex items-center gap-1.5 px-2.5 py-1 bg-gradient-to-r from-[#FFB800] to-[#FF6B00] rounded-full shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-star w-3 h-3 text-white fill-white">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                        <?php if($post_featured_text):?>
                                                        <span class="text-[10px] font-bold text-white uppercase tracking-wide"><?php echo $post_featured_text;?></span>
                                                        <?php endif;?>
                                                    </div>
                                                    <div class="absolute bottom-0 left-0 right-0 p-4">
                                                        <?php if($post_category_text):?>
                                                        <span class="inline-block px-2 py-0.5 text-[10px] font-semibold text-white/90 bg-white/20 backdrop-blur-sm rounded-full mb-2"><?php echo $post_category_text;?></span>
                                                        <?php endif;?>
                                                        <?php if($post_title):?>
                                                        <h4 class="text-sm font-bold text-white leading-snug mb-2 line-clamp-2"><?php echo $post_title;?></h4>
                                                        <?php endif;?>
                                                        <div class="flex items-center gap-3 text-[11px] text-white/70">
                                                            <?php if($post_min_read):?>
                                                            <span class="flex items-center gap-1">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-clock w-3 h-3">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                                </svg>
                                                                <?php echo $post_min_read;?>
                                                            </span>
                                                            <?php endif;?>
                                                            <?php if($post_view_count):?>
                                                            <span class="flex items-center gap-1">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-eye w-3 h-3">
                                                                    <path
                                                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                                    </path>
                                                                    <circle cx="12" cy="12" r="3"></circle>
                                                                </svg>
                                                                <?php echo $post_view_count;?>
                                                            </span>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <?php if($post_btn_text and $post_btn_link):?>
                                            <a href="<?php echo $post_btn_link;?>" class="group flex items-center justify-center gap-2 mt-3 py-2.5 rounded-xl bg-gradient-to-r from-[#7B61FF]/10 to-[#FF00E5]/10 border border-[#7B61FF]/20 text-sm font-medium text-foreground hover:border-[#7B61FF]/40 transition-all">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-newspaper w-4 h-4 text-[#7B61FF]">
                                                    <path
                                                        d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2">
                                                    </path>
                                                    <path d="M18 14h-8"></path>
                                                    <path d="M15 18h-5"></path>
                                                    <path d="M10 6h8v4h-8V6Z"></path>
                                                </svg>
                                                <?php echo $post_btn_text;?>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right w-4 h-4 text-[#FF00E5] group-hover:translate-x-0.5 transition-transform">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            <?php endif;?>
                                            <div class="header__sub-menurow-mobile flex items-center gap-1 p-3 border-b border-border/30 bg-muted/20">
                                                <?php
                                                    $menuitemCpunt = 0;
                                                foreach ($box_items_data as $item) : $menuitemCpunt ++;?>    
                                                <button data-color="<?php echo esc_attr($item['color']) ? esc_attr($item['color']) : '#000'?>"
                                                        style="--icon-color: <?php echo esc_attr($item['color']) ? esc_attr($item['color']) : '#000'?>;" 
                                                        data-content="<?php echo esc_attr($item['title']); ?>"
                                                        class="header__submenu-btn  relative px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300 text-white <?php echo $menuitemCpunt === 1 ? 'header__submenu-btn--active': ''; ?>">
                                                    <span class="relative z-10"><?php echo esc_attr($item['title']); ?></span>
                                                </button>
                                                <?php endforeach;?>
                                                <div class="flex-1"></div>
                                                <div
                                                    class="header__sub-creators flex items-center gap-2 px-3 py-1.5 rounded-full bg-gradient-to-r from-[#FF00E5]/10 to-[#FFB800]/10 border border-[#FF00E5]/20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-trending-up w-3.5 h-3.5 text-[#FF00E5]">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                    <?php if($right_top_text):?>
                                                    <span class="text-xs font-medium text-foreground"><?php echo $right_top_text;?></span>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if(have_rows('box_item_element')):?>
                                        <div data-content="<?php echo $box_item_title ? $box_item_title : ''?>" class="header__submenu-content <?php echo $itemsCpunt === 1 ? 'header__submenu-content--active' : ''; ?> flex-1 p-4">
                                            <div class="grid grid-cols-2 gap-2 header__submenu-content-grid">
                                                <?php while(have_rows('box_item_element')): the_row(); 
                                                    $box_item_element_name = get_sub_field('box_item_element_name');
                                                    $box_item_element_text = get_sub_field('box_item_element_text');
                                                    $box_item_element_link = get_sub_field('box_item_element_link');
                                                    $box_item_element_icon = get_sub_field('box_item_element_icon');
                                                ?>
                                                <a href="<?php echo $box_item_element_link ? $box_item_element_link : '';?>"
                                                    class="group flex items-start gap-3 p-3 rounded-2xl hover:bg-muted/50 transition-all duration-300">
                                                    <div 
                                                        data-color="<?php echo $box_item_element_icon_color ? $box_item_element_icon_color : '#000'?>"
                                                        style="--icon-color: <?php echo $box_item_element_icon_color ? $box_item_element_icon_color : '#000'?>;"
                                                        class="header__submenu-icon relative w-10 h-10 rounded-xl flex items-center justify-center">
                                                        <?php echo $box_item_element_icon ? $box_item_element_icon : '';?>
                                                        <div class="absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-lg -z-10"
                                                            style="background-color: rgba(123, 97, 255, 0.19);">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <?php if($box_item_element_name):?>
                                                        <div class="flex items-center gap-2">
                                                            <span class="text-sm font-medium text-foreground"><?php echo $box_item_element_name;?></span>
                                                        </div>
                                                        <?php endif;?>
                                                        <?php if($box_item_element_text):?>
                                                        <p class="text-xs text-muted-foreground mt-0.5 line-clamp-1"><?php echo $box_item_element_text;?></p>
                                                        <?php endif;?>
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-arrow-right w-4 h-4 text-muted-foreground/50 opacity-0 group-hover:opacity-100 group-hover:text-foreground shrink-0 mt-1 transition-all">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                                <?php endwhile;?>
                                            </div>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                    <?php endwhile; endif;?>
                                    <div
                                        class="header__sub-footer flex items-center justify-between px-4 py-3 bg-muted/30 border-t border-border/30">
                                        <?php if(have_rows('menu_footer_item')):?>
                                        <div class="flex items-center gap-1 flex-wrap">
                                            <?php while(have_rows('menu_footer_item')): the_row();
                                                $menu_footer_text = get_sub_field('menu_footer_text');
                                                $menu_footer_link = get_sub_field('menu_footer_link');
                                                if($menu_footer_text and $menu_footer_link):
                                            ?>
                                            <a href="<?php echo $menu_footer_link;?>" class="px-3 py-1.5 text-xs font-medium text-muted-foreground hover:text-foreground hover:bg-white rounded-lg transition-all"><?php echo $menu_footer_text;?></a>
                                            <?php endif; endwhile;?>
                                        </div>
                                        <?php endif;?>
                                        <?php  if($menu_footer_btn_link and $menu_footer_btn_text):
                                        ?>
                                        <a href="<?php echo $menu_footer_btn_link;?>"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-semibold ring-offset-background duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-main text-white hover:shadow-gradient-lg h-10 px-5 rounded-full shadow-lg shadow-primary/20 hover:scale-105 transition-transform">
                                            <?php echo $menu_footer_btn_text;?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php if(have_rows('single_menus', 'options')):
                            while(have_rows('single_menus', 'options')): the_row();
                            $menu_name = get_sub_field('menu_name');
                            $menu_link = get_sub_field('menu_link');
                            
                            if($menu_name and $menu_link):
                            ?>
                        <li>
                            <a href="<?php echo $menu_link;?>"><?php echo $menu_name;?></a>
                        </li>
                        <?php endif; endwhile; endif;?>
                    </ul>
                </div>
                <?php endwhile; endif;?>
                <?php 
                    $menu_btn_link = get_field('menu_btn_link', 'options');
                    $menu_btn_text = get_field('menu_btn_text', 'options');
                    if($menu_btn_link and $menu_btn_text):
                ?>
                <div class="header__btn">
                    <a href="<?php echo $menu_btn_link;?>"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-gradient-main text-white hover:shadow-gradient-lg hover:scale-[1.03] h-10 px-5 shadow-lg shadow-primary/20">
                        <?php echo $menu_btn_text;?>
                    </a>
                </div>
                <?php endif;?>
                <button class="header__burgerbtn lg:hidden p-2 rounded-lg hover:bg-muted transition-colors">
                    <div class="header__burgerbtn-row header__burgerbtn-box header__burgerbtn-box--show">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-menu w-5 h-5">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                    </div>
                    <div class="header__burgerbtn-close header__burgerbtn-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-x w-5 h-5">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </div>
                </button>
            </div>
        </div>

    </header>


    <!-- HEADER END -->