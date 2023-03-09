<template>
  <div
    @mouseenter="isHover = true"
    @mouseleave="isHover = false"
    class="w-full relative max-h-[250px] h-[250px] cursor-pointer"
  >
    <div class="h-full overflow-hidden">
      <img
        :src="image"
        :class="
          isHover
            ? 'scale-105 transition ease-in duration-200 '
            : 'transition ease-out duration-200'
        "
        class="object-fill h-full"
      />
    </div>
    <div class="text-2xl text-white font-[900] absolute left-5 top-[200px] z-20">
      {{ city }}
    </div>
    <div
      v-if="isHover"
      class="absolute flex justify-between items-center w-full top-[52px]"
    >
      <div class="text-[180px] -ml-3 font-[900] text-theme opacity-50">
        {{ cityStartLetter }}
      </div>

      <div class="">
        <div class="mt-20"></div>

        <div class="py-2 px-4 bg-theme text-white rounded-md text-2xl max-h-[50px]">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { toRefs } from "vue";
import { ref, computed } from "vue";
const props = defineProps({
  city: String,
  image: Image,
});

const cityStartLetter = computed(() => {
  return city.value.charAt(0);
});
const isHover = ref(false);
const { city, image } = toRefs(props);
</script>
