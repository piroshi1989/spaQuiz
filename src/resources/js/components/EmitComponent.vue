<script setup lang="ts">

const emit = defineEmits<{
    ( e : 'btnClick', message: string) : void 
    }>()

const buttonClick = (message: string) : void => {
    emit('btnClick', message)
    //関数の引数がmessageに入ってくる
}
</script>

<template>
    <h2>Emit</h2>
    <button @click="buttonClick('子でクリックされた')">クリック</button>
</template>