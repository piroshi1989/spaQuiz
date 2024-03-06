<script setup lang="ts">
const props = defineProps({
  href: String,
  text: String,
})
</script>

<template>
  <router-link class="keyword__individual__links" :to="`/keyword?initial=${props.href}`">{{ props.text }}</router-link>
</template>

<style lang="scss" scoped>
.keyword__individual__links {
  color: #337ab7;
  text-decoration: none;
}
</style>