<template>
 <AdminMainLayout>
     <main class="main-content">
         <div class="card">
             <p class="alert alert-success" v-if="flashMessage">
                 {{flashMessage}}
             </p>
             <div class="card-body">
                 <div class="table overflow-auto" tabindex="8">
                     <div class="form-group row">
                         <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                         <div class="col-sm-10">
                             <input type="text" class="form-control text-left" dir="rtl">
                         </div>
                     </div>
                     <table class="table table-striped table-hover">
                         <thead class="thead-light">
                         <tr>
                             <th class="text-center align-middle text-primary">ردیف</th>
                             <th class="text-center align-middle text-primary">عکس</th>
                             <th class="text-center align-middle text-primary">عنوان مقاله</th>
                             <th class="text-center align-middle text-primary">دسته بندی</th>
                             <th class="text-center align-middle text-primary"> نویسنده</th>
                             <th class="text-center align-middle text-primary">ویرایش</th>
                             <th class="text-center align-middle text-primary">حذف</th>
                             <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr v-for="(post,index) in posts.data" :key="post.id">
                             <td class="text-center align-middle">{{post.id}}</td>
                             <td class="text-center align-middle">
                                 <figure class="avatar avatar">
                                     <img :src="post.src" class="rounded-circle" alt="image">
                                 </figure>
                             </td>
                             <td class="text-center align-middle">{{post.title}}</td>
                             <td class="text-center align-middle">{{post.category.title}}</td>
                             <td class="text-center align-middle">{{post.user.name}}</td>
                             <td class="text-center align-middle">
                                 <Link class="btn btn-outline-info" :href="route('posts.edit',post.id)">
                                     ویرایش
                                 </Link>
                             </td>
                             <td class="text-center align-middle">
                                 <Link method="delete" class="btn btn-outline-danger" :href="route('posts.destroy',post.id)">
                                     حذف
                                 </Link>
                             </td>
                             <td class="text-center align-middle">{{moment(post.created_at).locale('fa').format('YYYY/MM/DD')}}</td>
                         </tr>
                         </tbody>
                     </table>
                     <div style="margin: 40px !important;"
                          class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                         <Pagination :pagination="posts" />
                     </div>
                 </div>
             </div>
         </div>
     </main>
 </AdminMainLayout>
</template>
<script setup>
import AdminMainLayout from "@/Pages/Admin/AdminMainLayout.vue";
import {Link , usePage } from "@inertiajs/vue3";
import { computed } from 'vue'
import Pagination from "@/Pages/Admin/Partials/Pagination.vue";
import moment from 'jalali-moment'

defineProps({
    'posts':Object
})

const page = usePage()

const flashMessage = computed(()=> page.props.flash.success)

</script>
