<template>
  <social-sharing title="shareボタン">
    <div class="line__share">
      <network network="line">
        <i class="fab fa-line"></i>
        Line
      </network>
    </div>
  </social-sharing>
</template>

<style lang="scss" scoped>
.line {
  &__share {
    color: $line-green;
    border-radius: 5px;
    border: solid 0.5px $line-green;
    padding: 3px;
    margin-bottom: 5px;
    max-width: max-content;
  }
}
</style>
