<template>
        <MainLayout>
            <section class="container mb-4">
                <div class="row">
                    <div class="col-xl-3 order-xl-0 order-1 mb-3">
                        <Categories :categories="categories"/>
                        <LastPosts :last_posts="last_posts"/>
                    </div>
                    <div class="col-xl-9  order-xl-1 order-0 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h2>نمایش <span class="text-primary">جزئیات</span></h2>
                            </div>
                            <div class="card-body p-sm-4">
                                <div class="item mb-4">

                                    <div class="row">
                                        <div class="col-lg-12 mb-3 text-justify ">
                                            <a href="#" class="mb-3"><h2>{{post.title}}</h2></a>
                                            <img :src="post.src" alt="" class="img-fluid my-4 blogimg radius15" />
                                            <p>{{post.description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </MainLayout>
</template>

<script setup>

import MainLayout from "@/Pages/Front/MainLayout.vue";
import LastPosts from "@/Pages/Front/Partials/LastPosts.vue";
import Categories from "@/Pages/Front/Partials/Categories.vue";

defineProps({
    'post':Object,
    'last_posts':Array,
    'categories':Array,
})
</script>
