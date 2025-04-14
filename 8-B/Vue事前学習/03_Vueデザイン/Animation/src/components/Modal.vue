<!-- 
簡単なモーダルウィンドウです。
サイト作成においてよく使用するのでライブラリも多いので調べてみましょう。
自分でカスタマイズできるよう作り方も知っておきましょう。

-->
<template>
  <section>
    <p>モーダルウィンドウ</p>
    <button @click='show = true'>表示</button>
    <!-- 薄暗い背景をクリックした際も消せるようにしましょう -->
    <div id='overlay' v-show="show" @click='show = false'>
      <transition name='modal'>
        <!-- 
          .stopとはJSのstopPropagationのこと
          イベントが重複した場合、伝搬を止める大切なイベント修飾子です
          .stop, .preventあたりは調べて理解するようにしましょう
        -->
        <div class='modal' v-if="show" @click.stop>
          <p>ここにテキストを表示します</p>
          <p><button @click='show = false'>close</button></p>
        </div>
      </transition>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      show: false
    }
  }
}
</script>

<style scoped>
#overlay{
  z-index: 1;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color:rgba(0,0,0,0.5);

  /*　画面の中央に要素を表示させる設定　*/
  display: flex;
  align-items: center;
  justify-content: center;
}
.modal {
  z-index: 2;
  width: 50%;
  background-color: white;
  color: black;
  margin: auto;
  padding: 1em;
}
/* モーダル表示 */
.modal-enter-active {
  animation: modal-show 0.5s;
}
.modal-leave-active {
  animation: modal-show 0.5s reverse;
}

@keyframes modal-show {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  } 
}
</style>
