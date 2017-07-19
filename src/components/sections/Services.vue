<template>
    <section class="what_we_do_area section_padding_100_70" id="service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section_heading">
                        <p>Nuestros servicios</p>
                        <h3>¿Qué hacemos?</h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <div v-for="service in services" class="col-sm-6 col-md-4 col-lg-3">
                    <div class="single_service wow fadeInUp" data-wow-delay=".2s">
                        <div class="single_service_img">
                            <img :src="service.img" alt="">
                        </div>
                        <div class="single_service_title">
                            <h4> {{ service.title }}</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    {{ service.description }}
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#">
                                <h4>Ver más detalles</h4>
                            </a>
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
                services: [
                    {
                        title: 'Actualización de normas',
                        img: "../../src/assets/img/services-img/actualizacion_normas.png",
                        description: 'Realizado mediante 3 etapas de trabajo; capacitación, información documentada y verificación (seguimiento).'
                    },
                    {
                        title: 'Mantención y seguimiento en normas',
                        img: "../../src/assets/img/services-img/service-2.jpg",
                        description: 'A través de un profesional con la preparación y competencias necesarias, se realiza un servicio outsourcing dentro de la empresa, coordinando el o los sistema(s) normativos que se posean'
                    },
                    {
                        title: 'Implementación de las normas',
                        img: "../../src/assets/img/services-img/implementacion_normas.png",
                        description: 'Realizado mediante 3 etapas de trabajo; capacitación, información documentada y verificación (seguimiento)'
                    },
                    {
                        title: 'Asesorías',
                        img: "../../src/assets/img/services-img/service-4.jpg",
                        description: 'Dentro de las asesorías estarán las actividades de capacitación, documentación específica y legal en diversos temas, talleres, workshops, modelamiento de procesos, entre otros.'
                    },
                    {
                        title: 'Capacitaciones',
                        img: "../../src/assets/img/services-img/capacitaciones.png",
                        description: 'Seguridad y salud, Conductores de grúa horquilla, curso de primeros auxilios, Auditor interno ISO 9001, Auditor interno OHSAS 18001, Ingles básico, y nivel intermedio, entre otros.'
                    },
                    {
                        title: 'Traducción de normas',
                        img: "../../src/assets/img/services-img/traduccion_normas.png",
                        description: 'Poner una descripción aquí'
                    },
                    {
                        title: 'Coaching bilingüe',
                        img: "../../src/assets/img/services-img/coaching_bilingue.png",
                        description: 'Poner descripcion aquí'
                    },
                    {
                        title: 'Auditoria interna de normas',
                        img: "../../src/assets/img/services-img/service-4.jpg",
                        description: 'Servicio realizado mediante personal profesional y preparado, añadiendo como valor agregado el apoyo y resolución de no conformidades.'
                    }
                ]
            }
        }
    }
</script>