<script setup lang="ts">
import QuizSelectAnswer from '@/components/molecules/quiz/QuizSelectAnswer.vue'
import QuizCorrectAnswer from '@/components/molecules/quiz/QuizCorrectAnswer.vue'
import QuizResultModal from '@/components/molecules/quiz/QuizResultModal.vue'
import QuizCommentary from '@/components/molecules/quiz/QuizCommentary.vue'
</script>

<template>
  <article class="col-md-8 col-xs-12">
    <QuizSelectAnswer />
    <QuizCorrectAnswer />
    <QuizCommentary />
    <QuizResultModal />
  </article>
</template>
