require('./bootstrap');
const Vue = require('vue');
const top = require('./pages/top.vue');

Vue.component('top-component',top.default);

const app = new Vue({
    el:"#app"
})
