<template>
  <section>
      <label>ここにlabelを入れてください </label>
      <template v-for='(data, i) in select'>
        <input
          type="radio"
          name="ここにnameを入れてください"
          :key='data'
          :value="data"
          :checked="i == 0 ? 'checked' : ''"
        >
        <label :key='i'>{{ data }}</label>
      </template>
  </section>
</template>

<script>
export default {
  props: ['select']
}
</script>