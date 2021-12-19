import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const product = new Vuex.Store({
    state: {
        products:
            [
                { "id": 1, "product_name": "CHANEL1", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 2, "product_name": "CHANEL2", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 3, "product_name": "CHANEL3", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 4, "product_name": "CHANEL4", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" },
                { "id": 5, "product_name": "CHANEL5", "product_price": 2000, "product_image": "http:\/\/product.test\/img\/photo-1563170351-be82bc888aa4.jpeg" }
            ]
    }
})

export default product