// TIKTOK COIN CALCULATOR
(function () {
    var input       = document.getElementById("coins");
    var totalValueEl = document.getElementById("TotalValue");
    var creatorEl   = document.getElementById("CreatorEarnings");
    var diamondsEl  = document.getElementById("DiamondsReceived");
    var quickBtns   = document.querySelectorAll("#coinValues button");

    if (!input) return;

    var COIN_TO_USD = 0.0105;
    var CREATOR_CUT = 0.5;

    function calculate() {
        var coins    = Math.max(0, parseFloat(input.value) || 0);
        var total    = coins * COIN_TO_USD;
        var earnings = total * CREATOR_CUT;
        var diamonds = Math.floor(coins * 0.5);

        if (totalValueEl) totalValueEl.textContent = "$" + total.toFixed(2);
        if (creatorEl)    creatorEl.textContent    = "$" + earnings.toFixed(2);
        if (diamondsEl)   diamondsEl.textContent   = diamonds.toLocaleString("en-US");

        quickBtns.forEach(function (btn) {
            var val = btn.textContent.trim();
            btn.className = val === String(Math.round(coins))
                ? "px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-pink-500 to-rose-500 text-white shadow-lg shadow-pink-500/25"
                : "px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground";
        });
    }

    input.addEventListener("input", calculate);

    quickBtns.forEach(function (btn) {
        btn.addEventListener("click", function () {
            input.value = btn.textContent.trim();
            calculate();
        });
    });

    calculate();
})();

//INSTAGRAM ENGAGEMENT RATE CALCULATOR
(function () {
    // Получаем элементы
    var followersEl = document.getElementById("followers");
    var postsEl = document.getElementById("posts");
    var likesEl = document.getElementById("likes");
    var commentsEl = document.getElementById("comments");
    var percentEl = document.getElementById("instaPercent");
    var avgLikesEl = document.getElementById("instaAvgLikes");
    var avgCommentsEl = document.getElementById("instaAvgComments");
    var avgReachEl = document.getElementById("instaAvgReach");
    var ratioEl = document.getElementById("instaCommentRatio");
    var btnsWrap = document.getElementById("instaBtns");

    // Если калькулятора нет на странице — выходим
    if (!followersEl || !postsEl || !likesEl || !commentsEl) return;

    var PRESETS = [1000, 5000, 10000, 50000, 100000, 500000];

    function calculateInstEng() {
        var f = parseFloat(followersEl.value) || 0;
        var l = parseFloat(likesEl.value) || 0;
        var c = parseFloat(commentsEl.value) || 0;
        var p = parseFloat(postsEl.value) || 1;

        var avgLikes = l / p;
        var avgComments = c / p;
        var engRate = f > 0 ? ((avgLikes + avgComments) / f) * 100 : 0;
        var reach = f * (engRate / 100) * 3.5;
        var ratio = avgComments > 0 ? (avgLikes / avgComments).toFixed(1) : "N/A";

        // Рейтинг
        var ratingLabel = "Low";
        var ratingClass = "from-red-500 to-orange-500";
        if (engRate >= 6) {
            ratingLabel = "Excellent";
            ratingClass = "from-emerald-500 to-teal-500";
        } else if (engRate >= 3) {
            ratingLabel = "Good";
            ratingClass = "from-purple-500 to-pink-500";
        } else if (engRate >= 1) {
            ratingLabel = "Average";
            ratingClass = "from-amber-500 to-orange-500";
        }

        // Обновляем DOM
        if (percentEl) {
            percentEl.textContent = engRate.toFixed(2) + "%";
        }

        // Avg Likes — в вёрстке id стоит на <p> с лейблом, значение — следующий <p>
        if (avgLikesEl && avgLikesEl.nextElementSibling) {
            avgLikesEl.nextElementSibling.textContent =
                Math.round(avgLikes).toLocaleString("en-US");
        }

        if (avgCommentsEl) {
            avgCommentsEl.textContent =
                Math.round(avgComments).toLocaleString("en-US");
        }

        if (avgReachEl) {
            avgReachEl.textContent = Math.round(reach).toLocaleString("en-US");
        }

        if (ratioEl) {
            ratioEl.textContent = ratio === "N/A" ? "N/A" : ratio + ":1";
        }

        // Обновляем бейдж рейтинга
        var badge = document.querySelector("#instaPercent")
            ? document
                .querySelector("#instaPercent")
                .closest(".md\\:col-span-2")
                .querySelector(".inline-flex")
            : null;

        if (badge) {
            badge.className = badge.className.replace(
                /from-\S+\s+to-\S+/,
                ratingClass,
            );
            // Текст внутри бейджа (после иконки svg)
            var textNode = Array.from(badge.childNodes).find(function (n) {
                return n.nodeType === 3 && n.textContent.trim();
            });
            if (textNode) textNode.textContent = ratingLabel;
        }

        // Синхронизация кнопок
        if (btnsWrap) {
            var btns = btnsWrap.querySelectorAll("button");
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(followersEl.value) === PRESETS[i];
                btn.className = isActive
                    ? "px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-purple-500 to-pink-500 text-white shadow-lg shadow-purple-500/25"
                    : "px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground";
            });
        }
    }

    // Слушатели на инпуты
    [followersEl, postsEl, likesEl, commentsEl].forEach(function (el) {
        el.addEventListener("input", calculateInstEng);
    });

    // Слушатели на кнопки пресетов
    if (btnsWrap) {
        var btns = btnsWrap.querySelectorAll("button");
        btns.forEach(function (btn, i) {
            btn.addEventListener("click", function () {
                followersEl.value = PRESETS[i];
                calculateInstEng();
            });
        });
    }

    calculateInstEng();
})();


// YOUTUBE MONEY CALCULATOR
(function () {
    var dailyViewsEl   = document.getElementById('dailyViews');
    var cpmEl          = document.getElementById('cpm');
    var adRateEl       = document.getElementById('adRate');
    var dailyEl        = document.getElementById('ytMoneyDailyEarnings');
    var monthlyEl      = document.getElementById('ytMoneyMonthlyEarnings');
    var yearlyEl       = document.getElementById('ytMoneyYearlyEarnings');
    var rpmEl          = document.getElementById('ytMoneyRPM');
    var monetizedEl    = document.getElementById('ytMoneyMonetizedViews');
    var btnsWrap       = document.getElementById('ytMoneyBtns');

    if (!dailyViewsEl || !cpmEl || !adRateEl) return;

    var PRESETS      = [1000, 5000, 10000, 50000, 100000, 1000000];
    var PRESET_LABELS = ['1K', '5K', '10K', '50K', '100K', '1M'];

    function calculateYtMoney() {
        var views    = parseFloat(dailyViewsEl.value) || 0;
        var cpm      = parseFloat(cpmEl.value)        || 0;
        var adRate   = (parseFloat(adRateEl.value)    || 0) / 100;

        var monetizedViews  = views * adRate;
        var dailyEarnings   = (monetizedViews / 1000) * cpm;
        var monthlyEarnings = dailyEarnings * 30;
        var yearlyEarnings  = dailyEarnings * 365;
        var rpm             = views > 0 ? (dailyEarnings / views) * 1000 : 0;

        if (dailyEl)     dailyEl.textContent     = '$' + dailyEarnings.toFixed(2);
        if (monthlyEl)   monthlyEl.textContent   = '$' + monthlyEarnings.toFixed(2);
        if (yearlyEl)    yearlyEl.textContent     = '$' + yearlyEarnings.toFixed(2);
        if (rpmEl)       rpmEl.textContent        = '$' + rpm.toFixed(2);
        if (monetizedEl) monetizedEl.textContent  = Math.round(monetizedViews).toLocaleString('en-US');

        // Синхронизация кнопок
        if (btnsWrap) {
            var btns = btnsWrap.querySelectorAll('button');
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(dailyViewsEl.value) === PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-red-500 to-orange-500 text-white shadow-lg shadow-red-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [dailyViewsEl, cpmEl, adRateEl].forEach(function (el) {
        el.addEventListener('input', calculateYtMoney);
    });

    if (btnsWrap) {
        var btns = btnsWrap.querySelectorAll('button');
        btns.forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                dailyViewsEl.value = PRESETS[i];
                calculateYtMoney();
            });
        });
    }

    calculateYtMoney();
})();

// TIKTOK MONEY CALCULATOR
(function () {
    var dailyViewsEl = document.getElementById('dailyViews');
    var cpmEl        = document.getElementById('cpm');
    var engagementEl = document.getElementById('engagement');
    var dailyEl      = document.getElementById('ttMoneyDaily');
    var monthlyEl    = document.getElementById('ttMoneyMonthly');
    var yearlyEl     = document.getElementById('ttMoneyYearly');
    var likesEl      = document.getElementById('ttMoneyLikes');
    var brandDealEl  = document.getElementById('ttMoneyBrandDeal');
    var btnsWrap     = document.getElementById('ttMoneyBtns');

    if (!dailyViewsEl || !cpmEl || !engagementEl) return;

    var PRESETS       = [10000, 50000, 100000, 500000, 1000000, 5000000];
    var PRESET_LABELS = ['10K', '50K', '100K', '500K', '1M', '5M'];

    function calculateTtMoney() {
        var views      = parseFloat(dailyViewsEl.value) || 0;
        var cpm        = parseFloat(cpmEl.value)        || 0;
        var engagement = (parseFloat(engagementEl.value) || 0) / 100;

        var dailyEarnings       = (views / 1000) * cpm;
        var monthlyEarnings     = dailyEarnings * 30;
        var yearlyEarnings      = dailyEarnings * 365;
        var estimatedLikes      = Math.round(views * engagement);
        var estimatedBrandDeal  = Math.round(views * 0.01);

        if (dailyEl)     dailyEl.textContent     = '$' + dailyEarnings.toFixed(2);
        if (monthlyEl)   monthlyEl.textContent   = '$' + monthlyEarnings.toFixed(2);
        if (yearlyEl)    yearlyEl.textContent     = '$' + yearlyEarnings.toFixed(2);
        if (likesEl)     likesEl.textContent      = estimatedLikes.toLocaleString('en-US');
        if (brandDealEl) brandDealEl.textContent  = '$' + estimatedBrandDeal.toLocaleString('en-US');

        // Синхронизация кнопок
        if (btnsWrap) {
            var btns = btnsWrap.querySelectorAll('button');
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(dailyViewsEl.value) === PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-cyan-500 to-pink-500 text-white shadow-lg shadow-cyan-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [dailyViewsEl, cpmEl, engagementEl].forEach(function (el) {
        el.addEventListener('input', calculateTtMoney);
    });

    if (btnsWrap) {
        var btns = btnsWrap.querySelectorAll('button');
        btns.forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                dailyViewsEl.value = PRESETS[i];
                calculateTtMoney();
            });
        });
    }

    calculateTtMoney();
})();


// TIKTOK DIAMONDS CALCULATOR
(function () {
    var diamondsEl   = document.getElementById('diamonds');
    var currencyEl   = document.getElementById('currency');
    var btnsWrap     = document.getElementById('ttDiamondsBtns');
    var netEl        = document.getElementById('ttDiamondsNet');
    var grossEl      = document.getElementById('ttDiamondsGross');
    var cutEl        = document.getElementById('ttDiamondsCut');
    var coinsEl      = document.getElementById('ttDiamondsCoins');
    var viewerEl     = document.getElementById('ttDiamondsViewerSpent');

    // Ячейки таблицы
    var ref100GrossEl = document.getElementById('ttDiamondsRef100Gross');
    var ref100NetEl   = document.getElementById('ttDiamondsRef100Net');
    var ref1kGrossEl  = document.getElementById('ttDiamondsRef1kGross');
    var ref1kNetEl    = document.getElementById('ttDiamondsRef1kNet');
    var ref10kGrossEl = document.getElementById('ttDiamondsRef10kGross');
    var ref10kNetEl   = document.getElementById('ttDiamondsRef10kNet');

    if (!diamondsEl || !currencyEl) return;

    var DIAMOND_TO_USD       = 0.005;
    var COINS_PER_DOLLAR     = 142;
    var COINS_TO_DIAMOND     = 2;

    var CURRENCIES = {
        USD: { symbol: '$',   rate: 1     },
        EUR: { symbol: '€',   rate: 0.92  },
        GBP: { symbol: '£',   rate: 0.79  },
        CAD: { symbol: 'C$',  rate: 1.36  },
        AUD: { symbol: 'A$',  rate: 1.53  },
        INR: { symbol: '₹',   rate: 83.12 },
        BRL: { symbol: 'R$',  rate: 4.97  },
        MXN: { symbol: 'MX$', rate: 17.15 }
    };

    var PRESETS       = [100, 500, 1000, 5000, 10000, 50000, 100000, 500000];

    function fmt(value, symbol) {
        return symbol + value.toFixed(2);
    }

    function calculateDiamonds() {
        var d        = parseFloat(diamondsEl.value) || 0;
        var code     = currencyEl.value;
        var cur      = CURRENCIES[code] || CURRENCIES['USD'];
        var sym      = cur.symbol;
        var rate     = cur.rate;

        var grossUSD        = d * DIAMOND_TO_USD;
        var cutUSD          = grossUSD * 0.5;
        var netUSD          = grossUSD - cutUSD;
        var equivalentCoins = Math.round(d * COINS_TO_DIAMOND);
        var viewerSpentUSD  = (equivalentCoins / COINS_PER_DOLLAR);

        if (netEl)     netEl.textContent     = fmt(netUSD    * rate, sym);
        if (grossEl)   grossEl.textContent   = fmt(grossUSD  * rate, sym);
        if (cutEl)     cutEl.textContent     = '-' + fmt(cutUSD * rate, sym);
        if (coinsEl)   coinsEl.textContent   = equivalentCoins.toLocaleString('en-US');
        if (viewerEl)  viewerEl.textContent  = fmt(viewerSpentUSD * rate, sym);

        // Таблица конвертации
        if (ref100GrossEl)  ref100GrossEl.textContent  = fmt(0.50  * rate, sym);
        if (ref100NetEl)    ref100NetEl.textContent     = fmt(0.25  * rate, sym);
        if (ref1kGrossEl)   ref1kGrossEl.textContent   = fmt(5.00  * rate, sym);
        if (ref1kNetEl)     ref1kNetEl.textContent     = fmt(2.50  * rate, sym);
        if (ref10kGrossEl)  ref10kGrossEl.textContent  = fmt(50.00 * rate, sym);
        if (ref10kNetEl)    ref10kNetEl.textContent    = fmt(25.00 * rate, sym);

        // Синхронизация кнопок
        if (btnsWrap) {
            var btns = btnsWrap.querySelectorAll('button');
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(diamondsEl.value) === PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-lg shadow-blue-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    diamondsEl.addEventListener('input', calculateDiamonds);
    currencyEl.addEventListener('change', calculateDiamonds);

    if (btnsWrap) {
        var btns = btnsWrap.querySelectorAll('button');
        btns.forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                diamondsEl.value = PRESETS[i];
                calculateDiamonds();
            });
        });
    }

    calculateDiamonds();
})();

// YOUTUBE SHORTS CALCULATOR
(function () {
    var dailyViewsEl = document.getElementById('dailyViews');
    var rpmEl        = document.getElementById('rpm');
    var shortsEl     = document.getElementById('shorts');
    var btnsWrap     = document.getElementById('ytShortsBtns');
    var rpmBtnsWrap  = document.getElementById('ytShortsRpmBtns');
    var dailyEl      = document.getElementById('ytShortsDaily');
    var monthlyEl    = document.getElementById('ytShortsMonthly');
    var yearlyEl     = document.getElementById('ytShortsYearly');
    var perShortEl   = document.getElementById('ytShortsPerShort');
    var monthlyViewsEl   = document.getElementById('ytShortsMonthlyViews');
    var viewsNeededEl    = document.getElementById('ytShortsViewsNeeded');

    if (!dailyViewsEl || !rpmEl || !shortsEl) return;

    var VIEW_PRESETS = [10000, 50000, 100000, 500000, 1000000, 5000000, 10000000];
    var RPM_PRESETS  = ['0.02', '0.04', '0.06', '0.10', '0.15'];

    function fmtViews(v) {
        if (v >= 1000000) return (v / 1000000).toFixed(1) + 'M';
        return (v / 1000).toFixed(0) + 'K';
    }

    function calculateYtShorts() {
        var views  = parseFloat(dailyViewsEl.value) || 0;
        var rpm    = parseFloat(rpmEl.value)        || 0;
        var shorts = parseFloat(shortsEl.value)     || 1;

        var daily        = (views / 1000) * rpm;
        var monthly      = daily * 30;
        var yearly       = daily * 365;
        var perShort     = shorts > 0 ? daily / shorts : 0;
        var monthlyViews = views * 30;
        var viewsNeeded  = rpm > 0 ? (100 / (rpm * 30)) * 1000 : 0;

        if (dailyEl)       dailyEl.textContent       = '$' + daily.toFixed(2);
        if (monthlyEl)     monthlyEl.textContent     = '$' + monthly.toFixed(2);
        if (yearlyEl)      yearlyEl.textContent      = '$' + yearly.toFixed(2);
        if (perShortEl)    perShortEl.textContent    = '$' + perShort.toFixed(2);
        if (monthlyViewsEl) monthlyViewsEl.textContent = fmtViews(monthlyViews);
        if (viewsNeededEl)  viewsNeededEl.textContent  = fmtViews(viewsNeeded);

        // Синхронизация кнопок views
        if (btnsWrap) {
            var btns = btnsWrap.querySelectorAll('button');
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(dailyViewsEl.value) === VIEW_PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-red-500 to-rose-500 text-white shadow-lg shadow-red-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }

        // Синхронизация кнопок RPM
        if (rpmBtnsWrap) {
            var rpmBtns = rpmBtnsWrap.querySelectorAll('button');
            rpmBtns.forEach(function (btn, i) {
                var isActive = parseFloat(rpmEl.value) === parseFloat(RPM_PRESETS[i]);
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-rose-500 to-pink-500 text-white shadow-lg shadow-rose-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [dailyViewsEl, rpmEl, shortsEl].forEach(function (el) {
        el.addEventListener('input', calculateYtShorts);
    });

    if (btnsWrap) {
        var btns = btnsWrap.querySelectorAll('button');
        btns.forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                dailyViewsEl.value = VIEW_PRESETS[i];
                calculateYtShorts();
            });
        });
    }

    if (rpmBtnsWrap) {
        var rpmBtns = rpmBtnsWrap.querySelectorAll('button');
        rpmBtns.forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                rpmEl.value = RPM_PRESETS[i];
                calculateYtShorts();
            });
        });
    }

    calculateYtShorts();
})();

// TIKTOK SHOP FEE CALCULATOR
(function () {
    var priceEl     = document.getElementById('price');
    var costEl      = document.getElementById('cost');
    var referralEl  = document.getElementById('referral');
    var txfeeEl     = document.getElementById('txfee');
    var affiliateEl = document.getElementById('affiliate');
    var shippingEl  = document.getElementById('shipping');
    var unitsEl     = document.getElementById('units');
    var catBtns     = document.getElementById('ttShopCategoryBtns');

    if (!priceEl || !costEl || !referralEl || !txfeeEl || !affiliateEl || !shippingEl || !unitsEl) return;

    var profitPerUnitEl   = document.getElementById('ttShopProfitPerUnit');
    var marginBadgeEl     = document.getElementById('ttShopMarginBadge');
    var referralAmtEl     = document.getElementById('ttShopReferralAmt');
    var referralPctEl     = document.getElementById('ttShopReferralPct');
    var txAmtEl           = document.getElementById('ttShopTxAmt');
    var txPctEl           = document.getElementById('ttShopTxPct');
    var affAmtEl          = document.getElementById('ttShopAffAmt');
    var affPctEl          = document.getElementById('ttShopAffPct');
    var totalFeesEl       = document.getElementById('ttShopTotalFees');
    var totalFeesPctEl    = document.getElementById('ttShopTotalFeesPct');
    var monthlyTitleEl    = document.getElementById('ttShopMonthlyTitle');
    var totalRevenueEl    = document.getElementById('ttShopTotalRevenue');
    var totalFeesMonthEl  = document.getElementById('ttShopTotalFeesMonthly');
    var netProfitEl       = document.getElementById('ttShopNetProfit');

    var CATEGORY_RATES = [4, 6.5, 6, 6, 3.5, 5, 4, 5];

    function calculateShop() {
        var price    = parseFloat(priceEl.value)     || 0;
        var cost     = parseFloat(costEl.value)      || 0;
        var refRate  = (parseFloat(referralEl.value) || 0) / 100;
        var txRate   = (parseFloat(txfeeEl.value)    || 0) / 100;
        var affRate  = (parseFloat(affiliateEl.value)|| 0) / 100;
        var shipping = parseFloat(shippingEl.value)  || 0;
        var units    = parseFloat(unitsEl.value)     || 1;

        var refAmt      = price * refRate;
        var txAmt       = price * txRate;
        var affAmt      = price * affRate;
        var totalFees   = refAmt + txAmt + affAmt + shipping;
        var profit      = price - cost - totalFees;
        var margin      = price > 0 ? (profit / price) * 100 : 0;
        var feesPct     = price > 0 ? (totalFees / price) * 100 : 0;
        var totalRev    = price * units;
        var totalFeesM  = totalFees * units;
        var netProfit   = profit * units;

        if (profitPerUnitEl)  profitPerUnitEl.textContent  = '$' + profit.toFixed(2);
        if (referralAmtEl)    referralAmtEl.textContent    = '-$' + refAmt.toFixed(2);
        if (referralPctEl)    referralPctEl.textContent    = referralEl.value + '% of price';
        if (txAmtEl)          txAmtEl.textContent          = '-$' + txAmt.toFixed(2);
        if (txPctEl)          txPctEl.textContent          = txfeeEl.value + '% of price';
        if (affAmtEl)         affAmtEl.textContent         = '-$' + affAmt.toFixed(2);
        if (affPctEl)         affPctEl.textContent         = affiliateEl.value + '% of price';
        if (totalFeesEl)      totalFeesEl.textContent      = '-$' + totalFees.toFixed(2);
        if (totalFeesPctEl)   totalFeesPctEl.textContent   = feesPct.toFixed(1) + '% of price';
        if (totalRevenueEl)   totalRevenueEl.textContent   = '$' + totalRev.toFixed(2);
        if (totalFeesMonthEl) totalFeesMonthEl.textContent = '-$' + totalFeesM.toFixed(2);
        if (netProfitEl)      netProfitEl.textContent      = '$' + netProfit.toFixed(2);
        if (monthlyTitleEl)   monthlyTitleEl.textContent   = 'Monthly Totals (' + Math.round(units) + ' units)';

        // Margin badge
        if (marginBadgeEl) {
            var badgeClass = 'inline-flex items-center gap-2 px-4 py-2 rounded-full text-white text-sm font-bold shadow-lg ';
            if (margin >= 30)      badgeClass += 'bg-gradient-to-r from-emerald-500 to-teal-500';
            else if (margin >= 15) badgeClass += 'bg-gradient-to-r from-amber-500 to-orange-500';
            else                   badgeClass += 'bg-gradient-to-r from-red-500 to-rose-500';
            marginBadgeEl.className = badgeClass;
            var textNode = Array.from(marginBadgeEl.childNodes).find(function (n) {
                return n.nodeType === 3 && n.textContent.trim();
            });
            if (textNode) textNode.textContent = margin.toFixed(1) + '% margin';
        }

        // Синхронизация кнопок категорий
        if (catBtns) {
            var btns = catBtns.querySelectorAll('button');
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(referralEl.value) === CATEGORY_RATES[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg shadow-orange-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [priceEl, costEl, referralEl, txfeeEl, affiliateEl, shippingEl, unitsEl].forEach(function (el) {
        el.addEventListener('input', calculateShop);
    });

    if (catBtns) {
        var btns = catBtns.querySelectorAll('button');
        btns.forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                referralEl.value = CATEGORY_RATES[i];
                calculateShop();
            });
        });
    }

    calculateShop();
})();

// X (TWITTER) PAYOUT CALCULATOR
(function () {
    var impressionsEl = document.getElementById('xImpressions');
    var verifiedEl    = document.getElementById('xVerified');
    var rpmEl         = document.getElementById('xRpm');
    var followersEl   = document.getElementById('xFollowers');
    var impBtns       = document.getElementById('xImpressionBtns');
    var rpmBtns       = document.getElementById('xRpmBtns');

    if (!impressionsEl || !verifiedEl || !rpmEl || !followersEl) return;

    var monthlyEl      = document.getElementById('xMonthlyEarnings');
    var tierBadgeEl    = document.getElementById('xTierBadge');
    var dailyEl        = document.getElementById('xDailyEarnings');
    var yearlyEl       = document.getElementById('xYearlyEarnings');
    var verifiedImpEl  = document.getElementById('xVerifiedImpressions');
    var perFollowerEl  = document.getElementById('xEarningsPerFollower');
    var neededEl       = document.getElementById('xImpressionsNeeded');

    var IMP_PRESETS = [1000000, 5000000, 10000000, 25000000, 50000000, 100000000];
    var RPM_PRESETS = ['0.25', '0.75', '1.50', '3.00', '5.00'];

    function fmtImp(v) {
        if (v >= 1000000) return (v / 1000000).toFixed(1) + 'M';
        return (v / 1000).toFixed(0) + 'K';
    }

    function calculateX() {
        var impressions  = parseFloat(impressionsEl.value) || 0;
        var verifiedPct  = (parseFloat(verifiedEl.value) || 0) / 100;
        var rpm          = parseFloat(rpmEl.value) || 0;
        var followerCount = parseFloat(followersEl.value) || 0;

        var verifiedImp   = impressions * verifiedPct;
        var monthly       = (verifiedImp / 1000) * rpm;
        var yearly        = monthly * 12;
        var daily         = monthly / 30;
        var perFollower   = followerCount > 0 ? monthly / followerCount : 0;
        var needed        = (rpm > 0 && verifiedPct > 0) ? (100 / rpm) * 1000 / verifiedPct : 0;

        var tier      = 'Growing';
        var tierColor = 'from-amber-500 to-orange-500';
        if (monthly >= 1000)      { tier = 'Top Creator'; tierColor = 'from-emerald-500 to-teal-500'; }
        else if (monthly >= 500)  { tier = 'Rising Star'; tierColor = 'from-blue-500 to-cyan-500'; }
        else if (monthly >= 100)  { tier = 'Monetized';   tierColor = 'from-sky-500 to-blue-500'; }

        if (monthlyEl)     monthlyEl.textContent    = '$' + monthly.toFixed(2);
        if (dailyEl)       dailyEl.textContent      = '$' + daily.toFixed(2);
        if (yearlyEl)      yearlyEl.textContent     = '$' + yearly.toFixed(2);
        if (verifiedImpEl) verifiedImpEl.textContent = fmtImp(verifiedImp);
        if (perFollowerEl) perFollowerEl.textContent = '$' + perFollower.toFixed(4);
        if (neededEl)      neededEl.textContent     = fmtImp(needed);

        // Tier badge
        if (tierBadgeEl) {
            tierBadgeEl.className = 'inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r ' + tierColor + ' text-white text-sm font-bold shadow-lg';
            var textNode = Array.from(tierBadgeEl.childNodes).find(function (n) {
                return n.nodeType === 3 && n.textContent.trim();
            });
            if (textNode) textNode.textContent = tier;
        }

        // Requirements checklist
        var reqChecks = [
            true,                                     // X Premium (always ✓)
            followerCount >= 500,                     // 500+ followers
            impressions * 3 >= 5000000,               // 5M in 3 months
            null                                      // 18+ (neutral)
        ];
        reqChecks.forEach(function (check, i) {
            var el = document.getElementById('xReq' + i);
            if (!el) return;
            var icon  = check === null ? '—' : check ? '✓' : '✗';
            var bg    = check === null ? 'bg-muted/50' : check ? 'bg-emerald-500/10' : 'bg-red-500/10';
            var color = check === null ? 'text-muted-foreground' : check ? 'text-emerald-500' : 'text-red-500';
            el.className = 'flex items-center gap-3 p-3 rounded-xl ' + bg;
            var iconEl = el.querySelector('span:first-child');
            if (iconEl) { iconEl.textContent = icon; iconEl.className = 'text-lg font-bold ' + color; }
        });

        // Синхронизация кнопок impressions
        if (impBtns) {
            var btns = impBtns.querySelectorAll('button');
            btns.forEach(function (btn, i) {
                var isActive = parseFloat(impressionsEl.value) === IMP_PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-sky-500 to-blue-500 text-white shadow-lg shadow-sky-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }

        // Синхронизация кнопок RPM
        if (rpmBtns) {
            var rpmBtnEls = rpmBtns.querySelectorAll('button');
            rpmBtnEls.forEach(function (btn, i) {
                var isActive = parseFloat(rpmEl.value) === parseFloat(RPM_PRESETS[i]);
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-500 to-slate-600 text-white shadow-lg shadow-blue-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [impressionsEl, verifiedEl, rpmEl, followersEl].forEach(function (el) {
        el.addEventListener('input', calculateX);
    });

    if (impBtns) {
        impBtns.querySelectorAll('button').forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                impressionsEl.value = IMP_PRESETS[i];
                calculateX();
            });
        });
    }

    if (rpmBtns) {
        rpmBtns.querySelectorAll('button').forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                rpmEl.value = RPM_PRESETS[i];
                calculateX();
            });
        });
    }

    calculateX();
})();


// FACEBOOK ENGAGEMENT CALCULATOR
(function () {
    var followersEl  = document.getElementById('fbFollowers');
    var postsEl      = document.getElementById('fbPosts');
    var reactionsEl  = document.getElementById('fbReactions');
    var commentsEl   = document.getElementById('fbComments');
    var sharesEl     = document.getElementById('fbShares');
    var reachEl      = document.getElementById('fbReach');
    var presetBtns   = document.getElementById('fbFollowerBtns');

    if (!followersEl || !postsEl || !reactionsEl || !commentsEl || !sharesEl || !reachEl) return;

    var engRateEl       = document.getElementById('fbEngRate');
    var ratingBadgeEl   = document.getElementById('fbRatingBadge');
    var reachEngRateEl  = document.getElementById('fbReachEngRate');
    var organicReachEl  = document.getElementById('fbOrganicReach');
    var avgReactionsEl  = document.getElementById('fbAvgReactions');
    var avgCommentsEl   = document.getElementById('fbAvgComments');
    var avgSharesEl     = document.getElementById('fbAvgShares');
    var viralityEl      = document.getElementById('fbViralityRate');
    var interactionEl   = document.getElementById('fbInteractionRate');

    var PRESETS = [1000, 5000, 10000, 25000, 50000, 100000, 500000];

    function calculateFb() {
        var f  = parseFloat(followersEl.value)  || 0;
        var p  = parseFloat(postsEl.value)      || 1;
        var r  = parseFloat(reactionsEl.value)  || 0;
        var c  = parseFloat(commentsEl.value)   || 0;
        var s  = parseFloat(sharesEl.value)     || 0;
        var re = parseFloat(reachEl.value)      || 0;

        var avgR   = r / p;
        var avgC   = c / p;
        var avgS   = s / p;
        var total  = avgR + avgC + avgS;
        var engRate      = f > 0  ? (total / f)  * 100 : 0;
        var reachEng     = re > 0 ? (total / re) * 100 : 0;
        var organicReach = f > 0  ? (re / f)     * 100 : 0;
        var virality     = re > 0 ? (avgS / re)  * 100 : 0;
        var interaction  = total > 0 ? ((avgC + avgS) / total) * 100 : 0;

        var label = 'Low';
        var color = 'from-red-500 to-orange-500';
        if (engRate >= 0.5)       { label = 'Excellent'; color = 'from-emerald-500 to-teal-500'; }
        else if (engRate >= 0.15) { label = 'Good';      color = 'from-primary to-secondary'; }
        else if (engRate >= 0.06) { label = 'Average';   color = 'from-amber-500 to-orange-500'; }

        if (engRateEl)      engRateEl.textContent      = engRate.toFixed(3) + '%';
        if (reachEngRateEl) reachEngRateEl.textContent = reachEng.toFixed(2) + '%';
        if (organicReachEl) organicReachEl.textContent = organicReach.toFixed(1) + '%';
        if (avgReactionsEl) avgReactionsEl.textContent = Math.round(avgR).toLocaleString();
        if (avgCommentsEl)  avgCommentsEl.textContent  = Math.round(avgC).toLocaleString();
        if (avgSharesEl)    avgSharesEl.textContent    = Math.round(avgS).toLocaleString();
        if (viralityEl)     viralityEl.textContent     = virality.toFixed(2) + '%';
        if (interactionEl)  interactionEl.textContent  = interaction.toFixed(1) + '%';

        if (ratingBadgeEl) {
            ratingBadgeEl.className = 'inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r ' + color + ' text-white text-sm font-bold shadow-lg';
            var textNode = Array.from(ratingBadgeEl.childNodes).find(function (n) {
                return n.nodeType === 3 && n.textContent.trim();
            });
            if (textNode) textNode.textContent = label;
        }

        if (presetBtns) {
            presetBtns.querySelectorAll('button').forEach(function (btn, i) {
                var isActive = parseFloat(followersEl.value) === PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-600 to-blue-500 text-white shadow-lg shadow-blue-600/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [followersEl, postsEl, reactionsEl, commentsEl, sharesEl, reachEl].forEach(function (el) {
        el.addEventListener('input', calculateFb);
    });

    if (presetBtns) {
        presetBtns.querySelectorAll('button').forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                followersEl.value = PRESETS[i];
                calculateFb();
            });
        });
    }

    calculateFb();
})();

// FACEBOOK EARNING CALCULATOR
(function () {
    var viewsEl    = document.getElementById('fbEarnViews');
    var cpmEl      = document.getElementById('fbEarnCpm');
    var adRateEl   = document.getElementById('fbEarnAdRate');
    var reelsVEl   = document.getElementById('fbEarnReelsViews');
    var reelsREl   = document.getElementById('fbEarnReelsRpm');
    var presetBtns = document.getElementById('fbEarnViewBtns');

    if (!viewsEl || !cpmEl || !adRateEl || !reelsVEl || !reelsREl) return;

    var dailyEl      = document.getElementById('fbEarnDaily');
    var monthlyEl    = document.getElementById('fbEarnMonthly');
    var yearlyEl     = document.getElementById('fbEarnYearly');
    var adDailyEl    = document.getElementById('fbEarnAdDaily');
    var reelsDailyEl = document.getElementById('fbEarnReelsDaily');
    var rpmEl        = document.getElementById('fbEarnRpm');

    var PRESETS = [10000, 50000, 100000, 500000, 1000000, 5000000];

    function calculateFbEarn() {
        var views   = parseFloat(viewsEl.value)   || 0;
        var cpm     = parseFloat(cpmEl.value)     || 0;
        var adRate  = (parseFloat(adRateEl.value) || 0) / 100;
        var rViews  = parseFloat(reelsVEl.value)  || 0;
        var rRpm    = parseFloat(reelsREl.value)  || 0;

        var monetized   = views * adRate;
        var adEarnings  = (monetized / 1000) * cpm;
        var reelsEarn   = (rViews / 1000) * rRpm;
        var daily       = adEarnings + reelsEarn;
        var monthly     = daily * 30;
        var yearly      = daily * 365;
        var totalViews  = views + rViews;
        var rpm         = totalViews > 0 ? (daily / totalViews) * 1000 : 0;

        if (dailyEl)      dailyEl.textContent      = '$' + daily.toFixed(2);
        if (monthlyEl)    monthlyEl.textContent    = '$' + monthly.toFixed(2);
        if (yearlyEl)     yearlyEl.textContent     = '$' + yearly.toFixed(2);
        if (adDailyEl)    adDailyEl.textContent    = '$' + adEarnings.toFixed(2);
        if (reelsDailyEl) reelsDailyEl.textContent = '$' + reelsEarn.toFixed(2);
        if (rpmEl)        rpmEl.textContent        = '$' + rpm.toFixed(2);

        if (presetBtns) {
            presetBtns.querySelectorAll('button').forEach(function (btn, i) {
                var isActive = parseFloat(viewsEl.value) === PRESETS[i];
                btn.className = isActive
                    ? 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-lg shadow-blue-500/25'
                    : 'px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-muted/50 text-muted-foreground hover:bg-muted hover:text-foreground';
            });
        }
    }

    [viewsEl, cpmEl, adRateEl, reelsVEl, reelsREl].forEach(function (el) {
        el.addEventListener('input', calculateFbEarn);
    });

    if (presetBtns) {
        presetBtns.querySelectorAll('button').forEach(function (btn, i) {
            btn.addEventListener('click', function () {
                viewsEl.value = PRESETS[i];
                calculateFbEarn();
            });
        });
    }

    calculateFbEarn();
})();