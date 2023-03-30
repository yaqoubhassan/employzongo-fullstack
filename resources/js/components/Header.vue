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
                <div class="header-right" v-if="auth">
                    <div class="block-signin">
                        <div class="member-login"><img alt="" src="../../assets/admin/imgs/page/dashboard/profile.png">
                            <div class="info-member"> <strong class="color-brand-1">{{ user }}</strong>
                                <div class="dropdown"><a class="font-xs color-text-paragraph-2 icon-down"
                                        id="dropdownProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        data-bs-display="static">{{ this.$store.state.user !== null ?
                                            this.$store.state.user.email
                                            : null }}</a>
                                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end"
                                        aria-labelledby="dropdownProfile">
                                        <li><a class="dropdown-item" href="profile.html">Profiles</a></li>
                                        <li><a class="dropdown-item" href="my-resume.html">CV Manager</a></li>
                                        <li><a class="dropdown-item" @click="logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-right" v-else>
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
import axios from '../axios-auth'

export default {
    methods: {
        navigateToLogin() {
            this.$router.push('/login')
        },
        logout() {
            this.$store.dispatch('logout')
        }
    },
    computed: {
        auth() {
            return this.$store.getters.isAuthenticated
        },
        user() {
            return this.$store.getters.user
        },
        myName() {
            return 'ali'
        }
    },
}
</script>

<style scoped>
.dropdown-item {
    cursor: pointer;
}

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

.header {
    padding: 20px 0px;
}

.header .main-header .header-right .member-login {
    display: inline-block;
    vertical-align: middle;
}

.header .main-header .header-right .member-login img {
    float: left;
    height: 35px;
    width: 35px;
    border-radius: 50%;
    margin: 0px 10px 0px 0px;
    vertical-align: middle;
}

img {
    max-width: 100%;
}

.header .main-header .header-right .member-login .info-member {
    padding-left: 45px;
    text-align: left;
    line-height: 19px;
}

.header .main-header .header-right .member-login .info-member strong {
    display: block;
}

.color-brand-1 {
    color: #05264E !important;
}

strong {
    font-weight: bold;
}

.dropdown {
    position: relative;
}

.icon-down {
    display: inline-block;
    padding-right: 15px;
    background: url('../../assets/admin/imgs/page/dashboard/triangle.svg') no-repeat right center;
}

.font-xs {
    font-weight: 500 !important;
    font-size: 12px !important;
    line-height: 18px !important;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    z-index: 12;
    /* display: none; */
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 0.25rem;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-item:focus,
.dropdown-item:hover {
    color: #1e2125;
    background-color: #e9ecef;
}

.dropdown .dropdown-menu.show .dropdown-item {
    padding: 10px 20px;
    color: #4F5E64;
    font-size: 14px;
}
</style>