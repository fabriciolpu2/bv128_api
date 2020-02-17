/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./plugins/owl.carousel.min');
require('./plugins/jquery.easing.min');
require('./plugins/scripts');

import VueTheMask from 'vue-the-mask';
import ScrollReveal from 'scrollreveal';
import AOS from 'aos';
import 'aos/dist/aos.css';


// AOS.init({
//     offset: 200
// });
window.onload = function(){
    // window.sr = new ScrollReveal({ reset: true });
    // sr.reveal('.headline', { delay: 500 });

    AOS.init({
        offset: 120
    });
}

window.Vue = require('vue');
Vue.use(VueTheMask);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('contact-us-form', require('./components/ContactFormComponent.vue').default);
Vue.component('scale-loader', require('vue-spinner/src/ScaleLoader.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
