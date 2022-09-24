<script>
    export default {
        data() {
            return {
                carousel: {
                    data: [
                        { title: 'Customer Centric', description: 'We fully acknowledge the ultimate value of our clients as the foundation of our business. Our clients are at the center of all decisions related to the delivery of products, services and experiences to create customer satisfaction, loyalty and advocacy.' },
                        { title: 'Innovation', description: 'Innovation motivates action: to take risks, encourage curiosity and new ideas, and constantly strive to exceed expectations, Through innovation, we generate solutions for our customers and raise the bar - both within our workplace and throughout our industry.' },
                        { title: 'Passionate', description: 'As a team, our core value is enthusiastically implementing our best knowledge as a service to our clients and helping them scale their businesses. We are passionate about putting our enhanced skills on the table to deliver the best results.' },
                        { title: 'Data Driven', description: 'We take a logical and data-driven approach to decision making and measure our effectiveness.. We evaluate ourselves mutually accountable to achieving our targets.' },
                    ],
                    current: 0,
                    show: true,
                }
            }
        },
        watch: {
            carousel: function (value) {

            }
        },
        mounted() {
            setInterval(() => {
                if (this.carousel.current === this.carousel.data.length - 1) {
                    this.carousel.current = 0;
                    this.changeCarousel(0);
                } else {
                    this.changeCarousel(this.carousel.current++);
                }
            }, 3000);
        },
        methods: {
            changeCarousel(index) {
                this.carousel.show = false;
                setTimeout(() => {
                    this.carousel.show = true;
                }, 500);
            },
        }
    }
</script>

<template>
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            <strong>Our</strong> Values
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row items-center py-4 container mx-auto">
        <div class="px-20 flex items-center max-w-[60%] sm:max-w-[40%]">
            <img src="/logo.png" alt="logo">
        </div>
        <div class="flex flex-col justify-center max-w-[80%] sm:max-w-[60%]">
            <div>
                <section class="min-h-[140px]">
                    <transition name="fade">
                        <div v-if="carousel.show">
                            <h1 class="text-[30px] font-bold text-[#4e4376] text-center sm:text-left">{{ carousel.data[carousel.current].title }}</h1>
                            <p class="mt-2 text-xl text-black font-medium">{{ carousel.data[carousel.current].description }}</p>
                        </div>
                    </transition>
                </section>
            </div>
            <div class="flex justify-center mt-4">
                <div>
                    <button
                        type="button"
                        class="w-3 h-3 rounded-full hover:bg-black mr-2 transition"
                        :class="index == carousel.current ? 'bg-black' : 'bg-slate-400'"
                        v-for="(item, index) in carousel.data" @click="changeCarousel(index)">
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    .fade-enter-active,
    .fade-leave-active {
        transition: opacity .5s ease;
    }

    .fade-enter-from,
    .fade-leave-to
    {
        opacity: 0
    }
</style>