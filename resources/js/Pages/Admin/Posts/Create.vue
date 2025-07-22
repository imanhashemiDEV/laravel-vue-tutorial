<template>
 <AdminMainLayout>
     <main class="main-content">
         <div class="card">
             <div class="card-body">
                 <div class="container">
                     <h4 class="card-title">ایجاد مقاله</h4>
                     <form @submit.prevent="createPost" enctype="multipart/form-data">
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">عنوان مقاله</label>
                             <div class="col-sm-10">
                                 <input v-model="form.title" type="text" class="form-control text-left"  dir="rtl" name="name">
                                 <p class="text-danger" v-if="form.errors.title">
                                     {{form.errors.title}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">دسته بندی</label>
                             <div class="col-sm-10">
                                 <select v-model="form.category_id" class="form-control" id="exampleFormControlSelect1">
                                     <option v-for="category in categories"> {{category.title}}</option>
                                 </select>
                                 <p class="text-danger" v-if="form.errors.category_id">
                                     {{form.errors.category_id}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">توضیحات کوتاه</label>
                             <div class="col-sm-10">
                                 <textarea v-model="form.short_description"  class="form-control text-left" dir="rtl"></textarea>
                                 <p class="text-danger" v-if="form.errors.short_description">
                                     {{form.errors.short_description}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">متن مقاله</label>
                             <div class="col-sm-10">
                                 <textarea v-model="form.description"  class="form-control text-left" dir="rtl"></textarea>
                                 <p class="text-danger" v-if="form.errors.description">
                                     {{form.errors.description}}
                                 </p>
                             </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                             <input @input="uploadImage" class="col-sm-10 form-control-file" type="file" id="file">
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

defineProps({
    'categories':Array
})

const form = useForm({
    'title':null,
    'category_id':null,
    'short_description':null,
    'description':null,
    'image':null
})

const uploadImage = (event)=>{
    form.image = event.target.files[0]
}
const createPost = ()=> form.post(route('posts.store'))

</script>
