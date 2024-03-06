<template>
  <section class="home-quiz__setting">
    <h2 class="home-quiz__setting-h2">
      <img class="home-quiz__setting-h2-logo" src="/storage/images/directory-icon.png" />
      出題設定
    </h2>
    <form>
      <label>
        <input type="checkbox" name="categories[]" value="1" checked />
        ビジネスマナー
      </label>
      <label>
        <input type="checkbox" name="categories[]" value="2" />
        一般常識
      </label>
      <label>
        <input type="checkbox" name="categories[]" value="3" />
        就職・転職
      </label>
      <label>
        <input type="checkbox" name="categories[]" value="4" />
        法律
      </label>
      <label>
        <input type="checkbox" name="categories[]" value="5" />
        IT
      </label>
      <label>
        <input type="checkbox" name="categories[]" value="6" />
        雑学
      </label>
      <div>
        全項目チェック
        <button type="button" value="1">ON</button>
        <button type="button" value="1">OFF</button>
      </div>
      <button type="submit" class="btn btn-primary">出題開始</button>
    </form>
  </section>
</template>

<style lang="scss" scoped>
.home {
  &-quiz {
    &__setting {
      padding: 5px 10px;

      &-h2 {
        border-bottom: solid;

        &-logo {
          width: 10%;
        }
      }
    }
  }
}
</style>
