<template>
    <ul v-if="pagination.total > pagination.per_page" class="pagination pagination-rounded pagination-sm mb-3">
        <li class="page-item disabled" v-if="pagination.prev_page_url===null">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                <i class="ti-angle-right"></i>
            </a>
        </li>
        <li class="page-item" v-if="pagination.prev_page_url!==null">
            <Link class="page-link" :href="pagination.prev_page_url" tabindex="-1" aria-disabled="true">
                <i class="ti-angle-right"></i>
            </Link>
        </li>
        <li v-for="(link,index) in pagination.links" :key="index" class="page-item" :class="{active:link.active}">
            <Link class="page-link" v-if="link.url !== null && parseInt(link.label)" :href="link.url" v-html="link.label"></Link>
        </li>
        <li class="page-item disabled" v-if="pagination.next_page_url===null">
            <a class="page-link" href="#">
                <i class="ti-angle-left"></i>
            </a>
        </li>
        <li class="page-item" v-if="pagination.next_page_url!==null">
            <Link class="page-link" :href="pagination.next_page_url">
                <i class="ti-angle-left"></i>
            </Link>
        </li>
    </ul>
</template>

<script setup>

import {Link} from "@inertiajs/vue3";

defineProps({
    'pagination':Object
})
</script>
