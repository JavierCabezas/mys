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
                    <div class="modal_body">
                        <div class="modal-product">
                            <!-- Service Details Content Area -->
                            <div class="service_details_content">
                                <!-- Service Details Thumb -->
                                <div class="service_details_thumb">
                                    <img :src="service_details_img" alt="">
                                </div>
                                <!-- Service Details Text Area -->
                                <div class="single_part_content">
                                    <h3>Investment Planning</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut explicabo in, temporibus aliquid eveniet, libero cupiditate, placeat harum quas, laborum mollitia. Molestias et ratione numquam inventore laborum, pariatur aperiam recusandae at sequi veritatis, reiciendis neque, cum deserunt ab optio? Autem cumque beatae repudiandae aut dolorum consequuntur alias quia consequatur iusto!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur maiores ipsum ratione deleniti labore totam porro rerum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque perspiciatis unde ut at nesciunt sed doloribus possimus vero sit dolores! Unde in explicabo magnam, reprehenderit non ipsum officia quas esse voluptatibus assumenda.</p>
                                </div>
                                <!-- Service Details Text -->
                                <div class="single_part_content">
                                    <h3>Business Strategy</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut explicabo in, temporibus aliquid eveniet, libero cupiditate, placeat harum quas, laborum mollitia. Molestias et ratione numquam inventore laborum, pariatur aperiam recusandae at sequi veritatis, reiciendis neque, cum deserunt ab optio? Autem cumque beatae repudiandae aut dolorum consequuntur alias quia consequatur iusto!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur maiores ipsum ratione deleniti labore totam porro rerum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque perspiciatis unde ut at nesciunt sed doloribus possimus vero sit dolores! Unde in explicabo magnam, reprehenderit non ipsum officia quas esse voluptatibus assumenda.</p>
                                </div>
                                <!-- Service Data Download Area -->
                                <div class="service_data_dl">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem hic modi id recusandae esse, mollitia, eum sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse similique harum nesciunt, qui doloribus adipisci.</p>
                                    <a href="dummy-data/worksheet.pdf" class="pdf_dl" download>Download PDF</a>
                                    <a href="dummy-data/bizpro.doc" class="doc_dl" download>Download DOC</a>
                                </div>
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
        data () {
            return {
                service_details_img: "../../src/assets/img/services-img/service-details.jpg",
            }
        }
    }
</script>