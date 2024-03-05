<script setup lang="ts">
import { reactive} from 'vue'

type User = {
    id: number,
    name: string
}

const user1: User = {
    id: 1,
    name: '堂安'
}

const user2 = reactive({} as User)
//reactiveで初期値を空にする場合、アサーション型で設定する

user2.id = 1
</script>

<template>
    <h2>reactive</h2>
    {{ user1.name }}
</template>