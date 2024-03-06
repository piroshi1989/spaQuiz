<template>
  <section>
    <h2 class="quiz-commentary-h2">
      <img class="quiz-commentary__logo" src="/storage/images/commentary-mark.png" />
      解説
    </h2>
    <div class="quiz-commentary">
      1）3）4）は、どこが間違っていたの？
      <br />
      1）受付でうかがってください。
      <br />
      「うかがう」は謙譲語。謙譲語は自分または身内（自分の会社も含みます）の者に使う言葉で、相手に使うのは間違いです。
      <br />
      『受付でお尋ねください。』が正解です。
      <br />
      <br />
      3）部長が申されたように進めていきます。
      <br />
      「申す」も謙譲語です。謙譲語にれる・られるを付けても尊敬語にはなりません。
      <br />
      『社長がおっしゃったように進めていきます。』が正解です。
      <br />
      <br />
      4）○△商事の□□様がお越しになられました。
      <br />
      「なられました」は二重敬語の典型的な表現です。
      <br />
      『○△商事の□□様がお越しになりました。』が正解です。
      <br />
    </div>
    <button type="button" class="btn btn-primary d-block mx-auto quiz-next__button">次の問題へ</button>
    <button type="button" class="d-block mx-auto quiz-finish__button">結果を見る</button>
  </section>
</template>

<style lang="scss" scoped>
.quiz {
  &-commentary {
    &-h2 {
      border-bottom: solid;
    }

    &__logo {
      width: 10%;
    }

    &__text {
      padding: 0px 20px;
      white-space: pre-wrap;
      word-wrap: break-word;
    }
  }
  &-next__button {
    margin: 10px;
  }

  &-finish__button {
    margin: 10px;
  }
}
</style>
