<template>
    <div>
        <ul>
            <li v-for="post in posts" :key="post.id">{{post.title}}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Posts',
    data() {
        return {
            posts: []
        }
    },
    mounted() {
        axios.get('/api/posts')
        .then((response) => {
            this.posts = response.data.data;
        })
        .catch((error) => {
            console.log(error);
        })
    }
}
</script>