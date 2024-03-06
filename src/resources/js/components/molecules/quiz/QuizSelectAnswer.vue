<template>
  <section>
    <h2 class="quiz-question-h2">
      <img class="quiz-question__logo" src="/storage/images/what-is-mark.png" />
      第1問
    </h2>
    <p>正しい敬語を使った表現を１つ選んでください。</p>
    <div class="quiz-answer__list">
      <ul>
        <li>
          <a>
            <button>1</button>
          </a>
          受付でうかがってください。
        </li>
        <li>
          <a>
            <button>2</button>
          </a>
          課長がおっしゃったように、ファイルをご覧ください。
        </li>
        <li>
          <a>
            <button>3</button>
          </a>
          部長が申されたように進めていきます。
        </li>
        <li>
          <a>
            <button>4</button>
          </a>
          ○△商事の□□様がお越しになられました。
        </li>
      </ul>
    </div>
  </section>
</template>

<style lang="scss" scoped>
.quiz {
  &-question {
    &-h2 {
      border-bottom: solid;
    }

    &__logo {
      width: 10%;
    }
  }

  &-answer__list {
    background: #c5e4ff;

    ul {
      padding: 20px 10px;

      li {
        list-style: none;
        margin: 10px 0px;
      }
    }
  }
}
</style>
