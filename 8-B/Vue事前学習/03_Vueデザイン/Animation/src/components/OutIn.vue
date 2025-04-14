<!-- 
v-if, v-elseと複数の要素を切り替える場合、
mode属性を指定することで切り替えのタイミングをスムースにできます。
「out-in」は非表示アニメーションが終わってから次のアニメーションを行います。
「in-out」は先に条件で隠していた要素を表示させてから非表示アニメーションを行います。
指定しないと同時にアニメーションを行います。
それぞれの動きを確認してみましょう。

-->
<template>
  <section>
    <!-- mode属性なし -->
    <button @click='show1 = !show1'>切り替え</button>
    <transition name='fade'>
      <p key='in-out1' v-if="show1">おはようございます</p>
      <p key='in-out2' v-else>おやすみなさい</p>
    </transition>

    <!-- mode属性あり -->
    <button @click='show2 = !show2'>切り替えout-in</button>
    <transition name='fade' mode='out-in'>
      <p key='out-in1' v-if="show2">ありがとう</p>
      <p key='out-in2' v-else>ごめんなさい</p>
    </transition>
  </section>
</template>

<script>
export default {
  data() {
    return {
      show1: true,
      show2: true
    }
  }
}
</script>

<style scoped>
p {
  padding: 1rem 0;
}

.fade-enter-active {
  animation: fade-in 1s;
}
.fade-leave-active {
  animation: fade-in 1s reverse;
}
@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  } 
}
</style>
