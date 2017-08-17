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

                                    <ul v-if="selected_service == 'asesoria'">
                                        <li>Sistema de Gestión de Seguridad y Salud en el trabajo, OHSAS 18001 </li>
                                        <li>Sistema de Gestión ambiental, ISO 14001</li>
                                        <li>Sistema de Gestión de la Calidad, ISO 9001</li>
                                        <li>Sello de Calidad turística, NCH 3068</li>
                                        <li>Auditorías internas</li>
                                        <li>Auditorías de proveedores</li>
                                        <li>Plan de emergencia, matrices legales y otros</li>
                                        <li>Modelamiento de procesos</li>
                                    </ul>

                                    <ul v-if="selected_service == 'capacitaciones'">
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

                                    <p v-if="selected_service == 'traduccion'"> Se realiza el servicio de la traducción técnica de normas y documentos en el idioma inglés. </p>

                                    <p v-if="selected_service == 'modelamiento_procesos'">
                                        Se realiza servicio de modelamiento de procesos, basado en la norma ISO 9001:2015, utilizando sistemas de diagrama,
                                        con el cliente. Este servicio permite estandarizar y simplificar procesos dentro de la organización.
                                    </p>

                                    <p v-if="selected_service == 'auditoria'">
                                        Se realiza el servicio de auditoría interna basado en las normas ISO  9001 y 14001 versión 2015, OHSAS 18001:2007,
                                        Buenas prácticas de manufactura, HACCP y FSSC22000 v4. Estos servicios pueden incluir además del reporte formal de
                                        las no conformidades y evidencias encontradas, el tratamiento de no conformidades y apoyo en auditorías externas.
                                    </p>
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