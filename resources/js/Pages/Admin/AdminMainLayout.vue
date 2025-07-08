<template>
     <Navigation/>
    <!-- end::navigation -->
    <!-- begin::header -->
     <AdminPanelHeader/>
    <!-- end::header -->
    <!-- begin::main content -->
    <slot></slot>
</template>

<script setup>
import Navigation from "@/Pages/Admin/Partials/Navigation.vue";
import AdminPanelHeader from "@/Pages/Admin/Partials/AdminPanelHeader.vue";
</script>
