import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Jobs from '../views/Jobs.vue'
import Blogs from '../views/Blogs.vue'
import Candidates from '../views/Candidates.vue'
import AboutUs from '../views/AboutUs.vue'
import ContactUs from '../views/ContactUs.vue'
import Register from '../views/auth/Register.vue'
import Login from '../views/auth/Login.vue'
import JobDetails from '../views/JobDetails.vue'
import BlogDetails from '../views/BlogDetails.vue'
import CandidateDetails from '../views/CandidateDetails.vue'
import Index from '../views/Index.vue'
import AdminIndex from '../views/admin/AdminIndex.vue'
import Dashboard from '../views/admin/Dashboard.vue'
import CandidatesList from '../views/admin/Candidates.vue'
import store from '../store/index.js'
import ResendVerification from '../views/auth/ResendVerification.vue'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            components: {
                default: Index
            },
            beforeEnter(to, from, next) {
                if (to.redirectedFrom) {
                    if (to.redirectedFrom.fullPath === '/verified') {
                        router.push('login')

                    }
                }
                next();
            },
            children:
                [
                    {
                        path: '', name: 'home', component: Home,
                        meta: { title: 'EmployZongo - Home' },

                    },
                    { path: 'jobs', name: 'jobs', component: Jobs, meta: { title: 'EmployZongo - Jobs' } },
                    { path: 'blogs', name: 'blogs', component: Blogs, meta: { title: 'EmployZongo - Blog' } },
                    { path: 'candidates', name: 'candidates', component: Candidates, meta: { title: 'EmployZongo - Candidates' } },
                    { path: 'about-us', name: 'aboutus', component: AboutUs, meta: { title: 'EmployZongo - About Us' } },
                    { path: 'contact-us', name: 'contactus', component: ContactUs, meta: { title: 'EmployZongo - Contact Us' } },
                    { path: 'register', name: 'register', component: Register, meta: { title: 'EmployZongo - Register' } },
                    { path: 'resend-verification', name: 'verify', component: ResendVerification, meta: { title: 'EmployZongo - Resend Verification' } },
                    { path: 'login', name: 'login', component: Login, meta: { title: 'EmployZongo - Login' } },
                    { path: 'job-details', name: 'job-details', component: JobDetails, meta: { title: 'EmployZongo - Job Details' } },
                    { path: 'blog-details', name: 'blog-details', component: BlogDetails, meta: { title: 'EmployZongo - Blog Details' } },
                    { path: 'candidate-details', name: 'candidate-details', component: CandidateDetails, meta: { title: 'EmployZongo - Candidate Details' } },
                ]
        },
        {
            path: '/admin',
            components: {
                default: AdminIndex
            }, children:
                [
                    { path: '', name: 'dashboard', component: Dashboard, meta: { title: 'Dashboard' } },
                    { path: 'candidates-list', name: 'candidates-list', component: CandidatesList, meta: { title: 'Candidates' } }
                ]
        },
        { path: '/:pathMatch(.*)*', redirect: '/' }
    ]
})

router.beforeEach((toRoute, fromRoute, next) => {
    window.document.title = toRoute.meta && toRoute.meta.title ? toRoute.meta.title : 'Home';

    store.state.breadcrumbName = toRoute.meta.title;

    next();
})

export default router
