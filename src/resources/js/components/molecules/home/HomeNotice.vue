<template>
  <section class="home__notice">
    <h2 class="home__notice-h2">
      <img class="home__notice-h2-logo" src="@/assets/images/news-icon.png" />
      お知らせ情報
    </h2>
    <dl>
      <dt>2019/08/23</dt>
      <dd>サイトを開設しました。</dd>
    </dl>
  </section>
</template>

<style lang="scss" scoped>
.home {
  &__notice {
    padding: 5px 10px;

    &-h2 {
      border-bottom: solid;

      &-logo {
        width: 10%;
      }
    }
  }
}
</style>
