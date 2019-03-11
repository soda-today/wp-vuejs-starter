import Vue from "vue";
import Vuex from "vuex";
import { SET_PAGE_LOADED } from "./mutation-types";

Vue.use(Vuex);

const store = new Vuex.Store({
  state: {
    pageLoaded: false
  },
  getters: {
    pageLoaded(state) {
      return state.pageLoaded;
    }
  },
  mutations: {
    [SET_PAGE_LOADED](state, newValue) {
      state.pageLoaded = newValue;
    }
  },
  actions: {
    setPageLoaded({ commit }, newValue) {
      commit(SET_PAGE_LOADED, newValue);
    }
  }
});

export default store;
