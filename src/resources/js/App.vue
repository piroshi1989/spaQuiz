<script setup>

import { ref } from 'vue'

const count = ref(0)
const addCount = () => {
    count.value++
}

</script>

<template>
    <button @click="addCount">{{ count }} 回クリックしましたよ！</button>
    <router-view />
</template>