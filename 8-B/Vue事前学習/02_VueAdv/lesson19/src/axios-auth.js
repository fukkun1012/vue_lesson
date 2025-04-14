import axios from 'axios';

const axiosAuth = axios.create({
    // ここのURLは環境によって変わります
    baseURL: 'http://localhost:8888/api'
});
// axiosAuth.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=utf-8';
axiosAuth.defaults.headers.post['Content-Type'] = 'multipart/form-data; charset=utf-8';
axiosAuth.defaults.headers.common['Accept'] = 'application/json';

export default axiosAuth;