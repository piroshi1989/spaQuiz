<script setup lang="ts">
import HomeIntroduction from '@/components/molecules/home/HomeIntroduction.vue'
import HomeSetting from '@/components/molecules/home/HomeSetting.vue'
import HomeRanking from '@/components/molecules/home/HomeRanking.vue'
import HomeNotice from '@/components/molecules/home/HomeNotice.vue'
</script>

<template>
  <article class="col-md-8 col-xs-12">
    <HomeIntroduction />
    <HomeSetting />
    <HomeRanking />
    <HomeNotice />
  </article>
</template>
