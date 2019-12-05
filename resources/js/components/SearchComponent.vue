<template>
    <div class="uk-search uk-search-large">
        <input class="uk-search-input" type="search" placeholder="Search..." v-model="query">
        <hr>
        <ul v-if="results.length > 0 && query">
            <li v-for="result in results.slice(0,10)" :key="result.id">
                <a :href="result.url">
                    <div v-text="result.title"></div>
                    <div v-text="result."></div>
                </a>
            </li>
        </ul>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                query: null,
                results: []
            };
        },
        watch: {
            query(after, before) {
                this.searchWines();
            }
        },
        methods: {
            searchWines() {
                axios.get('search', { params: { query: this.query } })
                    .then(response => this.results = response.data)
                    .catch(error => {});
            }
        }
    }
</script>
