<template>
    <section class="section-box">
        <div class="breacrumb-cover bg-img-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-10">{{ pageTitle }}</h2>
                        <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="breadcrumbs mt-40">
                            <RouterLink class="home-icon link" to="/">Home</RouterLink>
                            <li>{{ pageTitle }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.link {
    color: #66789C;
}

.link:hover {
    color: #000000
}
</style>

<script>
export default {
    props: {
        pageTitle: String
    }
}
</script>