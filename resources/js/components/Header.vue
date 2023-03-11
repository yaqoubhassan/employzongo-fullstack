<template>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo"><a class="d-flex" href="index-2.html"><img alt="jobBox"
                                src="../../assets/imgs/logo3.png"></a></div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu">
                        <ul class="main-menu d-flex">
                            <RouterLink class="nav-link" to="/">Home</RouterLink>
                            <RouterLink class="nav-link" to="/jobs">Jobs</RouterLink>
                            <RouterLink class="nav-link" to="/blogs">Blog</RouterLink>
                            <RouterLink class="nav-link" to="/candidates">Candidates</RouterLink>
                            <RouterLink class="nav-link" to="/about-us">About Us</RouterLink>
                            <RouterLink class="nav-link" to="/contact-us">Contact Us</RouterLink>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <RouterLink class="text-link-bd-btom hover-up" to="/register">Register</RouterLink>
                        <a @click="navigateToLogin" class="btn btn-default btn-shadow ml-40 hover-up">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    methods: {
        navigateToLogin() {
            this.$router.push('/login')
        }
    }
}
</script>

<style scoped>
.nav-link {
    font-weight: 500;
    position: relative;
}

.router-link-exact-active,
.nav-link:hover {
    color: #3C65F5;
    text-decoration: underline 2px;
    text-underline-offset: 7px;
    padding-bottom: 1px;
}
</style>