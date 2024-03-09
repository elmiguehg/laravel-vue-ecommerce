<script setup>
import NavBar from '@/components/NavBar.vue'
</script>
<template>
  <NavBar />
  <h3 class="mt-3 text-center">Pagar con tarjeta - Monto total $</h3>
  <div class="row"></div>
  <div class="row mt-3 justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><h4>Detalles del pago</h4></div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-6">
                <label>Name on Card</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="col-md-6">
                <label>Card number</label>
                <input type="text" class="form-control" id="card" />
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <label>CVC</label>
                <input type="text" class="form-control" id="CVC" />
              </div>
              <div class="col-md-4">
                <label>Expiration month</label>
                <input type="text" class="form-control" id="month" />
              </div>
              <div class="col-md-4">
                <label>Expiration year</label>
                <input type="text" class="form-control" id="year" />
              </div>
            </div>
            <div class="row">
            <button style="margin-top: 30px" type="button" class="btn btn-primary">
              <h5>Pagar ahora</h5>
            </button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
