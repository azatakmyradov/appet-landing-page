<script>
  import Home from './views/Home.vue'
  import About from './views/About.vue'
  import Contact from './views/Contact.vue'
  import NotFound from './views/NotFound.vue'
  import Navbar from './components/Navbar.vue'
  import FooterWaves from './components/FooterWaves.vue'
  import Footer from './components/Footer.vue'
  
  const routes = {
    '/': Home,
    '/services': Home,
    '/about': About,
    '/contact': Contact
  }
  
  export default {
    data() {
        return {
            currentPath: window.location.hash
        };
    },
    computed: {
        currentView() {
            return routes['/' + this.currentPath.slice(1) || "/"] || NotFound;
        }
    },
    mounted() {
        window.addEventListener("hashchange", () => {
            this.currentPath = window.location.hash;
        });
    },
    components: { Navbar, Footer }
}
  </script>
  
  <template>
    <Navbar />
    <component :is="currentView" />
  </template>