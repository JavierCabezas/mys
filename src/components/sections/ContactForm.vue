<template>
    <div class="col-xs-12 col-sm-8">
        <!-- Message Title -->
        <div class="message_title">
            <!-- Section Heading Start -->
            <div class="section_heading text-left">
                <p>Escribénos algo</p>
                <h3>Contacto</h3>
            </div>
            <!-- Section Heading End -->
        </div>

        <div class="contact_from wow fadeInUp" data-wow-delay=".2s">
            <div class="form">
                <!-- Message Input Area Start -->
                <div class="contact_input_area">
                    <div id="success_fail_info"></div>
                    <div class="row">
                        <!-- Single Input Area Start -->
                        <div class="col-xs-12">
                            <div class="form-group">
                                <input
                                        type="text"
                                        class="form-control"
                                        v-model="form.name"
                                        name="name"
                                        id="name"
                                        placeholder="Tu nombre (*)"
                                        required
                                >
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="email"
                                       class="form-control"
                                       v-model="form.email"
                                       name="email" id="email"
                                       placeholder="Tu correo electrónico (*)"
                                       required
                                >
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="number"
                                       class="form-control"
                                       v-model="form.number"
                                       name="number"
                                       id="number"
                                       placeholder="Tu teléfono de contacto (*)"
                                       required
                                >
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea name="message"
                                          class="form-control"
                                          id="message"
                                          v-model="form.message"
                                          cols="30" rows="10"
                                          placeholder="Tu mensaje (*)"
                                          required
                                >
                                </textarea>
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-xs-12">
                            <button type="submit" @click.prevent="send_form()" class="btn btn-default" :class="{send_form: 'disabled'}">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
                <!-- Message Input Area End -->
            </div>
        </div>
    </div>
</template>


<script>
    require('sweetalert');

    export default {
        data () {
            return {
                form: {
                    name: null,
                    email: null,
                    number: null,
                    message: null,
                },
                form_sent: false
            }
        },
        methods: {
            send_form: function() {
                let vm = this;
                let url = './backend/contact.php';
                let passes_validation = true;
                if(vm.form.name === null || vm.form.email === null || vm.form.number === null || vm.form.message === null){
                    passes_validation = false;

                    sweetAlert({
                        title: "Oops!",
                        text: "No se ingresaron todos los campos requeridos",
                        type: "error"
                    });
                }


                if(!vm.form_sent && passes_validation){
                    $.ajax({
                        url: url,
                        data: vm.form,
                        type: "post",
                        success: function (result) {
                            vm.items = result;
                            vm.form.name = null;
                            vm.form.email = null;
                            vm.form.number = null;
                            vm.form.message = null;
                            vm.form_sent = false;
                            sweetAlert({
                                title: "Recibido",
                                text: "Hemos recibido tu mensaje y te responderemos en el corto plazo.",
                                type: "success"
                            });
                        },
                        error: function(){
                            sweetAlert({
                                title: "Oops!",
                                text: "Ocurrió un error, por favor inténtalo nuevamente.",
                                type: "error"
                            });
                            vm.form_sent = false
                        }
                    });
                }
            }
        }
    }
</script>