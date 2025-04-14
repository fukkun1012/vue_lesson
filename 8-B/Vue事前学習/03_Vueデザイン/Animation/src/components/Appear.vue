<!-- 
apper属性を使用することで画面読み込みの際にアニメーションを実行することができます。

-->
<template>
  <transition name='slide' appear>
    <section>
      <p>appear属性（画面更新時に動作）</p>
      <div class='box'>box-appear</div>
    </section>
  </transition>
</template>

<script>
export default {
}
</script>

<style scoped>
.box {
  width: 150px;
  height: 100px;
  background-color: blue;
  margin: 10px auto;
  color: white;
}

/* スライド */
.slide-enter-active {
  animation: slide-up 1s;
}

@keyframes slide-up {
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
