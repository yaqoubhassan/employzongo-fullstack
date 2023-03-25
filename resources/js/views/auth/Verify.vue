<template>
    <div class="container text-center">
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3">

                <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">EmployZongo</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            {{ alertContent }}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Verify Your Email Address</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            A fresh verification link has been sent to your email address.
                        </div>
                        <p class="card-text">Before proceeding, please check your email for a verification link.</p>
                        <p class="card-text">If you did not receive the email</p>
                        <form class="d-inline">
                            <div class="form-group" v-if="loading">
                                <button class="resend-btn btn btn-primary mt-4" @click.prevent="resendVerification"
                                    type="submit" disabled><span class="spinner-grow spinner-grow-sm" role="status"
                                        aria-hidden="true"></span>Click here to request another</button>
                            </div>
                            <div class="form-group" v-else>
                                <button class="resend-btn btn btn-primary mt-4" @click.prevent="resendVerification"
                                    type="submit">Click here to request another</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            alertContent: '',
            loading: false
        }
    },
    methods: {
        async resendVerification() {
            this.loading = true

            const res = await axios.get('auth/email/resend')
                .then(response => {
                    this.alertContent = response.data.data.message;
                    this.$swal(
                        'Awesome!',
                        response.data.data.message,
                        'success'
                    );

                    this.loading = false
                })
                .catch(error => { console.log(error) })
        }
    }
}
</script>

<style scoped>
.row {
    padding-bottom: 100px;
}

.card {
    margin-top: 100px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    border: none;
}

.card-header,
.toast-header {
    background-color: #3C65F5;
    color: #FFFFFF;
    /* border: 1px solid #05264E; */
}

h5 {
    color: #FFFFFF;
}

.resend-btn {
    background-color: #3C65F5;
    border: none;
}

.resend-btn:hover {
    background-color: #05264E;
}
</style>