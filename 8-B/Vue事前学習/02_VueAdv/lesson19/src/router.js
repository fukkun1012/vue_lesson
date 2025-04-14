import Vue from 'vue';
import Router from 'vue-router';

// 遅延ローディングをすることで必要なコンポーネントのみ読み込む
const Home = () => import(/* webpackChunkName: "Home" */ './pages/Home.vue');
const Login = () => import(/* webpackChunkName: "Login" */ './pages/Login.vue');
const Error404 = () => import(/* webpackChunkName: "Error404" */ './pages/Error404.vue');


Vue.use(Router);

/* ここに全てのルーティングを記述 */
export default new Router({
    mode: 'history',    // デフォルトはhashでURLに#が付与される
    routes: [
        {path: '/home', component: Home},
        {path: '/login', component: Login},
        {path: '/404', component: Error404},
        {
            path: '*',
            redirect: '/404'
        }
    ]
});