<template>
  <section>
    <h4>{{ num }}</h4>
    <button @click='count'>+1</button>
  </section>
</template>

<script>
export default {
  props: {
    // 型を指定できます
    num: {
      type: Number,
      default: 0, // 指定がない場合のデフォルト値
      // required: true,  // 必須入力かどうか（defaultとは共存しない）
    },
  },
  methods: {
    count() {
      // 親コンポーネントのデータと子コンポーネントのデータと区別するように注意
      this.num++;
    }
  }
}
</script>

<style scoped>

</style>
