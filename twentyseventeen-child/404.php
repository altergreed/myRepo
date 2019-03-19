<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="error-404 not-found mt-4">
    <h1 class="page-title">Страница не найдена</h1>
    <div class="page-content">
        <p>Если вы ввели адрес вручную в адресной строке браузера, проверьте, всё ли вы написали правильно.</p>
        <p>
            Если вы пришли по ссылке с другого ресурса, попробуйте перейти на <a href="/jurnal_1/">главную страницу </a> или воспользуйтесь поиском по сайту.
        </p>
    </div>
</section>
<?php
get_footer();
