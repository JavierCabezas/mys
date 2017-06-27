<template>
    <section class="message_now_area section_padding_100_70" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <!-- Message Title -->
                    <div class="message_title">
                        <!-- Section Heading Start -->
                        <div class="section_heading text-left">
                            <p>Drop a line</p>
                            <h3>Message Now</h3>
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
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="number" id="number" placeholder="Your Number *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-default">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-lg-3 col-lg-offset-1">
                    <!-- Section Heading Start -->
                    <div class="section_heading text-left">
                        <p>meet with us</p>
                        <h3>our location</h3>
                    </div>
                    <!-- Section Heading End -->

                    <!-- Adress Area -->
                    <div class="address-area wow fadeInUp" data-wow-delay=".4s">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="single_part">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    <p>House - 87, Mirpur DOHS,</p>
                                    <p>Dhaka, Bangladesh</p>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="single_part">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <a href="tel:+8801791166123">+88 017 911 66123</a>
                                    <a href="tel:+8801791166123">+88 017 911 66123</a>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="single_part">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="mailto:info@educamp.com">info@biz.com</a>
                                    <a href="mailto:care@educamp.com">care@biz.com</a>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="single_part">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p>Sun - Wed 10:00am - 05.00pm</p>
                                    <p>Thu 10:00am - 02.00pm</p>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="social_links_area">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>