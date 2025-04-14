<template>
  <section>
    <slot name='title'>ヘッダータイトル</slot>
    <nav>
      <ul>
        <li>
          <router-link 
            to='/home' 
            active-class='link--active' 
            exact
          >Home</router-link>
        </li>
        <li>
          <router-link 
            to='/about' 
            active-class='link--active' 
            exact
          >About</router-link>
        </li>
        <li>
          <router-link 
            to='/users' 
            active-class='link--active' 
          >Users</router-link>
        </li>
      </ul>
    </nav>
  </section>
</template>

<script>
export default {
  name: 'Header',
}
</script>

<style scoped>
h1 {
  font-size: 24px;
}
img {
  width: 3%;
  vertical-align: text-top;
}
nav {
  height: 25px;
  border-bottom: 1px solid lightgreen;
}
ul {
  display: flex;
  justify-content: center;
  padding-inline-start: 0;
}
ul li {
  height: 25px;
  flex: 0 0 auto;
  list-style-type: none;
  margin: 0 3px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
ul li a {
  display: block;
  padding: 0 10px 0 10px;
  line-height: 25px;
  text-decoration: none;
  background-color: lightgray;
  color: gray;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
ul li a:hover {
  opacity: 0.8;
}
.link--active {
  background-color: lightgreen;
  color: #369;
}
</style>
