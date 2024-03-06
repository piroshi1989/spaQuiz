<script setup lang="ts">
import Twitter from '@/components/atoms/social/Twitter.vue'
import Line from '@/components/atoms/social/Line.vue'
import Facebook from '@/components/atoms/social/Facebook.vue'
import Linkedin from '@/components/atoms/social/Linkedin.vue'
import H3SideBarText from '@/components/atoms/texts/H3SideBarText.vue'
</script>

<template>
  <section class="sidebar-section">
    <H3SideBarText text="SNS共有" />
    <div class="sidebar-sns-links">
      <Twitter />
      <Facebook />
      <Line />
      <Linkedin />
    </div>
  </section>
</template>

<style lang="scss" scoped>
.sidebar {
  &-section {
    background: $white;
  }

  &-sns-links {
    padding-left: 5px;
    padding-top: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }
}
</style>
