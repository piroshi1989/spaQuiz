<script setup lang="ts">
import { ref, computed } from 'vue'
import type { ComputedRef} from 'vue'

const amount = ref<number>(0)

const subTotal = computed<number>(() => amount.value * 3000)
//refで設定した場合は変数.valueで値をとることができる
//1.computedの後ろにgenericsで型宣言する

const subTotal2 : ComputedRef<number> = computed(() => amount.value * 3000)
//2.ComputedRefをimportし、そこで型宣言する。computed関数では宣言不要
</script>
<template>
    <h2>Computed</h2>
    単価: 3000<br>
    商品数: <input type="number" v-model="amount" /> <br>
    小計: {{ subTotal }}  {{ subTotal2 }}
</template>