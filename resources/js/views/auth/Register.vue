<template>
    <section class="pt-100 login-register">
        <div class="container">
            <div class="row login-register-cover">
                <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                    <div class="text-center">
                        <p class="font-sm text-brand-2">Register </p>
                        <h2 class="mt-10 mb-5 text-brand-1">Start for free Today</h2>
                        <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                        <button class="btn social-login hover-up mb-20"><img
                                src="../../../assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign up with
                                Google</strong></button>
                        <div class="divider-text-center"><span>Or continue with</span></div>
                    </div>
                    <form class="login-register text-start mt-20" action="#">
                        <div class="form-group">
                            <label class="form-label" for="full_name">Full Name *</label>
                            <input class="form-control" type="text" v-model="formData.full_name" placeholder="Yakubu Job">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input class="form-control" type="email" v-model="formData.email"
                                placeholder="yakubujob@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone_number">Phone Number </label>
                            <input class="form-control" type="tel" v-model="formData.phone_number" placeholder="0244000000">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password *</label>
                            <input class="form-control" type="password" v-model="formData.password"
                                placeholder="************">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password_confirmation">Confirm Password *</label>
                            <input class="form-control" type="password" v-model="formData.password_confirmation"
                                placeholder="************">
                        </div>
                        <div class="login_footer form-group d-flex justify-content-between">
                            <label class="cb-container">
                                <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span
                                    class="checkmark"></span>
                            </label><a class="text-muted" href="page-contact.html">Lean more</a>
                        </div>
                        <div class="form-group" v-if="loading">
                            <button class="btn btn-brand-1 hover-up w-100" type="submit" @click.prevent="submitRegistration"
                                disabled>
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                Submit &amp; Register
                            </button>
                        </div>
                        <div class="form-group" v-else>
                            <button class="btn btn-brand-1 hover-up w-100" type="submit"
                                @click.prevent="submitRegistration">Submit &amp;
                                Register</button>
                        </div>
                        <div class="text-muted text-center">Already have an account? <a href="page-signin.html">Sign in</a>
                        </div>
                    </form>
                </div>
                <div class="img-1 d-none d-lg-block"><img class="shape-1"
                        src="../../../assets/imgs/page/login-register/img-1.svg" alt="JobBox"></div>
                <div class="img-2"><img src="../../../assets/imgs/page/login-register/img-2.svg" alt="JobBox"></div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            formData: {
                full_name: '',
                email: '',
                phone_number: '',
                password: '',
                password_confirmation: ''
            },
            loading: false
        }
    },
    methods: {
        async submitRegistration() {
            this.$Progress.start();
            const formData = {
                full_name: this.formData.full_name,
                email: this.formData.email,
                phone_number: this.formData.phone_number,
                password: this.formData.password,
                password_confirmation: this.formData.password_confirmation
            }
            this.loading = true;
            const res = await axios.post('auth/register', formData)
                .then(response => {
                    const token = response.data.token;

                    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
                    this.$Progress.finish();
                })
                .catch(error => { console.log(error) })
                .finally(() => {
                    this.loading = false;
                    this.$router.push('verify');
                })
        }
    }
}
</script>