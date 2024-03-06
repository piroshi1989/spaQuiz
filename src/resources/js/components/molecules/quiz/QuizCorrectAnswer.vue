<template>
  <section>
    <h2 class="quiz-correct-h2">
      <img class="quiz-correct__logo" src="/storage/images/correct-mark.png" />
      正解
    </h2>
    <p>
      <button class="quiz-correct-answer">1</button>
    </p>
    <button class="quiz-show-answer">正解を表示する</button>
    <div class="alert alert-info">
      <strong>正解!</strong>
    </div>
    <div class="alert alert-danger">
      <strong>不正解!</strong>
    </div>
  </section>
</template>

<style lang="scss" scoped>
.quiz {
  &-correct {
    &-h2 {
      border-bottom: solid;
    }

    &__logo {
      width: 10%;
    }

    &-answer {
      width: 10%;
      margin-bottom: 10px;
    }
  }

  &-show-answer {
    margin-bottom: 10px;
  }
}
</style>
