import VueRouter from "vue-router"
import Home from "./pages/Home.vue"
import Contacts from "./pages/Contacts.vue"
import PostShow from "./pages/posts/Show.vue"


export const routes = [
    {path: "/", component: Home, name: "home"},
    {path: "/contatti", component: Contacts, name: "contacts"},
    {path: "/posts/:slug", component: PostShow, name: "post.show"},
]