import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: '',
            redirect: '/index'
        },
        {
            path: '/index',
            component: require('./pages/Index.vue')
        },
        {
            path: '/base64',
            component: require('./pages/Base64.vue')
        }
    ]
});