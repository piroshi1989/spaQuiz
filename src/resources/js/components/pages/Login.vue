<script setup lang="ts">
import TheHeader from '@/components/organisms/layout/TheHeader.vue'
import TheFooter from '@/components/organisms/layout/TheFooter.vue'
import LoginForm from '@/components/organisms/form/LoginForm.vue'
</script>

<template>
  <div>
    <TheHeader />
    <main>
      <div class="container">
        <div class="row">
          <LoginForm />
        </div>
      </div>
    </main>
    <TheFooter />
  </div>
</template>
