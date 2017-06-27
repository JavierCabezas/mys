<template>
    <div id="works_details_wrapper">
        <!-- Modal-box -->
        <div role="dialog" tabindex="-1" id="works_details" class="modal fade in">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- modal Head start -->
                    <div class="modal_head">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </div>
                    <!-- modal body start -->
                    <div class="modal_body">
                        <!-- single gallery description start -->
                        <div class="single_gallery_area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <!--  Gallery Slider -->
                                        <div class="single_gallary_slider">
                                            <div class="single_slider">
                                                <img :src="img_gallery" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <!--  Gallery Details Info -->
                                        <div class="single_gallery_item_info">
                                            <!-- Headline -->
                                            <div class="headline">
                                                <h4>We dream of a sustainable economy where SME is the core.</h4>
                                            </div>
                                            <!--  Description -->
                                            <div class="description">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aliquam hic doloribus dolores minus fugiat totam perspiciatis. Debitis, exercitationem maiores. Possimus eum at hic, reprehenderit similique voluptatibus quibusdam nesciunt necessitatibus.</p>
                                            </div>
                                            <!--   live preview button   -->
                                            <div class="live_preview">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Live Preview</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Prev next pagination -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <nav aria-label="">
                                            <ul class="pager">
                                                <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Prev</a></li>
                                                <li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
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
        name: 'header-area',
        data () {
            return {
                img_gallery: "../../src/assets/img/gallery/1.jpg"
            }
        },
    }
</script>