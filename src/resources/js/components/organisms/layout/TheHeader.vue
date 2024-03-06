<script setup lang="ts">
import HeadLogo from '@/components/molecules/HeadLogo.vue'
import HeadNavbar from '@/components/molecules/HeadNavbar.vue'
</script>

<template>
  <header>
    <HeadLogo />
    <HeadNavbar />
  </header>
</template>

<style lang="scss" scoped>
header {
  margin-top: -10px;
  background: $white;
}
</style>
