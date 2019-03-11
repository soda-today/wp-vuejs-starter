<template>
  <div class="price-calculator__wrapper">
    <table class="table price-calculator__table">
      <thead>
        <tr>
          <th>Number Bottles</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{nbBottles}}</td>
          <td>${{price}}</td>
        </tr>
      </tbody>
    </table>
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
  },
  computed: {
    price() {
      const { nbBottles } = this;
      if (nbBottles < 10) return 29 * nbBottles;
      else if (nbBottles < 50) return 27 * nbBottles;
      else return 25 * nbBottles;
    }
  }
};
</script>
<style lang="scss" scoped>
.price-calculator {
  &__table {
    width: 400px;

    tbody td {
      width: 200px;
    }
  }
}
</style>

