<script>
import Header from '../components/Header.vue';
import Carousel from '../components/Carousel.vue';
import FooterWaves from '../components/FooterWaves.vue';
import CallToAction from '../components/CallToAction.vue';
import Footer from '../components/Footer.vue';
import HeaderWaves from '../components/HeaderWaves.vue';
    export default { components: { Header, Carousel, FooterWaves, CallToAction, Footer, HeaderWaves } }
</script>

<template>
    <Header>
        <template v-slot:content>
            <div class="min-h-[70vh] flex flex-col justify-center mb-8">
                <h1 class="my-4 text-5xl font-light md:font-bold leading-tight">
                    Our Mission
                </h1>
                <p class="sm:block leading-normal text-2xl mb-8">
                    As a company we want to provide a platform where anyone can execute an idea. We also aim to service companies which need assistance uplifting their products.
                </p>
                <p class="sm:block leading-normal text-2xl mb-8">
                    Our Customer centric approach allows us to adhere to our client needs 
                </p>
            </div>
        </template>
        <template v-slot:image>
            <div class="flex-1 flex justify-center ml-4">
                <h1 class="text-[50px] bg-[#038aff]/[.05] py-16 px-20 text-right shadow-lg">
                    Bring the ideas into reality cost effectively
                </h1>
            </div>
        </template>
    </Header>
    <HeaderWaves />
    <section class="bg-white border-b py-8" id="services">
        <Carousel></Carousel>
    </section>
    <Footer />
</template>