<template>
  <div class="section">
    <article class="panel is-primary">
      <p class="panel-heading">MyCart</p>
      <a class="panel-block column is-active">
        <div v-if="products.length > 0">
          <div class="">
            <div
              class="columns is-12"
              v-for="(product, key) in products"
              :key="key + 'm'"
            >
              <div class="column">
                {{ product.product_name }} &nbsp;
                <span
                  class="tag is-normal is-link is-12"
                  :ref="'total' + product.id"
                  >{{ product.total }}</span
                >
                <div
                  class="button is-pulled-right is-small m-2 is-info"
                  @click="increaseCart(product.id)"
                >
                  +
                </div>
                <div class="button is-pulled-right is-small m-2 is-danger">
                  -
                </div>
              </div>
            </div>
          </div>
        </div>
        <div v-else class="subtitle has-text-centered">Cart Empty</div>
      </a>
      <div class="columns is-centered" v-if="products.length > 0">
        <div class="m-5">
          <router-link :to="{ name: 'checkout' }">
          <button class="is-small button is-link">Checkout</button>
        </router-link>
        </div>
      </div>
    </article>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "MyCart",
  computed: {
    ...mapGetters({
      products: "getCart",
    }),
  },
  methods: {
    increaseCart(ProductId) {
      this.$store.commit("addToCart", { id: ProductId });
      const element = this.$refs["total" + ProductId];
      const number = element[0].innerHTML;
      element[0].innerHTML = parseInt(number) + 1;
    },
  },
};
</script>