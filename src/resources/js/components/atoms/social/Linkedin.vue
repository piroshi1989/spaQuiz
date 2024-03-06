<template>
  <social-sharing title="shareボタン">
    <div class="linkedin__share">
      <network network="linkedin">
        <i class="fab fa-linkedin"></i>
        LinkedIn
      </network>
    </div>
  </social-sharing>
</template>

<style lang="scss" scoped>
.linkedin {
  &__share {
    color: $linedin-blue;
    text-decoration: none;
    border-radius: 5px;
    border: solid 0.5px $linedin-blue;
    padding: 3px;
    margin-bottom: 5px;
    max-width: max-content;
  }
}
</style>
