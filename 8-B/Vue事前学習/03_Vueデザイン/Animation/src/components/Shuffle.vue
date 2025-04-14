<!-- 
lodashを利用すると配列のシャッフルが簡単に実現できます。
併せてtransition-groupの使い方を調べましょう。
transition-groupはtransitionと違って複数要素を扱うことができます。
このプロジェクトフォルダ配下のpublic/index.htmlの<head>内に記述することで使えます。
サンプルではCDNを利用してますが、通信できない状況でアニメーションを止めないために
npmインストールを利用方法も知っておきましょう。
導入方法は公式サイトを確認してください。

[公式サイト]
https://lodash.com/

-->
<template>
  <section>
    <p>フェードイン・アウト</p>
    <button @click='onShuffle'>シャッフル</button>
    <!-- transition-groupはレンダリングの際にspanタグに置き換わるのでtag属性を利用しましょう -->
    <transition-group name='flip-list' tag='ul'>
      <!-- transition-groupはkeyが必須となります -->
      <li v-for='pref in prefs' :key='pref.id'>
        {{ pref.id }} . {{ pref.name }}
      </li>
    </transition-group>
  </section>
</template>

<script>
export default {
  data() {
    return {
      prefs: [
        { id: 1, name: '北海道' },
        { id: 2, name: '青森県' },
        { id: 3, name: '岩手県' },
        { id: 4, name: '宮城県' },
        { id: 5, name: '秋田県' },
        { id: 6, name: '山形県' },
        { id: 7, name: '福島県' },
      ],
    }
  },
  methods: {
    onShuffle() {
      this.prefs = _.shuffle(this.prefs);
    },
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
/* シャッフルを0.5sかけてアニメーションさせる */
.flip-list-move {
  transition: transform 0.5s;
}
</style>