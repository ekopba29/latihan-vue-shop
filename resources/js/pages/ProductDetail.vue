<template>
  <div class="section">
    <div class="box">
      <div class="columns is-mobile">
        <article class="media">
          <div
            class="media-left is-marginless"
            style="position: sticky; top: 0"
          >
            <div class="card-image column">
              <figure class="image">
                <img
                  src="https://picsum.photos/40/40"
                  alt="Placeholder image"
                />
              </figure>
            </div>
            <div class="card-image column">
              <figure class="image">
                <img
                  src="https://picsum.photos/40/40"
                  alt="Placeholder image"
                />
              </figure>
            </div>
            <div class="card-image column">
              <figure class="image">
                <img
                  src="https://picsum.photos/40/40"
                  alt="Placeholder image"
                />
              </figure>
            </div>
          </div>
          <div class="media-left mr-6" style="position: sticky; top: 1rem">
            <div class="card-image">
              <figure class="image">
                <img
                  src="https://picsum.photos/400/400"
                  alt="Placeholder image"
                />
              </figure>
            </div>
            <div class="column is-primary is-pulled-right">
              <button class="button is-small" @click="addToCart">
                <i class="fa fa-shopping-cart">&nbsp;Add to cart</i>
              </button>
            </div>
            <div class="column is-primary is-pulled-left">
              <div class="tag subtitle is-black">Rp.2000</div>
            </div>
          </div>
          <div class="media-content">
            <div class="content">
              <p class="title">
                <strong class="title">John Smith</strong>
              </p>
            </div>
            <div class="content">
              <h3>Hello World</h3>
              <p>
                Lorem ipsum<sup><a>[1]</a></sup> dolor sit amet, consectetur
                adipiscing elit. Nulla accumsan, metus ultrices eleifend
                gravida, nulla nunc varius lectus, nec rutrum justo nibh eu
                lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin
                vel erat vel, interdum mattis neque. Sub<sub>script</sub> works
                as well!
              </p>
              <h3>Second level</h3>
              <p>
                Curabitur accumsan turpis pharetra
                <strong>augue tincidunt</strong> blandit. Quisque condimentum
                maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna
                vel cursus venenatis. Suspendisse potenti. Etiam mattis sem
                rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et
                neque nisl.
              </p>
              <ul>
                <li>
                  In fermentum leo eu lectus mollis, quis dictum mi aliquet.
                </li>
                <li>
                  Morbi eu nulla lobortis, lobortis est in, fringilla felis.
                </li>
                <li>
                  Aliquam nec felis in sapien venenatis viverra fermentum nec
                  lectus.
                </li>
                <li>Ut non enim metus.</li>
              </ul>
              <h3>Third level</h3>
              <p>
                Quisque ante lacus, malesuada ac auctor vitae, congue
                <a href="#">non ante</a>. Phasellus lacus ex, semper ac tortor
                nec, fringilla condimentum orci. Fusce eu rutrum tellus.
              </p>
              <ol>
                <li>Donec blandit a lorem id convallis.</li>
                <li>Cras gravida arcu at diam gravida gravida.</li>
                <li>Integer in volutpat libero.</li>
                <li>Donec a diam tellus.</li>
                <li>Aenean nec tortor orci.</li>
                <li>
                  Quisque aliquam cursus urna, non bibendum massa viverra eget.
                </li>
                <li>Vivamus maximus ultricies pulvinar.</li>
              </ol>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "ProductDetail",
  data() {
    return {
      //   product: this.$store.getters.getProductById(this.$route.params.id),
    };
  },
  computed: {
    product() {
      return this.$store.getters.getProductById(this.$route.params.id);
    },
  },
  methods: {
    addToCart() {
      this.$store.commit('addToCart',this.product)
    },
  },
};
</script>