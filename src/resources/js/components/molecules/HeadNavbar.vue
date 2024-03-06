<template>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <router-link class="navbar-brand" id="header-nav__home" to="/">ホーム</router-link>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="header-nav__items" to="/login">ログイン</router-link>
          </li>
          <li class="nav-item">
            <router-link  class="header-nav__items" to="/register">ユーザー登録</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>


<style lang="scss" scoped>
.navbar-light .navbar-brand {
  color: $white;
  &:hover {
    color: $white;
  }
}

.nav-item {
  padding-left: 10px;
  a {
    text-decoration: none;
  }
}

.navbar {
  background: $thin-gray;
  border-color: $thin-gray;
}

.header {
  &-nav__drop-down {
    background: $thin-gray;
  }
  &-nav__items {
    color: $white;
  }
}
</style>
