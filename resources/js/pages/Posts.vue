<template>
    <div class="container">
                    <div class="card-header m-3 text-center">
                        <h1>Posts Full List</h1>
                    </div>

                    <div class="row">
                        <div class="col-6 mt-5" v-for="post in posts" :key="post.id">
                            <MyPost 
                                :title='post.title'
                                :content='post.content'
                                :slug='post.slug'
                                :category='post.category'
                            />
                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item" :class="(currentPage == 1)?'disabled':''" ><span class="page-link" @click="getPosts(currentPage - 1)">Prev</span></li>
                            <li class="page-item" :class="(currentPage == lastPage)?'disabled':''"><span class="page-link" @click="getPosts(currentPage + 1)">Next</span></li>
                        </ul>
                    </nav>

    </div>
</template>

<script>
    import MyPost from '../components/MyPost';
    export default {
        name: 'Posts',
        components: {
            MyPost
        },
        
        data() {
            return {
                posts: [],
                currentPage: 1,
                lastPage: null
            }
        },
        methods: {
            getPosts(apiPage) {
            axios.get("/api/posts", { 
                'params': {
                    'page': apiPage
                }
            })
            .then((response) => {
                this.currentPage = response.data.results.current_page;
                this.posts = response.data.results.data;
                this.lastPage = response.data.results.last_page;
            });
            },
        },
        created() {
            this.getPosts(1);
        },
    }
</script>
