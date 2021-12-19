window.Vue = require('vue').default;
import Vue from 'vue';
import Vuex from 'vuex';
import Routerlist from './router/router';

Vue.use(Vuex)

const productsStore = {
    state: {
        products:
            [
                { "id": 1, "product_name": "CHANEL1", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 2, "product_name": "CHANEL2", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 3, "product_name": "CHANEL3", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 4, "product_name": "CHANEL4", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 5, "product_name": "CHANEL5", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" }
            ]
    },
    getters: {
        getProducts: state => {
            return state.products
        },
        getProductById: (state) => (id) => {
            const find = state.products.filter(items => items.id == id)
            if (find.length > 0) {
                return find[0]
            }
        }
    }
};

const cartStore = {
    state: {
        cart: []
    },
    getters: {
        getCart: state => {
            return state.cart
        }
    },
    mutations: {
        addToCart(state, product) {
            const findInCart = state.cart.filter(theCart => theCart.id == product.id)
            const alreadyInCart = findInCart.length > 0
            if (alreadyInCart) {
                findInCart[0].total += 1;
            }
            else {
                product.total = 1
                state.cart.push(product)
            }
        }
    }

};

const store = new Vuex.Store({
    modules: {
        products: productsStore,
        cart: cartStore
    }
})


Vue.component('navbar', require('./components/Navbar.vue').default)
new Vue({
    el: '#app',
    router: Routerlist,
    store
});
