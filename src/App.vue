<template>
  <div id="app">
      <header-area></header-area>
      <welcome></welcome>
      <special-feature></special-feature>
      <about-us></about-us>
      <cool-facts></cool-facts>
      <service-detail></service-detail>
      <services></services>
      <specialty></specialty>
      <advisor></advisor>
      <faq></faq>
      <work-details></work-details>
      <projects></projects>
      <video-area></video-area>
      <price></price>
      <testimonials></testimonials>
      <blog></blog>
      <contact></contact>
      <google-map></google-map>
      <foot></foot>
  </div>
</template>

<script>
    import HeaderArea from './components/sections/HeaderArea.vue'
    import Welcome from './components/sections/Welcome.vue'
    import SpecialFeature from './components/sections/SpecialFeature.vue'
    import AboutUs from "./components/sections/AboutUs.vue"
    import CoolFacts from './components/sections/CoolFacts.vue'
    import ServiceDetail from './components/sections/ServiceDetail.vue'
    import Services from './components/sections/Services.vue'
    import Specialty from './components/sections/Specialty.vue'
    import Advisor from './components/sections/Advisor.vue'
    import Faq from './components/sections/Faq.vue'
    import WorkDetails from './components/sections/WorkDetails.vue'
    import Projects from './components/sections/Projects.vue'
    import VideoArea from './components/sections/VideoArea.vue'
    import Price from './components/sections/Price.vue'
    import Testimonials from './components/sections/Testimonials.vue'
    import Blog from './components/sections/Blog.vue'
    import Contact from './components/sections/Contact.vue'
    import GoogleMap from './components/sections/GoogleMap.vue'
    import Foot from './components/sections/Foot.vue'

    export default {
        name: 'app',
        components: {
            headerArea: HeaderArea,
            welcome: Welcome,
            specialFeature: SpecialFeature,
            aboutUs: AboutUs,
            coolFacts: CoolFacts,
            serviceDetail: ServiceDetail,
            services: Services,
            specialty: Specialty,
            advisor: Advisor,
            faq: Faq,
            workDetails: WorkDetails,
            projects: Projects,
            videoArea: VideoArea,
            price: Price,
            testimonials: Testimonials,
            blog: Blog,
            contact: Contact,
            googleMap: GoogleMap,
            foot: Foot
        }
  }
</script>