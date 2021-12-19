window.Vue = require('vue').default;
import Vue from 'vue';
import Router from 'vue-router';
import NewArrival from './pages/NewArrival.vue'
import ProductDetail from './pages/ProductDetail.vue'
import MyCart from './pages/MyCart.vue'
import Checkout from './pages/Checkout.vue'

Vue.use(Router);

const routerList = new Router({
    mode: 'history',
    routes: [
        {
            path: '/new-arrival',
            name: 'newArrival',
            component: NewArrival,
        },
        {
            path: '/product-detail',
            name: 'productDetail',
            component: ProductDetail,
        },
        {
            path: '/my-cart',
            name: 'myCart',
            component: MyCart,
        },
        {
            path: '/checkout',
            name: 'checkout',
            component: Checkout,
        },
    ]
});
Vue.component('navbar', require('./components/Navbar.vue').default)
new Vue({
    el: '#app',
    router: routerList
});
