<!-- 
スクロールイベントはJSロジックでスクロール位置を判定する必要があります。
addEventListenerなどはJSの基礎知識なので、分からない場合はJSの復習をしましょう。

またサンプルではスムーススクロールをCSS3の「scroll-behavior」で実装してますが、
細かい指定ができないため、「vue-smooth-scroll」の方をオススメします。

-->
<template>
  <section>
    <transition name='fade'>
      <div 
        class='box' 
        v-show='show' 
      >
      <a href="#app">TOPへ</a>
      </div>
    </transition>
  </section>
</template>

<script>
export default {
  data() {
    return {
      show: false
    }
  },
  created() {
    window.addEventListener("scroll", this.scroll);
  },
  methods: {
    scroll() {
      if (!this.show) {
        this.show = window.scrollY > 100;
      } else if (window.scrollY < 90) {
        this.show = !this.show;
      }
    },
  },
}
</script>

<style scoped>
html {
  scroll-behavior: smooth;
}
a {
  display: block;
  width: 100%;
  height: 100%;
  line-height: 100px;
  color: white;
  font-weight: bold;
}
.box {
  width: 100px;
  height: 100px;
  background-color: black;
  margin: 10px auto;
  color: white;
  position: fixed;
  right: 3%;
  bottom: 3%;
  border-radius: 50px;
}

.fade-enter-active {
  animation: fade-up 0.3s;
}
.fade-leave-active {
  animation: fade-up 0.3s reverse;
}
@keyframes fade-up {
  /* 複数の指定をすることで組み合わせたアニメーションができます */
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
