import { createStore } from 'vuex'
import axios from '../axios-auth'
import router from '../router';
import globalAxios from 'axios'


export default createStore({
    state: {
        breadcrumbName: '',
        loading: false,
        authToken: null,
        userId: null,
        user: null
    },
    mutations: {
        authUser(state, userData) {
            state.authToken = userData.token;
            state.userId = userData.userId;

            localStorage.setItem('token', state.authToken)
            let bearToken = localStorage.token;

            axios.defaults.headers.common['Authorization'] = `Bearer ${bearToken}`;
        },
        storeUser(state, user) {
            state.user = user
        },
        clearAuthData(state) {
            state.authToken = null
            state.userId = null
        }
    },
    actions: {
        async signup({ commit }, authData) {
            //set loading to true to start showing loading button
            this.state.loading = true;

            await axios.post('register', authData)
                .then(response => {
                    // commit('authUser', {
                    //     token: response.data.token,
                    //     userId: response.data.user.id
                    // })

                    //end progressbar
                    window.progressBar.finish();

                    //set loading to false to not show loading button
                    this.state.loading = false;

                    //redirect to verify screen
                    router.push('resend-verification');
                })
                .catch(error => {
                    console.log(error)
                    window.progressBar.fail();

                    //set loading to false to not show loading button
                    this.state.loading = false;
                })
        },
        async login({ commit, dispatch }, authData) {
            await axios.post('login', authData)
                .then(response => {
                    localStorage.setItem('token', response.data.token)
                    localStorage.setItem('userId', response.data.user.id)
                    commit('authUser', {
                        token: response.data.token,
                        userId: response.data.user.id
                    })
                    dispatch('fetchUserDetails');

                    //end progressbar
                    window.progressBar.finish();
                    router.push('/')
                })
                .catch(error => {
                    console.log(error)
                })
        },
        async fetchUserDetails({ commit, state }) {
            if (!state.authToken) {
                return
            }
            await globalAxios.get('user-profile')
                .then(response => {
                    commit('storeUser', response.data.data)
                })
                .catch(error => {
                    console.log(error)
                })
        },
        async resendVerificationLink() {
            this.state.loading = true;
            await axios.get('email/resend')
                .then(response => {
                    window.swal({
                        title: 'Awesome!',
                        text: response.data.data.message,
                        icon: 'success',
                        confirmButtonColor: '#3C65F5'
                    });
                    console.log(response)
                    this.state.loading = false;
                })
                .catch(error => {
                    console.log(error)
                    this.state.loading = false;
                })
        },
        async logout({ commit }) {
            await axios.get('logout')
                .then(response => {
                    commit('clearAuthData')
                    localStorage.removeItem('token')
                    localStorage.removeItem('userId')
                    router.replace('login')
                }).catch(error => {
                    console.log(error)
                })
        },
        tryAutoLogin({ commit, dispatch }) {
            const token = localStorage.getItem('token')
            if (!token) {
                return
            }
            const userId = localStorage.getItem('userId')
            commit('authUser', {
                token: token,
                userId: userId
            })
            dispatch('fetchUserDetails');
        },
    },
    getters: {
        user(state) {
            if (state.user) {
                return state.user.full_name;
            }
        },
        isAuthenticated(state) {
            return state.authToken !== null
        }
    },
})