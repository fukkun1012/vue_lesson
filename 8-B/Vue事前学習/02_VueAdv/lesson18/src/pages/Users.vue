<template>
    <section>
        <h3>ユーザ一覧</h3>
        <template v-if='error'>
            <p>ユーザを取得できませんでした</p>
        </template>
        <template v-else>
            <table>
                <tr>
                    <th>ID</th>
                    <th>氏名</th>
                    <th>メールアドレス</th>
                    <th>生年月日</th>
                    <th>性別</th>
                    <th>-</th>
                </tr>
                <tr v-for='(user, index) in users' :key='user.id'>
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.birthday }}</td>
                    <td>{{ user.gender === '1' ? '男' : '女' }}</td>
                    <td><button @click='toUserEdit(index)'>編集</button></td>
                </tr>
            </table>
            <router-view></router-view>
        </template>
    </section>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
    data() {
        return {
            users: {},
            error: false    // ユーザ一覧が取得できない場合はここがtrueとなる
        }
    },
    computed: {
        ...mapGetters(['userDetail']),
    },
    methods: {
        toUserEdit(index) {
            this.$store.dispatch('toUserDetail',this.users[index]);
            this.$router.push('/users/edit/'+this.users[index].id, () => {});
        },
    },
    created() {
        /* ここにユーザ一覧情報を取得する処理を記載 */
    },
}
</script>

<style scoped>
table {
    margin: auto;
    border-collapse: collapse;
    border: 1px solid #aaa;
}
th,td {
    border: 1px solid #aaa;
    padding: 5px
}
</style>