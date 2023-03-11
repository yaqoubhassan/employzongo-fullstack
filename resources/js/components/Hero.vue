<template>
    <section class="section-box">
        <div class="banner-hero hero-2">
            <div class="banner-inner">
                <div class="block-banner">
                    <h1 class="text-42 color-white wow animate__animated animate__fadeInUp">The #1 <span
                            class="color-green">Job Board for</span><br class="d-none d-lg-block">Hiring or Find
                        your next job</h1>
                    <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">Each month, more than 3 million job seekers turn to website in their
                        search for work, making over 140,000 applications every single day</div>
                    <!-- Search Form -->
                    <app-search-form></app-search-form>
                    <div class="list-tags-banner mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <strong>Popular Searches:</strong><a href="#">Designer</a>, <a href="#">Web</a>, <a
                            href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>,
                        <a href="#">Senior</a>, <a href="#">Engineer</a>
                    </div>
                </div>
                <div class="mt-60">
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                            <div class="d-inline-block text-start">
                                <h4 class="color-white"> <span class="count">265</span><span> K+</span></h4>
                                <p class="font-sm color-text-mutted">Daily Jobs Posted</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                            <div class="d-inline-block text-start">
                                <h4 class="color-white"><span class="count">17</span><span> K+</span></h4>
                                <p class="font-sm color-text-mutted">Recruiters</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                            <div class="d-inline-block text-start">
                                <h4 class="color-white"> <span class="count">15</span><span> K+</span></h4>
                                <p class="font-sm color-text-mutted">Freelancers</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
                            <div class="d-inline-block text-start">
                                <h4 class="color-white"> <span class="count">28</span><span> K+</span></h4>
                                <p class="font-sm color-text-mutted">Blog Tips</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import SearchForm from './SearchForm.vue'

export default {
    components: {
        appSearchForm: SearchForm
    }
}
</script>