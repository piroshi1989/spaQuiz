<template>
  <div title="shareボタン">
    <div class="facebook__share">
      <network network="facebook">
        <i class="fab fa-facebook"></i>
        Facebook
      </network>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.facebook {
  &__share {
    color: $facebook-blue;
    border-radius: 5px;
    border: solid 0.5px $facebook-blue;
    padding: 3px;
    margin-bottom: 5px;
    max-width: max-content;
  }
}
</style>
