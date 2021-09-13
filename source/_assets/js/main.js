window.axios = require('axios');
import Vue from 'vue';
import Search from './components/Search.vue';
import TypingText from './components/TypingText.vue';

Vue.config.productionTip = false;

new Vue({
    components: {Search},
}).$mount('#vue-search');

if(document.querySelector('#vue-typing-text')){
    new Vue({
        components: {TypingText},
    }).$mount('#vue-typing-text');
}
