<template>
  <section>
    <slot name='title'>ヘッダータイトル</slot>
    <slot name='subtitle'></slot>
    <hr>
  </section>
</template>

<script>
export default {
  name: 'Header',
}
</script>

<style scoped>
h1 {
  font-size: 24px;
}
img {
  width: 3%;
  vertical-align: text-top;
}
</style>
