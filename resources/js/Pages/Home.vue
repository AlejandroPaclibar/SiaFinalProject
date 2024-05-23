<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
defineOptions({
    layout: MainLayout
})
</script>

<template>
   
   <div class="container"> 
    <h1 class="upper text-white text-center">Be a Patron of the Arts</h1>

    <h1 class="lower text-white text-center">Support and engage with the creators you love</h1>

    <hr>

    <button class="btn text-white text-center item-center">Learn more</button>
   </div>
</template>

<style scoped>
.btn {
        background-color: rgba(9, 3, 171, 0.669);
        color: white;
        margin-left: 43%;
        margin-top: 15%;
    }
    .btn:hover {
        background-color: rgb(42, 34, 200);
    }
        h2 {
            font-size: 35px;
            font-weight: 900;
        }
.upper {
    font-size: 60px;
    font-weight: 300;
    font-family: 'Quicksand', sans-serif;
    word-spacing: 5px;
    margin-top: 15%;
    letter-spacing: 2px;
    transform: translateY(50px);
}

.lower {
    font-size: 20px;
    font-family: 'Quicksand', sans-serif;
    margin-top: 15px;
    letter-spacing: 2px;
    font-weight: 300;
    transform: translateY(50px);    
}

.container {
    background-color: rgba(0, 0, 0, 0.34);
    height: 50%;
    opacity: .9;
}

hr {
    background-color: rgb(255, 255, 255);
    width: 50%; 
    height: 3px; 
    margin-left: 24%;
    margin-top: 2%;
    transform: translateY(50px);
}
</style>