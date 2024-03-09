<script setup></script>

<template>
  <section>
    <div id="local">
      <div class="mapa"></div>
      <div>
        <div class="wrapper">
          <h2>Ubicado en Cienfuegos, Cuba</h2>
          <h1>
            <a
              href=""
              class="typewrite"
              data-period="2000"
              data-type='[ "Hi, Im VipulM.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'
            >
              <span class="wrap"></span>
            </a>
          </h1>
          <p class="fs-5 text-body">
            Estamos ubicados en el municipio Cienfuegos de la provincia con el mismo nombre. Siempre
            dispuestos a establecer colaboracion y ha ayudar a nuestros clientes con todo lo que
            este a nuestro alcance.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scope>
.mapa {
  background: url(../assets/img/mapa.png);
  width: 200%;
  height: 500px;
  border-radius: 5%;
}
#local {
  background: #f3f3f3;
  padding-bottom: 30px;
  padding-top: 30px;
  padding-left: 30px;
  display: flex;
  justify-content: center;
}
.wrapper {
  width: 60%;
  margin-left: 70px;
  padding-top: 70px;
}
</style>
