<template>
    <div class="text-center">
        <h1>{{  post.title  }}</h1>
        <img :src="post.cover_img" alt="" class="w-25 py-3">
        <p>{{  post.content  }}</p>

        <div class="d-flex gap-3 justify-content-center">
            <div v-if="post.category">
                <h4>Categoria</h4>
                {{  post.category.name  }}
            </div>
            <div v-if="post.tags.length > 0">
                <h4>Tags</h4>
                <ul class="list-unstyled">
                    <li v-for="tag in post.tags" :key="tag.id">{{  tag.name  }}</li>
                </ul>
            </div>
        </div>

    </div>
</template>

<script>
import axios from "axios"

export default {
    data() {
        return {
            post: {}
        }
    },
    mounted() {
        axios.get("/api/posts/" + this.$route.params.slug)
            .then((resp) => {
                const data = resp.data;
                this.post = data;
            })
    }
}
</script>