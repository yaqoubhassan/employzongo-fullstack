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
import moment from 'moment/moment';


const app = createApp(App);

axios.defaults.baseURL = import.meta.env.VITE_BASE_URL;
const options = {
    color: "#48f8c3",
    failedColor: "#ee4f4f",
    thickness: "5px",
    transition: {
        speed: "0.2s",
        opacity: "0.6s",
        termination: 300,
    },
};

app.config.globalProperties.$filters = {
    timeAgo(date) {
        return moment(date).fromNow()
    },
}

app
    .component('appBlogsComponent', BlogsComponent)
    .component('appNewsletter', Newsletter)
    .component('appBreadcrumb', Breadcrumb)

app.use(VueProgressBar, options)
    .use(router)
    .use(store)
    .use(VueSweetalert2)

app.mount("#app")

window.progressBar = app.config.globalProperties.$Progress;
window.swal = app.config.globalProperties.$swal;

