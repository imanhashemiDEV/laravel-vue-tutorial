<template>
    <div class="card pcountry cati p-3 mb-3">
        <div class="d-flex flex-row justify-content-between bg-light py-2 px-4 my-2 bright radius15">
            <h2>دسته بندی ها</h2>
        </div>
        <ul class="list-unstyled">
            <li v-for="category in categories" :key="category.id"><a href="#"><span>{{category.title}}</span></a></li>
        </ul>
    </div>
</template>
<script setup>

defineProps({
    'categories':Array,
})
</script>




