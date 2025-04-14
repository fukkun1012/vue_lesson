<template>
  <section>
      <label>ここにlabelを入れてください </label>
      <select name="ここにnameを入れてください">
        <template v-for='(data, i) in select'>
          <option
            :key='data'
            :value="data"
            :checked="i == 0 ? 'checked' : ''"
          >
          {{ data }}
          </option>
        </template>
      </select>
  </section>
</template>

<script>
export default {
  props: ['select']
}
</script>