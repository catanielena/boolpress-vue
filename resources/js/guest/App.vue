<template>
  <div>
      <Header/>
      <main>
          <Posts/>
      </main>
      <Footer/>
  </div>
</template>

<script>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
import Posts from './components/Posts.vue';


export default {
    name: 'App',
    components: {
        Header, Footer, Posts
    }
}
</script>

<style>

</style>