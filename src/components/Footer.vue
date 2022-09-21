<script>
    export default {
        props: {
            isSticky: Boolean
        }
    }
</script>

<template>
    <!--Footer-->
    <footer class="bg-white text-black p-4 text-center" :class="isSticky ? 'fixed bottom-0 left-0 w-full' : ''">
        <h1>Copyright © 2022 Appet Technologies</h1>
    </footer>
</template>