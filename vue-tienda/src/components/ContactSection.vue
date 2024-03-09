<script setup></script>

<template>
  <section>
    <div id="contact">
      <div class="container mb-md-6 pt-5">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
            <h2 class="w-50 mx-auto text-center pt-3">Contáctanos</h2>
            <p class="text-secondary mb-4 mb-md-5">
              Estamos aquí para ayudarte con lo que necesites.
            </p>
          </div>
        </div>
      </div>
      <div class="container pb-3">
        <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-9">
            <div class="bg-white border rounded shadow-sm overflow-hidden">
              <form action="#!">
                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                  <div class="col-12">
                    <label for="fullname" class="form-label"
                      >Nombre completo <span class="text-danger">*</span></label
                    >
                    <input type="text" class="form-control" id="fullname" value="" required />
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label"
                      >Correo eletrónico <span class="text-danger">*</span></label
                    >
                    <div class="input-group">
                      <span class="input-group-text">
                        <v-icon name="md-email" inverse="true" fill="black" />
                      </span>
                      <input type="email" class="form-control" id="email" value="" required />
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Número de teléfono</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <v-icon name="bi-telephone-fill" inverse="true" fill="black" />
                      </span>
                      <input type="tel" class="form-control" id="phone" value="" />
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label"
                      >Mensaje <span class="text-danger">*</span></label
                    >
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scope>
#contact {
  background-color: #f3f3f3;
}
</style>
