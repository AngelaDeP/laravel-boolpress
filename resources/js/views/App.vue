<template>
    <div>
        <MyHeader/>
        <MyMain/>
        <MyFooter/>
    </div>
</template>

<script>
    import MyMain from '../components/MyMain.vue';
    import MyHeader from '../components/MyHeader.vue';
    import MyFooter from '../components/MyFooter.vue';

    export default {
        name: 'App',
        components: {
            MyMain,
            MyHeader,
            MyFooter
        }
    }
</script>

<style>

</style>