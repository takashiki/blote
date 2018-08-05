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
            path: '/urlEncode',
            component: require('./pages/UrlEncode.vue'),
            meta: {
                title: 'UrlEncode 编解码'
            }
        },
        {
            path: '/php2json',
            component: require('./pages/Php2Json.vue'),
            meta: {
                title: 'PHP 数组转 Json'
            }
        },
        {
            path: '/hash',
            component: require('./pages/Hash.vue'),
            meta: {
                title: '字符串 Hash'
            }
        },
        {
            path: '/randomStr',
            component: require('./pages/RandomStr.vue'),
            meta: {
                title: '随机字符串'
            }
        },
        {
            path: '/timestamp',
            component: require('./pages/Timestamp.vue'),
            meta: {
                title: '时间戳转换'
            }
        }
    ]
});