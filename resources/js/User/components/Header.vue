<template>
    <div class="container">
    <header>
        <div class="row">
            <div class="col-md-4 col-lg-5 col-xl-6 title_logo" @click="navigateTo('/user-sections')" style="cursor: pointer;">CAMPUS</div>
            <div class="col-md-7 col-lg-6 col-xl-5 ">
                <ul class="navbar">
<!--                    <li class="navbar_item"><a href="" class="navbar_link">Услуги</a></li>-->
<!--                    <li class="navbar_item"><a href="" class="navbar_link">Спорт</a></li>-->
<!--                    <li class="navbar_item"><a href="" class="navbar_link">Услуги</a></li>-->
<!--                    <li class="navbar_item"><a href="" class="navbar_link">Спорт</a></li>-->

                </ul>
            </div>
            <div class="col-md-1 col-lg-1 user" @click="navigateTo('/user-sections')" style="cursor: pointer;"><img src="/public/img/user.png" alt="" class="img_user"></div>
        </div>
    </header>


</div>

</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
  name: "Header",

  methods: {
    navigateTo(route) {
      Inertia.visit(route);
    },
  },
}

</script>

<style>
.title_logo {
    font-size:45px;
    font-family:"Concert One"
}
@media (max-width:780px) {
    .navbar {
        display:none
    }
}
@media (max-width:780px) {
    .user {
        display:none
    }
}
.navbar_item {
    font-size:20px;
    font-family:Roboto;
    margin-right:8px
}
body {
  margin: 0;
  padding: 0;
  padding-bottom: 100px; }

ul {
  list-style-type: none; }

a {
  text-decoration: none;
  color: inherit; }

a:hover, a:focus {
  text-decoration: none;
  font-weight: normal;
  color: inherit; }

header {
  margin-top: 50px;
  margin-bottom: 20px;
}
</style>