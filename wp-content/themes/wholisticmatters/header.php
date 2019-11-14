<?php 
$wm_settings = Wholistic_Matters::get_settings();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl+ '&gtm_auth=WK7bGF4PegQPQj4jljz3-g&gtm_preview=env-2&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MRLWL4F');</script>
    <!-- End Google Tag Manager -->


    <!-- Sharpspring Tracking Code -->

    <script type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-3QNF1WFNS0.marketingautomation.services/net']);
        _ss.push(['_setAccount', 'KOI-41PHP9GZ36']);
        _ss.push(['_trackPageView']);
        (function() {
            var ss = document.createElement('script');
            ss.type = 'text/javascript'; ss.async = true;
            ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNF1WFNS0.marketingautomation.services/client/ss.js?ver=1.1.1';
            var scr = document.getElementsByTagName('script')[0];
            scr.parentNode.insertBefore(ss, scr);
        })();
    </script>

    <!-- Bugherd -->

    <script type='text/javascript'>
    (function (d, t) {
      var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
      bh.type = 'text/javascript';
      bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=idjskgpcxxp7mfmbiwhkfa';
      s.parentNode.insertBefore(bh, s);
      })(document, 'script');
    </script>

</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".sidebar-list" data-offset="150">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRLWL4F&gtm_auth=WK7bGF4PegQPQj4jljz3-g&gtm_preview=env-2&gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="search-overlay"></div>

<?php if(!is_search()){ get_template_part('navbar-search-box'); } ?>

<header id="primaryHeader" class="primaryHeader">
    <div class="primaryHeader__inner">
        <div class="primaryHeader__logo">
            <a href="<?php echo site_url('/'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/wm-logo.svg" alt="Logo">
            </a>
        </div>

        <div class="primaryHeader__nav">
            <div class="primaryHeader__mobile-links">
                <a href="#" class="btn btn-outline-primary login_popup">Login</a>
                <a href="#" class="btn btn-primary signup_popup">Sign Up</a>
            </div>
            <nav id="primaryNav" role="navigation">
                <ul class="primaryNav__top-list">
                    <li class="hasMega">
                        <span>Discover</span>
                        <div class="primaryNav__dropdown mega">
                            <div class="primaryNav__dropdown-inner">
                                <div class="primaryNav__dropdown-column">
                                    <ul>
                                        <li><h3>Key Topics</h3></li>
                                        <li><a href="https://wholisticmatters.com/category/cardiometabolic-control/">Cardiometabolic Control</a></li>
                                        <li><a href="https://wholisticmatters.com/category/digestive-health/">Digestive Health</a></li>
                                        <li><a href="https://wholisticmatters.com/category/epigenetics-health/">Epigenetics</a></li>
                                        <li><a href="https://wholisticmatters.com/category/inflammation/">Inflammation</a></li>
                                        <li><a href="https://wholisticmatters.com/category/lifestyle-health-wellness/">Lifestyle Health &amp; Wellness</a></li>
                                        <li><a href="/view-all-topics/" class="more">View All Topics</a></li>
                                    </ul>
                                </div>

                                <div class="primaryNav__dropdown-column">
                                    <ul>
                                        <li><h3>Spotlight Topics</h3></li>
                                        <li><a href="https://wholisticmatters.com/spotlight-topic/detox/">Detoxification</a></li>
                                        <li><a href="https://wholisticmatters.com/spotlight-topic/hemp-the-endocannabinoid-system/">Hemp &amp; the Endocannabinoid System</a></li>
                                        <li><a href="https://wholisticmatters.com/spotlight-topic/omega-3-fatty-acids/">Omega-3 Fatty Acids</a></li>
                                        <li><a href="https://wholisticmatters.com/spotlight-topic/organic-farming-whole-foods/">Organic Farming &amp; Whole Foods</a></li>
                                        <li><a href="https://wholisticmatters.com/spotlight-topic/subclinical-magnesium-deficiency/">Plant-based Magnesium</a></li>
                                        <li><a href="/spotlight-topics/" class="more">View All</a></li>
                                    </ul>
                                </div>

                                <div class="primaryNav__dropdown-column">
                                    <ul>
                                        <li><h3>Media Base</h3></li>
                                        <li><a href="https://wholisticmatters.com/articles/">Articles</a></li>
                                        <li><a href="https://wholisticmatters.com/videos/">Videos</a></li>
                                        <li><a href="https://wholisticmatters.com/podcast-episodes/">Podcasts</a></li>
                                        <li><a href="https://wholisticmatters.com/resources/">Resources</a></li>
                                    </ul>
                                </div>

                                <div class="primaryNav__dropdown-column">
                                    <ul>
                                        <li><h3>Practitioner Specialty</h3></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/acupuncture/">Acupuncture</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/chiropractic/">Chiropractic</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/functional-medicine/">Functional Medicine</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/herbalist/">Herbalist</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/integrative-medicine/">Integrative Medicine</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/naturopathic/">Naturopathic</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/nutrition/">Nutrition</a></li>
                                        <li><a href="https://wholisticmatters.com/practitioner-specialty/veterinary/">Veterinary</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <span>Interactive Tools</span>
                        <div class="primaryNav__dropdown">
                            <ul>
                                <li><a href="">Vitamin Advisor</a></li>
                                <li><a href="">Drug-Nutrient Interaction</a></li>
                                <li><a href="">Herbal Medicinals</a></li>
                                <li class="forHCP">
                                    <p>— Free With HCP Account —</p>
                                    <a href="#">Anatomic / BioDigital Library</a>
                                    <a href="#">Clinical Practice Support</a>
                                </li>
                                <li class="link"><a href="">Learn More & Gain Access</a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <span>Professional Education</span>
                        <div class="primaryNav__dropdown">
                            <ul>
                                <li><a href="">Continuing Ed</a></li>
                                <li class="forHCP">
                                    <p>— Free With HCP Account —</p>
                                    <a href="#">Clinical Practicum</a>
                                    <a href="#">White Papers</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <span>Culinary Wellness</span>
                        <div class="primaryNav__dropdown">
                            <ul>
                                <li><a href="">Overview</a></li>
                                <li><a href="">Recipes</a></li>
                                <li><a href="">Skill Videos</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="primaryHeader__utilities">
            <div class="primaryHeader__utilities-search">
                <a href="#">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Searchicon.svg" alt="Search" class="wm_open_search">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-x.png" alt="Close Search" class="wm_close_search">
                </a>
            </div>
            <div class="primaryHeader__utilities-links">
                <a href="#" class="btn btn-link login_popup">Login</a>
                <a href="#" class="btn btn-primary signup_popup">Sign Up</a>
            </div>
            <div class="primaryHeader__utilities-hamburger">
                <a href="#">
                    <img src="<?php bloginfo('template_directory') ?>/images/hamburger.svg" class="hamburger" />
                    <img src="<?php bloginfo('template_directory') ?>/images/nav-x.svg" class="close-nav" />
                </a>
            </div>
        </div>
    </div>
</header>