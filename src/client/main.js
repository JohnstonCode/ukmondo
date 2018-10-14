import Vue from "vue";
import Router from "vue-router";
import App from "./App.vue";

const Home = resolve => require(["./pages/Home.vue"], resolve);

Vue.use(Router);

const routes = [
    { path: "/", name: "Home", component: Home }
];

const router = new Router({
    mode: "history",
    routes
});

router.beforeEach((to, from, next) => {
    document.title = `UKMONDO | ${to.name}`
    next();
});

new Vue({
    el: "#app",
    router,
    template: "<App/>",
    components: { App }
});
