<script>
    export default {
        data() {
            return {
                mouseHovering: false,
            }
        },
        computed: {
        },
        props: {
            icon: String,
            title: String,
            description: String,
            borderHoverColor: String,
        }
    }
</script>

<template>
    <div
    @mouseenter="mouseHovering = true"
    @mouseleave="mouseHovering = false"
    className="flex flex-col shadow-md hover:shadow-lg duration-500 py-4 px-8 text-black mb-8 border-t-4 hover:border-indigo-500">
        <div>
            <h1 class="mt-8 text-xl">{{ title }}</h1>
            <p class="mt-2 font-extralight">{{ description }}</p>
        </div>
        <i class="text-[60px] text-right" :class="icon"></i>
    </div>
</template>