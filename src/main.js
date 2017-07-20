import Vue from 'vue'
import App from './App.vue'

Vue.mixin({
    data: function() {
        return {
            get url_backend() {
                return "http://localhost/mys/backend/";
            }
        }
    }
});

new Vue({
  el: '#app',
  render: h => h(App)
})
