import axios from "axios";

// add nonce or CSRF Token to Axios

axios.interceptors.request.use(
  function(config) {
    // Do something before request is sent
    config.headers["X-WP-Nonce"] = window.apiNonce;
    return config;
  },
  function(error) {
    // Do something with request error
    return Promise.reject(error);
  }
);
