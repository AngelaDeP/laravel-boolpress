<template>
    <main>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{title}}</h5>
                <p class="card-text">{{shortenText(content)}}</p>
                <router-link class="btn btn-primary" :to="{name: 'single-post', params: {slug}}">View all</router-link>
            </div>
        </div>   
    </main> 
</template>

<script>
    export default {
        name: 'MyPost',
        props: ['title', 'content', 'slug', 'category'],

        methods: {
            shortenText(text) {
                if(text.length > 50) {
                return text.substring(0, 50) + '...';
                } else {
                    return text;
                }
            }
        }
        
    }
</script>