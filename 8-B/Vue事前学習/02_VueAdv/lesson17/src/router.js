import Vue from 'vue';
import Router from 'vue-router';

// 遅延ローディングをすることで必要なコンポーネントのみ読み込む
const Home = () => import(/* webpackChunkName: "Home" */ './pages/Home.vue');
const About = () => import(/* webpackChunkName: "About" */ './pages/About.vue');
const Users = () => import(/* webpackChunkName: "Users" */ './pages/Users.vue');
const UserDetail = () => import(/* webpackChunkName: "UserDetail" */ './pages/UserDetail.vue');
const Error404 = () => import(/* webpackChunkName: "Error404" */ './pages/Error404.vue');


Vue.use(Router);

/* ここに全てのルーティングを記述 */
export default new Router({
    mode: 'history',    // デフォルトはhashでURLに#が付与される
    routes: [
        {path: '/home', component: Home},
        {path: '/about', component: About},
        {
            path: '/users', 
            component: Users,
            children: [
                {
                    path: 'detail/:id', 
                    component: UserDetail,
                    props: true,
                }
            ]
        },
        {path: '/404', component: Error404},
        {
            path: '*',
            redirect: '/404'
        }
    ]
});