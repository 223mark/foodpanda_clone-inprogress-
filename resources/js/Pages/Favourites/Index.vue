<template>
  <Head title="My Favourites" />
  <AuthenticatedLayout>
    <div class="px-[100px] py-6">
      <h2 class="text-4xl font-normal text-gray-700 tracking-wider">My Favourites</h2>
      <div class="py-4" />

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
  </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

//components
import ResturantCard from "@/Components/ResturantCard.vue";

const isHover = ref(false);
</script>
