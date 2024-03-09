<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
</script>

<template>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><h2>TecnoShop</h2></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <RouterLink :to="{ name: 'products' }" class="nav-link active" aria-current="page">
              <v-icon name="fa-product-hunt" inverse="true" scale="1.3" />
              Productos</RouterLink
            >
          </li>
          <li class="nav-item">
            <RouterLink :to="{ name: 'cart' }" class="nav-link active" aria-current="page">
              <v-icon name="bi-cart-dash-fill" inverse="true" scale="1.4" />
              Carrito</RouterLink
            >
          </li>
          <li class="nav-item">
            <RouterLink :to="{ name: 'order' }" class="nav-link active" aria-current="page">
              <v-icon name="md-bordercolor-outlined" inverse="true" scale="1.3" />
              Orden</RouterLink
            >
          </li>

          <!--<li class="nav-item">
            <a class="nav-link active" aria-current="page">
              <v-icon name="md-permcontactcalendar-sharp" inverse="true" scale="1.3" />
              Contactanos</a
            >
          </li>-->
        </ul>
        <form class="d-flex" v-if="authStore.user">
          <li class="nav-item">
            <span class="text-white pr-5" aria-current="page">
              {{ authStore.user.full_name }}
            </span>
            <button class="btn btn-outline" @click="($event) => authStore.logout()">
              <v-icon name="co-account-logout" inverse="true" scale="1.3" fill="red" />
            </button>
          </li>
        </form>
        <form class="d-flex" v-else>
          <button type="button" class="btn btn-outline-success m-1">
            <router-link :to="{ name: 'login' }" class="nav-link active" aria-current="page"
              >Iniciar Sesión</router-link
            >
          </button>
          <button
            router-link
            :to="{ name: 'register' }"
            type="button"
            class="btn btn-outline-success m-1"
          >
            <router-link :to="{ name: 'register' }" class="nav-link active" aria-current="page"
              >Registrarse</router-link
            >
          </button>
        </form>
      </div>
    </div>
  </nav>
</template>

<style scope></style>
