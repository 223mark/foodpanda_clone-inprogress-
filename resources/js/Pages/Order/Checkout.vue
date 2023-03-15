<template>
  <Head title="Order Checkout" />
  <AuthenticatedLayout>
    <div class="my-[80px] mx-[200px] flex relative">
      <div class="w-2/3 shadow-lg space-y-4">
        <!-- no.1 order seciton -->
        <div class="border border-gray-300 px-4 py-6">
          <div class="flex items-center gap-4 mb-4">
            <div
              class="w-[35px] h-[35px] bg-theme text-white font-extrabold text-xl flex items-center justify-center"
            >
              1
            </div>
            <h2 class="text-[22px] tracking-wide font-[300]">Delivery details</h2>
          </div>

          <div class="border-l-2 border-gray-900 bg-[#eef0f1] py-1 px-3 flex">
            <div class="w-4/5">
              <h3 class="text-[15px] font-bold tracking-wide pb-1">
                Contactless delivery
              </h3>
              <p class="text-sm font-hairline tracking-wider">
                To keep you safe, the rider will place your order at your door
              </p>
            </div>
            <div class="w-1/5 flex items-center justify-end">
              <img src="/images/icons/toggle_icon.png" alt="" />
            </div>
          </div>
          <!-- address section -->
          <div class="px-4 py-6 shadow-md">
            <h3 class="font-[400]">Delivery Address</h3>

            <div class="">
              <img src="/images/icons/map_icon.png" alt="" class="shadow-md" />
              <div class="px-4 py-2 my-2">
                <h5 class="text-sm font-bold">Street</h5>
                <h6 class="text-xs font-medium">City</h6>
              </div>
              <div class="flex flex-col py-2 px-4">
                <!-- <label for="address" class="tracking-wide text-md font-bold"
                  >Please fill your address</label
                > -->
                <div class="relative">
                  <input
                    type="text"
                    class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
                  />
                  <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">
                    Please fill your street number
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- address end -->
          <!-- order optional section-->
          <div class="px-4 my-6 space-y-8">
            <div class="relative">
              <input
                type="text"
                class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
              />
              <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">
                Floor (Optional)
              </p>
            </div>

            <div class="relative">
              <textarea
                type="text"
                class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
              ></textarea>
              <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">
                Note to rider - eg. building, landmark
              </p>
            </div>

            <!-- label -->
            <div class="">
              <h4 class="text-md font-bold">Add a Label</h4>

              <div class="py-4 grid grid-cols-5 gap-5 w-1/2">
                <div class="space-y-2 cursor-pointer">
                  <i
                    class="fa-solid fa-house text-theme p-3 rounded-full bg-white shadow-md text-md"
                  ></i>
                  <h5 class="text-sm font-hairline">Home</h5>
                </div>
                <div class="space-y-2 cursor-pointer">
                  <i
                    class="fa-solid fa-briefcase text-theme p-3 rounded-full bg-white shadow-md text-md"
                  ></i>
                  <h5 class="text-sm font-hairline">Office</h5>
                </div>
                <div class="space-y-2 cursor-pointer">
                  <i
                    class="fa-regular fa-heart text-theme p-3 rounded-full bg-white shadow-md text-md"
                  ></i>
                  <h5 class="text-sm font-hairline">Partner</h5>
                </div>
                <div class="space-y-2 cursor-pointer">
                  <i
                    class="fa-solid fa-plus text-theme p-3 rounded-full bg-white shadow-md text-md"
                  ></i>
                  <h5 class="text-sm font-hairline">Add</h5>
                </div>
              </div>
              <button
                class="w-full py-3 bg-gray-300 text-white font-extrabold rounded-lg"
              >
                SUBMIT
              </button>
            </div>
          </div>
          <!-- order optional end
         -->
        </div>
        <!-- order end -->
        <!-- no.2 personal detail seciton -->
        <div class="border border-gray-300 px-4 py-6">
          <div class="flex items-center gap-4 mb-4">
            <div
              class="w-[35px] h-[35px] bg-theme text-white font-extrabold text-xl flex items-center justify-center"
            >
              2
            </div>
            <h2 class="text-[22px] tracking-wide font-[300]">Personal details</h2>
          </div>

          <div class="p-4 space-y-6">
            <div class="relative w-full">
              <input
                type="text"
                class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
              />
              <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">Email</p>
            </div>
            <div class="flex gap-4">
              <div class="relative w-full">
                <input
                  type="text"
                  class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
                />
                <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">First Name</p>
              </div>
              <div class="relative w-full">
                <input
                  type="text"
                  class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
                />
                <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">Last Name</p>
              </div>
            </div>
            <div class="relative w-full">
              <input
                type="text"
                class="w-full border border-gray-500 rounded-lg placeholder-font-100 px-4 py-3"
              />
              <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">
                Mobile Number
              </p>
            </div>
            <button class="w-full py-3 bg-gray-300 text-white font-extrabold rounded-lg">
              SAVE
            </button>
          </div>
        </div>
        <!-- personal detail end -->
      </div>
      <div class="w-1/3 fixed right-5 fixed">
        <h3 class="text-md font-bold">Your order from :</h3>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";

//component
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
</script>
