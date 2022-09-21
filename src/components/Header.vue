<script>
    export default {
        props: ['class']
    }
</script>

<template>
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <slot name="content"></slot>
            </div>
            <!--Right Col-->
            <div class="w-full hidden md:block md:w-3/5 py-6 text-center">
                <slot name="image"></slot>
            </div>
        </div>
    </div>
</template>