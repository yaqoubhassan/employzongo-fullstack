import './bootstrap';

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import BlogsComponent from '../js/components/BlogsComponent.vue'
import Newsletter from '../js/components/Newsletter.vue'
import Breadcrumb from '../js/components/Breadcrumb.vue'
import store from './store'
import axios from 'axios';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import VueProgressBar from "@aacassandra/vue3-progressbar";


const app = createApp(App);

const options = {
    color: "#3C65F5",
    failedColor: "#874b4b",
    thickness: "5px",
    transition: {
        speed: "0.2s",
        opacity: "0.6s",
        termination: 300,
    },
};

app
    .component('appBlogsComponent', BlogsComponent)
    .component('appNewsletter', Newsletter)
    .component('appBreadcrumb', Breadcrumb)

app.use(router)
    .use(store)
    .use(VueSweetalert2)
    .use(VueProgressBar, options)

axios.defaults.baseURL = import.meta.env.VITE_BASE_URL;


app.mount("#app")