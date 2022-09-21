<script>
import Header from '../components/Header.vue';
import Carousel from '../components/Carousel.vue';
import FooterWaves from '../components/FooterWaves.vue';
import CallToAction from '../components/CallToAction.vue';
import Footer from '../components/Footer.vue';
    export default { components: { Header, Carousel, FooterWaves, CallToAction, Footer } }
</script>

<template>
    <Header>
        <template v-slot:content>
            
        </template>
    </Header>

    <div class="container mx-auto mt-8 px-3 pb-8">
        <div class="flex">
            <div class="flex-none w-1/3 mr-6 flex justify-center flex-col text-lg">
                <!-- <h1 class="text-[50px]"><strong>Our</strong> Values</h1> -->
                <h1 class="text-[50px] mb-4"><strong>Our</strong> Mission</h1>
                <p class="mt-2">
                    As a company we want to provide a platform where anyone can execute an idea. We also aim to service companies which need assistance uplifting their products.
                </p>
                <p class="mt-2">
                    Our Customer centric approach allows us to adhere to our client needs
                </p>
            </div>
            <div class="flex-1 flex justify-center ml-4">
                <h1 class="text-[50px] bg-[#038aff]/[.05] py-16 px-20 text-right shadow-lg">
                    Bring the ideas into reality cost effectively
                </h1>
            </div>
        </div>

        <div class="mt-[100px]"></div>
            
        <Carousel></Carousel>
    </div>
    <Footer />
</template>