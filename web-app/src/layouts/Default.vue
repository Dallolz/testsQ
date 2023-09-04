<template>
    <div class="defaultLayout">
        <header class="pt-4 pb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <router-link :to="{ name: 'home' }" class="logo">
                            MOOOVIES
                        </router-link>
                    </div>
                    <div class="col text-end">
                        <a href="#" class="btn btn-primary">
                            Ajouter un film
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="mainContent">    
            <slot />
        </div>
    </div>
</template>

<script>
    export default {
    }
</script>