<script setup>
import { onMounted, ref } from "vue";

defineProps(["modelValue", "inputType", "inputValue", "label"]);

defineEmits(["update:modelValue"]);

const input = ref(null);

// onMounted(() => {
//   if (input.value.hasAttribute("autofocus")) {
//     input.value.focus();
//   }
// });

// defineExpose({ focus: () => input.value.focus() });
</script>

<template>
  <div class="relative">
    <input
      :type="inputType"
      :value="inputValue != null ? inputValue : ''"
      class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 border rounded-lg placeholder-font-100 px-4 py-3"
    />
    <p class="text-[10px] bg-white absolute -top-2 left-3 px-2">{{ label }}</p>
  </div>
  <!-- <input
    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
    :value="modelValue"
    @input="$emit('update:modelValue', $event.target.value)"
    ref="input"
  /> -->
</template>
