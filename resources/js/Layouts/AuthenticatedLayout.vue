<template>
  <!-- navbar -->
  <nav
    id="nav-bar"
    class="fixed top-0 w-full bg-white z-50 flex h-[60px] justify-between items-center border-b border-gray-300 shadow-lg"
  >
    <Link href="/" class="w-1/4 h-full pl-4">
      <img src="/images/logo.png" alt="" width="170" />
    </Link>

    <div
      class="w-2/4 relative border-l border-gray-200 flex flex-col justify-center items-start px-4 h-full cursor-pointer"
    >
      <div
        @click="addAddress = !addAddress"
        class="flex items-center justify-center space-x-4"
      >
        <h4 class="text-theme font-hairline text-[12px]">DELIVERING TO :</h4>
        <div class="">
          <i
            class="fa-solid fa-location-dot text-theme text-md p-[10px] rounded-full bg-theme bg-opacity-10"
          ></i>
        </div>
        <div class="space-x-2">
          <span class="text-theme font-hairline text-sm">New Address</span>
          <span class="text-theme font-hairline text-sm">Select your address</span>
          <i
            v-if="!addAddress"
            class="fa-solid fa-chevron-down text-theme font-[900] text-sm mt-1"
          ></i>
          <i v-else class="fa-solid fa-chevron-up text-theme font-[900] text-sm mt-1"></i>
        </div>
      </div>

      <div
        v-if="addAddress"
        :class="
          addAddress
            ? 'transition ease-in duration-200'
            : 'transition ease-out duration-200'
        "
        class="w-full left-0 absolute -bottom-[100px] z-50 flex justify-start p-4 space-x-2 border border-gray-200 shadow-lg rounded-md bg-white"
      >
        <div class="w-11/12">
          <div class="relative w-full py-2">
            <input
              type="text"
              class="w-full pl-4 py-3 placeholder-gray-600 border border-gray-300 rounded-md"
              placeholder="Your street and street number"
            />
            <div class="absolute right-[20px] bottom-[18px]">
              <i class="fa-solid fa-location-crosshairs text-xl text-theme"></i>
            </div>
          </div>
        </div>
        <div class="w-1/12 flex justify-center items-center">
          <div class="w-full">
            <button
              class="w-full py-3 text-white font-extrabold text-[15px] rounded-lg bg-theme w-full hover:bg-white hover:text-theme"
            >
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="w-1/4 flex w-[350px] h-full pr-2">
      <div class="w-1/4 flex items-center justify-center border-l border-gray-200">
        <span class="text-[14px] font-light text-slate-500">MY</span>
      </div>
      <div
        @click="accountOption = !accountOption"
        v-if="$page.props.auth.user != null"
        class="w-2/4 flex items-center justify-center space-x-2 border-x border-gray-200 cursor-pointer relative"
      >
        <span><i class="fa fa-user-circle text-2xl text-theme"></i></span>

        <span class="text-[12px] font-hairline uppercase tracking-wider">{{
          $page.props.auth.user.name
        }}</span>
        <!-- profile drop down -->
        <div
          v-if="accountOption"
          class="absolute -bottom-[173px] z-50 right-0 bg-white w-[200px] border border-gray-300"
        >
          <div class="py-2 px-4 border-b-2 border-gray-300 space-y-3">
            <div class="text-sm font-hairline hover:text-theme cursor-pointer">
              Orders & rendering
            </div>
            <div class="">
              <Link
                class="text-sm font-hairline hover:text-theme cursor-pointer"
                :href="route('profile#index')"
              >
                Profile
              </Link>
            </div>
            <div class="text-sm font-hairline hover:text-theme cursor-pointer">
              Vounchers
            </div>
          </div>
          <div class="py-2 px-4 space-y-3">
            <div class="text-sm font-hairline hover:text-theme cursor-pointer">
              Help Center
            </div>
            <div class="text-sm font-hairline hover:text-theme cursor-pointer">
              Log out
            </div>
          </div>
        </div>

        <!-- profile drop down end -->
      </div>
      <div
        v-else
        class="w-2/4 flex items-center justify-center space-x-2 border-x border-gray-200"
      >
        <span><i class="fa fa-user-circle text-2xl text-theme"></i></span>
        <span class="text-xs font-extrabold tracking-wider">LOGIN</span>
      </div>
      <div
        v-if="$page.props.auth.user != null"
        class="w-1/4 flex items-center justify-center"
      >
        <Link :href="route('favourite#index')">
          <i class="fa-regular fa-heart text-theme text-[23px]"></i>
        </Link>
      </div>
      <div class="w-1/4 flex items-center justify-center border-l border-gray-300">
        <i class="fa-solid fa-bag-shopping text-theme -mt-1 text-[23px]"></i>
      </div>
    </div>
  </nav>

  <div
    v-if="addAddress"
    class="fixed top-[60px] z-20 fixed w-full h-full bg-gray-100 bg-opacity-70"
  ></div>

  <main class="min-w-screen min-h-screen overflow-hidden mt-14">
    <slot></slot>
  </main>

  <footer
    id="footer"
    class="w-full mt-20 border-t border-gray-300 shadow-md px-[100px] py-10 h-[300px]"
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

<script setup>
import { ref } from "vue";
// import ApplicationLogo from '@/Components/ApplicationLogo.vue';
// import Dropdown from '@/Components/Dropdown.vue';
// import DropdownLink from '@/Components/DropdownLink.vue';
// import NavLink from '@/Components/NavLink.vue';
// import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

const addAddress = ref(false);
const accountOption = ref(false);
// const userInfo = computed(() => {

// })
</script>
