<template>
  <article class="col-md-8 col-xs-12">
    <section>
      <h2 class="keyword-h2">
        <img class="keyword__logo" src="/storage/images/search-mark.png" />
        【A】からはじまるキーワード（1語)
      </h2>
      <dl>
        <dt>android</dt>
        <dd class="keyword__description">
          グーグル社が提供するオペレーティング・システム(OS)の一つであり、主にスマートフォンやタブレットで使用されている。
          <p class="text-end">カテゴリー： IT</p>
        </dd>
      </dl>
    </section>
  </article>
</template>

<style lang="scss" scoped>
article {
  height: 10%;
}
.keyword {
  &-h2 {
    border-bottom: solid;
  }

  &__logo {
    width: 10%;
  }

  &__description {
    margin-bottom: 30px;
  }
}
</style>
