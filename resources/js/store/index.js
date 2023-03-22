import { createStore } from 'vuex'

export default createStore({
    state: {
        breadcrumbName: ''
    },
    // getters: {
    //     doubleCounter: state => {
    //         return state.counter * 2;
    //     },
    //     // doubleCounter(state) {
    //     //     return state.counter * 4;
    //     // }
    //     stringCounter: state => {
    //         return state.counter + ' Clicks';
    //     }
    // },
    // actions: {},
    // mutations: {
    //     increment: state => {
    //         state.counter++;
    //     },
    //     decrement: state => {
    //         state.counter--;
    //     }
    // }
})