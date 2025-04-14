<template>
  <section>
    <slot></slot>
    <nav>
      <ul>
        <li>Home</li>
        <li>Form</li>
      </ul>
    </nav>
  </section>
</template>

<script>
export default {
  methods: {
    pageLink(page, subtitle) {
      // App.vueの<Header>内のキーを呼び出す
      this.$emit('page-link', {page: page, subtitle: subtitle});
    },
  }
}
</script>

<style scoped>
h1 {
  font-size: 24px;
}
h2 {
  font-size: 16px;
}
ul {
  display: flex;
  justify-content: center;
  padding-inline-start: 0;
}
ul li {
  list-style-type: none;
  flex: 0 0 auto;
  width: 100px;
  text-align: center;
  text-decoration: underline;
}
ul li:hover {
  cursor: pointer;
  opacity: 0.8;
  text-decoration: none;
}
img {
  width: 3%;
  vertical-align: text-top;
}
</style>
