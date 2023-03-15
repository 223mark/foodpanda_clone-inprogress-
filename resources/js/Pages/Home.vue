<template>
  <Head title="Home" />

  <AuthenticatedLayout>
    <!-- hero section -->
    <div
      class="bg-white h-[90vh] min-w-full flex flex-col items-baseline justify-center"
      id="hero-section"
    >
      <div class="w-full">
        <div class="text-4xl tracking-wider font-hair text-gray-800">
          It's the food and groceries you love, delivered
        </div>
      </div>
      <div class="py-8"></div>
      <div
        class="max-w-[1000px] w-[1000px] flex justify-start p-4 space-x-2 border border-gray-200 shadow-lg rounded-md bg-white ml-[80px]"
      >
        <div class="w-3/5">
          <div class="relative">
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
        <div class="w-2/5 flex justify-center items-center">
          <div class="w-9/12">
            <button
              class="px-12 py-4 text-white font-extrabold text-[15px] rounded-lg bg-theme w-full hover:bg-red-400"
            >
              Delivery
            </button>
          </div>
          <div class="w-3/12 flex items-center justify-center">
            <span class="text-md font-light text-gray-700 text-center tracking-wide"
              >or</span
            >
          </div>
          <div class="w-9/12">
            <button
              class="px-12 py-4 text-white font-extrabold text-[15px] rounded-lg bg-theme w-full hover:bg-red-400"
            >
              Pick-Up
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- hero end -->
    <!-- partner section -->
    <div class="relative w-full -mb-[100px]">
      <div class="relative h-[70vh]">
        <div class="relative pl-[80px]">
          <div
            class="text-[120px] opcaity-10 font-extrabold text-gray-200 tracking-wider"
          >
            Partners
          </div>
          <div class="absolute top-[90px]">
            <span class="text-2xl font-[100] text-slate-800 tracking-wide">
              You prepare the food, we handle the best.
            </span>
          </div>
        </div>
        <div
          class="absolute w-full h-full top-[135px] overflow-auto"
          id="partner-section"
        ></div>
      </div>
      <div
        class="bg-white px-6 py-6 space-y-2 rounded-lg w-[500px] bottom-[130px] relative left-[80px] border border-gray-graylish shadow-lg"
      >
        <div class="font-thin pb-4 text-xl tracking-wider text-gray-800">
          List your restaurant or shop on foodpanda
        </div>
        <div class="font-hairline text-md tracking-wide text-gray-600">
          Would you like millions of new customers to enjoy your amazing food and
          groceries? So would we!
        </div>
        <div class="font-hairline text-md tracking-wide text-gray-600">
          It's simple: we list your menu and product lists online, help you process
          orders, pick them up, hungry pandas - in a heartbeat!
        </div>
        <div class="font-hairline text-md tracking-wide text-gray-600">
          and deliver them to hungry pandas - in a heartbeat!
        </div>
        <div class="py-4"></div>
        <button
          class="w-full bg-theme hover:bg-red-300 py-2 text-white text-md rounded-md"
        >
          Get started
        </button>
      </div>
    </div>
    <!-- partner end -->

    <!-- cities section -->
    <div class="px-[80px]">
      <div class="relative">
        <div class="text-[120px] opcaity-10 font-extrabold text-gray-200 tracking-wider">
          Citites
        </div>
        <div class="absolute top-[90px]">
          <span class="text-2xl font-[100] text-slate-800 tracking-wide">
            Find us in these cities many more!
          </span>
        </div>
      </div>

      <div class="grid grid-cols-5 gap-4 -mt-[50px]">
        <Link :href="route('resturants#index')">
          <CityCard city="Yangon" image="/images/Yangon.webp" />
        </Link>
        <CityCard city="Mandalay" image="/images/mandalay.webp" />
        <CityCard city="Mawlamyine" image="/images/mawlamyine.webp" />
        <CityCard city="Yangon" image="/images/Yangon.webp" />
        <CityCard city="Yangon" image="/images/Yangon.webp" />
        <CityCard city="Yangon" image="/images/Yangon.webp" />
        <CityCard city="Mandalay" image="/images/mandalay.webp" />
        <CityCard city="Mawlamyine" image="/images/mawlamyine.webp" />
        <CityCard city="Yangon" image="/images/Yangon.webp" />
        <CityCard city="Yangon" image="/images/Yangon.webp" />
      </div>
    </div>
    <!-- cites end -->

    <!-- app section -->
    <div class="relative h-[40vh]">
      <div class="relative pl-[80px]">
        <div class="text-[120px] opcaity-10 font-extrabold text-gray-200 tracking-wider">
          App
        </div>
        <div class="absolute top-[90px]">
          <span class="text-2xl font-[100] text-slate-800 tracking-wide">
            Put us in your pocket.
          </span>
        </div>
      </div>

      <div class="flex pl-[80px] bg-theme absolute w-full h-full top-[135px]">
        <div class="w-1/2 flex flex-col py-5 space-y-8">
          <div class="">
            <div class="text-3xl pb-2 font-medium text-white tracking-wide">
              Download the food and groceries you love
            </div>
            <p class="text-sm font-medium text-[#f3d4ff] tracking-wide">
              It's all at your fingertips - the restaurants and shops you love. Find the
              right food and groceries to suit your mood, and make the first bite last. Go
              ahead, download us. Go ahead, download us
            </p>
          </div>
          <div class="grid grid-cols-3 gap-3">
            <div class="w-full h-[50px]">
              <img src="/images/apple.png" alt="" class="h-full w-full" />
            </div>
            <div class="w-full h-[50px]">
              <img src="/images/google.png" alt="" class="h-full w-full" />
            </div>
            <div class="w-full h-[50px]">
              <img src="/images/huaweigallery.png" alt="" class="h-full w-full" />
            </div>
          </div>
        </div>
        <div class="w-1/2 relative">
          <div class="w-full h-[80vh]">
            <img
              src="/images/foodpandaimg.webp"
              alt=""
              class="absolute -top-20 right-0"
            />
          </div>
        </div>
      </div>
    </div>

    <!-- app end -->

    <!-- About us section -->
    <div class="px-[80px] py-4 mt-[170px] space-y-4">
      <h2 class="md:text-4xl font-extrabold tracking-wide text-gray-900">
        Order food online from the best restaurants and shops on foodpanda Myanmar
      </h2>
      <p class="leading-normal font-[200]">
        Hungry? Had a long and busy day? You’ve come to the right place. foodpanda offers
        fast and convenient food and groceries delivery from the best restaurants and
        businesses near you. Whether you’re craving pizza, burger, Japanese or want to
        avoid the weekly shop, foodpanda has an extensive list of the best restaurants in
        Myanmar as well as delivery from top grocery stores. Fancy some Kyay Oh? How about
        a scrumptious bowl of Shan noodles and roasted duck? We have plenty of restaurants
        in Yangon available for you to order food online and delivered straight to your
        location.
      </p>
      <p class="leading-normal font-[100]">
        Fancy some Kyay Oh? How about a scrumptious bowl of Shan noodles and roasted duck?
        We have plenty of restaurants in Yangon available for you to order food online and
        delivered straight to your location.
      </p>
      <div class="">
        <h4 class="md:text-2xl font-extrabold tracking-wide text-gray-900">
          Why order food on foodpanda?
        </h4>
        <div class="pt-4">
          <div class="space-x-2">
            <i class="fa-solid fa-check text-lg text-theme"></i>
            <span class="text-gray-600 font-[100] text-md">
              Selection of premium restaurants, featuring diverse cuisines.
            </span>
          </div>
          <div class="space-x-2">
            <i class="fa-solid fa-check text-lg text-theme"></i>
            <span class="text-gray-600 font-[100] text-md">
              Online grocery shopping, delivered to your home.
            </span>
          </div>
          <div class="space-x-2">
            <i class="fa-solid fa-check text-lg text-theme"></i>
            <span class="text-gray-600 font-[100] text-md">
              High-quality delivery service.
            </span>
          </div>
          <div class="space-x-2">
            <i class="fa-solid fa-check text-lg text-theme"></i>
            <span class="text-gray-600 font-[100] text-md">
              Live chat feature to give you instant help when you need it.
            </span>
          </div>
        </div>
      </div>
      <div class="space-y-2">
        <h4 class="md:text-2xl font-extrabold tracking-wide text-gray-900">
          Choose from dozens of cuisines and order online for home delivery
        </h4>
        <p class="text-md font-[100] text-gray-600 tracking-wide leading-normal">
          At foodpanda Myanmar, we make sure you have the best food delivery experience.
          Offering food ranging from steaks, sushi, pork sticks, Biryani, fried rice, or
          Mont Hin Kha, foodpanda has got you covered. Get your coffee fix with Tea Land
          or Cheese O'Tea. Enjoy amazing cuisine at Inle A Mhat Ta Ya or Gong Cha anytime.
        </p>
      </div>
      <div
        class="text-xl p-4 font-[100] text-gray-600 tracking-wide hover:bg-gray-400 transition ease-in duration-400 cursor-pointer"
      >
        Click Here To Read More
      </div>
    </div>
    <!-- About us end -->
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

//components
import CityCard from "@/Components/CityCard.vue";
</script>

<style>
#hero-section {
  background-image: url("/images/foodpandahero.jpg");
  background-repeat: no-repeat;
  background-position: right 0;
  background-size: contain;
}
#partner-section {
  background-image: url("/images/home-vendor-mm.webp");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top 50% right 0;
}
</style>
