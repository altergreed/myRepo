<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TeremTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
</head>
<?php global $redux_demo;?>
<body <?php body_class(); ?>>
<header class="sticky-top">

        <div class="container">
            <div class="logo d-none d-sm-flex">
                <a href="/"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 87 89" width="87" height="89">
                    <defs>
                        <image width="87" height="89" id="img1" href="data:image/png;base64,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" />
                    </defs>
                    <style>
                        tspan { white-space:pre }
	</style>
                    <g id="head">
                        <use id="Logo" href="#img1" x="0" y="0" />
                    </g>
                </svg>
                </a>
            </div>

            <div class="logo-mobile d-flex d-sm-none">
                <a href="/"><svg class="ip-inner" width="50" height="80" viewbox="30 10 75 50" enable-background="new 0 0 139 167" preserveaspectratio="xMidYMin meet">
                    <path class="logo-bg" fill="#AC1E23" d="M3.2,0v167h119.9c7,0,12.7-0,12.9-0V0H0z"></path>
                    <g class="logo-upper-group">
                        <path class="logo-upper" fill="#FFFFFF" d="M50.7,81.3c0-1.3,0.6-2.5,1.3-3.3l0,0c0.8-0.8,2-1.3,3.3-1.3c1.3,0,2.5,0.6,3.3,1.3l0,0
                                                                  c0.8,0.8,1.3,2,1.3,3.3h-1.6c0-0.8-0.4-1.6-0.8-2.2l0,0c-0.6-0.6-1.3-0.8-2.2-0.8c-0.8,0-1.6,0.4-2.2,0.8l0,0
                                                                  c-0.6,0.6-0.8,1.3-0.8,2.2H50.7L50.7,81.3L50.7,81.3L50.7,81.3z"></path>
                        <path class="logo-upper" fill="#FFFFFF" d="M76.8,81.3c0-1.3,0.6-2.5,1.3-3.3l0,0c0.8-0.8,2-1.3,3.3-1.3s2.5,0.6,3.3,1.3l0,0c0.8,0.8,1.3,2,1.3,3.3
                                                                  h-1.6c0-0.8-0.4-1.6-0.8-2.2l0,0c-0.6-0.6-1.3-0.8-2.2-0.8c-0.8,0-1.6,0.4-2.2,0.8l0,0c-0.6,0.6-0.8,1.3-0.8,2.2H76.8L76.8,81.3
                                                                  L76.8,81.3L76.8,81.3z"></path>
                        <path class="logo-upper" fill="#FFFFFF" d="M63.8,81.3c0-1.3,0.6-2.5,1.3-3.3l0,0c0.8-0.8,2-1.3,3.3-1.3s2.5,0.6,3.3,1.3c0.8,0.8,1.3,2,1.3,3.3h-1.6
                                                                  c0-0.8-0.4-1.6-0.8-2.2c-0.6-0.6-1.3-0.8-2.2-0.8c-0.8,0-1.6,0.4-2.2,0.8l0,0c-0.6,0.6-0.8,1.3-0.8,2.2H63.8L63.8,81.3L63.8,81.3
                                                                  L63.8,81.3z"></path>
                        <polygon class="logo-upper" fill="#FFFFFF" points="70.5,66.4 69.6,67.9 72.1,68.4 69.6,69 70.2,70.3 68.9,69.6 68.4,72.3 67.9,69.5 66.4,70.4
                                                                     67.3,69 64.8,68.4 67.3,67.8 66.7,66.5 68,67.3 68.4,64.5 69,67.4 70.5,66.4	"></polygon>
                        <path class="logo-upper" fill="#FFFFFF" d="M92.1,74.3H77.4c0.5-0.5,1-0.9,1.4-1.4h13.3V74.3L92.1,74.3z M76.4,74.3h-1.5c0,0,0.2-0.2,0.3-0.3
                                                                  c3.7-4.3,1.8-7.6-0.8-10c-0.9-0.8-2-1.6-2.9-2.3c-1.2-0.9-2.3-1.6-2.4-2.1l-0.5-2l-0.5,2c-0.1,0.5-1.1,1.2-2.4,2.1
                                                                  c-0.9,0.7-2,1.4-2.9,2.3c-2.7,2.5-4.5,5.7-0.8,10c0.1,0.1,0.3,0.3,0.3,0.3h-1.5c0,0-0.2-0.2-0.3-0.3c-3.7-2.9-3.5-5.4-1.8-7.6
                                                                  c1-1.4,2.7-2.8,4.4-4.2c2.1-1.7,4.5-3.4,5.7-5.3l0,0l0,0c1.1,1.9,3.6,3.6,5.7,5.3c1.7,1.4,3.3,2.7,4.4,4.2
                                                                  c1.7,2.3,1.9,4.6-1.8,7.6C76.6,74.1,76.4,74.3,76.4,74.3L76.4,74.3z M44.7,74.3v-1.4h13.3c0.5,0.5,0.9,1,1.4,1.4H44.7L44.7,74.3z
                                                                  M52.4,62.3h0.9v2.6h-0.9V62.3L52.4,62.3z M54.3,62.3h0.9v2.6h-0.9V62.3L54.3,62.3z M56.2,62.3h0.9v2.6h-0.9V62.3L56.2,62.3z
                                                                  M58.1,62.3H59v1.9l-0.8,0.8H58L58.1,62.3L58.1,62.3z M59.9,62.3h0.9v0.1l-0.9,0.8V62.3L59.9,62.3z M76.9,62.3v0.9L76,62.4v-0.1
                                                                  H76.9L76.9,62.3z M60.7,54.8h15.5v6.3H74c-2-1.7-4.3-3.4-5.2-5.2l0,0l-0.4-0.8l-0.4,0.8l0,0c-0.8,1.8-3.2,3.5-5.2,5.2h-2.2V54.8
                                                                  L60.7,54.8z M77.9,62.3h0.9v2.6h-0.3l-0.8-0.8L77.9,62.3L77.9,62.3z M79.8,62.3h0.9v2.6h-0.9V62.3L79.8,62.3z M81.7,62.3h0.9v2.6
                                                                  h-0.9V62.3L81.7,62.3z M83.6,62.3h0.9v2.6h-0.9V62.3L83.6,62.3z M85.3,64.9v-3.6c0.6-0.1,0.9-0.7,0.9-1.2c0-0.7-0.6-1.2-1.2-1.2
                                                                  c-0.7,0-1.2,0.6-1.2,1.2c0,0.6,0.4,1,0.9,1.2v0.2h-6.8v-7h3.5l-7.2-3.1l-2.8-4.2l-2.9-4.3c0.7,0,1.2-0.6,1.2-1.2
                                                                  c0-0.7-0.6-1.2-1.2-1.2c-0.7,0-1.2,0.6-1.2,1.2c0,0.7,0.6,1.2,1.2,1.2l-2.9,4.3l-2.8,4.2l-7.2,3.1H59v7h-6.8v-0.2
                                                                  c0.6-0.1,0.9-0.7,0.9-1.2c0-0.7-0.6-1.2-1.2-1.2s-1.2,0.6-1.2,1.2c0,0.6,0.4,1,0.9,1.2v3.6L43.8,72v3H46v6.2h1.2V75
                                                                  c5.6,0,11.1,0,16.6,0c-0.8-0.9-2.5-2.4-3-4.6c-0.6-2,0.3-3.9,2.5-5.9c0.9-0.8,1.9-1.5,2.8-2.2h0.1c1.1-0.8,1.9-1.3,2.3-1.8
                                                                  c0.5,0.5,1.1,1,2.3,1.8h0.1c0.8,0.7,1.9,1.3,2.8,2.2c2.2,2,3,3.9,2.5,5.9c-0.7,2.3-2.2,3.6-3,4.6c5.6,0,11.1,0,16.6,0v6.2h1.2V75
                                                                  h2.2v-3L85.3,64.9L85.3,64.9z"></path>
                    </g>
                </svg>
                </a>
            </div>

            <div class="navigation">
                <div class="top d-flex justify-content-between border-bottom">
                    <ul class="d-none d-md-flex">
                        <li>
                            <a href="/">Официальный сайт компании &laquo;ТеремЪ&raquo;</a>
                        </li>
                        <li class="d-md-none d-lg-block">
                            <a href="/catalog/">Каталог домов и бань</a>
                        </li>
                        <li class="d-md-none d-lg-block">
                            <a href="/about/">О компании</a>
                        </li>
                        <li>
                            <a href="/contacts/" class="red-map-marker"><i class="fas fa-map-marker-alt"></i> Наш выставочный комплекс</a>
                        </li>
                    </ul>
                    <ul class="top-panel-text d-flex">
                        <li>
                            <a class="search-btn" href="search/"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <?php if($redux_demo['display_subscribe']):?>
                        <span>|</span>
                        <li>
                            <a href="#">Подписка</a>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="bottom">
                    <div class="navbar-container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="site-name navbar-brand" href="/jurnal_1/">Журнал ТеремЪ</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                           <?php
                                $menu= wp_nav_menu(
                                    array(
                                        'echo'  => 0,
                                        'container' => '',
                                        'menu_class'=> 'navbar-nav',
                                        'menu' => 'Навигация по сайту'
                                    )
                                );
                                $menu = str_replace('current-menu-item', 'current-menu-item active', $menu );
                                $menu = str_replace('<a href="', '<a class="nav-link" href="', $menu );
                                echo $menu;
                            ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
    <div class="container">
