import Vue from "vue";
import Frontend from "./Frontend.vue";
import VueRouter from "vue-router"
import routes from "./routes"

Vue.use(VueRouter);

new Vue({
  el: "#app",
	// l'elemento "app" viene sostituito con Frontend.vue
  render: h => h(Frontend),
  router: routes
})