<template>
  <v-app>
    <v-app-bar
      app
      color="primary"
      dark
    >
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="https://cdn.vuetifyjs.com/images/logos/vuetify-logo-dark.png"
          transition="scale-transition"
          width="40"
        />
        <h1 class='display-1' >Vue応用 - Lesson19</h1>
      </div>

      <v-spacer></v-spacer>

      <v-btn
        v-if="show"
        text
      >
        <span class="mr-2">ログアウト</span>
        <v-icon>logout</v-icon>
      </v-btn>
    </v-app-bar>

    <v-main>
      <router-view></router-view>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      show: true
    }
  },
};
</script>
