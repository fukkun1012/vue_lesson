<template>
    <section v-if='Object.keys(userDetail).length !== 0'>
        <h3>ユーザ編集</h3>
        <transition name='fade' mode='out-in'>
            <p class='result' v-if="show">{{ message }}</p>
        </transition>
        <form id='user'>
        <table>
            <tr>
                <th>ID</th>
                <td>{{ userDetail.id }}</td>
            </tr>
            <tr>
                <th>氏名</th>
                <td><!-- ここにフォームを記載 --></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><!-- ここにフォームを記載 --></td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td><!-- ここにフォームを記載 --></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><!-- ここにフォームを記載 --></td>
            </tr>
        </table>
        </form>
        <button @click='updateUserData'>編 集</button>
    </section>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
    data() {
        return {
            show: false,    // 更新結果のメッセージを表示する場合trueにする
            message: ''     // 更新結果のメッセージ
        }
    },
    computed: {
        ...mapGetters(['userDetail']),
    },
    methods: {
        updateUserData() {
            /* ここにユーザ情報を更新する処理を記載 */
        },
    },
}
</script>

<style scoped>
table {
    margin: auto;
    text-align: left;
}
th,td {
    padding: 3px;
}
th {
    background-color: #eee;
}
.result {
    color: red;
}
/* フェード */
.fade-enter-active {
  animation: fade-in 2s;
}
.fade-leave-active {
  animation: fade-in 2s reverse;
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