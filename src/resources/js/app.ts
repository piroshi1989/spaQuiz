import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free-webfonts'
import '@fortawesome/fontawesome-free-webfonts/css/fa-brands.css'
import '@fortawesome/fontawesome-free-webfonts/css/fa-regular.css'
import '@fortawesome/fontawesome-free-webfonts/css/fa-solid.css'

import { createApp } from "vue";
import App from './App.vue';
import router from "./router";



const app = createApp(App);

console.log(app.version);

app.use(router).mount("#app");