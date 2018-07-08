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
            name: 'index',
            path: '/index',
            component: require('./pages/Index.vue'),
            meta: {
                title: '工具集'
            }
        },
        {
            path: '/base64',
            component: require('./pages/Base64.vue'),
            meta: {
                title: 'Base64 编解码'
            }
        },
        {
            path: '/php2json',
            component: require('./pages/Php2Json.vue'),
            meta: {
                title: 'PHP 数组转 Json'
            }
        }
    ]
});