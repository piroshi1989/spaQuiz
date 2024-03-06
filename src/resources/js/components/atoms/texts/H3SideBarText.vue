<script setup lang="ts">
const props = defineProps({
  text: String,
})
</script>

<template>
  <h3 class="text-center sidebar-h3">{{ props.text }}</h3>
</template>

<style lang="scss" scoped>
.sidebar {
  &-h3 {
    background: $sidebar-header-blue;
    margin: 0px auto;
    padding: 10px;
  }
}
</style>
