<!-- 
フェードイン、フェードアウトのキーフレームで記述したバージョンです。
始まりと終わりを一気に記述でき、reverseを利用すると逆の動きを書けるので記述がシンプルになります。

-->
<template>
  <section>
    <button @click='show = !show'>切り替え</button>
    <transition name='fade'>
      <div class='box' v-if="show">box-fade-keyframes</div>
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
.box {
  width: 150px;
  height: 100px;
  background-color: red;
  margin: 10px auto;
  color: white;
}

/* フェード */
.fade-enter-active {
  animation: fade-in 2s;
}
.fade-leave-active {
  animation: fade-in 2s reverse;  /* これでfade-inに指定した動きと逆にできます */
}
@keyframes fade-in {
  /* アニメーション前の状態 */
  from {
    opacity: 0;
  }
  /* アニメーション後の状態 */
  to {
    opacity: 1;
  } 
}
</style>
