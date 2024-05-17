<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { IconChevronDown } from "@tabler/icons-vue";
import { computed, inject } from "vue";

const props = defineProps({
  item: Object,
});

const Splade = inject("$splade");

const hasActiveChild = computed(() => {
  function hasActiveItem(items) {
    return items.some(item => item.active || hasActiveItem(item.children));
  }

  return hasActiveItem(props.item.children);
});

function visitPath(path) {
  Splade.visit(path);
}
</script>

<template>
  <button
    v-if="!item.children.length"
    :class="[
      'group flex w-full items-center rounded-md py-2 px-3 text-sm',
      'hover:bg-gray-300',
      item.active ? 'font-semibold text-gray-800' : 'font-medium text-gray-600',
    ]"
    @click="visitPath(item.href)"
  >
    <component
      :class="[
        'mr-2 h-6 w-6 shrink-0 group-hover:text-gray-600',
        item.active ? 'text-gray-600' : 'text-gray-400',
      ]"
      :is="item.icon"
      v-if="item.icon" />

    <span>{{ item.label }}</span>
  </button>

  <Disclosure
    v-else
    v-slot="{open}"
    :default-open="hasActiveChild"
  >
    <DisclosureButton
      :class="[
        'group flex w-full items-center rounded-md py-2 px-3 text-left text-sm',
        'hover:bg-gray-300',
        open ? 'font-semibold text-gray-800' : 'font-medium text-gray-600',
      ]">

      <component
        :class="[
          'mr-2 h-6 w-6 shrink-0 group-hover:text-gray-600',
          open ? 'text-gray-600' : 'text-gray-400',
        ]"
        :is="item.icon"
        v-if="item.icon" />

      <span class="flex-1">{{ item.label }}</span>

      <IconChevronDown
        :class="[
          'h-6 w-6 shrink-0',
          open ? '-rotate-180 text-gray-600' : 'text-gray-400',
        ]"
      />
    </DisclosureButton>

    <DisclosurePanel class="ml-4">
      <NavItem
        v-for="child in item.children"
        :item="child" />
    </DisclosurePanel>
  </Disclosure>
</template>
