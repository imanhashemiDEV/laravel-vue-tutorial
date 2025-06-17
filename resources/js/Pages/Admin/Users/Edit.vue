<template>
 <AdminMainLayout>
     <main class="main-content">
         <div class="card">
             <div class="card-body">
                 <div class="container">
                     <h4 class="card-title">ویرایش کاربر</h4>
                     <form @submit.prevent="updateUser">
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                             <div class="col-sm-10">
                                 <input v-model="form.name" type="text" class="form-control text-left"  dir="rtl" name="name">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">ایمیل</label>
                             <div class="col-sm-10">
                                 <input v-model="form.email" type="text" class="form-control text-left" dir="rtl" name="email" >
                             </div>
                         </div>
                         <div class="form-group row">
                             <label  class="col-sm-2 col-form-label">پسورد</label>
                             <div class="col-sm-10">
                                 <input v-model="form.password" type="text" class="form-control text-left" dir="rtl" name="password">
                             </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                             <input  class="col-sm-10 form-control-file" type="file" id="file">
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
    'user':Object
})

const form = useForm({
    'name':prop.user.name,
    'email':prop.user.email,
    'password':null,
})

const updateUser = ()=> form.put('/admin/update_user/'+ prop.user.id)
</script>
