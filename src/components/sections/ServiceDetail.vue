<template>
    <div id="service_details_wrapper">
        <!-- Modal-box -->
        <div role="dialog" tabindex="-1" id="service_details" class="modal fade in">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- modal Head start -->
                    <div class="modal_head">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </div>
                    <!-- modal body start -->
                    <div class="modal-product">
                        <!-- Service Details Content Area -->
                        <div class="service_details_content">
                            <h3>{{title}} </h3>

                            <div v-if="selected_service=='actualizacion_norma'">

                                <p>El proceso de actualización o implementación se realizara mediante 3 etapas de trabajo: </p>

                                <ul>
                                    <li>Capacitación</li>
                                    <li>Información documentada</li>
                                    <li>Verificación (seguimiento)</li>
                                </ul>

                                <p>Las normas a actualizar son en su versión 2015:</p>
                                <ul>
                                    <li>Sistema de Gestión ambiental, ISO 14001</li>
                                    <li>Sistema de Gestión de Calidad, ISO 9001</li>
                                    <li>Norma Chilena 2728</li>
                                </ul>



                            </div>

                            <div v-if="selected_service=='mantencion_norma'">
                                <p>A través de un profesional con la preparación y competencias necesarias, se realiza un servicio outsourcing dentro de la empresa, coordinando el o los sistema (s) normativos que se posean.</p>

                                <ul>
                                    <li>Sistema de Gestión de Seguridad y Salud en el trabajo, OHSAS 18001</li>
                                    <li>Sistema de Gestión ambiental, ISO 14001</li>
                                    <li>Sello de Calidad turística, NCH 3068</li>
                                    <li>Sistema de Gestión de Calidad, ISO 9001</li>
                                </ul>
                            </div>


                            <div v-if="selected_service=='implementacion_norma'">
                                <p>Realizado mediante 3 etapas de trabajo; capacitación, información documentada y verificación (seguimiento).</p>

                                <ul>
                                    <li>Sistema de Gestión de Seguridad y Salud en el trabajo, OHSAS 18001</li>
                                    <li>Sistema de Gestión ambiental, ISO 14001</li>
                                    <li>Sello de Calidad turística, NCH 3068</li>
                                    <li>Sistema de Gestión de Calidad, ISO 9001</li>
                                    <li>Norma Chilena 2728</li>
                                </ul>
                            </div>


                            <ul v-if="selected_service == 'asesoria'">
                                <li>Sistema de Gestión de Seguridad y Salud en el trabajo, OHSAS 18001 </li>
                                <li>Sistema de Gestión ambiental, ISO 14001</li>
                                <li>Sistema de Gestión de la Calidad, ISO 9001</li>
                                <li>Sello de Calidad turística, NCH 3068</li>
                                <li>Auditorías internas</li>
                                <li>Auditorías de proveedores</li>
                                <li>Plan de emergencia, matrices legales y otros</li>
                                <li>Modelamiento de procesos</li>
                                <li>Elaboración de planes de emergencia.</li>
                                <li>Elaboración y Validación de matrices legales.</li>
                                <li>Traducción de normas e interpretariado</li>
                            </ul>

                            <ul v-if="selected_service == 'capacitacion'">
                                <li>Seguridad y salud en el trabajo</li>
                                <li>Curso de conductores de grúa horquilla (vía SENCE, 48 hrs)</li>
                                <li>Curso de primeros auxilios en base a riesgos profesionales y accidentes (16 hrs, vía SENCE).</li>
                                <li>Curso de introducción a la seguridad y salud ocupacional (incluyendo protocolos, 16 hrs)</li>
                                <li>Auditor interno ISO 9001:2015 / 14001:2015</li>
                                <li>Auditor interno OHSAS 18001:2007</li>
                                <li>Interpretación de requisitos de las normas ISO 9001, ISO 14001 y OHSAS 18001</li>
                                <li>Inglés de negocios
                                    <ul>
                                        <li> Modelamiento de procesos y uso de plataformas.</li>
                                        <li> Liderazgo y trabajo en equipo </li>
                                        <li> Coaching </li>
                                        <li> Norma 2728 </li>
                                    </ul>
                                </li>
                            </ul>

                            <div v-if="selected_service == 'traduccion'">
                                <p>El servicio de prevención de riesgos se enfocará a:</p>
                                <ul>
                                    <li>Riesgos laborales</li>
                                    <li>Elaboración de procedimientos</li>
                                    <li>Planes de emergencia</li>
                                    <li>Incidentes y accidentes</li>
                                    <li>Otros</li>
                                </ul>

                            </div>

                            <p v-if="selected_service == 'implementacion_alimentaria'">
                                Realización de servicio de implementacion o actualización de sistemas normativos en el ámbito alimentario, añadiendo la expertise en el área de capacitación, documentación e interpretación de requisitos.
                                Normas asociadas: FSSC 22000 - BRC - IFS y HACCP
                            </p>

                            <div v-if="selected_service == 'auditoria'">
                                <p>Tenemos conocimientos sólidos en problemáticas ambientales, dando soluciones económicamente factibles y ambientalmente sustentables.
                                    Nuestro equipo de profesionales cuenta con variada experiencia en líneas de base ambiental, planes de manejo ambientales y forestales, elaboración y tramitación de diversos estudios ambientales.</p>

                                <p>Tenemos un fuerte compromiso con el desarrollo de estudios enfocados a la gestión ambiental eficiente, estableciendo altos estándares de calidad, bajo un trabajo riguroso, metódico y profesional.</p>

                                <p>Nuestro campo de acción es desde Santiago a todo Chile, realizando nuestro trabajo a través de variadas singularidades ambientales y nuevos desafíos de nuestra realidad actual y futura.</p>
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
        props: [ 'selected_service', 'title' ],
        data () {
            return {
                service_details_img: "../../src/assets/img/services-img/service-details.jpg",
            }
        }
    }
</script>