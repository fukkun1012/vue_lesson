<!-- 
Vue構文内にjQueryを共存させることもできます。
日本ではアニメーションにjQueryを使用しているプロジェクトも存在します。
記述が混在するのはあまり望ましくありませんが、共存可能ということは知っておきましょう。

[公式サイト]
https://jquery.com/

-->
<template>
  <section>
    <p>jQuery</p>
    <div class='box-jquery'>box-jquery</div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      show: true
    }
  },
  mounted() {
    setInterval(function() {
      // Vueの構文内でjQueryも使えます
      $('.box-jquery').animate(
        {'margin-left':'+=20px'},
        500
      ).animate(
        {'margin-left':'-=20px'},
        500
      )
    },1000);
  }
}
</script>

<style scoped>
.box-jquery {
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
