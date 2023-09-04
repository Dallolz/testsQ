import { RouteRecordRaw, createRouter, createWebHistory } from 'vue-router'

// Main front views
import Home from '../views/Home.vue'
import Movie from '../views/Movie.vue'

const routes: Array<RouteRecordRaw> = [
    {
        path: '/',
        name: 'home',
        meta: { 
            layout: 'default'
        },
        component: Home
    },
    {
        path: '/movies/:id',
        name: 'movie',
        meta: { 
            layout: 'default'
        },
        component: Movie
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router