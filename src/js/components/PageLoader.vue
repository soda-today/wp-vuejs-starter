<template>
  <div v-if="!pageLoaded" class="page-loader__wrapper">
    <div class="loading loading-lg"></div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters(["pageLoaded"])
  }
};
</script>
<style lang="scss" scoped>
@import "../../scss/_variables.scss";

.page-loader {
  &__wrapper {
    position: fixed;
    top: 0px;
    bottom: 0px;
    right: 0px;
    left: 0px;
    z-index: 900;
    background-color: $light-color;
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
</style>
