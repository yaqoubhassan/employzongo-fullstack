<template>
    <div class="container text-center">
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-6 offset-md-3">
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
                            <div class="form-group" v-if="this.$store.state.loading">
                                <button class="resend-btn btn btn-primary mt-4" type="submit" disabled><span
                                        class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>Click
                                    here to request another</button>
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
export default {
    data() {
        return {
            loading: false
        }
    },
    methods: {
        async resendVerification() {
            this.$store.dispatch('resendVerificationLink');
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