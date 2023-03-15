<template>
  <Head title="Resturants" />

  <AuthenticatedLayout>
    <!-- resturant serach || hero  section -->
    <div
      v-if="$page.props.auth.user === null"
      class="bg-white h-[90vh] min-w-full flex flex-col items-baseline justify-center"
      id="hero-section"
    >
      <div class="max-w-xl">
        <div
          class="text-4xl text-left leading-normal tracking-wider font-[100] text-gray-900"
        >
          foodpanda Food Delivery in <b>ရန်ကုန်တိုင်းဒေသကြီး</b> | foodpanda Myanmar
        </div>
      </div>
      <div class="py-5"></div>
      <div
        class="max-w-[1000px] w-[1000px] flex justify-start p-4 space-x-2 border border-gray-200 shadow-lg rounded-md bg-white ml-[80px]"
      >
        <div class="w-3/4">
          <div class="relative w-full">
            <input
              type="text"
              class="w-full pl-4 py-4 placeholder-gray-600 border border-gray-300 rounded-md"
              placeholder="Your street and street number"
            />
            <div class="absolute right-[20px] bottom-[15px]">
              <i class="fa-solid fa-location-crosshairs text-xl text-theme"></i>
            </div>
          </div>
        </div>
        <div class="w-1/4 flex justify-center items-center">
          <div class="w-full">
            <button
              class="px-12 py-4 text-white font-extrabold text-[15px] rounded-lg bg-theme w-full hover:bg-white hover:text-theme"
            >
              Find your favourites
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- resturant search || hero end -->
    <!-- ads section -->
    <div
      v-if="$page.props.auth.user === null"
      class="w-[1200px] bg-red-500 mx-auto border border-gray-300 flex flex-col items-center justify-center h-[30vh]"
      id="ads-section"
    >
      <div class="text-2xl text-theme pb-2 font-bold">အေးဆေးပဲ foodpanda လိုက်!</div>
      <div class="text-sm text-theme">
        အစားအသာက်နဲ့ ကုန်စုံ ဘာပဲလိုလို foodpanda မှာပဲရမဲ့ ၅၀%ထိ
        အမိုက်စားလျှော့ဈေးများနဲ့ အတန်ဆုံးမှာယူလိုက်ပါ။
      </div>
    </div>

    <!-- ads end -->
    <!-- fixed promition section -->
    <div
      v-if="$page.props.auth.user != null"
      class="bg-red-100 text-center fixed w-full text-xs z-30 font-bold text-theme py-2"
    >
      Enjoy 30% off with WAVE3K on your favourites via WavePay
    </div>

    <!-- fixed promiton end -->
    <div class="py-2 mt-10"></div>
    <!-- main category -->
    <div
      v-if="$page.props.auth.user != null"
      class="w-1/2 grid grid-cols-3 gap-3 ml-[80px]"
    >
      <div
        class="flex justify-between h-[9vh] bg-white border-b-2 border-theme border-l border-l-gray-200 text-theme font-extrabold shadow-l-xl cursor-pointer"
      >
        <div class="w-1/2 flex items-end">
          <h2 class="font-bold text-lg pl-4">Delivery</h2>
        </div>
        <div class="w-1/2">
          <img src="/images/main/restaurants.webp" class="h-full w-full object-cover" />
        </div>
      </div>
      <div
        class="flex justify-between h-[9vh] bg-gray-200 border-b-2 hover:border-theme hover:bg-white border-l hover:border-l-gray-200 hover:text-theme hover:font-extrabold hover:shadow-l-xl cursor-pointer"
      >
        <div class="w-1/2 flex items-end">
          <h2 class="font-bold text-lg pl-4">Pick-Up</h2>
        </div>
        <div class="w-1/2">
          <img src="/images/main/pickup.webp" class="h-full w-full object-cover" />
        </div>
      </div>
      <div
        class="flex justify-between h-[9vh] bg-gray-200 border-b-2 hover:border-theme hover:bg-white border-l hover:border-l-gray-200 hover:text-theme hover:font-extrabold hover:shadow-l-xl cursor-pointer"
      >
        <div class="w-1/2 flex items-end">
          <h2 class="font-bold text-lg pl-4">Shops</h2>
        </div>
        <div class="w-1/2">
          <img src="/images/main/shop.webp" class="h-full w-full object-cover" />
        </div>
      </div>
    </div>
    <!-- main category end -->
    <div class="py-2"></div>
    <!-- search section -->
    <div v-if="$page.props.auth.user != null" class="pl-[80px]">
      <Search />
    </div>
    <!-- search end -->
    <div class="py-2"></div>
    <!-- carousel section -->
    <div v-if="$page.props.auth.user != null" class="px-[80px]">
      <PromotionCarousel></PromotionCarousel>
    </div>

    <!-- carousel end -->
    <!-- popular resturants section -->
    <div class="px-[80px] space-y-4">
      <h2 class="text-gray-700 text-3xl tracking-wider font-bold">Popular resturants</h2>
      <div class="grid grid-cols-4 gap-6">
        <ResturantCard />
        <ResturantCard />
        <ResturantCard />
        <ResturantCard />
        <ResturantCard />
        <ResturantCard />
        <ResturantCard />
        <ResturantCard />
      </div>
    </div>
    <!-- popular resturants end -->
    <div class="py-2"></div>
    <!-- close for now section -->
    <div class="px-[80px] space-y-4">
      <h2 class="text-gray-700 text-3xl tracking-wider font-bold">Closed for now</h2>
      <div class="grid grid-cols-4 gap-6">
        <div class="relative">
          <div class="cursor-pointer overflow-hidden relative opacity-50">
            <img
              src="/images/resturants/shanmalay.webp"
              class="w-full h-[200px] object-cover transition ease-in duration-200 hover:scale-105"
            />

            <div class="flex justify-between pt-2">
              <div class="font-extrabold text-[16px]">Shan Ma Lay (Noodles)</div>
              <div class="">
                <i class="fa-solid fa-star text-[#ffb413] text-sm"></i>
                <span class="text-sm pl-1"
                  >4.2/5 <span class="text-gray-400">(13)</span></span
                >
              </div>
            </div>
            <div class="space-x-2">
              <span class="font-[400] text-gray-900">$$$ ,</span>
              <span class="font-[100] text-gray-400">Noodles</span>
            </div>
            <div
              class="absolute left-0 top-6 px-4 py-1 bg-theme text-white font-extrabold text-sm rounded-r-lg"
            >
              CODE : EXTRA16 (MAX 4200)
            </div>
          </div>
          <div
            class="absolute top-20 left-16 z-20 px-2 py-1 bg-theme text-white font-extrabold text-xs opacity-100"
          >
            ORDER FOR LATER
          </div>
        </div>

      </div>
    </div>
    <!-- close for now end -->
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

//components
import PromotionCarousel from "@/Components/PromotionCarousel.vue";
import Search from "@/Components/Search.vue";
import ResturantCard from "@/Components/ResturantCard.vue";
</script>

<style>
#hero-section {
  background-image: url("/images/foodpandahero.jpg");
  background-repeat: no-repeat;
  background-position: right 0;
  background-size: contain;
}

#ads-section {
  background-image: url("/images/banner/foodpanda_banner.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top 30% right 0;
}
</style>
