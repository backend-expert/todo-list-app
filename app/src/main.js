import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
// import "./plugins/vee-validate";
{/* <script src="https://unpkg.com/vee-validate"></script> */}


createApp(App).use(store).use(router).mount("#app");
