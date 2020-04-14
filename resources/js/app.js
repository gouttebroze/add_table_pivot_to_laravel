/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('bootstrap-vue'));

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//import Vuetify from '../plugins/vuetify'

//Vue.component('app-container', require('./components/appContainer.vue').default);
//Vue.component('toolsbar-component', require('./components/ToolsbarComponent.vue').default);

//Vue.component('toolsbar-component', require('./components/ToolsbarComponent.vue').default);

import produits from './components/ProduitsComponent.vue';
Vue.component('produits-component', produits);

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('new-component', require('./components/NewComponent.vue').default);
Vue.component('bar-component', require('./components/BarComponent.vue').default);

import Vue from 'vue';
/*import Carousel3d from 'vue-carousel-3d';

Vue.use(Carousel3d);*/

import Vuetify from 'vuetify';
Vue.use(Vuetify);



//Vue.component('user-component', require('./components/UserComponent.vue').default);
/*
const app = new Vue({
    el: '#app',
});
*/
/*import { CardPlugin } from 'bootstrap-vue'
Vue.use(CardPlugin)*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    data: () => ({
      items: [
        { title: 'Vinyls' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' },
      ],
    }),
  })
*/
  new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    
  })