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
                            <a @click="selected = {name: service.name, title: service.title}" data-target="#service_details" data-toggle="modal" href="#">
                                <h4>Ver más detalles</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <service-detail :selected_service="selected.name" :title="selected.title"></service-detail>
    </section>
</template>

<script>
    import ServiceDetail from './ServiceDetail.vue'

    export default {
        data () {
            return {
                selected: { name: '', title: '' },
                services: [
                    {
                        name: 'actualizacion_norma',
                        title: 'Actualización de normas',
                        img: "../../src/assets/img/services-img/actualizacion_normas.png",
                        description: 'el proceso de actualización o implementación se realizara mediante 3 etapas de trabajo: Capacitación, Información documentada y Verificación (seguimiento).'
                    },
                    {
                        name: 'mantencion_norma',
                        title: 'Coordinación de sistemas de normativos',
                        img: "../../src/assets/img/services-img/mantencion_normas.jpg",
                        description: 'A través de un profesional con la preparación y competencias necesarias, se realiza un servicio outsourcing dentro de la empresa, coordinando el o los sistema(s) normativos que se posean'
                    },
                    {
                        name: 'implementacion_norma',
                        title: 'Implementación de las normas',
                        img: "../../src/assets/img/services-img/implementacion_normas.jpg",
                        description: 'Realizado mediante 3 etapas de trabajo; capacitación, información documentada y verificación (seguimiento)'
                    },
                    {
                        name: 'asesoria',
                        title: 'Asesorías',
                        img: "../../src/assets/img/services-img/service-4.jpg",
                        description: 'Dentro de las asesorías estarán las actividades de capacitación, documentación específica y legal en diversos temas, talleres, workshops, modelamiento de procesos, entre otros.'
                    },
                    {
                        name: 'capacitacion',
                        title: 'Capacitaciones',
                        img: "../../src/assets/img/services-img/capacitaciones.png",
                        description: 'Seguridad y salud, Conductores de grúa horquilla, curso de primeros auxilios, Auditor interno ISO 9001, Auditor interno OHSAS 18001, Ingles básico, y nivel intermedio, entre otros.'
                    },
                    {
                        name: 'traduccion',
                        title: ' Prevención de riesgos y salud ocupacional',
                        img: "../../src/assets/img/services-img/prev_riesgos.jpg",
                        description: 'Servicio realizado por expertos profesionales, gestionando documentación legal, identificación de peligros y su evaluación de riesgos, planes de emergencia entre otros.'
                    },
                    {
                        name: 'implementacion_alimentaria',
                        title: 'Implementación de normas alimentarias',
                        img: "../../src/assets/img/services-img/alimentaria.jpg",
                        description: 'Se realizará la implementación de las normas alimentarias gestionando un modelo de actividades en 3 etapas: Capacitaciones, gestión de la documentación y seguimiento.'
                    },
                    {
                        name: 'auditoria',
                        title: 'Medio ambiente',
                        img: "../../src/assets/img/services-img/ambiente.png",
                        description: 'Ponemos a disposición una amplia gama de conocimientos en gestión y ejecución  en temas ambientales.'
                    }
                ]
            }
        },
        components: {
            serviceDetail: ServiceDetail
        }
    }
</script>