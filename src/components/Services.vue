<script>
    import Service from './Service.vue';

    export default {
        components: { Service }
    }
</script>

<template>
    <section class="bg-white border-b py-8" id="services">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Services
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
        </div>

        <div className="max-w-[1000px] mx-auto w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 py-8 px-4 md:px-0">
            <Service
            title="Mobile Development"
            description="Build and deploy iOS and Android applications"
            icon="fa-solid fa-mobile-screen-button"
            />

            <Service
            title="Web Applications"
            description="Real time and responsive web applications"
            icon="fa-solid fa-code"
            />

            <Service
            title="Business Optimization & Intelligence"
            description="Streamline and automate your business tasks"
            icon="fa-solid fa-briefcase"
            />

            <Service
            title="IoT Applications"
            description="Solve your hardware needs with cloud-based applications"
            icon="fa-solid fa-house-signal"
            />

            <Service
            title="Salesforce Development"
            description="Manage and build cloud-based CRM solutions"
            icon="fa-brands fa-salesforce"
            />

            <Service
            title="UI/UX Design"
            description="User friendly, scalable and accessible designs"
            icon="fa-solid fa-palette"
            />

        </div>
    </section>
</template>

<style>
    #services {
        font-family: 'Roboto', sans-serif;
    }
</style>