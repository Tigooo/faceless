<?php get_header(); ?>

<div class="min-h-screen bg-background">
    <main class="pt-16">
        <section class="relative py-12 lg:py-16 overflow-hidden">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-pink-500/20 to-rose-500/20 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-br from-cyan-500/20 to-blue-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            <div class="container mx-auto px-6 relative z-10">
                <div class="flex items-center gap-2 text-sm text-muted-foreground mb-6"  >
                    <a class="hover:text-primary transition-colors"  href="/tools">Tools</a>
                    <span>/</span>
                    <span class="text-foreground"><?php the_title()?></span>
                </div>
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                    <div class="flex-1">
                        <div class="mb-8"  >
                            <h1 class="tool__title text-3xl md:text-4xl lg:text-5xl font-display font-bold mb-4 leading-tight">
                                <?php the_title();?>
                            </h1>
                            <?php 
                                $tool_text = get_field('tool_text');
                                if($tool_text):
                            ?>
                            <p class="text-lg text-muted-foreground max-w-2xl mb-6"><?php echo $tool_text;?></p>
                            <?php endif;?>
                        </div>
                        
                        <?php if( have_rows('calculators') ){?>
                            <?php while ( have_rows('calculators') ) : the_row();?>
                                <?php if( get_row_layout() == 'tiktok_coin_calculator' ){ 
                                    $tool_info_title = get_sub_field('tool_info_title');    
                                    $tool_info = get_sub_field('tool_info');    
                                ?>
                                <!-- CALCULATOR START -->
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-pink-500/50 via-rose-500/30 to-red-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                            <div class="mb-8">
                                                <label  class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-base font-semibold mb-3 block" for="coins">Enter TikTok Coins</label>
                                                <div class="relative">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-coins absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500">
                                                        <circle cx="8" cy="8" r="6"></circle>
                                                        <path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path>
                                                        <path d="M7 6h1v4"></path>
                                                        <path d="m16.71 13.88.7.71-2.82 2.82"></path>
                                                    </svg>
                                                    <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-pink-500/50 focus:ring-pink-500/20"
                                                        id="coins" placeholder="1000" value="1000">
                                                </div>
                                                <div id="coinValues" class="flex flex-wrap gap-2 mt-4">
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        100
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        500
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-lg shadow-pink-500/25">
                                                        1000
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        5000
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        10000
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        50000
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-pink-500/10 to-rose-500/10 border border-pink-500/20"  >
                                                    <p class="text-sm text-muted-foreground mb-1">Total Value (USD)</p>
                                                    <p id="TotalValue" class="text-3xl font-bold bg-gradient-to-r from-pink-500 to-rose-500 bg-clip-text text-transparent">
                                                        $10.50
                                                    </p>
                                                </div>
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"
                                                     >
                                                    <p class="text-sm text-muted-foreground mb-1">Creator Earnings</p>
                                                    <p id="CreatorEarnings" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">
                                                        $5.25
                                                    </p>
                                                    <p class="text-xs text-muted-foreground mt-1">After TikTok's cut</p>
                                                </div>
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-500/10 border border-cyan-500/20"
                                                     >
                                                    <p class="text-sm text-muted-foreground mb-1">Diamonds Received</p>
                                                    <p id="DiamondsReceived" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">
                                                        500
                                                    </p>
                                                    <p class="text-xs text-muted-foreground mt-1">Approximate</p>
                                                </div>
                                            </div>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 16v-4"></path>
                                                    <path d="M12 8h.01"></path>
                                                </svg>

                                                <?php if($tool_info_title or $tool_info):?>
                                                <div>
                                                    <?php if($tool_info_title):?>
                                                    <p class="text-sm text-foreground font-medium"><?php echo $tool_info_title;?></p>
                                                    <?php endif;?>
                                                    <?php if($tool_info):?>
                                                    <p class="text-sm text-muted-foreground">
                                                        <?php echo $tool_info;?>
                                                    </p>
                                                    <?php endif;?>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif ( get_row_layout() == 'instagram_engagement_rate_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-purple-500/50 via-pink-500/30 to-orange-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="followers"> Total Followers </label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-purple-500">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-purple-500/50 focus:ring-purple-500/20" id="followers" placeholder="10000" value="1000">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="posts">Number of Posts (to average) </label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-purple-500">
                                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                                <circle cx="9" cy="9" r="2"></circle>
                                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-purple-500/50 focus:ring-purple-500/20" id="posts" placeholder="10" value="10">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="likes">Total Likes (across posts)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500">
                                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-pink-500/50 focus:ring-pink-500/20" id="likes" placeholder="500" value="500">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="comments">Total Comments (across posts)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-orange-500">
                                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-orange-500/50 focus:ring-orange-500/20" id="comments" placeholder="25" value="25">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick follower presets:</p>
                                            <div id="instaBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-purple-500 to-pink-500 text-white shadow-lg shadow-purple-500/25">1K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">5K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">10K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">50K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">100K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">500K</button>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                            <div class="md:col-span-2 p-6 rounded-2xl bg-gradient-to-br from-purple-500/10 via-pink-500/5 to-orange-500/10 border border-purple-500/20"  >
                                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                                <div>
                                                <p class="text-sm text-muted-foreground mb-1">Engagement Rate </p>
                                                <p id="instaPercent" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 bg-clip-text text-transparent"> 5.25%</p>
                                                </div>
                                                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-primary to-secondary text-white text-sm font-bold shadow-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4">
                                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                    <polyline points="16 7 22 7 22 13"></polyline>
                                                </svg>Good
                                                </div>
                                            </div>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-pink-500/10 to-rose-500/10 border border-pink-500/20"  >
                                            <p id="instaAvgLikes" class="text-sm text-muted-foreground mb-1">Avg. Likes / Post</p>
                                            <p class="text-3xl font-bold bg-gradient-to-r from-pink-500 to-rose-500 bg-clip-text text-transparent"> 50</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-orange-500/10 to-amber-500/10 border border-orange-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Avg. Comments / Post</p>
                                            <p id="instaAvgComments" class="text-3xl font-bold bg-gradient-to-r from-orange-500 to-amber-500 bg-clip-text text-transparent"> 3</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Est. Reach / Post</p>
                                            <p id="instaAvgReach" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent"> 184</p>
                                            <p class="text-xs text-muted-foreground mt-1">Approximate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-500/10 border border-cyan-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Like-to-Comment Ratio</p>
                                            <p id="instaCommentRatio" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent"> 20.0:1</p>
                                            <p class="text-xs text-muted-foreground mt-1">Lower = more engaged</p>
                                            </div>
                                        </div>

                                        <?php 
                                            $instaTool_info_title = get_sub_field('tool_info_title');    
                                            $instaTool_info = get_sub_field('tool_info');    

                                            if($instaTool_info_title or $instaTool_info):
                                        ?>
                                        <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                            </svg>
                                            <div>
                                            <?php if($instaTool_info_title):?>
                                            <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                            <?php endif;?>
                                            <?php if($instaTool_info):?>
                                            <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                            </div>
                                            <?php endif;?>
                                        </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif ( get_row_layout() == 'youtube_money_calculator' ) { ?>
                                <div class="relative"  >
									<div class="p-[1px] rounded-3xl bg-gradient-to-br from-red-500/50 via-orange-500/30 to-amber-500/50">
										<div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
											<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
												<div>
                                                    <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
														for="dailyViews">Daily Views</label>
													<div class="relative"><svg xmlns="http://www.w3.org/2000/svg"
															width="24" height="24" viewBox="0 0 24 24" fill="none"
															stroke="currentColor" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="round"
															class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-red-500">
															<path
																d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
															</path>
															<circle cx="12" cy="12" r="3"></circle>
														</svg>
                                                        <input type="number"
															class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-red-500/50 focus:ring-red-500/20"
															id="dailyViews" placeholder="10000" value="1000">
                                                        </div>
												</div>
												<div>
                                                    <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
														for="cpm">CPM Rate ($)</label>
													<div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
															width="24" height="24" viewBox="0 0 24 24" fill="none"
															stroke="currentColor" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="round"
															class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-orange-500">
															<line x1="12" x2="12" y1="2" y2="22"></line>
															<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
															</path>
														</svg>
                                                        <input type="number"class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-orange-500/50 focus:ring-orange-500/20"
															id="cpm" placeholder="4" step="0.5" value="4">
                                                    </div>
												</div>
												<div>
                                                    <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
														for="adRate">Monetized Views (%)
                                                    </label>
													<div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
															width="24" height="24" viewBox="0 0 24 24" fill="none"
															stroke="currentColor" stroke-width="2"
															stroke-linecap="round" stroke-linejoin="round"
															class="lucide lucide-chart-column absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-amber-500">
															<path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
															<path d="M18 17V9"></path>
															<path d="M13 17V5"></path>
															<path d="M8 17v-3"></path>
														</svg>
                                                    <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-amber-500/50 focus:ring-amber-500/20"
															id="adRate" placeholder="50" max="100" value="50">
                                                     </div>
												</div>
											</div>
											<div class="mb-8">
												<p class="text-sm text-muted-foreground mb-3">Quick daily view presets:</p>
												<div id="ytMoneyBtns" class="flex flex-wrap gap-2">
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-red-500 to-orange-500 text-white shadow-lg shadow-red-500/25">
                                                        1K
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        5K
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        10K
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        50K
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        100K
                                                    </button>
                                                    <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">
                                                        1M
                                                    </button>
												</div>
											</div>
											<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
												<div class="p-5 rounded-2xl bg-gradient-to-br from-red-500/10 to-orange-500/10 border border-red-500/20">
													<p class="text-sm text-muted-foreground mb-1">Daily Earnings</p>
													<p id="ytMoneyDailyEarnings" class="text-3xl font-bold bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">
														$2.00
                                                    </p>
													<p class="text-xs text-muted-foreground mt-1">Per day estimate</p>
												</div>
												<div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"
													 >
													<p class="text-sm text-muted-foreground mb-1">Monthly Earnings</p>
													<p id="ytMoneyMonthlyEarnings" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">
														$60.00</p>
													<p class="text-xs text-muted-foreground mt-1">30-day estimate</p>
												</div>
												<div class="p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-yellow-500/10 border border-amber-500/20">
													<p class="text-sm text-muted-foreground mb-1">Yearly Earnings</p>
													<p id="ytMoneyYearlyEarnings" class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-yellow-500 bg-clip-text text-transparent">
														$730.00
                                                    </p>
													<p class="text-xs text-muted-foreground mt-1">365-day estimate</p>
												</div>
											</div>
											<div class="grid grid-cols-2 gap-4 mb-8">
												<div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-500/10 border border-cyan-500/20"
													 >
													<p class="text-sm text-muted-foreground mb-1">Your RPM</p>
													<p id="ytMoneyRPM" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">
														$2.00
                                                    </p>
													<p class="text-xs text-muted-foreground mt-1">Revenue per 1K views </p>
												</div>
												<div class="p-5 rounded-2xl bg-gradient-to-br from-purple-500/10 to-pink-500/10 border border-purple-500/20"
													 >
													<p class="text-sm text-muted-foreground mb-1">Monetized Views / Day </p>
													<p id="ytMoneyMonetizedViews" class="text-3xl font-bold bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent">
														500</p>
													<p class="text-xs text-muted-foreground mt-1">Views with ads shown </p>
												</div>
											</div>
											<?php 
                                                $instaTool_info_title = get_sub_field('tool_info_title');    
                                                $instaTool_info = get_sub_field('tool_info');    

                                                if($instaTool_info_title or $instaTool_info):
                                            ?>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                                </svg>
                                                <div>
                                                <?php if($instaTool_info_title):?>
                                                <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                                <?php endif;?>
                                                <?php if($instaTool_info):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                            <?php endif;?>
										</div>
									</div>
								</div>
                                <?php } elseif ( get_row_layout() == 'tiktok_money_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-cyan-500/50 via-pink-500/30 to-rose-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="dailyViews">Daily Views</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-cyan-500">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-cyan-500/50 focus:ring-cyan-500/20" id="dailyViews" placeholder="100000" value="100000">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="cpm">CPM Rate ($)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500">
                                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-pink-500/50 focus:ring-pink-500/20" id="cpm" placeholder="0.50" step="0.1" value="0.50">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="engagement">Engagement Rate (%)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-rose-500">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-rose-500/50 focus:ring-rose-500/20" id="engagement" placeholder="5" max="100" value="5">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick daily view presets:</p>
                                            <div id="ttMoneyBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">10K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">50K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-cyan-500 to-pink-500 text-white shadow-lg shadow-cyan-500/25">100K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">500K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">1M</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">5M</button>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-pink-500/10 border border-cyan-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Daily Earnings</p>
                                            <p id="ttMoneyDaily" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-pink-500 bg-clip-text text-transparent">$50.00</p>
                                            <p class="text-xs text-muted-foreground mt-1">Creator Program estimate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Monthly Earnings</p>
                                            <p id="ttMoneyMonthly" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">$1500.00</p>
                                            <p class="text-xs text-muted-foreground mt-1">30-day estimate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-yellow-500/10 border border-amber-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Yearly Earnings</p>
                                            <p id="ttMoneyYearly" class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-yellow-500 bg-clip-text text-transparent">$18250.00</p>
                                            <p class="text-xs text-muted-foreground mt-1">365-day estimate</p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-rose-500/10 to-pink-500/10 border border-rose-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Est. Daily Likes</p>
                                            <p id="ttMoneyLikes" class="text-3xl font-bold bg-gradient-to-r from-rose-500 to-pink-500 bg-clip-text text-transparent">5&nbsp;000</p>
                                            <p class="text-xs text-muted-foreground mt-1">Based on engagement rate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-500/10 to-violet-500/10 border border-purple-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Brand Deal Value</p>
                                            <p id="ttMoneyBrandDeal" class="text-3xl font-bold bg-gradient-to-r from-purple-500 to-violet-500 bg-clip-text text-transparent">$1&nbsp;000</p>
                                            <p class="text-xs text-muted-foreground mt-1">Est. per sponsored post</p>
                                            </div>
                                        </div>
                                        <?php 
                                                $instaTool_info_title = get_sub_field('tool_info_title');    
                                                $instaTool_info = get_sub_field('tool_info');    

                                                if($instaTool_info_title or $instaTool_info):
                                            ?>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                                </svg>
                                                <div>
                                                <?php if($instaTool_info_title):?>
                                                <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                                <?php endif;?>
                                                <?php if($instaTool_info):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif ( get_row_layout() == 'tiktok_diamonds_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-blue-500/50 via-indigo-500/30 to-violet-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                            <div class="md:col-span-2">
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="diamonds">Number of Diamonds</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gem absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-blue-500">
                                                <path d="M6 3h12l4 6-10 13L2 9Z"></path>
                                                <path d="M11 3 8 9l4 13 4-13-3-6"></path>
                                                <path d="M2 9h20"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-blue-500/50 focus:ring-blue-500/20" id="diamonds" placeholder="10000" value="100">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="currency">Currency</label>
                                            <select id="currency" class="w-full h-14 px-4 text-lg font-semibold rounded-xl border border-border/50 bg-background text-foreground focus:border-blue-500/50 focus:ring-2 focus:ring-blue-500/20 focus:outline-none appearance-none cursor-pointer">
                                                <option value="USD">$ USD</option>
                                                <option value="EUR">€ EUR</option>
                                                <option value="GBP">£ GBP</option>
                                                <option value="CAD">C$ CAD</option>
                                                <option value="AUD">A$ AUD</option>
                                                <option value="INR">₹ INR</option>
                                                <option value="BRL">R$ BRL</option>
                                                <option value="MXN">MX$ MXN</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick select:</p>
                                            <div id="ttDiamondsBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-lg shadow-blue-500/25">💎 100</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 500</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 1K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 5K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 10K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 50K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 100K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">💎 500K</button>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                            <div class="md:col-span-2 p-6 rounded-2xl bg-gradient-to-br from-blue-500/10 via-indigo-500/5 to-violet-500/10 border border-blue-500/20"  >
                                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                                <div>
                                                <p class="text-sm text-muted-foreground mb-1">Your Net Earnings (USD)</p>
                                                <p  id="ttDiamondsNet" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-500 via-indigo-500 to-violet-500 bg-clip-text text-transparent">$0.25</p>
                                                </div>
                                                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-sm font-bold shadow-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-4 h-4">
                                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg>After TikTok's Cut
                                                </div>
                                            </div>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-indigo-500/10 to-blue-500/10 border border-indigo-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Gross Value</p>
                                            <p id="ttDiamondsGross" class="text-3xl font-bold bg-gradient-to-r from-indigo-500 to-blue-500 bg-clip-text text-transparent">$0.50</p>
                                            <p class="text-xs text-muted-foreground mt-1">Before commission</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-rose-500/10 to-red-500/10 border border-rose-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">TikTok's Cut (50%)</p>
                                            <p id="ttDiamondsCut" class="text-3xl font-bold bg-gradient-to-r from-rose-500 to-red-500 bg-clip-text text-transparent">-$0.25</p>
                                            <p class="text-xs text-muted-foreground mt-1">Platform commission</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-orange-500/10 border border-amber-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Equivalent Coins</p>
                                            <p id="ttDiamondsCoins" class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-orange-500 bg-clip-text text-transparent">200</p>
                                            <p class="text-xs text-muted-foreground mt-1">Coins used by viewers</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-violet-500/10 to-purple-500/10 border border-violet-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Viewers Spent</p>
                                            <p id="ttDiamondsViewerSpent" class="text-3xl font-bold bg-gradient-to-r from-violet-500 to-purple-500 bg-clip-text text-transparent">$1.41</p>
                                            <p class="text-xs text-muted-foreground mt-1">Real money spent by fans</p>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <h3 class="text-sm font-semibold text-foreground mb-3">Quick Conversion Reference (USD)</h3>
                                            <div class="grid grid-cols-3 gap-2 text-sm">
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p class="text-muted-foreground text-xs">Diamonds</p>
                                                    <p class="font-bold text-foreground">100</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p class="text-muted-foreground text-xs">Gross</p>
                                                    <p id="ttDiamondsRef100Gross" class="font-bold text-foreground">$0.50</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p class="text-muted-foreground text-xs">You Get</p>
                                                    <p id="ttDiamondsRef100Net" class="font-bold text-emerald-600">$0.25</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p class="font-bold text-foreground">1,000</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p id="ttDiamondsRef1kGross" class="font-bold text-foreground">$5.00</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p id="ttDiamondsRef1kNet" class="font-bold text-emerald-600">$2.50</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p class="font-bold text-foreground">10,000</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p id="ttDiamondsRef10kGross" class="font-bold text-foreground">$50.00</p>
                                                </div>
                                                <div class="p-3 rounded-xl bg-muted/30 text-center">
                                                    <p id="ttDiamondsRef10kNet" class="font-bold text-emerald-600">$25.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                                $instaTool_info_title = get_sub_field('tool_info_title');    
                                                $instaTool_info = get_sub_field('tool_info');    

                                                if($instaTool_info_title or $instaTool_info):
                                            ?>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                                </svg>
                                                <div>
                                                <?php if($instaTool_info_title):?>
                                                <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                                <?php endif;?>
                                                <?php if($instaTool_info):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif ( get_row_layout() == 'youtube_shorts_revenue_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-red-500/50 via-rose-500/30 to-pink-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="dailyViews">Daily Shorts Views</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-red-500">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-red-500/50 focus:ring-red-500/20" id="dailyViews" placeholder="100000" value="10000">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="rpm">RPM Rate ($)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-rose-500">
                                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-rose-500/50 focus:ring-rose-500/20" id="rpm" placeholder="0.05" step="0.01" value="0.05">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="shorts">Shorts Per Day</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500">
                                                <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                                                <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-pink-500/50 focus:ring-pink-500/20" id="shorts" placeholder="3" value="3">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick daily view presets:</p>
                                            <div id="ytShortsBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-red-500 to-rose-500 text-white shadow-lg shadow-red-500/25">10K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">50K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">100K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">500K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">1M</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">5M</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">10M</button>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Common Shorts RPM rates:</p>
                                            <div id="ytShortsRpmBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.02 (Low)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.04 (Avg)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.06 (Good)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.10 (Great)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.15 (Top)</button>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-red-500/10 to-rose-500/10 border border-red-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Daily Earnings</p>
                                            <p id="ytShortsDaily" class="text-3xl font-bold bg-gradient-to-r from-red-500 to-rose-500 bg-clip-text text-transparent">$0.50</p>
                                            <p class="text-xs text-muted-foreground mt-1">Per day estimate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Monthly Earnings</p>
                                            <p id="ytShortsMonthly" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">$15.00</p>
                                            <p class="text-xs text-muted-foreground mt-1">30-day estimate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-yellow-500/10 border border-amber-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Yearly Earnings</p>
                                            <p id="ytShortsYearly" class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-yellow-500 bg-clip-text text-transparent">$182.50</p>
                                            <p class="text-xs text-muted-foreground mt-1">365-day estimate</p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-pink-500/10 to-fuchsia-500/10 border border-pink-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Earnings Per Short</p>
                                            <p id="ytShortsPerShort" class="text-3xl font-bold bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent">$0.17</p>
                                            <p class="text-xs text-muted-foreground mt-1">Average per video</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-500/10 border border-cyan-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Monthly Views</p>
                                            <p id="ytShortsMonthlyViews" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">300K</p>
                                            <p class="text-xs text-muted-foreground mt-1">Total monthly</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-violet-500/10 to-purple-500/10 border border-violet-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Views for $100/mo</p>
                                            <p id="ytShortsViewsNeeded" class="text-3xl font-bold bg-gradient-to-r from-violet-500 to-purple-500 bg-clip-text text-transparent">2.0M</p>
                                            <p class="text-xs text-muted-foreground mt-1">Daily views needed</p>
                                            </div>
                                        </div>
                                        <div class="mb-8 p-5 rounded-2xl bg-muted/30 border border-border/50">
                                            <h3 class="text-sm font-semibold text-foreground mb-4 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column w-4 h-4 text-primary">
                                                <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                                <path d="M18 17V9"></path>
                                                <path d="M13 17V5"></path>
                                                <path d="M8 17v-3"></path>
                                            </svg>Shorts vs Long-Form Revenue Comparison
                                            </h3>
                                            <div class="grid grid-cols-3 gap-3 text-sm">
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="text-muted-foreground text-xs mb-1">Metric</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-gradient-to-br from-red-500/10 to-rose-500/10 text-center">
                                                <p class="text-xs font-semibold text-red-600">Shorts</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-gradient-to-br from-red-500/10 to-orange-500/10 text-center">
                                                <p class="text-xs font-semibold text-red-600">Long-Form</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="text-xs text-muted-foreground">RPM</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="font-bold text-foreground">$0.02-0.10</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="font-bold text-foreground">$2-8</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="text-xs text-muted-foreground">Creator Share</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="font-bold text-foreground">45%</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="font-bold text-emerald-600">55%</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="text-xs text-muted-foreground">Viral Potential</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="font-bold text-emerald-600">Very High</p>
                                            </div>
                                            <div class="p-3 rounded-xl bg-background text-center">
                                                <p class="font-bold text-foreground">Moderate</p>
                                            </div>
                                            </div>
                                        </div>
                                        <?php 
                                                $instaTool_info_title = get_sub_field('tool_info_title');    
                                                $instaTool_info = get_sub_field('tool_info');    

                                                if($instaTool_info_title or $instaTool_info):
                                            ?>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                                </svg>
                                                <div>
                                                <?php if($instaTool_info_title):?>
                                                <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                                <?php endif;?>
                                                <?php if($instaTool_info):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                    </div>
                                <?php } elseif ( get_row_layout() == 'tiktok_shop_fee_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-orange-500/50 via-red-500/30 to-pink-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="price">Product Selling Price ($)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-orange-500">
                                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-orange-500/50 focus:ring-orange-500/20" id="price" placeholder="29.99" step="0.01" value="29.99">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="cost">Product Cost ($)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-red-500">
                                                <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path>
                                                <path d="M12 22V12"></path>
                                                <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"></path>
                                                <path d="m7.5 4.27 9 5.15"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-red-500/50 focus:ring-red-500/20" id="cost" placeholder="8.00" step="0.01" value="8.00">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="referral">Referral Fee (%)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-percent absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-pink-500">
                                                <line x1="19" x2="5" y1="5" y2="19"></line>
                                                <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                                <circle cx="17.5" cy="17.5" r="2.5"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-pink-500/50 focus:ring-pink-500/20" id="referral" placeholder="6" step="0.1" value="6">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="txfee">Transaction Fee (%)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-percent absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-orange-500">
                                                <line x1="19" x2="5" y1="5" y2="19"></line>
                                                <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                                <circle cx="17.5" cy="17.5" r="2.5"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-orange-500/50 focus:ring-orange-500/20" id="txfee" placeholder="1.8" step="0.1" value="1.8">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="affiliate">Affiliate Commission (%)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-rose-500">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-rose-500/50 focus:ring-rose-500/20" id="affiliate" placeholder="10" step="0.5" value="10">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="shipping">Shipping Cost ($)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-amber-500">
                                                <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
                                                <path d="M15 18H9"></path>
                                                <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
                                                <circle cx="17" cy="18" r="2"></circle>
                                                <circle cx="7" cy="18" r="2"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-amber-500/50 focus:ring-amber-500/20" id="shipping" placeholder="3.50" step="0.1" value="3.50">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="units">Monthly Units Sold</label>
                                            <div class="relative max-w-xs">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-orange-500">
                                                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path>
                                                <path d="M3 6h18"></path>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                            <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-orange-500/50 focus:ring-orange-500/20" id="units" placeholder="100" value="100">
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick category referral rates:</p>
                                            <div id="ttShopCategoryBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">Electronics (4%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">Fashion &amp; Apparel (6.5%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg shadow-orange-500/25">Beauty &amp; Health (6%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg shadow-orange-500/25">Home &amp; Garden (6%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">Food &amp; Beverages (3.5%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">Sports &amp; Outdoors (5%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">Books &amp; Media (4%)</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">Toys &amp; Games (5%)</button>
                                            </div>
                                        </div>
                                        <h3 class="text-sm font-semibold text-foreground mb-3">Per-Unit Breakdown</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                            <div class="md:col-span-2 p-6 rounded-2xl bg-gradient-to-br from-orange-500/10 via-red-500/5 to-pink-500/10 border border-orange-500/20"  >
                                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                                <div>
                                                <p class="text-sm text-muted-foreground mb-1">Net Profit Per Unit</p>
                                                <p id="ttShopProfitPerUnit" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">$13.15</p>
                                                </div>
                                                <div id="ttShopMarginBadge" class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-white text-sm font-bold shadow-lg bg-gradient-to-r from-emerald-500 to-teal-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4">
                                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                    <polyline points="16 7 22 7 22 13"></polyline>
                                                </svg>43.9% margin
                                                </div>
                                            </div>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-pink-500/10 to-rose-500/10 border border-pink-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Referral Fee</p>
                                            <p id="ttShopReferralAmt" class="text-3xl font-bold bg-gradient-to-r from-pink-500 to-rose-500 bg-clip-text text-transparent">-$1.80</p>
                                            <p id="ttShopReferralPct" class="text-xs text-muted-foreground mt-1">6% of price</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-orange-500/10 to-amber-500/10 border border-orange-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Transaction Fee</p>
                                            <p id="ttShopTxAmt" class="text-3xl font-bold bg-gradient-to-r from-orange-500 to-amber-500 bg-clip-text text-transparent">-$0.54</p>
                                            <p id="ttShopTxPct" class="text-xs text-muted-foreground mt-1">1.8% of price</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-rose-500/10 to-red-500/10 border border-rose-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Affiliate Commission</p>
                                            <p id="ttShopAffAmt" class="text-3xl font-bold bg-gradient-to-r from-rose-500 to-red-500 bg-clip-text text-transparent">-$3.00</p>
                                            <p id="ttShopAffPct" class="text-xs text-muted-foreground mt-1">10% of price</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-red-500/10 to-orange-500/10 border border-red-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Total Fees + Shipping</p>
                                            <p id="ttShopTotalFees" class="text-3xl font-bold bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">-$8.84</p>
                                            <p id="ttShopTotalFeesPct" class="text-xs text-muted-foreground mt-1">29.5% of price</p>
                                            </div>
                                        </div>
                                        <h3 id="ttShopMonthlyTitle" class="text-sm font-semibold text-foreground mb-3">Monthly Totals (100 units)</h3>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Total Revenue</p>
                                            <p id="ttShopTotalRevenue" class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent">$2999.00</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-red-500/10 to-rose-500/10 border border-red-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Total Fees</p>
                                            <p id="ttShopTotalFeesMonthly" class="text-3xl font-bold bg-gradient-to-r from-red-500 to-rose-500 bg-clip-text text-transparent">-$883.82</p>
                                            </div>
                                            <div class="p-5 rounded-2xl border bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border-emerald-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Net Profit</p>
                                            <p id="ttShopNetProfit" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">$1315.18</p>
                                            </div>
                                        </div>
                                        <?php 
                                                $instaTool_info_title = get_sub_field('tool_info_title');    
                                                $instaTool_info = get_sub_field('tool_info');    

                                                if($instaTool_info_title or $instaTool_info):
                                            ?>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                                </svg>
                                                <div>
                                                <?php if($instaTool_info_title):?>
                                                <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                                <?php endif;?>
                                                <?php if($instaTool_info):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                    </div>
                                <?php } elseif ( get_row_layout() == 'twitter_x_payout_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-sky-500/50 via-blue-500/30 to-slate-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                                <div>
                                                    <label
                                                        class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
                                                        for="xImpressions">Monthly Impressions</label>
                                                    <div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-sky-500">
                                                            <path
                                                                d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                            </path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                        <input type="number"
                                                            class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-sky-500/50 focus:ring-sky-500/20"
                                                            id="xImpressions" placeholder="5000000" value="5000000">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label
                                                        class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
                                                        for="xVerified">Verified Users (%)</label>
                                                    <div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-badge-check absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-blue-500">
                                                            <path
                                                                d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                            </path>
                                                            <path d="m9 12 2 2 4-4"></path>
                                                        </svg>
                                                        <input type="number"
                                                            class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-blue-500/50 focus:ring-blue-500/20"
                                                            id="xVerified" placeholder="15" max="100" step="1" value="15">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label
                                                        class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
                                                        for="xRpm">RPM Rate ($)</label>
                                                    <div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-emerald-500">
                                                            <line x1="12" x2="12" y1="2" y2="22"></line>
                                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                        </svg>
                                                        <input type="number"
                                                            class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-emerald-500/50 focus:ring-emerald-500/20"
                                                            id="xRpm" placeholder="1.50" step="0.1" value="1.50">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label
                                                        class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block"
                                                        for="xFollowers">Total Followers</label>
                                                    <div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-users absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-500">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg>
                                                        <input type="number"
                                                            class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-slate-500/50 focus:ring-slate-500/20"
                                                            id="xFollowers" placeholder="10000" value="10000">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <p class="text-sm text-muted-foreground mb-3">Quick impression presets:</p>
                                                <div id="xImpressionBtns" class="flex flex-wrap gap-2">
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">1M</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-sky-500 to-blue-500 text-white shadow-lg shadow-sky-500/25">5M</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">10M</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">25M</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">50M</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">100M</button>
                                                </div>
                                            </div>
                                            <div class="mb-8">
                                                <p class="text-sm text-muted-foreground mb-3">RPM rate ranges:</p>
                                                <div id="xRpmBtns" class="flex flex-wrap gap-2">
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.25
                                                        (Low)</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$0.75
                                                        (Below Avg)</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-500 to-slate-600 text-white shadow-lg shadow-blue-500/25">$1.50
                                                        (Average)</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$3.00
                                                        (Good)</button>
                                                    <button
                                                        class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">$5.00
                                                        (Premium)</button>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                                <div class="md:col-span-2 p-6 rounded-2xl bg-gradient-to-br from-sky-500/10 via-blue-500/5 to-slate-500/10 border border-sky-500/20"
                                                     >
                                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                                        <div>
                                                            <p class="text-sm text-muted-foreground mb-1">Estimated Monthly Earnings</p>
                                                            <p id="xMonthlyEarnings" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-sky-500 via-blue-500 to-slate-600 bg-clip-text text-transparent">
                                                                $1125.00</p>
                                                        </div>
                                                        <div id="xTierBadge"
                                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 text-white text-sm font-bold shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" class="lucide lucide-badge-check w-4 h-4">
                                                                <path
                                                                    d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                                </path>
                                                                <path d="m9 12 2 2 4-4"></path>
                                                            </svg>Top Creator
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-sky-500/10 to-cyan-500/10 border border-sky-500/20"
                                                     >
                                                    <p class="text-sm text-muted-foreground mb-1">Daily Earnings</p>
                                                    <p id="xDailyEarnings"
                                                        class="text-3xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent">
                                                        $37.50</p>
                                                    <p class="text-xs text-muted-foreground mt-1">Per day average</p>
                                                </div>
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"
                                                     >
                                                    <p class="text-sm text-muted-foreground mb-1">Yearly Earnings</p>
                                                    <p id="xYearlyEarnings"
                                                        class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">
                                                        $13500.00</p>
                                                    <p class="text-xs text-muted-foreground mt-1">Projected annual</p>
                                                </div>
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20"
                                                     >
                                                    <p class="text-sm text-muted-foreground mb-1">Verified Impressions</p>
                                                    <p id="xVerifiedImpressions"
                                                        class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent">
                                                        750K</p>
                                                    <p class="text-xs text-muted-foreground mt-1">Monetizable impressions</p>
                                                </div>
                                                <div class="p-5 rounded-2xl bg-gradient-to-br from-violet-500/10 to-purple-500/10 border border-violet-500/20"
                                                     >
                                                    <p class="text-sm text-muted-foreground mb-1">Earnings Per Follower</p>
                                                    <p id="xEarningsPerFollower"
                                                        class="text-3xl font-bold bg-gradient-to-r from-violet-500 to-purple-500 bg-clip-text text-transparent">
                                                        $0.1125</p>
                                                    <p class="text-xs text-muted-foreground mt-1">Monthly per follower</p>
                                                </div>
                                                <div class="md:col-span-2 p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-orange-500/10 border border-amber-500/20"
                                                     >
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <p class="text-sm text-muted-foreground mb-1">Impressions Needed for $100/mo</p>
                                                            <p id="xImpressionsNeeded"
                                                                class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-orange-500 bg-clip-text text-transparent">
                                                                444K</p>
                                                        </div>
                                                        <p class="text-xs text-muted-foreground max-w-[200px] text-right">Total monthly impressions
                                                            needed at current RPM &amp; verified %</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-8 p-5 rounded-2xl bg-muted/30 border border-border/50">
                                                <h3 class="text-sm font-semibold text-foreground mb-4 flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-badge-check w-4 h-4 text-sky-500">
                                                        <path
                                                            d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                                                        </path>
                                                        <path d="m9 12 2 2 4-4"></path>
                                                    </svg>X Creator Payout Requirements
                                                </h3>
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                                    <div id="xReq0" class="flex items-center gap-3 p-3 rounded-xl bg-emerald-500/10">
                                                        <span class="text-lg font-bold text-emerald-500">✓</span>
                                                        <span class="text-sm text-foreground">X Premium subscriber</span>
                                                    </div>
                                                    <div id="xReq1" class="flex items-center gap-3 p-3 rounded-xl bg-emerald-500/10">
                                                        <span class="text-lg font-bold text-emerald-500">✓</span>
                                                        <span class="text-sm text-foreground">500+ followers</span>
                                                    </div>
                                                    <div id="xReq2" class="flex items-center gap-3 p-3 rounded-xl bg-emerald-500/10">
                                                        <span class="text-lg font-bold text-emerald-500">✓</span>
                                                        <span class="text-sm text-foreground">5M+ impressions (3 months)</span>
                                                    </div>
                                                    <div id="xReq3" class="flex items-center gap-3 p-3 rounded-xl bg-muted/50">
                                                        <span class="text-lg font-bold text-muted-foreground">—</span>
                                                        <span class="text-sm text-foreground">18+ years old</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                $instaTool_info_title = get_sub_field('tool_info_title');    
                                                $instaTool_info = get_sub_field('tool_info');    

                                                if($instaTool_info_title or $instaTool_info):
                                            ?>
                                            <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                                </svg>
                                                <div>
                                                <?php if($instaTool_info_title):?>
                                                <p class="text-sm text-foreground font-medium"><?php echo $instaTool_info_title;?></p>
                                                <?php endif;?>
                                                <?php if($instaTool_info):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $instaTool_info;?></p>
                                                </div>
                                                <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif ( get_row_layout() == 'facebook_engagement_rate_calculator' ) { ?>
                                <div class="relative">
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-blue-600/50 via-blue-500/30 to-indigo-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="fbFollowers">Page Followers / Likes</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-blue-600">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-blue-600/50 focus:ring-blue-600/20" id="fbFollowers" placeholder="25000" value="25000">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="fbPosts">Number of Posts</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-blue-500">
                                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                                <circle cx="9" cy="9" r="2"></circle>
                                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-blue-500/50 focus:ring-blue-500/20" id="fbPosts" placeholder="10" value="10">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="fbReactions">Total Reactions (Likes, Love, etc.)</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thumbs-up absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-blue-500">
                                                <path d="M7 10v12"></path>
                                                <path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-blue-500/50 focus:ring-blue-500/20" id="fbReactions" placeholder="300" value="300">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="fbComments">Total Comments</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-indigo-500">
                                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-indigo-500/50 focus:ring-indigo-500/20" id="fbComments" placeholder="45" value="45">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="fbShares">Total Shares</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-sky-500">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>
                                                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-sky-500/50 focus:ring-sky-500/20" id="fbShares" placeholder="20" value="20">
                                            </div>
                                            </div>
                                            <div>
                                            <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for="fbReach">Avg. Post Reach</label>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-cyan-500">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-cyan-500/50 focus:ring-cyan-500/20" id="fbReach" placeholder="5000" value="5000">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick follower presets:</p>
                                            <div id="fbFollowerBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">1K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">5K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">10K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-600 to-blue-500 text-white shadow-lg shadow-blue-600/25">25K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">50K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">100K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">500K</button>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                            <div class="md:col-span-2 p-6 rounded-2xl bg-gradient-to-br from-blue-600/10 via-blue-500/5 to-indigo-500/10 border border-blue-600/20">
                                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                                <div>
                                                <p class="text-sm text-muted-foreground mb-1">Engagement Rate (by Followers)</p>
                                                <p id="fbEngRate" class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 via-blue-500 to-indigo-500 bg-clip-text text-transparent"> 0.146%</p>
                                                </div>
                                                <div id="fbRatingBadge" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-amber-500 to-orange-500 text-white text-sm font-bold shadow-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4">
                                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                    <polyline points="16 7 22 7 22 13"></polyline>
                                                </svg>Average
                                                </div>
                                            </div>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-500/10 border border-cyan-500/20">
                                            <p class="text-sm text-muted-foreground mb-1">Engagement Rate (by Reach)</p>
                                            <p id="fbReachEngRate" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent"> 0.73%</p>
                                            <p class="text-xs text-muted-foreground mt-1">More accurate metric</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20">
                                            <p class="text-sm text-muted-foreground mb-1">Organic Reach Rate</p>
                                            <p id="fbOrganicReach" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent"> 20.0%</p>
                                            <p class="text-xs text-muted-foreground mt-1">% of followers reached</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20">
                                            <p class="text-sm text-muted-foreground mb-1">Avg. Reactions / Post</p>
                                            <p id="fbAvgReactions" class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent"> 30</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-indigo-500/10 to-violet-500/10 border border-indigo-500/20">
                                            <p class="text-sm text-muted-foreground mb-1">Avg. Comments / Post</p>
                                            <p id="fbAvgComments" class="text-3xl font-bold bg-gradient-to-r from-indigo-500 to-violet-500 bg-clip-text text-transparent"> 5</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-sky-500/10 to-cyan-500/10 border border-sky-500/20">
                                            <p class="text-sm text-muted-foreground mb-1">Avg. Shares / Post</p>
                                            <p id="fbAvgShares" class="text-3xl font-bold bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent"> 2</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-orange-500/10 border border-amber-500/20">
                                            <p class="text-sm text-muted-foreground mb-1">Virality Rate</p>
                                            <p id="fbViralityRate" class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-orange-500 bg-clip-text text-transparent"> 0.04%</p>
                                            <p class="text-xs text-muted-foreground mt-1">Share-to-reach ratio</p>
                                            </div>
                                            <div class="md:col-span-2 p-5 rounded-2xl bg-gradient-to-br from-violet-500/10 to-purple-500/10 border border-violet-500/20">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                <p class="text-sm text-muted-foreground mb-1">Meaningful Interaction Rate</p>
                                                <p id="fbInteractionRate" class="text-3xl font-bold bg-gradient-to-r from-violet-500 to-purple-500 bg-clip-text text-transparent"> 17.8%</p>
                                                </div>
                                                <p class="text-xs text-muted-foreground max-w-[200px] text-right">% of engagements that are comments or shares (weighted more by algorithm)</p>
                                            </div>
                                            </div>
                                        </div> 
                                        <?php 
                                            $instaTool_info_title = get_sub_field('tool_info_title');    
                                            $instaTool_info = get_sub_field('tool_info');    

                                            if($instaTool_info_title or $instaTool_info):
                                        ?> 
                                        <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                            </svg>
                                            <div> <?php if($instaTool_info_title):?> <p class="text-sm text-foreground font-medium"> <?php echo $instaTool_info_title;?> </p> <?php endif;?> <?php if($instaTool_info):?> <p class="text-sm text-muted-foreground"> <?php echo $instaTool_info;?> </p>
                                            </div> <?php endif;?>
                                        </div> 
                                        <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif ( get_row_layout() == 'facebook_earning_calculator' ) { ?>
                                <div class="relative"  >
                                    <div class="p-[1px] rounded-3xl bg-gradient-to-br from-blue-500/50 via-indigo-500/30 to-cyan-500/50">
                                        <div class="bg-background/95 backdrop-blur-xl rounded-3xl p-6 md:p-8">
                                        <div class="mb-8">
                                            <h3 class="text-lg font-bold text-foreground mb-1 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video w-5 h-5 text-blue-500">
                                                <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                                                <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                            </svg>In-Stream Ad Revenue
                                            </h3>
                                            <p class="text-sm text-muted-foreground mb-4">Revenue from ads in your video content</p>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                            <div>
                                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for= "fbEarnViews">Daily Video Views</label>
                                                <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-blue-500">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-blue-500/50 focus:ring-blue-500/20" id= "fbEarnViews" placeholder="50000" value="50000">
                                                </div>
                                            </div>
                                            <div>
                                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for= "fbEarnCpm">CPM Rate ($)</label>
                                                <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-indigo-500">
                                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-indigo-500/50 focus:ring-indigo-500/20" id= "fbEarnCpm" placeholder="3" step="0.5" value="3">
                                                </div>
                                            </div>
                                            <div>
                                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for= "fbEarnAdRate">Monetized Views (%)</label>
                                                <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-cyan-500">
                                                    <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                                    <path d="M18 17V9"></path>
                                                    <path d="M13 17V5"></path>
                                                    <path d="M8 17v-3"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-cyan-500/50 focus:ring-cyan-500/20" id= "fbEarnAdRate" placeholder="55" max="100" value="55">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="mb-8">
                                            <p class="text-sm text-muted-foreground mb-3">Quick daily view presets:</p>
                                            <div id="fbEarnViewBtns" class="flex flex-wrap gap-2">
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">10K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-lg shadow-blue-500/25">50K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">100K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">500K</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">1M</button>
                                                <button class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground">5M</button>
                                            </div>
                                        </div>
                                        <div class="mb-8 p-5 rounded-2xl bg-gradient-to-br from-blue-500/5 to-indigo-500/5 border border-blue-500/10">
                                            <h3 class="text-lg font-bold text-foreground mb-1 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-5 h-5 text-indigo-500">
                                                <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                            </svg>Reels Bonus Revenue
                                            </h3>
                                            <p class="text-sm text-muted-foreground mb-4">Additional earnings from Facebook Reels</p>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div>
                                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for= "fbEarnReelsViews">Daily Reels Views</label>
                                                <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-indigo-500">
                                                    <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-indigo-500/50 focus:ring-indigo-500/20" id= "fbEarnReelsViews" placeholder="10000" value="10000">
                                                </div>
                                            </div>
                                            <div>
                                                <label class="peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-sm font-semibold mb-2 block" for= "fbEarnReelsRpm">Reels RPM ($)</label>
                                                <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-indigo-500">
                                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                </svg>
                                                <input type="number" class="flex w-full border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-12 h-14 text-lg font-semibold rounded-xl border-border/50 focus:border-indigo-500/50 focus:ring-indigo-500/20" id= "fbEarnReelsRpm" placeholder="0.50" step="0.1" value="0.50">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 border border-blue-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Daily Earnings</p>
                                            <p id="fbEarnDaily" class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-indigo-500 bg-clip-text text-transparent">$87.50</p>
                                            <p class="text-xs text-muted-foreground mt-1">Per day estimate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-500/10 to-teal-500/10 border border-emerald-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Monthly Earnings</p>
                                            <p id="fbEarnMonthly" class="text-3xl font-bold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">$2625.00</p>
                                            <p class="text-xs text-muted-foreground mt-1">30-day estimate</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-500/10 to-yellow-500/10 border border-amber-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Yearly Earnings</p>
                                            <p id="fbEarnYearly" class="text-3xl font-bold bg-gradient-to-r from-amber-500 to-yellow-500 bg-clip-text text-transparent">$31937.50</p>
                                            <p class="text-xs text-muted-foreground mt-1">365-day estimate</p>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-cyan-500/10 to-blue-500/10 border border-cyan-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">In-Stream Ad Revenue</p>
                                            <p id="fbEarnAdDaily" class="text-3xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">$82.50</p>
                                            <p class="text-xs text-muted-foreground mt-1">Daily from video ads</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-500/10 to-pink-500/10 border border-purple-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Reels Bonus Revenue</p>
                                            <p id="fbEarnReelsDaily" class="text-3xl font-bold bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent">$5.00</p>
                                            <p class="text-xs text-muted-foreground mt-1">Daily from Reels</p>
                                            </div>
                                            <div class="p-5 rounded-2xl bg-gradient-to-br from-violet-500/10 to-indigo-500/10 border border-violet-500/20"  >
                                            <p class="text-sm text-muted-foreground mb-1">Effective RPM</p>
                                            <p id="fbEarnRpm" class="text-3xl font-bold bg-gradient-to-r from-violet-500 to-indigo-500 bg-clip-text text-transparent">$1.46</p>
                                            <p class="text-xs text-muted-foreground mt-1">Revenue per 1K views</p>
                                            </div>
                                        </div>
                                        <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-500/5 to-indigo-500/5 border border-blue-500/10 mb-8">
                                            <h4 class="font-bold text-foreground mb-3 flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thumbs-up w-5 h-5 text-blue-500">
                                                <path d="M7 10v12"></path>
                                                <path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z"></path>
                                            </svg>Monetization Requirements
                                            </h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                            <div class="flex items-center gap-2 text-sm">
                                                <div class="w-5 h-5 rounded-full flex items-center justify-center bg-emerald-500/20 text-emerald-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-3 h-3">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                </div>
                                                <span class="text-foreground">10,000+ page followers</span>
                                            </div>
                                            <div class="flex items-center gap-2 text-sm">
                                                <div class="w-5 h-5 rounded-full flex items-center justify-center bg-muted text-muted-foreground">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-3 h-3">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                </div>
                                                <span class="text-muted-foreground">600,000 minutes viewed (60 days)</span>
                                            </div>
                                            <div class="flex items-center gap-2 text-sm">
                                                <div class="w-5 h-5 rounded-full flex items-center justify-center bg-emerald-500/20 text-emerald-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-3 h-3">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                </div>
                                                <span class="text-foreground">5+ active video uploads</span>
                                            </div>
                                            <div class="flex items-center gap-2 text-sm">
                                                <div class="w-5 h-5 rounded-full flex items-center justify-center bg-emerald-500/20 text-emerald-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-3 h-3">
                                                    <path d="M20 6 9 17l-5-5"></path>
                                                </svg>
                                                </div>
                                                <span class="text-foreground">Comply with monetization policies</span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="p-4 rounded-xl bg-muted/50 border border-border/50 flex items-start gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-primary shrink-0 mt-0.5">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                            </svg>
                                            <div>
                                            <p class="text-sm text-foreground font-medium">How Facebook pays creators</p>
                                            <p class="text-sm text-muted-foreground">Facebook pays through in-stream ads (CPM-based), Reels bonuses, and Stars. In-stream ads appear in videos 1+ minutes long. Facebook takes approximately 45% of ad revenue. Reels bonuses are invitation-based and vary by region.</p>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php };?>
                                <!-- CALCULATOR END -->
                            <?php endwhile;?>     
                        <?php }?>
                         
                        <?php
                            $post_url     = urlencode( get_permalink() );
                            $post_title   = urlencode( get_the_title() );
                            $linkedin_url = 'https://www.linkedin.com/sharing/share-offsite/?url=' . $post_url;
                            $twitter_url  = 'https://twitter.com/intent/tweet?url=' . $post_url . '&text=' . $post_title;
                            $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
                        ?>
                        <div class="mt-6 flex flex-wrap items-center justify-between gap-4"
                             >
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-muted-foreground mr-2">Share:</span>
                                <a href="<?php echo $twitter_url;?>" class="p-2 rounded-lg bg-muted/50 hover:bg-muted transition-colors"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-twitter w-4 h-4 text-muted-foreground hover:text-foreground">
                                        <path
                                            d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="<?php echo $facebook_url;?>" class="p-2 rounded-lg bg-muted/50 hover:bg-muted transition-colors">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-facebook w-4 h-4 text-muted-foreground hover:text-foreground">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="<?php echo $linkedin_url;?>" class="p-2 rounded-lg bg-muted/50 hover:bg-muted transition-colors">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-linkedin w-4 h-4 text-muted-foreground hover:text-foreground">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                        </path>
                                        <rect width="4" height="12" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </a>
                                <button data-url="<?php echo esc_url( get_permalink() ); ?>" class="copyToolLink p-2 rounded-lg bg-muted/50 hover:bg-muted transition-colors">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-copy w-4 h-4 text-muted-foreground hover:text-foreground">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <?php 
                            $ad_banner_icon = get_field('ad_banner_icon');
                            $ad_banner_subtitle = get_field('ad_banner_subtitle');
                            $ad_banner_title = get_field('ad_banner_title');
                            $ad_banner_text = get_field('ad_banner_text');
                            $ad_banner_btn_text = get_field('ad_banner_btn_text');
                            $ad_banner_btn_link = get_field('ad_banner_btn_link');

                            if(
                                $ad_banner_icon ||
                                $ad_banner_subtitle ||
                                $ad_banner_title ||
                                $ad_banner_text ||
                                $ad_banner_btn_text ||
                                $ad_banner_btn_link
                            ):
                        ?>
                        <div class="lg:hidden mt-8">
                            <div class="relative group"  >
                                <div class="p-4 rounded-2xl bg-gradient-to-br from-primary/5 via-secondary/5 to-accent/5 border border-border/50 hover:border-primary/30 transition-all duration-300">
                                    <div class="flex items-center gap-3 mb-3">
                                        <?php if($ad_banner_icon):?>
                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                            <?php echo $ad_banner_icon;?>
                                        </div>
                                        <?php endif;?>
                                        <div class="flex-1">
                                            <?php if($ad_banner_subtitle):?>
                                            <p class="text-xs text-muted-foreground"><?php echo $ad_banner_subtitle;?></p>
                                            <?php endif;?>
                                            <?php if($ad_banner_title):?>
                                            <p class="text-sm font-semibold text-foreground"><?php echo $ad_banner_title;?></p>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <?php if($ad_banner_text):?>
                                    <p class="text-xs text-muted-foreground mb-3">
                                       <?php echo $ad_banner_text;?>
                                    </p>
                                    <?php endif;?>
                                    <?php if($ad_banner_btn_text and $ad_banner_btn_link):?>
                                    <a href="<?php echo $ad_banner_btn_link?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 px-5 w-full text-xs h-8">
                                        <?php echo $ad_banner_btn_text;?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-external-link w-3 h-3 ml-1">
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
                        <?php endif;?>

                        <?php 
                            $tool_faqs_title = get_field('tool_faqs_title');
                            if($tool_faqs_title):
                        ?>
                        <div class="mt-12"  >
                            <?php if($tool_faqs_title):?>
                            <h2 class="text-2xl font-display font-bold mb-6"><?php echo $tool_faqs_title;?></h2>
                            <?php endif;?>

                            <?php if(have_rows('tool_faq')):?>
                            <div class="space-y-3" data-orientation="vertical">
                                <?php while(have_rows('tool_faq')): the_row();
                                    $tool_faq_title = get_sub_field('tool_faq_title');
                                    $tool_faq_text = get_sub_field('tool_faq_text');

                                    if($tool_faq_title and $tool_faq_text):
                                ?>
                                <div class="border border-border/50 rounded-xl px-5 data-[state=open]:bg-muted/30">
                                    <h3 class="flex">
                                        <button type="button"  class="tool__faq-btn flex flex-1 items-center justify-between transition-all  text-left font-semibold hover:no-underline py-4">
                                            <?php echo $tool_faq_title;?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chevron-down h-4 w-4 shrink-0 transition-transform duration-200">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </button>
                                    </h3>
                                    <div class="tool__faq-text overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down" >
                                        <div class="pt-0 text-muted-foreground pb-4"><?php echo $tool_faq_text;?></div>
                                    </div>
                                </div>
                                <?php endif; endwhile;?>
                            </div>
                            
                            <?php endif;?>
                        </div>
                        <?php endif;?>

                        <?php 
                            $ad_banner_icon = get_field('ad_banner_icon');
                            $ad_banner_subtitle = get_field('ad_banner_subtitle');
                            $ad_banner_title = get_field('ad_banner_title');
                            $ad_banner_text = get_field('ad_banner_text');
                            $ad_banner_btn_text = get_field('ad_banner_btn_text');
                            $ad_banner_btn_link = get_field('ad_banner_btn_link');

                            if (
                                $ad_banner_icon ||
                                $ad_banner_subtitle ||
                                $ad_banner_title ||
                                $ad_banner_text ||
                                $ad_banner_btn_text ||
                                $ad_banner_btn_link
                            ) :
                        ?>
                        <div class="mt-12">
                            <div class="relative group"  >
                                <div class="p-6 rounded-2xl bg-gradient-to-r from-primary/10 via-secondary/5 to-accent/10 border border-border/50 hover:border-primary/30 transition-all duration-300">
                                    <div class="flex flex-col md:flex-row md:items-center gap-4">
                                        <div class="flex items-center gap-4 flex-1">
                                            <?php if($ad_banner_icon):?>
                                            <div class="tool__banner-icon w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center shrink-0">
                                                <?php echo $ad_banner_icon;?>
                                            </div>
                                            <?php endif;?>
                                            <div>
                                                <?php if($ad_banner_subtitle):?>
                                                <p class="text-xs text-muted-foreground mb-1"><?php echo $ad_banner_subtitle;?></p>
                                                <?php endif;?>
                                                <?php if($ad_banner_title):?>
                                                <p class="text-lg font-bold text-foreground"><?php echo $ad_banner_title;?></p>
                                                <?php endif;?>    
                                                <?php if($ad_banner_text):?>
                                                <p class="text-sm text-muted-foreground"><?php echo $ad_banner_text;?></p>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <?php if($ad_banner_btn_text  and $ad_banner_btn_link):?>
                                        <a href="<?php echo  $ad_banner_btn_link;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] h-12 px-7 py-2 shrink-0">
                                            <?php echo $ad_banner_btn_text;?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-4 h-4 ml-2">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="hidden lg:block w-80 shrink-0 space-y-6">
                        <div class="sticky top-24 space-y-6">
                            <?php 
                                $top_sidebar_badge = get_field('top_sidebar_badge');
                                $top_sidebar_image = get_field('top_sidebar_image');
                                $top_sidebar_title = get_field('top_sidebar_title');
                                $top_sidebar_text = get_field('top_sidebar_text');
                                $top_sidebar_btn_text = get_field('top_sidebar_btn_text');
                                $top_sidebar_btn_link = get_field('top_sidebar_btn_link');
                            ?>
                            <div class="relative group"  >
                                <div class="p-5 rounded-2xl bg-gradient-to-br from-background via-primary/5 to-background border border-border/50 hover:border-primary/30 transition-all duration-300 overflow-hidden">
                                    <div  class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/20 to-transparent rounded-full blur-2xl opacity-50"> </div>
                                    <div class="relative">
                                        <?php if($top_sidebar_badge):?>
                                        <div class="flex items-center justify-between mb-4">
                                            <span class="text-xs font-medium text-muted-foreground px-2 py-1 rounded-full bg-muted/50"><?php echo $top_sidebar_badge;?></span>
                                        </div>
                                        <?php endif;?>
                                        <?php if($top_sidebar_image):?>
                                        <div class="relative aspect-[16/10] overflow-hidden w-full h-32 rounded-xl bg-gradient-to-br from-primary/20 via-secondary/20 to-accent/20 flex items-center justify-center mb-4">
                                            <img src="<?php echo $top_sidebar_image['url']?>" alt="<?php echo $top_sidebar_image['alt']?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        </div>
                                        <?php endif;?>
                                        <?php if($top_sidebar_title):?>
                                        <h4 class="font-semibold text-foreground mb-2"><?php echo $top_sidebar_title;?></h4>
                                        <?php endif;?>
                                        <?php if($top_sidebar_text):?>
                                        <p class="text-sm text-muted-foreground mb-4"><?php echo $top_sidebar_text;?></p>
                                        <?php endif;?>
                                        <?php if($top_sidebar_btn_text and $top_sidebar_btn_link):?>
                                        <a href="<?php echo  $top_sidebar_btn_link;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-gradient-main text-white shadow-gradient hover:shadow-gradient-lg hover:scale-[1.03] h-10 px-5 w-full">
                                            <?php echo $top_sidebar_btn_text;?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link w-3.5 h-3.5 ml-1">
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

                            <?php
                                $post_id = get_the_ID();
                                $cat_ids = [];
                                $categories = get_the_category($post_id);
                                if (!empty($categories) && !is_wp_error($categories)):
                                    foreach ($categories as $category):
                                        array_push($cat_ids, $category->term_id);
                                    endforeach;
                                endif;
                                $current_post_type = get_post_type($post_id);
                                $query_args = [
                                    "category__in" => $cat_ids,
                                    "post_type" => $current_post_type,
                                    "post__not_in" => [$post_id],
                                    "posts_per_page" => "3",
                                ];
                                $related_cats_post = new WP_Query($query_args);

                                if ($related_cats_post->have_posts()): $post_index = 0;?>
                                <div class="p-5 rounded-2xl bg-muted/30 border border-border/50">
                                    <h3 class="font-semibold text-foreground mb-4 flex items-center gap-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 text-primary">
                                            <path
                                                d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                            </path>
                                        </svg>
                                        Related Tools
                                    </h3>
                                <?php
                                while ($related_cats_post->have_posts()): $post_index ++;

                                    $related_cats_post->the_post();
                                    $tool_icon = get_field('tool_icon');
                                    $tool_text = get_field('tool_text');

                                    $classes = [
                                        1 => "w-12 h-12 rounded-xl bg-gradient-to-br from-red-500 to-pink-500 flex items-center justify-center shrink-0",
                                        2 => "w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shrink-0",
                                        3 => "w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shrink-0",
                                    ];

                                    $index = ($post_index - 1) % 11 + 1;

                                    $className = $classes[$index];
                                    ?>
                                    <a href="<?php the_permalink();?>">
                                        <div class="group p-4 rounded-2xl bg-background/80 border border-border/50 hover:border-primary/30 transition-all duration-300">
                                            <div class="flex items-start gap-3">
                                                <?php if($tool_icon):?>
                                                <div class="tool__related-icon <?php echo  $className;?>">
                                                    <?php echo $tool_icon;?>
                                                </div>
                                                <?php endif;?>
                                                <div class="flex-1 min-w-0">
                                                    <h4 class="font-semibold text-foreground group-hover:text-primary transition-colors truncate">
                                                        <?php the_title();?>
                                                    </h4>
                                                    <?php if($tool_text):?>
                                                    <p class="text-xs text-muted-foreground">
                                                        <?php echo esc_html(mb_strlen($tool_text) > 25 ? mb_substr($tool_text, 0, 25) . '…' : $tool_text); ?>
                                                    </p>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                                endwhile;
                                wp_reset_query();
                                ?>
                                <a href="/tools">
                                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 h-10 px-5 w-full mt-4">
                                        View All Tools 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                            <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                    </button>
                                </a>
                                </div>
                                <?php endif; ?>

                            <?php 
                                $bottom_sidebar_icon = get_field('bottom_sidebar_icon');
                                $bottom_sidebar_subtitle = get_field('bottom_sidebar_subtitle');
                                $bottom_sidebar_title = get_field('bottom_sidebar_title');
                                $bottom_sidebar_text = get_field('bottom_sidebar_text');
                                $bottom_sidebar_btn_text = get_field('bottom_sidebar_btn_text');
                                $bottom_sidebar_btn_link = get_field('bottom_sidebar_btn_link');
                            ?>
                            <div class="relative group"  >
                                <div class="p-4 rounded-2xl bg-gradient-to-br from-primary/5 via-secondary/5 to-accent/5 border border-border/50 hover:border-primary/30 transition-all duration-300">
                                    <div class="flex items-center gap-3 mb-3">
                                        <?php if($bottom_sidebar_icon):?>
                                        <div class="tool__adbanner-icon w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                            <?php echo $bottom_sidebar_icon;?>
                                        </div>
                                        <?php endif;?>
                                        <div class="flex-1">
                                            <?php if($bottom_sidebar_subtitle):?>
                                            <p class="text-xs text-muted-foreground"><?php echo $bottom_sidebar_subtitle;?></p>
                                            <?php endif;?>
                                            <?php if($bottom_sidebar_title):?>
                                            <p class="text-sm font-semibold text-foreground"><?php echo $bottom_sidebar_title;?></p>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <?php if($bottom_sidebar_text):?>
                                    <p class="text-xs text-muted-foreground mb-3">
                                        <?php echo $bottom_sidebar_text;?>
                                    </p>
                                    <?php endif;?>
                                    <?php if($bottom_sidebar_btn_text and $bottom_sidebar_btn_link):?>
                                    <a href="<?php echo  $bottom_sidebar_btn_link;?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 px-5 w-full text-xs h-8">
                                        <?php echo $bottom_sidebar_btn_text;?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-external-link w-3 h-3 ml-1">
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
                    </div>
                </div>
            </div>
        </section>

        <?php if ($related_cats_post->have_posts()): $post_index2 = 0;?>
        <section class="lg:hidden py-12 bg-muted/30">
            <div class="container mx-auto px-6">
                <h3 class="font-semibold text-foreground mb-4 flex items-center gap-2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-zap w-4 h-4 text-primary">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                        </path>
                    </svg>Related Tools 22</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                    <?php
                    while ($related_cats_post->have_posts()): $post_index2 ++;

                        $related_cats_post->the_post();
                        $tool_icon = get_field('tool_icon');
                        $tool_text = get_field('tool_text');

                        $classes2 = [
                            1 => "w-12 h-12 rounded-xl bg-gradient-to-br from-red-500 to-pink-500 flex items-center justify-center shrink-0",
                            2 => "w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center shrink-0",
                            3 => "w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shrink-0",
                        ];

                        $index2 = ($post_index2 - 1) % 11 + 1;

                        $className2 = $classes[$index2];
                    ?>
                    <a href="https://id-preview--83bcbdc7-0287-4e47-b5e2-58e31df2bfe6.lovable.app/tools/youtube-calculator">
                        <div class="group p-4 rounded-2xl bg-background/80 border border-border/50 hover:border-primary/30 transition-all duration-300">
                            <div class="flex items-start gap-3">
                                <?php if($tool_icon):?>
                                <div class="<?php echo  $className2;?>">
                                    <?php echo $tool_icon;?>
                                </div>
                                <?php endif;?>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-foreground group-hover:text-primary transition-colors truncate">
                                        <?php the_title();?>
                                    </h4>
                                    <?php if($tool_text):?>
                                    <p class="text-xs text-muted-foreground"><?php echo esc_html(mb_strlen($tool_text) > 25 ? mb_substr($tool_text, 0, 25) . '…' : $tool_text); ?></p>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata();?>
                </div>
                <a href="/tools">
                    <div class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-semibold ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border-2 border-border bg-transparent hover:bg-muted hover:border-primary/30 h-10 px-5 w-full mt-4">
                            View All Tools 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-1">
                                <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </section>
        <?php endif;?>
        
    </main>
</div>


<?php get_footer(); ?>