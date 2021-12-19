<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-start">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img
            src="https://bulma.io/images/bulma-logo.png"
            alt="Bulma: Free, open source, and modern CSS framework based on Flexbox"
            width="112"
            height="28"
          />
        </a>
      </div>
    </div>
    <div class="navbar-end">
      <a class="navbar-item">
        <i class="fa fa-shopping-cart"
          >&nbsp;
          <div class="tag is-danger is-small">{{ cart.length }}</div></i
        >
      </a>
    </div>
  </nav>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "Navbar",
  computed: {
    ...mapGetters({ cart: "getCart" }),
  }
};
</script>