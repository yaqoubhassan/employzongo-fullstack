import './bootstrap';

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import BlogsComponent from '../js/components/BlogsComponent.vue'
import Newsletter from '../js/components/Newsletter.vue'
import Breadcrumb from '../js/components/Breadcrumb.vue'
import store from './store'

const app = createApp(App);

app
    .component('appBlogsComponent', BlogsComponent)
    .component('appNewsletter', Newsletter)
    .component('appBreadcrumb', Breadcrumb)

app.use(router)
app.use(store)

app.mount("#app")