import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Jobs from '../views/Jobs.vue'
import Blogs from '../views/Blogs.vue'
import Candidates from '../views/Candidates.vue'
import AboutUs from '../views/AboutUs.vue'
import ContactUs from '../views/ContactUs.vue'
import Register from '../views/Register.vue'
import Login from '../views/Login.vue'
import JobDetails from '../views/JobDetails.vue'
import BlogDetails from '../views/BlogDetails.vue'
import CandidateDetails from '../views/CandidateDetails.vue'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/jobs',
            name: 'jobs',
            component: Jobs
        },
        {
            path: '/blogs',
            name: 'blogs',
            component: Blogs
        },
        {
            path: '/candidates',
            name: 'candidates',
            component: Candidates
        },
        {
            path: '/about-us',
            name: 'aboutus',
            component: AboutUs
        },
        {
            path: '/contact-us',
            name: 'contactus',
            component: ContactUs
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/job-details',
            name: 'job-details',
            component: JobDetails
        },
        {
            path: '/blog-details',
            name: 'blog-details',
            component: BlogDetails
        },
        {
            path: '/candidate-details',
            name: 'candidate-details',
            component: CandidateDetails
        },
        { path: '/:pathMatch(.*)*', redirect: '/' }
    ]
})

export default router
