<script>
    import Header from '../components/Header.vue';
    import HeaderWaves from '../components/HeaderWaves.vue';
    import FooterWaves from '../components/FooterWaves.vue';
    import CallToAction from '../components/CallToAction.vue';
    import Footer from '../components/Footer.vue';
    import Services from '../components/Services.vue';

    export default {
        components: { Header, HeaderWaves, FooterWaves, CallToAction, Footer, Services }
    }
</script>

<template>
    <Header>
        <template v-slot:content>
            <h1 class="my-4 text-5xl font-light md:font-bold leading-tight">
                Bridge the gap between idea and execution
            </h1>
            <p class="hidden sm:block leading-normal text-2xl mb-8">
                We exist to simplify the use of technology through innovation and industry changing technology solutions. Our data driven approach allows us to build competitive and cost effective solutions.
            </p>
            <a
                href="#services"
                class="mb-12 mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
            >
                Get Started
            </a>
        </template>
        <template v-slot:image>
            <img class="w-full md:w-4/5 z-50" src="/header_img.png" />
        </template>
    </Header>
    <HeaderWaves />
    <Services />
    <FooterWaves />
    <CallToAction />
    <Footer />
</template>