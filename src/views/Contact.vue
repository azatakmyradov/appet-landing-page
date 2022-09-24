<script>
    import axios from 'axios';
    import Header from '../components/Header.vue';
    import Footer from '../components/Footer.vue';

    export default { 
        components: { Header, Footer },
        data() {
            return {
                email_data: {
                    name: '',
                    email: '',
                    message: ''
                },
                isLoading: false,
            }
        },
        methods: {
            toggleLoading() {
                this.isLoading = ! this.isLoading;
            },
            isEmail(email) {
                return email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
            },
            sendEmail() {
                this.toggleLoading();
                if (this.isEmail(this.email_data.email) && this.email_data.name != '' && this.email_data.message != '') {
                    axios.post('/contact.php', {
                        name: this.email_data.name,
                        email: this.email_data.email,
                        message: this.email_data.message,
                    }).then((response) => {
                        this.toggleLoading();
                        this.email_data.name = '';
                        this.email_data.email = '';
                        this.email_data.message = '';
                        alert('Email was sent successfully');
                    }).catch((error) => {
                        this.toggleLoading();
                        alert('Something went wrong');
                    });
                } else {
                    this.toggleLoading();
                    alert('Please fill all the fields correctly');
                }
            }
        }
    }
</script>

<template>
    <Header>
        <template v-slot:content>
            <div class="container mx-auto">
                <h1 class="my-4 text-5xl font-bold leading-tight text-center">
                    Contact
                </h1>
                <form class="w-full">
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            Name
                        </span>
                        <input type="text" v-model="email_data.name" name="name" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Full name" required>
                    </div>
                    <div class="flex mt-2">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            Email
                        </span>
                        <input type="email" v-model="email_data.email" name="email" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email address" required>
                    </div>
                    <div class="mt-2">
                        <textarea id="message" v-model="email_data.message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button @click.prevent="sendEmail" type="submit" class="w-full text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-2 mr-2 mb-2">
                        <i class="animate-spin fa-solid fa-spinner mr-2" v-show="isLoading == true ? true : false"></i>
                        Send
                    </button>
                </form> 
            </div>         
        </template>
        <template v-slot:image>
            <img class="w-full md:w-4/5 z-50" alt="appet-technology-home-header" src="/header_img.png" />
        </template>
    </Header>
    <Footer :isSticky="true" />
</template>