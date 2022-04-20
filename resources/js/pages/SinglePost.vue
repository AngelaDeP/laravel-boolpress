<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{post.title}}</h1> 
                <h5>{{post.category.name}}</h5>
                <p>{{post.content}}</p>
            </div>
        </div>  
    </div>
</template>

<script>
export default {
    name: 'SinglePost',

    data() {
        return {
            post: null,
        }
    },

    mounted() {

        const slug = this.$route.params.slug;

        axios.get('/api/posts/' + slug).then(response => {
            if (response.data.success == true) {
                this.post = response.data.result;
            }
        });
    }
}
</script>

<style scoped>

</style>