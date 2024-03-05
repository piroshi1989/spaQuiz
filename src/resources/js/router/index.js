import { createRouter, createWebHistory } from "vue-router";
import AboutView from "../Pages/AboutView.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/about",
            name: "about",
            component: AboutView,
        },
    ],
});

export default router;
