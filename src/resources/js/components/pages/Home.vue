<script setup lang="ts">
import TheHeader from '@/components/organisms/layout/TheHeader.vue'
import TheFooter from '@/components/organisms/layout/TheFooter.vue'
import TheSidebar from '@/components/organisms/layout/TheSidebar.vue'
import HomeMainContents from '@/components/organisms/home/HomeMainContents.vue'
</script>

<template>
  <div>
    <TheHeader />
    <main>
      <div class="container">
        <div class="row">
          <HomeMainContents />
          <TheSidebar />
        </div>
      </div>
    </main>
    <TheFooter />
  </div>
</template>

<style lang="scss" scoped>
.container {
  max-width: 1200px;
}
</style>
