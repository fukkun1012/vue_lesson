<!-- 
以下はv-moveを使用したToDoリストのサンプルです。
v-moveによって非表示にする際、下のブロックの競り上がり方が滑らかにすることができます。

-->
<template>
  <section>
    <p>ToDoリスト</p>
    <input @keyup.enter='add' placeholder="Enterキー押すと追加">
    <transition-group name='slide-fade' mode='out-in' tag='ul'>
      <li v-for="(pref, index) in prefs" :key='pref'>
        {{ pref }}
        <span @click='remove(index)'>×</span>
      </li>
    </transition-group>
  </section>
</template>

<script>
export default {
  data() {
    return {
      prefs: [
        'やること',
      ],
    }
  },
  methods: {
    add(event) {
      if(event.target.value !== '') {
        this.prefs.push(event.target.value);
        event.target.value = '';
      }
    },
    remove(index) {
      this.prefs.splice(index, 1);
    }
  }
}
</script>

<style scoped>
ul {
  padding-inline-start: 0;
}
li {
  list-style-type: none;
}
li span:hover {
  cursor: pointer;
  opacity: 0.8;
}
/* フェード */
.slide-fade-move {
  transition: transform 1s;
}
.slide-fade-enter-active {
  animation: slide-fade-in 0.5s;
}
.slide-fade-leave-active {
  animation: slide-fade-in 0.5s reverse;
  position: absolute;
  width: 100%;
}
@keyframes slide-fade-in {
  from {
    transform: translateX(50px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  } 
}
</style>
