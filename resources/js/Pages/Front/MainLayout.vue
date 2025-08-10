<template>
    <div class="main_wrap">
        <div class="of-site-mask"></div>

        <div class="off-canvas-wrap ">
            <div class="close-off-canvas-wrap">
                <a href="#" id="of-close-off-canvas">
                    <i class="fal fa-times"></i>
                </a>
            </div>
            <div class="off-canvas-inner">
                <div id="of-mobile-nav" class="mobile-menu-wrap">
                    <ul class="mobile-menu">
                        <li class="current-menu-item">
                            <Link href="/">صفحه اصلی</Link>
                        </li>
                        <li><Link href="/" > درباره ما</Link></li>
                        <li><Link href="/" > تماس با ما</Link> </li>
                    </ul>
                </div>
            </div>
        </div>

        <header class="main_header wide_header">
            <div class="header_container">
                <div class="menu_wrapper menu_sticky">
                    <div class="container p_relative h86">
                        <div id="navigation" class="of-drop-down of-main-menu" role="navigation">
                            <ul class="menu">
                                <li>
                                    <a href="/admin" class="current">
                                        <img src="http://127.0.0.1:8000/front/Img/logo-main.png" />
                                    </a>
                                </li>
                                <li>
                                    <Link href="">صفحه اصلی</Link>
                                </li>
                                <li><Link href="" >درباره ما</Link></li>
                                <li><Link href="" >تماس با ما</Link></li>

                            </ul>
                        </div>
                        <div class="m_search pt-xl-3 pt-1"><i class="fal fa-search"></i></div>
                        <div class="is-show mobile-nav-button">
                            <a id="of-trigger" class="icon-wrap  mt-2" href="#"> <i class="fal fa-bars"></i>فهرست</a>
                        </div>
                        <form class="search_wrap mt-lg-0" id="ajax-form-search" method="get" action="">

                            <input type="text" id="search-form-text" class="search-field" value="" name="s" placeholder="کلید واژه مورد نظر ...">
                            <button><i class="fal fa-search"></i></button>

                            <input type="hidden" name="post_type" value="product">
                            <div id="ajax-search-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <div class="clearfix"></div>
        <section class="container mt-4 mb-2">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb radius15 shadow-sm">
                        <ul>
                            <li><a href="#">خانه / </a></li>
                            <li><a href="#" class="current">لیست مقالات</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <slot></slot>

        <footer class="fdemo3 pt-4 pb-2">
            <div class="container footer-wrap">
                <div class="row py-3">
                    <div class="col-lg-4 col-md-6  col-sm-12 mb-4 order-lg-0 order-3">
                        <div class="pl-md-4 mb-2 text-right">

                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            </p>
                            <ul class="standard_social_links mt-2 float-right">

                                <li class="round-btn btn-facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li class="round-btn btn-instagram">
                                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li class="round-btn btn-whatsapp">
                                    <a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

                                </li>
                                <li class="round-btn btn-telegram">
                                    <a href="#"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 mb-4 order-lg-1 order-0">
                        <h3>لینک های سریع</h3>
                        <ul class="footer-category">
                            <li>
                                <a href=""><i class="fal fa-angle-left ml-2"></i>صفحه اصلی</a>
                            </li>
                            <li>
                                <a href=""><i class="fal fa-angle-left ml-2"></i>درباره ما</a>
                            </li>
                            <li>
                                <a href=""><i class="fal fa-angle-left ml-2"></i>تماس با ما</a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 px-md-3 mb-4 order-lg-3  order-4">
                        <h3>عضویت در خبرنامه</h3>
                        <p> ثبت نام کنید و آخرین نکات را از طریق ایمیل دریافت کنید ، جهت ثبت نام فقط کافی ست که آدرس ایمیل را در کادر زیر وارد نمایید</p>
                        <form class="newsletter p_relative mt-3">
                            <input type="text" placeholder="آدرس ایمیل">
                            <button class="newsletter_submit_btn" type="submit"><i class="fab fa-telegram-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</template>
<script setup>
  import {Link} from "@inertiajs/vue3";
</script>
