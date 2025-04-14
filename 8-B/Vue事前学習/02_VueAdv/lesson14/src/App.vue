<template>
  <div id="app">
    <Header>
      <!-- lesson12同様ここのHTMLとテキストをコンポーネントに渡してください -->
      <template>
        <h1>{{ title }} <img alt="Vue logo" src="./assets/logo.png"></h1>
      </template>
      <template>
        <h2>{{ subtitle }}</h2>
      </template>
      <hr/>
    </Header>
    <!-- ここのコンポーネントを切り替え（切り替え時データリセットされないように注意） -->
    <Home></Home>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Home from './components/Home.vue'
import Form from './components/Form.vue'

export default {
  name: 'App',
  data() {
    return {
      // このデータを子に渡す
      title: '事前学習 - Vue応用',
      subtitle: 'ホームです',
      num: 0,
      currentComponent: 'Home', // 現在表示中のコンポーネント
    }
  },
  components: {
    Header,
    Home,
    Form,
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
