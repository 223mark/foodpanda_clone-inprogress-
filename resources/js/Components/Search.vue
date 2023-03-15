<template>
  <div @mouseenter="isHover = true" @mouseleave="isHover = false" class="relative w-3/5">
    <div
      :class="
        isHover ? 'transition ease-in duration-500' : 'transition ease-out duration-500'
      "
      class="flex w-full border border-gray-300 shadow-md cursor-pointer"
    >
      <div class="w-4/5 h-[60px] relative">
        <input
          type="text"
          class="pl-10 w-full h-full border outline-none border-none"
          placeholder="Search for resturants, cuisines , and dishes"
        />
        <span class="absolute left-4 top-[18px]">
          <i class="fa-solid fa-magnifying-glass text-theme"></i>
        </span>
      </div>

      <div class="w-1/5 flex justify-between items-center px-4 border-l border-gray-300">
        <i class="fa-solid fa-arrow-down-wide-short text-theme"></i>
        <h4 class="font-bold text-md">FILTER</h4>
        <i class="fa-sharp fa-solid fa-chevron-down text-theme"></i>
      </div>
    </div>
    <!-- hover field -->
    <div
      class="w-3/5 flex border border-gray-300 shadow-md absolute top-0 w-full z-50"
      v-if="isHover"
    >
      <div class="bg-white w-full pl-4 pr-6">
        <div class="h-[60px] relative">
          <input
            type="text"
            class="pl-10 w-full h-full border outline-none border-none"
            placeholder="Search for resturants, cuisines , and dishes"
          />
          <span class="absolute left-4 top-[18px]">
            <i class="fa-solid fa-magnifying-glass text-theme"></i>
          </span>
        </div>
        <div class="">
          <h2 class="text-md tracking-wide font-[600] py-4">Recent searches</h2>
          <div class="flex justify-between items-center py-4">
            <div class="w-4/5 flex gap-4">
              <i class="fa-solid fa-clock-rotate-left"></i>
              <h6 class="text-md -mt-1 text-gray-600">kfc</h6>
            </div>
            <div class="w-1/5 flex justify-end">
              <i class="fa-solid fa-xmark"></i>
            </div>
          </div>
        </div>

        <div class="">
          <h2 class="text-md tracking-wide font-[600] py-4">Popular searches</h2>
          <div class="flex flex-wrap gap-4 py-4 px-2">
            <div
              class="cursor-pointer"
              v-for="(search, index) in popularSearchs"
              :key="index"
            >
              <p
                class="px-3 py-1 rounded-full border border-gray-300 font-hairline text-sm"
              >
                {{ search }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- hover end -->
  </div>
</template>

<script setup>
import { ref } from "vue";
const popularSearchs = [
  "kfc",
  "parsion cake and coffee",
  " မာလာရှမ်းကော",
  "bubble tea",
  "မဟာရန်ကုန်",
  " မုန့်ဟင်းခါး",
  "  မြန်မာထမင်းဆိုင်များ",
  "  bread talk",
  "pizza",
  "season bakery",
];

const isHover = ref(false);
</script>

<style lang="scss" scoped></style>
