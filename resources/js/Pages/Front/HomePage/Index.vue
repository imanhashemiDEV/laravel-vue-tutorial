<template>
      <MainLayout>
          <section class="container mb-4">
              <div class="row">
                  <div class="col-xl-3 order-xl-0 order-1 mb-4">
                      <Categories :categories="categories"/>
                      <LastPosts :last_posts="last_posts"/>
                  </div>
                  <div class="col-xl-9  order-xl-1 order-0 mb-4">
                      <div class="row">
                          <div v-for="post in posts.data" :key="post.id" class="col-lg-4 col-sm-6 mb-4">
                              <div class="card" style="height: 350px; overflow: hidden;">
                                  <a href=""><img style="height: 200px;" class="card-img-top" :src="post.src" alt="Card image"></a>
                                  <div class="card-body">
                                      <h2 class="IRANSans_Bold"><a href="">{{post.title}}</a></h2>
                                      <span class="text-primary fa12 IRANSans_Medium"><a href="#">{{post.category.title}}</a></span>
                                      <p>
                                          {{post.short_description}}
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-12 text-center mx-auto">
                             <Pagination :pagination="posts"/>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </MainLayout>
</template>
<script setup>
import MainLayout from "@/Pages/Front/MainLayout.vue";
import Categories from "@/Pages/Front/Partials/Categories.vue";
import LastPosts from "@/Pages/Front/Partials/LastPosts.vue";
import Pagination from "@/Pages/Front/Partials/Pagination.vue";

defineProps({
    'posts':Object,
    'last_posts':Array,
    'categories':Array,
})
</script>
