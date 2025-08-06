<template>
    <div class="card pcountry cati p-3 mb-3">
        <div class="d-flex flex-row justify-content-between bg-light py-2 px-4 my-2 bright radius15">
            <h2>دسته بندی ها</h2>
        </div>
        <ul class="list-unstyled">
            <li><Link :href="route('home')"><span>همه دسته بندی ها</span></Link></li>
            <li v-for="category in categories" :key="category.id"><Link :href="route('home',category.id)"><span>{{category.title}} ({{category.posts_count}}) </span></Link></li>
        </ul>
    </div>
</template>
<script setup>

import {Link} from "@inertiajs/vue3";

defineProps({
    'categories':Array,
})
</script>




