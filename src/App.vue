<template>
  <div id="app">
      <header-area></header-area>
      <welcome></welcome>
      <about-us></about-us>
      <service-detail></service-detail>
      <services></services>
      <contact></contact>
      <google-map></google-map>
      <foot></foot>
  </div>
</template>

<script>
    import HeaderArea from './components/sections/HeaderArea.vue'
    import Welcome from './components/sections/Welcome.vue'
    import AboutUs from "./components/sections/AboutUs.vue"
    import ServiceDetail from './components/sections/ServiceDetail.vue'
    import Services from './components/sections/Services.vue'
    import Contact from './components/sections/Contact.vue'
    import GoogleMap from './components/sections/GoogleMap.vue'
    import Foot from './components/sections/Foot.vue'

    export default {
        name: 'app',
        components: {
            headerArea: HeaderArea,
            welcome: Welcome,
            aboutUs: AboutUs,
            serviceDetail: ServiceDetail,
            services: Services,
            contact: Contact,
            googleMap: GoogleMap,
            foot: Foot
        }
  }
</script>