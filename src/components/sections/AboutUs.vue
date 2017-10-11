<template>
    <section class="about_area" id="about">
        <div class="container">
            <div class="about_us_area">
                <div class="row">
                    <div class="col-xs-12 col-md-8 section_padding_100 wow fadeInUp">
                        <!-- Section Heading Start -->
                        <div class="section_heading">
                            <p>Sobre nosotros</p>
                            <h3>Bienvenido a M&S consulting group</h3>
                        </div>
                        <div class="about_us_text">
                            <p>Vigente como empresa consultora desde septiembre del año 2011, trabajando con un equipo de profesionales senior, los cuales son el soporte especialista en las distintas áreas donde presentamos nuestro servicio. </p>
                            <p>Nuestra misión es entregar valor a nuestros clientes, generando ventajas competitivas para la sustentabilidad de sus servicios o productos, desarrollando soluciones a las necesidades reales de nuestros clientes a través del excelente trabajo profesional de nuestro equipo.</p>
                            <p>La metodología de trabajo de M&S nos permite abordar cualquier tipo de organización de forma integral, independiente de su tamaño, extensión geográfica o rubro.</p>
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