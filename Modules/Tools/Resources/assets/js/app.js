require('./bootstrap');

window.Vue = require('vue');
window.Bus = new Vue({data: {title: '工具集1'}});

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

import router from './routes';
router.beforeEach((to, from, next) => {
    /* 路由发生变化修改页面title */
    if (to.meta.title) {
        document.title = to.meta.title;
    }
    next();
});

new Vue({
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