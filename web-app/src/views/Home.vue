<template>
    <div class="container" v-if="loading">
        <div class="row">
            <div class="col-12 text-center">
                <Loading />
            </div>
        </div>
    </div>
    <div class="container" v-else>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3" v-for="movie in movies" :key="'movie_'+movie.id">
                <div class="card">
                    <router-link :to="{ name: 'movie', params: {id:movie.id} }">
                        <img v-if="movie.image && movie.image.length > 0" :src="movie.image" class="card-img-top">
                    </router-link>
                    <div class="card-body">
                        <h3>
                            {{ movie.title }}
                        </h3>
                        <div>
                            <router-link :to="{ name: 'movie', params: {id:movie.id} }" class="btn btn-sm btn-outline-primary">
                                Détails
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Loading from '../components/Loading.vue';
  
    export default {
        data() {
            return {
                loading: false,
                movies: []
            }
        },
        created() {
            this.getMovies();
        },
        methods: {
            getMovies() {
                this.loading = true;
                this.$http
                    .get(import.meta.env.VITE_APP_API + '/movies')
                    .then(response => {
                        this.movies = response.data.data;
                        this.loading = false;
                    }).catch( () => {
                        this.loading = false;
                    });
            }
        },
        components: {
            Loading
        }
    }
</script>