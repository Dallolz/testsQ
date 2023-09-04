<template>
    <div class="container" v-if="loading">
        <div class="row">
            <div class="col-12 text-center">
                <Loading />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-3">
                <img v-if="movie.image && movie.image.length > 0" :src="movie.image" class="card-img-top">
            </div>
            <div class="col-lg-9">
                <h1>
                    {{ movie.title }}
                </h1>
                <div v-if="movie.release" class="mb-3">
                    {{ moment(movie.release).format('DD/MM/YYYY') }}
                </div>
                <div v-if="movie.description">
                    <p>
                        {{ movie.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Loading from '../components/Loading.vue';
    import moment from 'moment';
  
    export default {
        data() {
            return {
                loading: false,
                movie: false,
                display_form: false
            }
        },
        created() {
            this.moment = moment;
            this.getMovie();
        },
        methods: {
            getMovie() {
                this.loading = true;
                this.$http
                    .get(import.meta.env.VITE_APP_API + '/movies/' + this.$route.params.id)
                    .then(response => {
                        this.movie = response.data.data;
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