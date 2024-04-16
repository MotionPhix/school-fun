<script setup>
import NavItem from "../components/NavItem.vue";
import { IconSmartHome, IconChartLine, IconPhoto } from "@tabler/icons-vue";

const navItems = [
  { href: "#", active: false, label: "Dashboard", children: [], icon: IconSmartHome },
  {
    href: "#", active: false,
    label: "Posts",
    children: [
      {href: "#", active: false, label: "All posts", children: [], icon: null},
      {href: "#", active: false, label: "Add new", children: [], icon: null},
      {href: "#", active: false, label: "Categories", children: [], icon: null},
    ],
    icon: IconChartLine,
  },
  {
    href: "#", active: false,
    label: "Media",
    children: [
      {href: "#", active: false, label: "Library", children: [], icon: null},
      {
        href: "#", active: false,
        label: "Add new",
        children: [{href: "#", active: false, label: "Third level", children: [], icon: null}],
        icon: null,
      },
    ],
    icon: IconPhoto,
  },
];
</script>
<template>
  <div class="w-64 shrink-0 py-4">

    <nav class="mt-2 px-2">

      <NavItem
        :item="item"
        v-for="item in navItems"
        :key="item.label"
      />

    </nav>

  </div>
</template>
