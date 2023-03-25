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


const app = createApp(App);

app
    .component('appBlogsComponent', BlogsComponent)
    .component('appNewsletter', Newsletter)
    .component('appBreadcrumb', Breadcrumb)

app.use(router)
app.use(store)
app.use(VueSweetalert2)

axios.defaults.baseURL = import.meta.env.VITE_BASE_URL;


app.mount("#app")