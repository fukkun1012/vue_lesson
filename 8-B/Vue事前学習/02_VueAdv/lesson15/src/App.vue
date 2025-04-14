<template>
  <div id="app">
    <Header>
      <template #title>
        <h1>事前学習 - Vue応用 <img alt="Vue logo" src="./assets/logo.png"></h1>
      </template>
      <template #subtitle>
        <h4>課題XXX</h4>
      </template>
      <hr/>
    </Header>
    <form>
      <FormText></FormText>
      <p>{{ formData.name.value }}</p>

      <FormRadio :select='selectData.gender'></FormRadio>
      <p>{{ formData.gender.value }}</p>

      <FormSelect :select='selectData.age'></FormSelect>
      <p>{{ formData.age.value }}</p>
    </form>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import FormText from './components/FormText.vue'
import FormRadio from './components/FormRadio.vue'
import FormSelect from './components/FormSelect.vue'

export default {
  name: 'App',
  data() {
    return {
      formData: {
        name: {
          'label': '氏名',
          'name': 'name',
          'value': ''
        },
        gender: {
          'label': '性別',
          'name': 'gender',
          'value': '男'
        },
        age: {
          'label': '年齢',
          'name': 'age',
          'value': 0
        },
      },
      selectData: {
        gender: ['男','女'],
        age: ['10代','20代','30代','40代','50代'],
      }
    }
  },
  components: {
    Header,
    FormText,
    FormRadio,
    FormSelect,
  },
  methods: {
    emitReflex(e) {
      this.num = e;
    },
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
