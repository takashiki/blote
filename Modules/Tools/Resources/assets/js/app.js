require('./bootstrap');

window.Vue = require('vue');

import router from './routes'

new Vue({
    el: '#app',
    router
});