<script setup lang="ts">

type Props = {
    id: number,
    name: string
}

const props = defineProps<Props>()
</script>

<template>
    <h2>Props</h2>
    id: {{ props.id }}<br>
    name: {{ props.name }}
</template>