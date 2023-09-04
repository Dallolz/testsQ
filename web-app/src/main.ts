import { createApp } from 'vue'
import { h } from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import router from './router'
import Notifications from '@kyvg/vue3-notification'

// import layouts
import DefaultLayout from "./layouts/Default.vue";

// import Bootstrap 5 js
import "bootstrap"

// import styles
import './assets/styles/main.scss'

// configure Axios
//axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['Accept-Language'] = 'fr';

// define app
const app = createApp(App)
    .use(router)
    .use(VueAxios, axios)
    .use(Notifications)

// provide 'axios'
app.provide('axios', app.config.globalProperties.axios)

// add layouts components
app.component('default-layout', DefaultLayout)

// mount the app
app.mount('#app')