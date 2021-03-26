const Vue = require('vue');
const top = require('./pages/top.vue');
const header = require('./components/Header.vue');

Vue.component("top-component",top.default);
Vue.component("header-component",header.default);

new Vue({
    el : "#app"
})