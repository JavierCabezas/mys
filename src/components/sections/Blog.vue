<template>
    <section class="blog_area section_padding_100_70" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>our creative info</p>
                        <h3>latest news</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
            <div class="row">

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".2s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img :src="blog_img_1" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html">
                                    <h4>We dream of a sustainable economy where SME is the core.</h4>
                                </a>
                            </div>
                            <div class="author_name_comments">
                                <div class="author">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Jerin Ikbal</p>
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <p>12</p>
                                </div>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".4s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img :src="blog_img_2" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html">
                                    <h4>We dream of a sustainable economy where SME is the core.</h4>
                                </a>
                            </div>
                            <div class="author_name_comments">
                                <div class="author">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Jerin Ikbal</p>
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <p>12</p>
                                </div>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".6s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img :src="blog_img_3" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html">
                                    <h4>We dream of a sustainable economy where SME is the core.</h4>
                                </a>
                            </div>
                            <div class="author_name_comments">
                                <div class="author">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Jerin Ikbal</p>
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <p>12</p>
                                </div>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".8s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img :src="blog_img_4" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html">
                                    <h4>We dream of a sustainable economy where SME is the core.</h4>
                                </a>
                            </div>
                            <div class="author_name_comments">
                                <div class="author">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <p>Jerin Ikbal</p>
                                </div>
                                <div class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <p>12</p>
                                </div>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                blog_img_1: "../../src/assets/img/news-img/blog.jpg",
                blog_img_2: "../../src/assets/img/news-img/blog-2.jpg",
                blog_img_3: "../../src/assets/img/news-img/blog-3.jpg",
                blog_img_4: "../../src/assets/img/news-img/blog-4.jpg",
            }
        }
    }
</script>