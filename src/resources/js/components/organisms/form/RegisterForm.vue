<template>
  <div class="col-md-8 offset-md-2">
    <div class="card card-default">
      <div class="card-header text-center">ユーザー登録</div>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="row">
            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>

            <div class="col-md-6">
              <input name="name" type="text" class="form-control" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

            <div class="col-md-6">
              <input name="email" type="email" class="form-control" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>

            <div class="col-md-6">
              <input name="password" type="password" class="form-control" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード再確認</label>

            <div class="col-md-6">
              <input name="password_confirmation" type="password" class="form-control" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8 offset-md-4">
            <button type="button" class="btn btn-primary">登録</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.form-group {
  margin: 10px;
}
</style>
