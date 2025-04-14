<!-- 
これまではCSS3のアニメーションを使用してきましたが、
当然JavaScriptで自作アニメーションを記述することも可能です。
VueではJavaScriptフックと呼ばれるenter, leaveの8つのメソッドを利用します。
CSSアニメーションよりパフォーマンスやメンテナンス性を向上したい場合に利用するといいでしょう。

-->
<template>
  <section>
    <p>JavaScript構文でのアニメーション</p>
    <button @click='show = !show'>切り替え</button>
    <!-- :css=falseにすることでCSS処理の干渉を防ぎます -->
    <transition 
      :css='false'
      @before-enter='beforeEnter'
      @enter='enter'
      @after-enter='afterEnter'
      @enter-cancelled='enterCancelled'
      @before-leave='beforeLeave'
      @leave='leave'
      @after-leave='afterLeave'
      @leave-cancelled='leaveCancelled'
    >
      <div class='box' v-if="show">javascript-hook</div>
    </transition>
  </section>
</template>

<script>
export default {
  data() {
    return {
      show: true
    }
  },
  methods: {
    beforeEnter(el) {
      // 表示アニメーション前
      console.log('beforeEnterが呼ばれました: ' + el)
      el.style.transform = `scale(0)`;
    },
    enter(el, done) {
      // 表示アニメーション時、done()で処理終了を伝える
      console.log('enterが呼ばれました: ' + el);
      let scale = 0;
      const interval = setInterval(() => {
        el.style.transform = `scale(${scale})`;
        scale += 0.1;
        if(scale > 1) {
          clearInterval(interval);
          done();
        }
      }, 50);
    },
    afterEnter(el) {
      // 表示アニメーション後
      console.log('afterEnterが呼ばれました: ' + el);
    },
    enterCancelled(el) {
      // 表示アニメーションのキャンセル時
      console.log('enterCancelledが呼ばれました: ' + el);
    },

    beforeLeave(el) {
      // 非表示アニメーション前
      console.log('beforeLeaveが呼ばれました: ' + el);
    },
    leave(el, done) {
      // 非表示アニメーション時、done()で処理終了を伝える
      console.log('leaveが呼ばれました: ' + el);
      let scale = 1;
      const interval = setInterval(() => {
        el.style.transform = `scale(${scale})`;
        scale -= 0.1;
        if(scale < 0) {
          clearInterval(interval);
          done();
        }
      }, 50);
    },
    afterLeave(el) {
      // 非表示アニメーション後
      console.log('afterLeaveが呼ばれました: ' + el);
    },
    leaveCancelled(el) {
      // 非表示アニメーションのキャンセル時（v-showのときのみ）
      console.log('leaveCancelledが呼ばれました: ' + el);
    },
  }
}
</script>

<style scoped>
.box {
  width: 150px;
  height: 100px;
  background-color: pink;
  margin: 10px auto;
  color: black;
}
</style>
