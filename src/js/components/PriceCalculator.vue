<template>
  <div class="price-calculator__wrapper">
    <p>
      Number Bottles:
      <strong>{{nbBottles}}</strong>
    </p>
    <vue-slider v-model="nbBottles"></vue-slider>
  </div>
</template>
<script>
import VueSlider from "vue-slider-component";
import "vue-slider-component/theme/default.css";
export default {
  components: {
    VueSlider
  },
  data() {
    return {
      nbBottles: 0
    };
  }
};
</script>
