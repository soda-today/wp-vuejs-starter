import Vue from "vue";
import axios from "axios";
import VueLazyload from "vue-lazyload";

// Load Global Style
import "../scss/style.scss";

// Bootstrap Wordpress Stuff
require("./bootstrap.js");

// Load Store
import store from "./store/index.js";

// Load Components
import PageLoader from "./components/PageLoader.vue";
import PriceCalculator from "./components/PriceCalculator.vue";

// Global Loading
Vue.use(VueLazyload);

new Vue({
  store,
  el: "#page",
  components: {
    // Load Components
    PageLoader,
    PriceCalculator
  },
  created() {
    // this time out is just about showing what's happening in this example. It not make any sense in a real world case
    setTimeout(() => {
      this.$store.dispatch("setPageLoaded", true);
    }, 500);
  }
});
