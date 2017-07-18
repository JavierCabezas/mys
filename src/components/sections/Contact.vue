<template>
    <section class="message_now_area section_padding_100_70" id="contact">
        <div class="container">
            <div class="row">
                <contact-form></contact-form>
                <contact-meet-us></contact-meet-us>
            </div>
        </div>
    </section>
</template>

<script>
    import ContactForm from './ContactForm.vue'
    import ContactMeetUs from './ContactMeetUs.vue'

    export default {
        components: {
            contactForm: ContactForm,
            contactMeetUs: ContactMeetUs
        }
    }
</script>