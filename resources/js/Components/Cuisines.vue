<template>
  <!-- <Carousel :items-to-show="3.5" :wrap-around="true">
    <Slide v-for="slide in 6" :key="slide">
      <div class="carousel__item">
        <img id="slider" :src="`images/carousel/carousel_${slide}.webp`" alt="" />
      </div>
    </Slide>

    <template #addons>
      <Navigation />
    </template>
  </Carousel> -->
  <Carousel :items-to-show="3.5" :wrap-around="true">
    <Slide v-for="slide in 6" :key="slide">
      <div class="carousel__item">
        <img id="slider" :src="`/images/carousel/carousel_${slide}.webp`" alt="" />
      </div>
    </Slide>

    <template #addons>
      <Navigation />
    </template>
  </Carousel>
</template>

<script setup>
import { Carousel, Navigation, Slide } from "vue3-carousel";

import "vue3-carousel/dist/carousel.css";
</script>

<style>
.carousel__slide {
  margin: 10px;
}

.carousel__prev,
.carousel__next {
  color: black;
  font-size: 20px;
  padding: 200px 10px;
}

.carousel__prev :hover {
  background-color: #e21b70;
  color: #ffffff;
}

.carousel__next :hover {
  background-color: #e21b70;
  color: #ffffff;
}
</style>
