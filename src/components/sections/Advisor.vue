<template>
    <section class="our_advisor_area section_padding_100" id="advisor">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>our quality team</p>
                        <h3>Creative Advisor</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
            <div class="row">
                <!-- Single advisor profile area start -->
                <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="single_advisor_profile">

                        <div class="single_advisor_slide">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img :src="advisor_img_1" alt="">
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                                <h4>Nazrul Islam</h4>
                                <p class="designation">Financial Advisor</p>
                                <div class="about_advisor">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti consectetur commodi, qui esse quod similique atque fugiat nostrum necessitatibus quia doloribus, veritatis, eaque error eos accusamus.</p>
                                </div>
                                <!-- Single advisor social link -->
                                <div class="advisor_social_info">
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-skype"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_advisor_slide">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img :src="advisor_img_2" alt="">
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                                <h4>Naznin Niloy</h4>
                                <p class="designation">Educational Advisor</p>
                                <div class="about_advisor">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti consectetur commodi, qui esse quod similique atque fugiat nostrum necessitatibus quia doloribus, veritatis, eaque error eos accusamus.</p>
                                </div>
                                <!-- Single advisor social link -->
                                <div class="advisor_social_info">
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-skype"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_advisor_slide">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img :src="advisor_img_3" alt="">
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                                <h4>Lim Sarah</h4>
                                <p class="designation">Business Advisor</p>
                                <div class="about_advisor">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti consectetur commodi, qui esse quod similique atque fugiat nostrum necessitatibus quia doloribus, veritatis, eaque error eos accusamus.</p>
                                </div>
                                <!-- Single advisor social link -->
                                <div class="advisor_social_info">
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-skype"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
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
                advisor_img_1: "../../src/assets/img/advisor-img/advisor-1.png",
                advisor_img_2: "../../src/assets/img/advisor-img/advisor-2.png",
                advisor_img_3: "../../src/assets/img/advisor-img/advisor-3.png",
            }
        }
    }
</script>