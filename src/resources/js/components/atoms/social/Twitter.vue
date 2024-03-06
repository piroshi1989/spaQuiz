<template>
  <social-sharing title="shareボタン">
    <div class="twitter__share">
      <network network="twitter">
        <i class="fab fa-twitter"></i>
        Twitter
      </network>
    </div>
  </social-sharing>
</template>

<style lang="scss" scoped>
.twitter {
  &__share {
    color: $twitter-blue;
    border-radius: 5px;
    border: solid 0.5px $twitter-blue;
    padding: 3px;
    margin-bottom: 5px;
    max-width: max-content;
  }
}
</style>
