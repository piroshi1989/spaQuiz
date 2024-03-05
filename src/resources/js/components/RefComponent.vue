<script setup lang="ts">
import { ref } from 'vue'
import type { Ref } from 'vue'

const count = ref<number>(0)
//refにgenericsで型を設定する
const count2 : Ref<number> = ref(0)
//importでRefという専用の型を読み込み、numberを指定する
</script>

<template>
    <h2>Ref</h2>
    {{  count2 }}
    <button @click="$event => count2++">クリック</button>
</template>