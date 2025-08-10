<template>
    <ul v-if="pagination.total > pagination.per_page" class="pagination  justify-content-center">
        <li v-if="pagination.prev_page_url===null" class="page-item disable">
            <Link class="page-link" href="#">«</Link>
        </li>
        <li v-if="pagination.prev_page_url!==null" class="page-item">
            <Link class="page-link" :href="pagination.prev_page_url">«</Link>
        </li>
        <li v-for="(link,index) in pagination.links" :key="index" class="page-item" :class="{active:link.active}">
            <Link class="page-link" v-if="link.url !== null && parseInt(link.label)" :href="link.url" v-html="link.label"></Link>
        </li>
        <li class="page-item" v-if="pagination.next_page_url===null">
            <Link class="page-link" href="#">»</Link>
        </li>
        <li class="page-item" v-if="pagination.next_page_url!==null">
            <Link class="page-link" :href="pagination.next_page_url">»</Link>
        </li>
    </ul>
</template>
<script setup>

import {Link} from "@inertiajs/vue3";

defineProps({
    'pagination':Object
})
</script>




