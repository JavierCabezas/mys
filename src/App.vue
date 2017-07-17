<template>
  <div id="app">
      <header-area></header-area>
      <welcome></welcome>
      <about-us></about-us>
      <service-detail></service-detail>
      <services></services>
      <advisor></advisor>
      <faq></faq>
      <work-details></work-details>
      <projects></projects>
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
    import Advisor from './components/sections/Advisor.vue'
    import Faq from './components/sections/Faq.vue'
    import WorkDetails from './components/sections/WorkDetails.vue'
    import Projects from './components/sections/Projects.vue'
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
            advisor: Advisor,
            faq: Faq,
            workDetails: WorkDetails,
            projects: Projects,
            contact: Contact,
            googleMap: GoogleMap,
            foot: Foot
        }
  }
</script>