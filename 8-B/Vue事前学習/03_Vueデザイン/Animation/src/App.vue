<!-- 
Vue.jsでのアニメーションについてサンプルをいくつか提供します

本来JavaScriptで処理を記述し、DOM操作を行うのですが、
v-ifとCSSアニメーションを組み合わせる際、
Vueで用意されたtransitionやtransition-groupを活用すると便利です

もちろん生のJSでDOM操作やタイマー処理を記述しても問題ありませんし、
アニメーションの部分だけJQueryを利用するというのも１つの方法です

-->
<template>
  <div id="app">
    <Header>
      <template #title>
        <h1>事前学習 - Vueデザイン <img alt="Vue logo" src="./assets/logo.png"></h1>
      </template>
      <template #subtitle>
        <h4>課題XXX</h4>
      </template>
      <hr/>
    </Header>
    <Fade></Fade>
    <FadeKeyFrames></FadeKeyFrames>
    <hr/>
    <Slide></Slide>
    <hr/>
    <Appear></Appear>
    <hr/>
    <AnimateCSS></AnimateCSS>
    <hr/>
    <OutIn></OutIn>
    <hr/>
    <Modal></Modal>
    <hr/>
    <JavaScriptHook></JavaScriptHook>
    <hr/>
    <JQuery></JQuery>
    <hr/>
    <Todo></Todo>
    <hr/>
    <Shuffle></Shuffle>

    <Scroll></Scroll>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Fade from './components/Fade.vue'
import FadeKeyFrames from './components/FadeKeyFrames.vue'
import Slide from './components/Slide.vue'
import Appear from './components/Appear.vue'
import AnimateCSS from './components/AnimateCSS.vue'
import OutIn from './components/OutIn.vue'
import Modal from './components/Modal.vue'
import JavaScriptHook from './components/JavaScriptHook.vue'
import Todo from './components/Todo.vue'
import Shuffle from './components/Shuffle.vue'
import Scroll from './components/Scroll.vue'
import JQuery from './components/JQuery.vue'

export default {
  name: 'App',
  data() {
    return {
    }
  },
  components: {
    Header,
    Fade,
    FadeKeyFrames,
    Slide,
    Appear,
    AnimateCSS,
    OutIn,
    Modal,
    JavaScriptHook,
    JQuery,
    Todo,
    Shuffle,
    Scroll,
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
</style>
