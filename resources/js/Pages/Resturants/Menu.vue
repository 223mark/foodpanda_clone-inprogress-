<template>
  <Head title="Resturant Menu" />
  <AuthenticatedLayout>
    <div class="flex justify-between relative">
      <!-- left shop section -->
      <div class="w-3/4">
        <div class="">
          <img src="/images/resturants/shanmalay.webp" alt="" class="object-fill" />
        </div>

        <!-- about resturants -->
        <div class="pl-[80px] py-8 border-t border-gray-300 space-y-4">
          <div class="flex justify-between items-center">
            <h2 class="font-extrabold text-2xl">Shan Ma Lay</h2>
            <h4 class="text-md font-[100] text-theme pr-4 cursor-pointer">
              Reviews & info
            </h4>
          </div>
          <div class="">
            <i class="fa-solid fa-star text-[#ffb413] text-sm"></i>
            <span class="text-sm pl-1"
              >4.2/5 <span class="text-gray-400">(13)</span></span
            >
          </div>
          <div class="space-x-2">
            <span class="font-[400] text-gray-900">$$$ .</span>
            <span class="font-[100] text-gray-400">Noodles .</span>
            <span class="font-[100] text-gray-400">Asian .</span>
            <span class="font-[100] text-gray-400">Southease Asia .</span>
            <span class="font-[100] text-gray-400">Burmese . </span>
            <span class="font-[100] text-gray-400">Traditional Foods .</span>
          </div>
        </div>
        <!-- little header -->
        <div class="border-t border-b border-gray-300">
          <div class="flex gap-4 pl-[80px] pr-10 py-5">
            <div
              @mouseenter="isHover = true"
              @mouseleave="isHover = false"
              :class="
                isHover
                  ? 'transition ease-in duration-200'
                  : 'tranisiton ease-out duration-200'
              "
              class="relative"
            >
              <h3
                :class="isHover ? 'text-black ' : 'text-gray-500'"
                class="font-extrabold cursor-pointer transiton ease-in duraion-200"
              >
                Popular
              </h3>
              <div
                v-if="isHover"
                class="absolute bottom-0 bg-theme w-full"
                style="height: 2px"
              ></div>
            </div>
          </div>
        </div>

        <div class="py-2"></div>
        <!-- popular section -->
        <div class="px-[80px] space-y-4">
          <div class="space-x-2 mb-2">
            <i class="fa-solid fa-fire-flame-curved text-2xl text-theme"></i>
            <span class="text-2xl font-extrabold text-gray-800">Popular</span>
            <div class="text-gray-700 font-hairline text-sm">Most popular right now</div>
          </div>

          <div class="grid grid-cols-2 gap-3">
            <!-- product -->
            <div
              class="w-full flex justify-between h-[20vh] border border-gray-300 shadow-mg p-4 shadow"
            >
              <div class="w-2/3 space-y-2">
                <h3 class="text-md font-semibold">Shan Noodle</h3>
                <p class="text-sm font-[hairline]">
                  Delicious Shan Noodle with spicy and
                </p>
                <h3 class="text-md font-normal">MMK 3,500</h3>
              </div>
              <div class="w-1/3 flex justify-end items-center relative cursor-pointer">
                <img
                  src="/images/foods/pizza.jpg"
                  class="w-2/3 h-full shadow-md rounded-md bg-gray-200 border"
                />
                <div class="absolute -bottom-1 right-0">
                  <i class="fa-solid fa-square-plus text-theme text-2xl rounded-xl"></i>
                </div>
              </div>
            </div>
            <!-- product end -->
            <!-- product -->
            <div
              class="w-full flex justify-between h-[20vh] border border-gray-300 shadow-mg p-4 shadow"
            >
              <div class="w-2/3 space-y-2">
                <h3 class="text-md font-semibold">Shan Noodle</h3>
                <p class="text-sm font-[hairline]">
                  Delicious Shan Noodle with spicy and
                </p>
                <h3 class="text-md font-normal">MMK 3,500</h3>
              </div>
              <div class="w-1/3 flex justify-end items-center relative cursor-pointer">
                <img
                  src="/images/foods/pizza.jpg"
                  class="w-2/3 h-full shadow-md rounded-md bg-gray-200 border"
                />
                <div class="absolute -bottom-1 right-0">
                  <i class="fa-solid fa-square-plus text-theme text-2xl rounded-xl"></i>
                </div>
              </div>
            </div>
            <!-- product end -->
          </div>
        </div>
      </div>
      <!-- left shop end -->
      <!-- right cart section -->
      <div
        class="fixed right-0 top-[60px] h-full w-1/4 pt-6 px-4 border-l border-gray-300 shadow-md"
      >
        <div class="text-center space-x-4">
          <span class="text-md font-hairline text-gray-600">Delivery</span>
          <span> <input type="checkbox" /></span>
          <span class="text-md font-hairline text-gray-600">Pick-Up</span>

          <div class="text-[18px] font-extrabold text-gray-700 mt-4">Your cart</div>
          <p class="text-sm font-hairline text-gray-400 py-6">
            Start adding items to your cart
          </p>
        </div>
        <div class="border-t border-gray-400 py-2"></div>

        <div class="flex justify-between">
          <div class="text-sm font-hairline text-gray-500">Subtotal</div>
          <div class="text-sm font-hairline text-gray-400">MMK <span>0</span></div>
        </div>
        <div class="py-2"></div>
        <div class="flex justify-between">
          <div class="text-md font-bold text-gray-800">
            Subtotal <span class="text-xs font-bold text-gray-500">(Incl, tax)</span>
          </div>
          <div class="text-md font-bold text-gray-800">MMK <span>0</span></div>
        </div>
        <button
          class="mt-4 text-sm text-center w-full font-extrabold rounded-lg py-3 bg-gray-300 text-white"
        >
          Go to checkout
        </button>
      </div>

      <!-- right cart end -->
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

const isHover = ref(false);
</script>
