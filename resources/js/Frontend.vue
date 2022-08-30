<template>
  <div class="section">
    <nav class="d-flex justify-content-center">
      <!-- <router-link to="/">Home</router-link>
      <router-link to="/contatti">Contatti</router-link> -->

    </nav>
    <main class="container py-5">
      <h1 class="text-center">Pagina Frontend</h1>
      <h2>Ecco i post:</h2>
      <PostsList />
    </main>
  </div>
</template>

<script>
import PostsList from './components/PostsList.vue';
export default {
  components: { PostsList },
  data() {
    return {
    };
  },
}
</script>

<style lang="scss" scoped>
</style>