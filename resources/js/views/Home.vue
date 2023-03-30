<template>
    <!-- Hero Section -->
    <app-hero></app-hero>
    <!-- Latest Jobs -->
    <app-jobs-component></app-jobs-component>
    <!-- Top Candidates -->
    <app-top-candidates></app-top-candidates>
    <!-- Testimonials -->
    <app-testimonials></app-testimonials>
    <!-- News and Blog -->
    <app-blogs-component></app-blogs-component>
    <!-- <BlogsComponent /> -->
    <!-- Mobile App -->
    <app-coming-soon></app-coming-soon>
    <!-- Newsletter -->
    <app-newsletter></app-newsletter>
</template>

<script>
import Hero from '../components/Hero.vue'
import JobsComponent from '../components/JobsComponent.vue'
import TopCandidates from '../components/TopCandidates.vue'
import Testimonials from '../components/Testimonials.vue'
import ComingSoon from '../components/ComingSoon.vue'

export default {
    name: 'Home',
    components: {
        appHero: Hero,
        appJobsComponent: JobsComponent,
        appTopCandidates: TopCandidates,
        appTestimonials: Testimonials,
        appComingSoon: ComingSoon
    }
}
</script>