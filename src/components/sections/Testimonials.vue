<template>
    <div class="testimonial_area section_padding_100" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading white">
                        <p>we care of you</p>
                        <h3>Client Review</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="testimonials_area">

                        <div class="testimonials">
                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img :src="advisor_img_1" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>MD NAZRUL ISLAM</h5>
                                    <h6>CEO &amp; Founder, Designing World</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img :src="advisor_img_3" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>LIM SARAH</h5>
                                    <h6>CEO &amp; Founder, Priyo-bazaar</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img :src="advisor_img_2" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>YEASIN RAHMAN</h5>
                                    <h6>CEO &amp; Founder, Creativeracer</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img :src="advisor_img_4" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>DELOWER HOSSAIN</h5>
                                    <h6>CEO &amp; Founder, Designclime</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data () {
            return {
                advisor_img_1: "../../src/assets/img/advisor-img/tes-1.jpg",
                advisor_img_2: "../../src/assets/img/advisor-img/tes-2.jpg",
                advisor_img_3: "../../src/assets/img/advisor-img/tes-3.jpg",
                advisor_img_4: "../../src/assets/img/advisor-img/tes-4.jpg",
            }
        }
    }
</script>