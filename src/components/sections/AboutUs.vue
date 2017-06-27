<template>
    <section class="about_area" id="about">
        <div class="container">
            <div class="about_us_area">
                <div class="row">
                    <div class="col-xs-12 col-md-8 section_padding_100 wow fadeInUp">
                        <!-- Section Heading Start -->
                        <div class="section_heading">
                            <p>About our company</p>
                            <h3>Welcome to Biz</h3>
                        </div>
                        <div class="about_us_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta numquam ad voluptatibus delectus iusto earum nam, quidem porro autem, eligendi modi provident facere accusantium quo possimus sint, voluptatem fugiat, magni illum dolor. Sapiente dolore velit excepturi atque. Hic iusto eveniet mollitia sit in nulla odio eaque quo perspiciatis quis, eligendi praesentium culpa excepturi voluptatem repellendus cupiditate magni accusamus incidunt a numquam ea repellat maiores laudantium? Blanditiis minima, quibusdam non reprehenderit asperiores eveniet laborum vel aspernatur? Eveniet facilis delectus, illum minus doloribus labore, porro optio totam, explicabo laudantium eligendi ipsum molestias excepturi tempora molestiae quis officiis!</p>
                        </div>

                        <div class="signature_area">
                            <img :src="signature_img_src" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 wow fadeInRight">
                        <div class="about_us_thumb">
                            <img :src="about_us_img_src" alt="">
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
                signature_img_src: "../../src/assets/img/signature.png",
                about_us_img_src: "../../src/assets/img/bg-pattern/about-us.png"
            }
        }
    }
</script>