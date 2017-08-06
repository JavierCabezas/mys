<template>
    <header class="header_area">
        <!-- Main Header Area Start -->
        <div class="main_header_area" id="sticky">
            <div class="container">
                <div class="row">

                    <div class="col-sm-2 col-xs-9">
                        <!-- Logo Area:: For better view in all device please use logo image max-width 70px -->
                        <div class="logo_area">
                            <img :src="logo_img_src" alt="">
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-12">
                        <!-- Menu Area Start -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current_page_item"><a href="#home">Inicio</a></li>
                                        <li><a href="#about">Sobre nosotros</a></li>
                                        <li><a href="#service">Servicios</a></li>
                                        <li><a href="#contact">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
</template>

<script>
    export default {
        name: 'header-area',
        data () {
            return {
                logo_img_src: "../../src/assets/img/core-img/logo.png"
            }
        },
    }
</script>