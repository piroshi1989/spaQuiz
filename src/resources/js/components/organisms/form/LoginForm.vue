<template>
  <div class="col-md-8 offset-md-2">
    <div class="card card-default">
      <div class="card-header text-center">ログイン</div>

      <div class="card-body">
        <form class="form-horizontal">
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
            <div class="col-md-6 offset-md-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" />
                  ログインを継続する
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8 offset-md-4">
              <button type="button" class="btn btn-primary">ログイン</button>

              <a class="btn btn-link">パスワードをお忘れですか?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.form-group {
  margin: 10px;
}
</style>
