<template>
    <div class="loading" :class="{ hover : hover }">
        <div>
            <div class="spinner-border" :class="{ 'spinner-border-sm' : small }" role="status"></div>
        </div>
        <div class="loading-message mt-2">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'hover',
            'small'
        ],
    }
</script>