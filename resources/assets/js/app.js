
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * include Vue and Vue Resource. This gives a great starting point for
//  * building robust, powerful web applications using Vue and Laravel.
//  */

// require('./bootstrap');

// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

// Vue
window.Vue = require('vue');

// Vue Resource
window.Vue.use(require('vue-resource'));

// Vue Moment
window.Vue.use(require('vue-moment'));

// Vue Routes
window.Vue.use(require('vue-router'));

// application/json
window.Vue.http.options.emulateJSON = true;

// X-HTTP-Method-Override
window.Vue.http.options.emulateHTTP = true;