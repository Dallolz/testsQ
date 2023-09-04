<template>
    <div id="app">
        <component :is="layout">
            <router-view/>
        </component>
        <notifications group="main" position="bottom right" />
    </div>
</template>

<script>
    const default_layout = "default";

    export default {
        data() {
            return {
            }
        },
        created() {
        },
        computed: {
            layout() {
                return (this.$route.meta.layout || default_layout) + "-layout";
            }
        },
        methods: {
        },
        components: {
        }
    }
</script>