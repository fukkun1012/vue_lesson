<template>
  <div id="app">
    <Header>
      <h1>{{ title }} <img alt="Vue logo" src="./assets/logo.png"></h1>
      <h2>{{ subtitle }}</h2>
      <hr/>
    </Header> 
    <!-- 
    <ul>
      <li><button>外枠</button></li>
      <li><button>角丸</button></li>
      <li><button>影</button></li>
    </ul> 
    -->
    <img alt='LiNew Office' src='./assets/office.jpg'>
  </div>
</template>

<script>
import Header from './components/Header.vue'

export default {
  name: 'App',
  data() {
    return {
      title: '事前学習 - Vue応用',
      subtitle: 'Lesson13',
      // style: {
      //   outline: false,
      //   round: false,
      //   shadow: false,
      // }
    }
  },
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
ul {
  display: flex;
  justify-content: center;
  padding-inline-start: 0;
}
ul li {
  margin: 0 10px;
  list-style-type: none;
}
</style>
