<script setup lang="ts">

const handleChange = (e : Event) => {
    console.log((e.target as HTMLInputElement).value)
}
//引数eでは型が設定されていないので、:Eventをつける
//e.targetはnullの場合があるのでエラーになる->
//eのelementがどんなものかわからないので指定してあげる(型アサーション)
//もしくはinstanceofで確認する
</script>
<template>
    <h2>Event</h2>
    <input @change="handleChange">
</template>