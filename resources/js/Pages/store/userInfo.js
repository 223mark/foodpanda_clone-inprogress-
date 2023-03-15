import { defineStore } from "pinia";

export const useUser = defineStore('user', {
    state: () => ({ cart: [] }),
    actions: {
        // removeProductFromCart(proId) {
        //     this.cart.forEach((product, index) => {
        //         if (product.id == proId) {
        //             this.cart.splice(index, 1);
        //         }
        //     });
        // }
    },

    persist: true
})