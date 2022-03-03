/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import { ToastPlugin, ModalPlugin } from 'bootstrap-vue';
import VueCompositionAPI from '@vue/composition-api';

import i18n from './lang';
import router from './router';
import store from './store';
import App from './App.vue';

// Global Components
import './plugins/global-components';

// 3rd party plugins

Vue.use(ToastPlugin);
Vue.use(ModalPlugin);

// Composition API
Vue.use(VueCompositionAPI);

require('./assets/fonts/feather/iconfont.css');

Vue.config.productionTip = false;

new Vue({
    router,
    store,
    i18n,
    render: (h) => h(App),
}).$mount('#app');
