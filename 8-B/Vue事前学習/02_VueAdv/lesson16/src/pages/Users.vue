<template>
    <section>
        <h3>ユーザ一覧</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>性別</th>
                <th>年齢</th>
                <th>-</th>
            </tr>
            <tr v-for='user in users' :key='user.id'>
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.gender }}</td>
                <td>{{ user.age }}</td>
                <td><button>詳細</button></td>
            </tr>
        </table>
        <router-view></router-view>
    </section>
</template>

<script>
export default {
    data() {
        return {
            users: [
                {
                    id: 1,
                    name: '山田 太郎',
                    gender: '男',
                    age: 27,
                },
                {
                    id: 2,
                    name: '鈴木 花子',
                    gender: '女',
                    age: 25,
                },
                {
                    id: 3,
                    name: '田中 一朗',
                    gender: '男',
                    age: 31,
                }
            ]
        }
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