<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package twentyseventeen
 */

get_header(); ?>
    <div class="main-top-design mt-4">
                <div class="row">
                    <div class="news-main-design col-12 col-sm-12 col-md-8 col-lg-9">
                        <div class="big-main-slider">
                            <div id="big-main-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/slider-img-1.png" class="d-block w-100">
                                        <div class="carousel-caption">
                                            <a href="#" class="btn-link white">Наши соседи</a>
                                            <div class="slide-title">Ирина Безрукова: &laquo;Самой интересно, как я отпраздную этот новый год!&raquo;</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span class="count">123</span><span><i class="far fa-comment-dots"></i></span><span class="count">9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/slider-img-1.png" class="d-block w-100">
                                        <div class="carousel-caption">
                                            <a href="#" class="btn-link white">Наши соседи</a>
                                            <div class="slide-title">Ирина Безрукова: &laquo;Самой интересно, как я отпраздную этот новый год!&raquo;</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/slider-img-1.png" class="d-block w-100">
                                        <div class="carousel-caption">
                                            <a href="#" class="btn-link white">Наши соседи</a>
                                            <div class="slide-title">Ирина Безрукова: &laquo;Самой интересно, как я отпраздную этот новый год!&raquo;</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#big-main-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#big-main-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <ol class="carousel-indicators">
                                    <li data-target="#big-main-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#big-main-carousel" data-slide-to="1"></li>
                                    <li data-target="#big-main-carousel" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="main-small-design">
                            <div class="row">
                                <div class="main-small-new col-12 col-sm-12 col-md-12 col-lg-4">
                                    <img class="d-block w-100" src="<?=get_theme_file_uri()?>/assets/img/main-small-new-img-1.png">
                                    <a href="#" class="btn-link">Жизнь за городом</a>
                                    <div class="title-small-new">Праздник во дворе. Готовим участок к активным новогодним развлечениям</div>
                                    <div class="social-activity">
                                        <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                    </div>
                                </div>
                                <div class="main-small-new alt col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="alt-inner">
                                        <img class="d-block w-100" src="<?=get_theme_file_uri()?>/assets/img/main-small-new-img-2-alt.png">
                                        <div class="alt-img-caption">
                                            <a href="#" class="btn-link white">Новости</a>
                                            <div class="title-small-new">Успейте построить дом без проволочек</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-small-new col-12 col-sm-6 col-md-6 col-lg-4">
                                    <img class="d-block w-100" src="<?=get_theme_file_uri()?>/assets/img/main-small-new-img-3.png">
                                    <a href="#" class="btn-link">Строительство и ремонт</a>
                                    <div class="title-small-new">Лучшие бани 2018 года</div>
                                    <div class="social-activity">
                                        <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-announce col-sm-12 col-md-4 col-lg-3">
                        <div class="border">
                            <div class="title-announce d-flex align-items-center">
                                <span>Читайте уже скоро:</span>
                            </div>
                            <div class="announce-new with-img">
                                <img class="d-block img-fluid" src="<?=get_theme_file_uri()?>/assets/img/announce-img.png">
                                <a href="#" class="btn-link">Наши соседи</a>
                                <div class="announce-new-title">Лучшие дома 2018 года.<br>Выбор клиентов компании <br>&laquo;Теремъ&raquo;</div>
                            </div>
                            <div class="announce-new">
                                <a href="#" class="btn-link">Наши соседи</a>
                                <div class="announce-new-title">Выбор клиентов компании &laquo;ТеремЪ&raquo; дома для семьи</div>
                            </div>
                            <div class="announce-new">
                                <a href="#" class="btn-link">Сад и огород</a>
                                <div class="announce-new-title">Новогодний стол. Что особенного приготовить на праздничное застолье,<br> чтобы не вышло как всегда</div>
                            </div>
                            <div class="announce-new">
                                <a href="#" class="btn-link">Жизнь за городом</a>
                                <div class="announce-new-title">Праздник во дворе.<br>Готовим участок к<br>активным новогодним развлечениям</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="grey-design border-top mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-9">
                        <div class="title-grey-design">А вот это интересно...</div>
                        <div class="big-grey-slider">
                            <div id="grey-design-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/grey-slider-img-1.png" class="d-block w-100">
                                        <div class="carousel-caption">
                                            <a href="#" class="btn-link white">Правовое поле</a>
                                            <div class="slide-title">Людмила Светлова: &laquo;Дачные встречи<br>возвращают к самой себе&raquo;</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span class="count">123</span><span><i class="far fa-comment-dots"></i></span><span class="count">9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-3 mt-3 mt-lg-0">
                        <a href="#" class="btn-link">Также на эту тему</a>
                        <div class="grey-new">
                            <div class="grey-new-title">Лучшие дома 2018 года.<br>Выбор клиентов компании &laquo;ТеремЪ&raquo;</div>
                            <div class="social-activity">
                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                            </div>
                        </div>
                        <div class="grey-new">
                            <div class="grey-new-title">Новогодний стол. Что особенного<br>приготовить на праздничное застолье, чтобы не вышло как всегда</div>
                            <div class="social-activity">
                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                            </div>
                        </div>
                        <div class="grey-new">
                            <div class="grey-new-title">Праздник во дворе. Готовим<br>участок к активным новогодним развлечениям</div>
                            <div class="social-activity">
                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                            </div>
                        </div>
                        <div class="grey-new">
                            <div class="grey-new-title">Лучшие дома 2018 года.<br>Выбор клиентов компании &laquo;ТеремЪ&raquo;</div>
                            <div class="social-activity">
                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="small-news-design mt-4">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="small-new">
                            <img src="<?=get_theme_file_uri()?>/assets/img/small-news-design-img-1.png" class="d-block w-100">
                            <a href="#" class="btn-link">Жизнь за городом</a>
                            <div class="small-new-title">Праздник во дворе. Готовим участок к активным новогодним развлечениям</div>
                            <div class="social-activity">
                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="small-new alt">
                            <div class="small-new-inner">
                                <img src="<?=get_theme_file_uri()?>/assets/img/small-news-design-img-2-alt.png" class="d-block w-100">
                                <div class="small-new-caption">
                                    <a href="#" class="btn-link white">Новости</a>
                                    <div class="small-new-title">Успейте построить дом без проволочек</div>
                                    <div class="social-activity white">
                                        <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="small-new">
                            <img src="<?=get_theme_file_uri()?>/assets/img/small-news-design-img-3.png" class="d-block w-100">
                            <a href="#" class="btn-link">Строительство и ремонт</a>
                            <div class="small-new-title">Теплоизоляция здания: как утеплить частный дом</div>
                            <div class="social-activity">
                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="small-new alt">
                            <div class="small-new-inner">
                                <img src="<?=get_theme_file_uri()?>/assets/img/small-news-design-img-4-alt.png" class="d-block w-100">
                                <div class="small-new-caption">
                                    <a href="#" class="btn-link white">Новости</a>
                                    <div class="small-new-title">Успейте построить дом без проволочек</div>
                                    <div class="social-activity white">
                                        <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="long-news-design mt-3">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="long-new">
                            <div class="long-new-inner">
                                <img src="<?=get_theme_file_uri()?>/assets/img/long-new-img-1.png" class="d-block w-100">
                                <div class="long-new-caption">
                                    <a href="#" class="btn-link">Умный дом</a>
                                    <div class="long-new-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei-usmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    <div class="social-activity">
                                        <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="long-new alt">
                            <div class="long-new-inner">
                                <img src="<?=get_theme_file_uri()?>/assets/img/long-new-img-2.png" class="d-block w-100">
                                <div class="long-new-caption">
                                    <a href="#" class="btn-link white">Новости</a>
                                    <div class="long-new-title white">Успейте построить дом без проволочек. За три оставшихся в этом году месяца можно успеть году.</div>
                                    <div class="social-activity white">
                                        <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="slider-industry-news border-top mt-3 mt-sm-4 mt-md-5">
                <div class="title-industry-news d-flex justify-content-center">Новости отрасли</div>
                <div class="industry-slider">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item active">
                                    <div class="item">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/industry-new-img-1.png">
                                        <div class="item-caption">
                                            <a href="#" class="btn-link white">Новости</a>
                                            <div class="industry-title">Успейте построить дом без проволочек</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/industry-new-img-2.png">
                                        <div class="item-caption">
                                            <a href="#" class="btn-link white">Новости</a>
                                            <div class="industry-title">Праздник во дворе. Готовим участок к активным</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <img src="<?=get_theme_file_uri()?>/assets/img/industry-new-img-3.png">
                                        <div class="item-caption">
                                            <a href="#" class="btn-link white">Новости</a>
                                            <div class="industry-title">Успейте построить дом без проволочек</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active">
                                    <div class="item">
                                        <img class="" src="<?=get_theme_file_uri()?>/assets/img/industry-new-img-4.png">
                                        <div class="item-caption">
                                            <a href="#" class="btn-link white">Новости</a>
                                            <div class="industry-title">Готовим участок к активным новогодним развлечениям</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item">
                                        <img class="" src="<?=get_theme_file_uri()?>/assets/img/industry-new-img-5.png">
                                        <div class="item-caption">
                                            <a href="#" class="btn-link white">Новости</a>
                                            <div class="industry-title">Успейте построить дом без проволочек</div>
                                            <div class="social-activity white">
                                                <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span>9</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn-link text-center" href="#">Посмотреть все новости</a>
                </div>
            </div>
<?php get_footer(); ?>
