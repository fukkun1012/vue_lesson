<template>
  <div id="app">
    <Header>
      <template #title>
        <h1>事前学習 - Vue応用 <img alt="Vue logo" src="./assets/logo.png"></h1>
      </template>
      <hr/>
    </Header>
    <router-view></router-view>
  </div>
</template>

<script>
import Header from './components/Header.vue'

export default {
  name: 'App',
  components: {
    Header,
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
img {
  width: 60%;
}
</style>
