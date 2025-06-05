<template>
  <ul class="flex gap-2">
    <li><Link href="/">homePage</Link></li>
    <li><Link href="/posts">Posts</Link></li>
  </ul>
  <slot></slot>
  <footer>
    Footer Content
  </footer>
</template>
<script setup>
  import {Link} from "@inertiajs/vue3";
</script>
