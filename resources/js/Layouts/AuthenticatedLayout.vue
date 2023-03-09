<script setup>
import { ref } from "vue";
// import ApplicationLogo from '@/Components/ApplicationLogo.vue';
// import Dropdown from '@/Components/Dropdown.vue';
// import DropdownLink from '@/Components/DropdownLink.vue';
// import NavLink from '@/Components/NavLink.vue';
// import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <!-- navbar -->
  <nav
    id="nav-bar"
    class="fixed top-0 w-full bg-white z-50 flex h-[60px] justify-between items-center border-b border-gray-300 shadow-lg"
  >
    <div class="h-full pl-4">
      <img src="/images/logo.png" alt="" width="170" />
    </div>
    <div class="flex w-[200px] h-full pr-2">
      <div class="w-1/4 flex items-center justify-center border-l border-gray-200">
        <span class="text-[14px] font-light text-slate-500">MY</span>
      </div>
      <div
        class="w-2/4 flex items-center justify-center space-x-2 border-x border-gray-200"
      >
        <span><i class="fa fa-user-circle text-2xl text-theme -"></i></span>
        <span class="text-xs font-medium tracking-wider">LOGIN</span>
      </div>
      <div class="w-1/4 flex items-center justify-center">
        <i class="fa-solid fa-bag-shopping text-theme -mt-1 text-[23px]"></i>
      </div>
    </div>
  </nav>
  <main class="min-w-screen min-h-screen overflow-hidden mt-14">
    <slot></slot>
  </main>

  <footer
    id="footer"
    class="w-full mt-20 border-t border-gray-300 shadow-md px-[100px] py-10"
  >
    <div class="flex">
      <div class="w-1/3">
        <div class="text-md text-slate-700 font-light">2023 foodpanda</div>
      </div>
      <div class="w-2/3 flex">
        <div class="w-full space-y-4">
          <div class="text-slate-700 font-light text-sm">Press</div>
          <div class="text-slate-700 font-light text-sm">Help Center</div>
          <div class="text-slate-700 font-light text-sm">Terms and Conditions</div>
          <div class="text-slate-700 font-light text-sm">Privacy and Policy</div>
          <div class="text-slate-700 font-light text-sm">How foodpanda works</div>
        </div>
        <div class="w-full space-y-4">
          <div class="text-slate-700 font-light text-sm">Press</div>
          <div class="text-slate-700 font-light text-sm">Help Center</div>
          <div class="text-slate-700 font-light text-sm">Terms and Conditions</div>
          <div class="text-slate-700 font-light text-sm">Privacy and Policy</div>
          <div class="text-slate-700 font-light text-sm">How foodpanda works</div>
        </div>
        <div class="w-full space-y-4">
          <div class="text-slate-700 font-light text-sm">Press</div>
          <div class="text-slate-700 font-light text-sm">Help Center</div>
          <div class="text-slate-700 font-light text-sm">Terms and Conditions</div>
        </div>
      </div>
    </div>
  </footer>
</template>
