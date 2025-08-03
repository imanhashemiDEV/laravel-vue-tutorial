<template>
    <div class="card thumb-post p-3 mb-3">
        <h2 class="bg-light py-2 px-4 mt-2 mb-4 bright radius15">آخرین مطالب</h2>
        <ul class="fa12">
            <li v-for="post in last_posts" :key="post.id">
                <div class="d-flex flex-row">
                    <a href="#"><img :src="post.src" /></a>
                    <div class="m-2">
                        <p><a href="#">{{post.title}}</a></p>
                        <span>{{moment(post.created_at).locale('fa').format('YYYY/MM/DD')}}</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>
<script setup>
import moment from 'jalali-moment'

defineProps({
    'last_posts':Array,
})
</script>


