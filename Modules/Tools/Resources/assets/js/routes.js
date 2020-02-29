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
            components: require('./pages/Index.vue'),
            meta: {
                title: '工具集'
            }
        },
        {
            path: '/base64',
            components: require('./pages/Base64.vue'),
            meta: {
                title: 'Base64 编解码'
            }
        },
        {
            path: '/urlEncode',
            components: require('./pages/UrlEncode.vue'),
            meta: {
                title: 'UrlEncode 编解码'
            }
        },
        {
            path: '/php2json',
            components: require('./pages/Php2Json.vue'),
            meta: {
                title: 'PHP 数组转 Json'
            }
        },
        {
            path: '/hash',
            components: require('./pages/Hash.vue'),
            meta: {
                title: '字符串 Hash'
            }
        },
        {
            path: '/randomStr',
            components: require('./pages/RandomStr.vue'),
            meta: {
                title: '随机字符串'
            }
        },
        {
            path: '/timestamp',
            components: require('./pages/Timestamp.vue'),
            meta: {
                title: '时间戳转换'
            }
        },
        {
            path: '/info',
            components: require('./pages/Info.vue'),
            meta: {
                title: '浏览器信息'
            }
        },
        {
            path: '/unicode',
            components: require('./pages/Unicode.vue'),
            meta: {
                title: 'Unicode 编解码'
            }
        }
    ]
});