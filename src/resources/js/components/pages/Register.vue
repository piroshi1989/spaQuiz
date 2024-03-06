<script setup lang="ts">
import TheHeader from '@/components/organisms/layout/TheHeader.vue'
import TheFooter from '@/components/organisms/layout/TheFooter.vue'
import RegisterForm from '@/components/organisms/form/RegisterForm.vue'
</script>

<template>
  <div>
    <TheHeader />
    <main>
      <div class="container">
        <div class="row">
          <RegisterForm />
        </div>
      </div>
    </main>
    <TheFooter />
  </div>
</template>
