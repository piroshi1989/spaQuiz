<script setup lang="ts">
import type { PropType } from 'vue'

type Items = {
    id: number,
    name: string
}[]   //後ろに[]をつけると配列対応になる

const props = defineProps({
    // items : Array //通常のvue.jsであればこれでOKだけど、tsの場合はエラーになる
    items : Array as PropType<Items>
})
</script>

<template>
    <h2>PropType</h2>
    <ul>
        <li v-for="item in props.items" :key="item.id">
        id: {{ item.id }} name: {{ item.name }}
        </li>
    </ul>
</template>