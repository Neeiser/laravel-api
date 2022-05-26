<template>
    <div>
        --- CONTENUTO PAGINA GUEST ---
    </div>
</template>

<script>
export default {
    name: 'VueMain',
    data(){
        return {
            posts: [],
            categories: [],
            users: [],

            apiURL: 'http://localhost:8000/api/posts',

            nextPageURL: null,
            lastPageURL: null,
        }
    }
}
</script>

<style>

</style>