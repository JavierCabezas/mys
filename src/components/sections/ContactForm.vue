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
            <form action="mail.php" method="post" id="main_contact_form">
                <!-- Message Input Area Start -->
                <div class="contact_input_area">
                    <div id="success_fail_info"></div>
                    <div class="row">
                        <!-- Single Input Area Start -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Tu nombre" required>
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electrónico" required>
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="number" placeholder="Tu teléfono de contacto" required>
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Tu mensaje" required></textarea>
                            </div>
                        </div>
                        <!-- Single Input Area Start -->
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-default">Enviar mensaje</button>
                        </div>
                    </div>
                </div>
                <!-- Message Input Area End -->
            </form>
        </div>
    </div>
</template>