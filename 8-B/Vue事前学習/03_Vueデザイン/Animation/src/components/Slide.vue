<!-- 
今度はスライドしながら消えるアニメーションです。
同じくキーフレームを使用してますが、
「スライド」と「消える」という複数の指定をすることも可能です。

-->
<template>
  <section>
    <p>スライドイン・アウト</p>
    <button @click='show = !show'>切り替え</button>
    <transition name='slide'>
      <div class='box' v-if="show">box-slide</div>
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
  background-color: green;
  margin: 10px auto;
  color: white;
}

/* スライド */
.slide-enter-active {
  animation: slide-in 0.5s;
}
.slide-leave-active {
  animation: slide-in 0.5s reverse;
}

@keyframes slide-in {
  /* 複数の指定をすることで組み合わせたアニメーションができます */
  from {
    transform: translateX(100px); /* X→Yにすれば縦指定、マイナス指定もできます */
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  } 
}
</style>
