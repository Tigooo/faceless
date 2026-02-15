	<!-- FOOTER -->
    <footer class="relative overflow-hidden footer">
        <div class="h-px bg-gradient-main"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-background via-background to-muted/20"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-gradient-radial from-primary/10 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-gradient-radial from-accent/10 to-transparent rounded-full blur-3xl"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="py-16 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8">
                <div class="lg:col-span-4">
                    <?php if(have_rows('footer_info', 'options')):
                        while(have_rows('footer_info', 'options')): the_row();
                        $footer_logo = get_sub_field('footer_logo');
                        $footer_text = get_sub_field('footer_text');
                    ?>
                    <?php if($footer_logo):?>
                    <a class="inline-flex items-center gap-3 mb-6 group">
                        <div class="footer__logo">
                            <img src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>">
                        </div>
                    </a>
                    <?php endif;?>
                    <?php if($footer_text):?>
                    <p class="text-muted-foreground leading-relaxed mb-8 max-w-sm">
                        <?php echo $footer_text;?>
                    </p>
                    <?php endif;?>
                    <?php endwhile; endif;?>
                    <?php if(have_rows('social_media_item', 'options')):?>
                    <div class="flex items-center gap-3">
                        <?php
                            while(have_rows('social_media_item', 'options')): the_row();

                            $social_media_icon = get_sub_field('social_media_icon');
                            $social_media_link = get_sub_field('social_media_link');

                            if($social_media_icon and $social_media_link):
                        ?>
                        <a href="<?php echo $social_media_link;?>" class="w-11 h-11 rounded-xl bg-muted/50 border border-border/50 flex items-center justify-center text-muted-foreground hover:bg-gradient-main hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 hover:scale-105">
                            <?php echo $social_media_icon;?>
                        </a>
                        <?php endif; endwhile;?>
                    </div>
                    <?php endif;?>
                </div>
                <div class="lg:col-span-8 grid grid-cols-2 sm:grid-cols-3 gap-8">
                    <?php 
                        $footer_menu_title_1 = get_field('footer_menu_title_1', 'options');

                        if(have_rows('footer_menu_items_1', 'options')):
                        ?>
                    <div>
                        <?php if($footer_menu_title_1):?>
                        <h4 class="font-display font-semibold text-foreground mb-5 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-main"></span>
                            <?php echo $footer_menu_title_1;?>
                        </h4>
                        <?php endif;?>
                        <ul class="space-y-3">
                            <?php 
                                while(have_rows('footer_menu_items_1', 'options')): the_row();
                                    $item_text = get_sub_field('item_text');
                                    $item_link = get_sub_field('item_link');
                                    
                                    if($item_text and $item_link):
                            ?>
                            <li>
                                <a href="<?php echo $item_link;?>"  class="text-sm text-muted-foreground hover:text-foreground transition-colors inline-flex items-center gap-1 group">
                                    <?php echo $item_text;?>
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
                                        class="lucide lucide-arrow-up-right w-3 h-3 opacity-0 -translate-y-0.5 translate-x-0.5 group-hover:opacity-100 transition-all"
                                    >
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>
                                </a>
                            </li>
                            <?php endif; endwhile;?>
                        </ul>
                    </div>
                    <?php endif;?>
                    <?php 
                        $footer_menu_title_2 = get_field('footer_menu_title_2', 'options');

                        if(have_rows('footer_menu_items_2', 'options')):
                        ?>
                    <div>
                        <?php if($footer_menu_title_2):?>
                        <h4 class="font-display font-semibold text-foreground mb-5 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-main"></span>
                            <?php echo $footer_menu_title_2;?>
                        </h4>
                        <?php endif;?>
                        <ul class="space-y-3">
                            <?php 
                                while(have_rows('footer_menu_items_2', 'options')): the_row();
                                    $item_text_2 = get_sub_field('item_text');
                                    $item_link_2 = get_sub_field('item_link');
                                    
                                    if($item_text_2 and $item_link_2):
                            ?>
                            <li>
                                <a href="<?php echo $item_link_2;?>"  class="text-sm text-muted-foreground hover:text-foreground transition-colors inline-flex items-center gap-1 group">
                                    <?php echo $item_text_2;?>
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
                                        class="lucide lucide-arrow-up-right w-3 h-3 opacity-0 -translate-y-0.5 translate-x-0.5 group-hover:opacity-100 transition-all"
                                    >
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>
                                </a>
                            </li>
                            <?php endif; endwhile;?>
                        </ul>
                    </div>
                    <?php endif;?>
                    <?php 
                        $footer_menu_title_3 = get_field('footer_menu_title_3', 'options');

                        if(have_rows('footer_menu_items_3', 'options')):
                        ?>
                    <div>
                        <?php if($footer_menu_title_3):?>
                        <h4 class="font-display font-semibold text-foreground mb-5 flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-main"></span>
                            <?php echo $footer_menu_title_3;?>
                        </h4>
                        <?php endif;?>
                        <ul class="space-y-3">
                            <?php 
                                while(have_rows('footer_menu_items_3', 'options')): the_row();
                                    $item_text_3 = get_sub_field('item_text');
                                    $item_link_3 = get_sub_field('item_link');
                                    
                                    if($item_text_3 and $item_link_3):
                            ?>
                            <li>
                                <a href="<?php echo $item_link_3;?>"  class="text-sm text-muted-foreground hover:text-foreground transition-colors inline-flex items-center gap-1 group">
                                    <?php echo $item_text_3;?>
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
                                        class="lucide lucide-arrow-up-right w-3 h-3 opacity-0 -translate-y-0.5 translate-x-0.5 group-hover:opacity-100 transition-all"
                                    >
                                        <path d="M7 7h10v10"></path>
                                        <path d="M7 17 17 7"></path>
                                    </svg>
                                </a>
                            </li>
                            <?php endif; endwhile;?>
                        </ul>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <?php 
                $footer_bottom_left_text = get_field('footer_bottom_left_text', 'options');
                $footer_bottom_right_text = get_field('footer_bottom_right_text', 'options');
            ?>
            <div class="py-6 border-t border-border/50 flex flex-col sm:flex-row items-center justify-between gap-4">
                <?php if($footer_bottom_left_text):?>
                <p class="text-sm text-muted-foreground">© <?php echo date('Y');?> <?php echo $footer_bottom_left_text;?></p>
                <?php endif;?>
                <?php if($footer_bottom_right_text):?>
                <p class="text-sm text-muted-foreground flex items-center gap-1.5">
                    <?php echo $footer_bottom_right_text;?>
                </p>
                <?php endif;?>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <?php wp_footer(); ?>
</body>
</html>
