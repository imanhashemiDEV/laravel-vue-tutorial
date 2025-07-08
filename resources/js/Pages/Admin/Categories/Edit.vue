<template>
 <AdminMainLayout>
     <main class="main-content">
         <div class="card">
             <div class="card-body">
                 <div class="container">
                     <h4 class="card-title">ویرایش دسته بندی</h4>
                     <form @submit.prevent="updateCategory">
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">عنوان دسته بندی</label>
                             <div class="col-sm-10">
                                 <input v-model="form.title" type="text" class="form-control text-left"  dir="rtl" name="name">
                             </div>
                         </div>
                         <div class="form-group row">
                             <button type="submit" class="btn btn-success btn-uppercase">
                                 <i class="ti-check-box m-r-5"></i> ذخیره
                             </button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </main>
 </AdminMainLayout>
</template>
<script setup>
import AdminMainLayout from "@/Pages/Admin/AdminMainLayout.vue";
import {useForm} from "@inertiajs/vue3";

const prop = defineProps({
    'category':Object
})

const form = useForm({
    'title':prop.category.title,
})

const updateCategory = ()=> form.put(route('categories.update',prop.category.id))
</script>
