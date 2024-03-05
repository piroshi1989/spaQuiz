import './bootstrap';

import { createApp } from "vue";
import App from './App.vue';
import router from "./router";

const app = createApp(App);

console.log(app.version);

app.use(router).mount("#app");