import VueRouter from "vue-router"
import Home from "./pages/Home.vue"
import Contacts from "./pages/Contacts.vue"
import PostShow from "./pages/posts/Show.vue"


const routes = [
    {path: "/", component: Home},
    {path: "/contatti", component: Contacts},
    {path: "/posts/idpost", component: PostShow},
]

export default new VueRouter({
    routes
})