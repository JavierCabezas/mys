<template>
    <section class="gallery_area clearfix" id="work">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>what we create</p>
                        <h3>Our latest works</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
        </div>

        <div class="gallery_full_width_images_area">

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="0.2s">
                    <img :src="gallery_img_1" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay=".4s">
                    <img :src="gallery_img_2" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay=".6s">
                    <img :src="gallery_img_3" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay=".8s">
                    <img :src="gallery_img_4" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1s">
                    <img :src="gallery_img_5" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.2s">
                    <img :src="gallery_img_6" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.4s">
                    <img :src="gallery_img_7" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
                        </div>
                    </div>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.6s">
                    <img :src="gallery_img_8" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="gallery_info">
                            <h5>Creative Work</h5>
                            <p>Biz</p>
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
                gallery_img_1: "../../src/assets/img/gallery/1.jpg",
                gallery_img_2: "../../src/assets/img/gallery/2.jpg",
                gallery_img_3: "../../src/assets/img/gallery/3.jpg",
                gallery_img_4: "../../src/assets/img/gallery/4.jpg",
                gallery_img_5: "../../src/assets/img/gallery/5.jpg",
                gallery_img_6: "../../src/assets/img/gallery/6.jpg",
                gallery_img_7: "../../src/assets/img/gallery/7.jpg",
                gallery_img_8: "../../src/assets/img/gallery/8.jpg",
            }
        }
    }
</script>