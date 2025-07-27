<template>
 <AdminMainLayout>
     <main class="main-content">
         <div class="card">
             <div class="card-body">
                 <div class="overflow-hidden d-flex justify-content-center align-items-center">
                     <img style="height: 200px" :src="post.src" class="rounded-circle" alt="image">
                 </div>
                 <div class="container">
                     <h4 class="card-title">ویرایش مقاله</h4>
                     <form @submit.prevent="updatePost" enctype="multipart/form-data">
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">عنوان مقاله</label>
                             <div class="col-sm-10">
                                 <input v-model="form.title" type="text" class="form-control text-left"  dir="rtl" name="title">
                                 <p class="text-danger" v-if="form.errors.title">
                                     {{form.errors.title}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">دسته بندی</label>
                             <div class="col-sm-10">
                                 <select v-model="form.category_id" class="form-control" id="exampleFormControlSelect1">
                                     <option v-for="category in categories" :value="category.id">{{category.title}}</option>
                                 </select>
                                 <p class="text-danger" v-if="form.errors.category_id">
                                     {{form.errors.category_id}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">توضیحات کوتاه</label>
                             <div class="col-sm-10">
                                 <textarea v-model="form.short_description"  class="form-control text-left" dir="rtl" name="short_description"></textarea>
                                 <p class="text-danger" v-if="form.errors.short_description">
                                     {{form.errors.short_description}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">متن مقاله</label>
                             <div class="col-sm-10">
                                 <textarea v-model="form.description"  class="form-control text-left" dir="rtl" name="description"></textarea>
                                 <p class="text-danger" v-if="form.errors.description">
                                     {{form.errors.description}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                             <input  @input="uploadImage" class="col-sm-10 form-control-file" name="image" type="file" id="file">
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
import {useForm } from "@inertiajs/vue3";

const prop = defineProps({
    'post':Object,
    'categories':Array
})

const form = useForm({
    'category_id':prop.post.category_id,
    'title':prop.post.title,
    'short_description':prop.post.short_description,
    'description':prop.post.description,
    'image':null
})

const uploadImage = (event)=>{
     form.image = event.target.files[0];

}
const updatePost = ()=> form.put(route('posts.update',prop.post.id))

</script>
