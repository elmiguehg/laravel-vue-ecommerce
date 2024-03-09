<script setup></script>

<template>
  <footer class="w-100 d-flex align-items-center justify-content-center flex-wrap">
    <p class="fs-5 px-3 pt-3">TecnoShop &copy; Todos Los Derechos Reservados 2024</p>
    <div id="iconos">
      <a href="#"><v-icon name="bi-facebook" inverse="true" scale="2" /></a>
      <a href="#"><v-icon name="bi-instagram" inverse="true" scale="2" /></a>
      <a href="#"><v-icon name="co-twitter" inverse="true" scale="2" /></a>
    </div>
  </footer>
</template>

<style scope>
footer {
  background: #22252b;
  min-height: 50px;
  margin-top: auto;
}
footer p {
  color: #f3f3f3;
  text-align: center;
}
#iconos i {
  font-size: 26px;
  padding: 0 8px;
  color: #f3f3f3;
}
</style>
