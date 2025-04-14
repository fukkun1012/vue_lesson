<!-- 
簡単なフェードイン、フェードアウトです。
transitionにname属性をつけて、.fade-enterと.fade-leaveで操作します。
transitionは単一要素のみ記述可能で、複数要素は扱えないので注意しましょう。

-->
<template>
  <section>
    <p>フェードイン・アウト</p>
    <button @click='show = !show'>切り替え</button>
    <transition name='fade'>
      <div class='box' v-if="show">box-fade</div>
    </transition>

    <!-- こういう書き方はNG - transitionに複数の要素がある場合
    <transition name='fade'>
      <div class='box1'>box-fade1</div>
      <div class='box2'>box-fade2</div>
    </transition> 
    -->

    <!-- こういう書き方ならOK - v-ifでどちらかの要素残らない場合
    ※ただし必ずkey属性を付けること（Vueの特性上別タグであるという認知が必要）
    <transition name='fade'>
      <div class='box1' key='box1' v-if='show'>box-fade1</div>
      <div class='box2' key='box2' v-else>box-fade2</div>
    </transition> 
    -->

    <!-- これでもOK - １つの要素内に複数の要素がある場合
    <transition name='fade'>
      <div class='box' v-if='show'>
        <p>text-fade1</p>
        <p>text-fade2</p>
        <p>text-fade3</p>
      </div>
    </transition> 
    -->
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
/* 以下のように -enter, -leave を使って２つの状態を定義します */
.fade-enter {
  /* アニメーション前の状態 */
  opacity: 0;
}
.fade-enter-active {
  /* アニメーション途中の状態 */
  /* 
    指定したプロパティが何秒で変化するかを指定 
    このケースだとopacityを0.5秒かけてアニメーション
    今後たくさん使用するので書き方を覚えましょう
  */
  transition: opacity 0.5s;
}
.fade-enter-to {
  /* アニメーション後の状態 */
  opacity: 1;
}
.fade-leave {
  opacity: 1;
}
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-leave-to {
  opacity: 0;
}
</style>
