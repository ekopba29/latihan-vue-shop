import Vue from 'vue';
import Router from 'vue-router';
import NewArrival from '../pages/NewArrival.vue'
import ProductDetail from '../pages/ProductDetail.vue'
import MyCart from '../pages/MyCart.vue'
import Checkout from '../pages/Checkout.vue'
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
            path: '/product-detail/:id',
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

export default routerList