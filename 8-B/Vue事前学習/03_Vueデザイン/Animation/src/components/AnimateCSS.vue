<!-- 
Animate.cssを利用すると様々なアニメーションパターンを簡単に使用できます。
このプロジェクトフォルダ配下のpublic/index.htmlの<head>内に記述することで使えます。
サンプルではCDNを利用してますが、通信できない状況でアニメーションを止めないために
npmインストールを利用方法も知っておきましょう。
導入方法は公式サイトを確認してください。

[公式サイト]
https://animate.style/

-->
<template>
  <section>
    <p>animation.cssの利用</p>
    <button @click='show = !show'>切り替え</button>
    <transition 
      name='animate-css'
      enter-active-class="animate__animated animate__bounce"
      leave-active-class="animate__animated animate__rotateOut"
    >
      <div class='box1' v-show='show'>animate.css-bounce</div>
    </transition>
    <transition 
      name='animate-css'
      enter-active-class="animate__animated animate__flip"
      leave-active-class="animate__animated animate__zoomOut"
    >
      <div class='box2' v-show='show'>animate.css-flip</div>
    </transition>
  </section>
</template>

<script>
export default {
  data() {
    return {
      show: true
    }
  }
}
</script>

<style scoped>
.box1 {
  width: 150px;
  height: 100px;
  background-color: orange;
  margin: 10px auto;
  color: black;;
}
.box2 {
  width: 150px;
  height: 100px;
  background-color: yellow;
  margin: 10px auto;
  color: black;
}
/* デフォルトは１秒なので秒数を変更したい場合は以下のような感じで記述します */
.animate__animated.animate__bounce {
  --animate-duration: 0.5s;
}
</style>
