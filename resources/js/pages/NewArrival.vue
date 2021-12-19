<template>
  <section class="section">
    <h1 class="title is-danger">New Arrival</h1>
    <hr />
    <div class="columns is-multiline">
      <div v-for="(product, key) in products" class="column is-3" :key="key">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img
                src="https://picsum.photos/256/256"
                alt="Placeholder image"
              />
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <h3>Sandal</h3>
                <p>Rp.4000</p>
              </div>
            </div>
            <div class="level">
              <router-link
                :to="{ name: 'productDetail', params: { id: product.id } }"
              >
                <button class="button is-small is-primary">Detail</button>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "NewArrival",
  computed: {
    ...mapGetters({ products: "getProducts" }),
  },
};
</script>