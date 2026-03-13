<?php 
/* 
    Template Name: Contact Us
*/ 
?>
<?php get_header(); ?>



<div class="min-h-screen bg-background">

    <main class="relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-1/4 w-[800px] h-[800px] rounded-full bg-gradient-to-br from-primary/15 to-transparent blur-3xl animate-orb-1"></div>
            <div class="absolute top-1/2 right-0 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-secondary/15 to-transparent blur-3xl animate-orb-2"></div>
            <div class="absolute bottom-0 left-0 w-[700px] h-[700px] rounded-full bg-gradient-to-br from-accent/10 to-transparent blur-3xl animate-orb-3"> </div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 22.0549%; left: 53.6747%; animation-delay: 0s; animation-duration: 6.51401s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 17.0149%; left: 94.3214%; animation-delay: 0.5s; animation-duration: 6.89604s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 79.7029%; left: 76.7771%; animation-delay: 1s; animation-duration: 4.60953s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 63.3902%; left: 4.235%; animation-delay: 1.5s; animation-duration: 5.24779s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 76.8844%; left: 31.0699%; animation-delay: 2s; animation-duration: 7.96049s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 19.3496%; left: 80.3792%; animation-delay: 2.5s; animation-duration: 7.51442s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 49.7114%; left: 34.9515%; animation-delay: 3s; animation-duration: 7.7919s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 33.6906%; left: 65.3679%; animation-delay: 3.5s; animation-duration: 6.37493s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 5.42866%; left: 48.0374%; animation-delay: 4s; animation-duration: 6.40459s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 48.1335%; left: 34.397%; animation-delay: 4.5s; animation-duration: 4.71541s;"> </div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 39.935%; left: 16.4199%; animation-delay: 5s; animation-duration: 7.94895s;"></div>
            <div class="absolute w-2 h-2 rounded-full bg-gradient-main opacity-40" style="top: 38.8639%; left: 74.1265%; animation-delay: 5.5s; animation-duration: 6.19151s;"> </div>
        </div>
        <?php 
            $hero_badge_text = get_field('hero_badge_text');
            $hero_title = get_field('hero_title');
            $hero_title_colored = get_field('hero_title_colored');
            $hero_text = get_field('hero_text');
        ?>
        <section class="relative pt-32 pb-16 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <?php if($hero_badge_text):?>
                <div  class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-subtle border border-primary/20 mb-8 animate-fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-sparkles w-4 h-4 text-primary">
                        <path
                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                        </path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg>
                    <span class="text-sm font-medium"><?php echo $hero_badge_text;?></span>
                </div>
                <?php endif;?>
                <?php if($hero_title and $hero_title_colored):?>
                <h1 class="text-5xl md:text-7xl font-display font-bold mb-6 animate-fade-up-delay-1">
                    <?php echo $hero_title;?><br><span class="text-gradient"><?php echo $hero_title_colored;?></span>
                </h1>
                <?php endif;?>
                <?php if($hero_text):?>
                <p class="text-muted-foreground text-lg md:text-xl max-w-2xl mx-auto animate-fade-up-delay-2">
                    <?php echo $hero_text;?>
                </p>
                <?php endif;?>
            </div>
        </section>
        
        <section class="relative px-4 pb-16">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-3 gap-6 animate-fade-up-delay-3">
                    <?php 
                        $contact_box_icon_1 = get_field('contact_box_icon_1');
                        $contact_box_name_1 = get_field('contact_box_name_1');
                        $contact_box_text_1 = get_field('contact_box_text_1');
                        $contact_box_contact_1 = get_field('contact_box_contact_1');
                    ?>
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl"></div>
                        <div class="relative glass-light rounded-3xl p-8 text-center hover:bg-card transition-all duration-300">
                            <?php if($contact_box_icon_1):?>
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-subtle mb-6 group-hover:scale-110 transition-transform duration-300">
                                <?php echo $contact_box_icon_1;?>
                            </div>
                            <?php endif;?>
                            <?php if($contact_box_name_1):?>
                            <h3 class="font-display font-semibold text-lg mb-2"><?php echo $contact_box_name_1;?></h3>
                            <?php endif;?>
                            <?php if($contact_box_text_1):?>
                            <p class="text-muted-foreground text-sm mb-4"><?php echo $contact_box_text_1;?></p>
                            <?php endif;?>
                            <?php if($contact_box_contact_1):?>
                            <a href="mailto:<?php echo $contact_box_contact_1;?>" class="text-primary font-medium hover:underline"><?php echo $contact_box_contact_1;?></a>
                            <?php endif;?>
                        </div>
                    </div>

                    <?php 
                        $contact_box_icon_2 = get_field('contact_box_icon_2');
                        $contact_box_name_2 = get_field('contact_box_name_2');
                        $contact_box_text_2 = get_field('contact_box_text_2');
                        $contact_box_contact_2 = get_field('contact_box_contact_2');
                        if($contact_box_contact_2):
                            $contact_box_contact_2_filtered = preg_replace('/\D/', '', $contact_box_contact_2);
                        endif;
                    ?>
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-secondary to-accent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl"></div>
                        <div class="relative glass-light rounded-3xl p-8 text-center hover:bg-card transition-all duration-300">
                            <?php if($contact_box_icon_2):?>
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-subtle mb-6 group-hover:scale-110 transition-transform duration-300">
                                <?php echo $contact_box_icon_2;?>
                            </div>
                            <?php endif;?>
                            <?php if($contact_box_name_2):?>
                            <h3 class="font-display font-semibold text-lg mb-2"><?php echo $contact_box_name_2;?></h3>
                            <?php endif;?>
                            <?php if($contact_box_text_2):?>
                            <p class="text-muted-foreground text-sm mb-4"><?php echo $contact_box_text_2;?></p>
                            <?php endif;?>
                            <?php if($contact_box_contact_2):?>
                            <a href="tel:+<?php echo  $contact_box_contact_2_filtered;?>" class="text-secondary font-medium hover:underline">
                                <?php echo $contact_box_contact_2;?>
                            </a>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php 
                        $contact_box_icon_3 = get_field('contact_box_icon_3');
                        $contact_box_name_3 = get_field('contact_box_name_3');
                        $contact_box_text_3 = get_field('contact_box_text_3');
                        $contact_box_contact_3 = get_field('contact_box_contact_3');
                    ?>
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-accent to-primary rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-xl"></div>
                        <div class="relative glass-light rounded-3xl p-8 text-center hover:bg-card transition-all duration-300">
                            <?php if($contact_box_icon_3):?>
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-subtle mb-6 group-hover:scale-110 transition-transform duration-300">
                                <?php echo $contact_box_icon_3;?>
                            </div>
                            <?php endif;?>
                            <?php if($contact_box_name_3):?>
                            <h3 class="font-display font-semibold text-lg mb-2"><?php echo $contact_box_name_3;?></h3>
                            <?php endif;?>
                            <?php if($contact_box_text_3):?>
                            <p class="text-muted-foreground text-sm mb-4"><?php echo $contact_box_text_3;?></p>
                            <?php endif;?>
                            <?php if($contact_box_contact_3):?>
                            <span class="text-accent font-medium"><?php echo $contact_box_contact_3;?></span>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative px-4 pb-24">
            <div class="max-w-6xl mx-auto">
                <div class="relative">
                    <div class="absolute -inset-1 bg-gradient-main rounded-[2.5rem] opacity-20 blur-sm"></div>
                    <div class="relative bg-card rounded-[2.5rem] border border-border/50 overflow-hidden">
                        <div class="grid lg:grid-cols-2">
                            <div class="p-8 md:p-12 lg:border-r border-border/50">
                                <div class="mb-8">
                                    <span class="inline-flex items-center gap-2 text-sm font-medium text-primary mb-4">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-message-square w-4 h-4">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                            </path>
                                        </svg>
                                        Step 1
                                    </span>
                                    <?php 
                                        $step_1_title = get_field('step_1_title');
                                        $step_1_text = get_field('step_1_text');
                                    ?>
                                    <?php if($step_1_title):?>
                                    <h2 class="text-2xl md:text-3xl font-display font-bold mb-3">
                                        <?php echo $step_1_title;?>
                                    </h2>
                                    <?php endif;?>
                                    <?php if($step_1_text):?>
                                    <p class="text-muted-foreground">
                                        <?php echo $step_1_text;?>
                                    </p>
                                    <?php endif;?>
                                </div>
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <button class="cform__radio group relative p-6 rounded-2xl text-left transition-all duration-300 bg-muted/30 border-2 border-transparent hover:border-border hover:bg-muted/50">
                                        <div class="cform__icon inline-flex items-center justify-center w-12 h-12 rounded-xl mb-4 transition-all duration-300 bg-gradient-subtle group-hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-handshake w-5 h-5 text-primary">
                                                <path d="m11 17 2 2a1 1 0 1 0 3-3"></path>
                                                <path
                                                    d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4">
                                                </path>
                                                <path d="m21 3 1 11h-2"></path>
                                                <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"></path>
                                                <path d="M3 4h8"></path>
                                            </svg>
                                        </div>
                                        <h3 class="font-display font-semibold mb-1">Sponsorship</h3>
                                        <p class="text-sm text-muted-foreground">
                                            Partner with us for brand  visibility
                                        </p>
                                        <div class="cform__check absolute top-4 right-4">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-circle-check w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <button class="cform__radio cform__radio--active group relative p-6 rounded-2xl text-left transition-all duration-300 bg-gradient-subtle border-2 border-primary shadow-gradient">
                                        <div class="cform__icon inline-flex items-center justify-center w-12 h-12 rounded-xl mb-4 transition-all duration-300 bg-gradient-main">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-briefcase w-5 h-5 text-primary-foreground">
                                                <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                            </svg>
                                        </div>
                                        <h3 class="font-display font-semibold mb-1">Business Inquiry</h3>
                                        <p class="text-sm text-muted-foreground">
                                            Explore collaboration  opportunities
                                        </p>
                                       <div class="cform__check cform__check--active absolute top-4 right-4">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-circle-check w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <button class="cform__radio group relative p-6 rounded-2xl text-left transition-all duration-300 bg-muted/30 border-2 border-transparent hover:border-border hover:bg-muted/50">
                                        <div class="cform__icon inline-flex items-center justify-center w-12 h-12 rounded-xl mb-4 transition-all duration-300 bg-gradient-subtle group-hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-circle-help w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                <path d="M12 17h.01"></path>
                                            </svg>
                                        </div>
                                        <h3 class="font-display font-semibold mb-1">Support</h3>
                                        <p class="text-sm text-muted-foreground">Get help with your account</p>
                                        <div class="cform__check absolute top-4 right-4">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-circle-check w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                    </button>
                                    <button class="cform__radio group relative p-6 rounded-2xl text-left transition-all duration-300 bg-muted/30 border-2 border-transparent hover:border-border hover:bg-muted/50">
                                        <div class="cform__icon inline-flex items-center justify-center w-12 h-12 rounded-xl mb-4 transition-all duration-300 bg-gradient-subtle group-hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-bug w-5 h-5 text-primary">
                                                <path d="m8 2 1.88 1.88"></path>
                                                <path d="M14.12 3.88 16 2"></path>
                                                <path d="M9 7.13v-1a3.003 3.003 0 1 1 6 0v1"></path>
                                                <path
                                                    d="M12 20c-3.3 0-6-2.7-6-6v-3a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v3c0 3.3-2.7 6-6 6">
                                                </path>
                                                <path d="M12 20v-9"></path>
                                                <path d="M6.53 9C4.6 8.8 3 7.1 3 5"></path>
                                                <path d="M6 13H2"></path>
                                                <path d="M3 21c0-2.1 1.7-3.9 3.8-4"></path>
                                                <path d="M20.97 5c0 2.1-1.6 3.8-3.5 4"></path>
                                                <path d="M22 13h-4"></path>
                                                <path d="M17.2 17c2.1.1 3.8 1.9 3.8 4"></path>
                                            </svg>
                                        </div>
                                        <h3 class="font-display font-semibold mb-1">Report a Bug</h3>
                                        <p class="text-sm text-muted-foreground">Help us improve the platform</p>
                                        <div class="cform__check absolute top-4 right-4">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-circle-check w-5 h-5 text-primary">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="p-8 md:p-12 bg-muted/20">
                                <div class="mb-8">
                                    <span class="inline-flex items-center gap-2 text-sm font-medium text-secondary mb-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-user w-4 h-4">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        Step 2
                                    </span>
                                    <?php 
                                        $step_2_title = get_field('step_2_title');
                                        $step_2_text = get_field('step_2_text');
                                    ?>
                                    <?php if($step_2_title):?>
                                    <h2 class="text-2xl md:text-3xl font-display font-bold mb-3">
                                        <?php echo $step_2_title;?>
                                    </h2>
                                    <?php endif;?>
                                    <?php if($step_2_text):?>
                                    <p class="text-muted-foreground">
                                        <?php echo $step_2_text;?>
                                    </p>
                                    <?php endif;?>
                                </div>
                                <?php echo do_shortcode('[contact-form-7 id="79237c4" title="Contact us"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="max-w-6xl mx-auto px-4">
            <div class="h-px bg-border/50"></div>
        </div>
    </main>
</div>


<?php get_footer(); ?>