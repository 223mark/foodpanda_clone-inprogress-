<template>
  <Head title="Profile" />
  <AuthenticatedLayout>
    <div class="flex flex-col items-center justify-center py-6">
      <div class="max-w-[600px] w-[600px]">
        <div class="w-full relative border-b border-b-700">
          <div class="text-md font-bold text-center py-6">MY PROFILE</div>
          <i
            class="fa-solid fa-circle-exclamation text-theme text-lg absolute right-4 top-5"
          ></i>
        </div>
        <div class="py-4"></div>
        <!-- profile form -->
        <div class="space-y-8">
          <InputTag
            label="First Name"
            inputType="text"
            :inputValue="$page.props.auth.user.name"
          />
          <InputTag label="Last Name" inputType="text" />
          <InputTag label="Mobile Number" inputType="number" />

          <div class="flex justify-end">
            <button class="p-3 bg-gray-300 text-white rounded-lg">Save</button>
          </div>
        </div>
        <!-- profile form end -->
      </div>

      <!-- email section -->
      <div class="max-w-[600px] w-[600px]">
        <div class="w-full border-b border-b-700">
          <div class="text-md font-bold text-center py-6">EMAIL</div>
        </div>
        <div class="py-4"></div>
        <!-- email form -->
        <div class="space-y-8">
          <InputTag label="Email" inputType="email" />

          <div class="flex justify-end">
            <button class="p-3 bg-gray-300 text-white rounded-lg">Save</button>
          </div>
        </div>
        <!-- email form end -->
      </div>

      <!-- email end -->

      <!-- password section -->
      <div class="max-w-[600px] w-[600px] pb-5 border-b border-gray-300">
        <div class="w-full border-b border-b-700">
          <div class="text-md font-bold text-center py-6">PASSWORD</div>
        </div>
        <div class="py-4"></div>
        <!-- password form -->
        <div class="space-y-8">
          <InputTag label="Current Password" inputType="password" />
          <InputTag label="New Password" inputType="password" />

          <div class="flex justify-end">
            <button class="p-3 bg-gray-300 text-white rounded-lg">Save</button>
          </div>
        </div>
        <!-- password form end -->
      </div>
      <!-- passwordd end -->

      <div class="max-w-[600px] w-[600px]">
        <h2 class="font-medium text-gray-500 text-md text-center pt-6">
          You can delete your account and personal data associated with it
        </h2>
        <div class="py-6"></div>
        <h1
          class="text-lg text-center font-extrabold text-theme cursor-pointer hover:text-red-300"
        >
          DELETE MY ACCOUNT
        </h1>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";

//component
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputTag from "@/Components/InputTag.vue";
</script>
