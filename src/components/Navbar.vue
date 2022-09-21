<script>
    export default {
        data() {
            return {
                windowTop: '',
                mobileNavbarOpen: false,
                currentPage: '',
            }
        },
        mounted() {
            window.addEventListener("scroll", this.onScroll)
            window.addEventListener("hashchange", () => {
                this.currentPage = window.location.hash.slice(1);
                this.mobileNavbarOpen = false;
            });
        },
        beforeDestroy() {
            window.removeEventListener("scroll", this.onScroll)
        },
        methods: {
            onScroll(e) {
                this.windowTop = window.top.scrollY /* or: e.target.documentElement.scrollTop */
            },
            navbarAwayFromTop() {
                if (this.windowTop > 10) {
                    return true;
                }

                return false;
            },
            toggleNavbar() {
                this.mobileNavbarOpen = !this.mobileNavbarOpen;
            }
        }
    }
</script>

<template>
    <!--Nav-->
    <nav
    id="header"
    class="fixed w-full z-30 top-0 text-white"
    :class="{
        'bg-white': navbarAwayFromTop()
    }"
    >
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a
                href="#"
                class="no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                :class="{
                    'text-black': navbarAwayFromTop(),
                    'text-white': !navbarAwayFromTop()
                }"
                >
                <div class="flex items-center">
                        <img src="/favicon.ico" alt="Logo" class="w-10 h-10 mr-2">
                        APPET
                    </div>
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button
                class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                @click="toggleNavbar()"
                >
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div
            id="nav-content"
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
            :class="{
                'hidden': !mobileNavbarOpen
            }"
            >
                <ul
                class="list-reset lg:flex justify-end flex-1 items-center"
                :class="{
                    'text-black': navbarAwayFromTop(),
                    'text-black lg:text-white': !navbarAwayFromTop()
                }">
                    <li class="mr-3">
                        <a
                        class="inline-block py-2 px-4 no-underline"
                        :class="{
                            'font-bold': currentPage === ''
                        }"
                        href="#"
                        >
                            Home
                        </a>
                    </li>
                    <li class="mr-3">
                        <a 
                        class="inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        :class="{
                            'font-bold': currentPage === 'services'
                        }"
                        href="#services"
                        >Services</a>
                    </li>
                    <li class="mr-3">
                        <a
                        class="inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        :class="{
                            'font-bold': currentPage === 'about'
                        }"
                        href="#about"
                        >
                            About
                        </a>
                    </li>
                    <li class="mr-3">
                        <a
                        class="inline-block no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        :class="{
                            'font-bold': currentPage === 'contact'
                        }"
                        href="#contact"
                        >Contact</a>
                    </li>
                </ul>
                <div hidden id="navAction"></div>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
</template>