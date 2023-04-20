// import axios from 'axios';
// import Vue from 'vue';

// axios.defaults.baseURL = "https://127.0.0.1:8844/api/v1";

// Vue.prototype.$axios = axios;


import axios from 'axios';
// import axios from 'axios';

const _axios = axios.create({
    baseURL: "http://127.0.0.1:8844/api/v1",
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    }


});

export default _axios;