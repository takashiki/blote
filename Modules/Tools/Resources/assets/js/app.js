require('./bootstrap');

import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

window.Vue = Vue;
Vue.use(ElementUI);

import router from './routes';
router.beforeEach((to, from, next) => {
    /* 路由发生变化修改页面title */
    if (to.meta.title) {
        document.title = to.meta.title;
    }
    next();
});

const app = new Vue({
    el: '#app',
    data: {
        title: '工具集'
    },
    methods: {
        goIndex: function () {
            this.$router.push('/index');
        }
    },
    router
});