<template>
    <div class="container">
        <div class="row justify-content-center g-3">
            <div class="col-md-8 w-25" v-for="post in posts" :key="post.id">
                <div class="card">
                    <img v-if="post.cover_img" :src="'storage/' + post.cover_img" class="card-img-top">
                    <img v-else src="placeholder.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{  post.title  }}</h5>
                        <p class="card-text">{{ post.content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            posts: []
        };
    },
    methods: {
        fetchPosts() {
            axios.get("/frontend")
                .then((resp) => {
                    this.posts = resp.data.results;
                });
        },
    },
    mounted() {
        this.fetchPosts();
    }
}
</script>
