<script setup></script>

<template>
  <section>
    <div style="text-align: center; padding-bottom: 20px">
      <h2 class="w-50 mx-auto text-center pt-5 pb-2">Comentarios</h2>
      <form action="">
        <textarea
          style="height: 120px; width: 600px"
          placeholder="Comenta aquí"
          name="comment"
        ></textarea>
        <br />
        <input type="submit" class="btn btn-primary" value="Comentar" />
      </form>
    </div>
    <div style="padding-left: 20%; padding-right: 20%; padding-bottom: 100px">
      <h1 style="font-size: 20px; padding-bottom: 20px">Todos los comentarios</h1>
      <div style="display: none" class="replyDiv">
        <form action="">
          <input type="text" id="" name="" hidden="" />
          <textarea
            style="height: 100px; width: 500px"
            name="reply"
            placeholder="Escribe tu comentario aquí"
          ></textarea>
          <br />
          <button style="color: black" type="submit" class="btn btn-primary">Reply</button>
          <a href="javascript::void(0);" class="btn" onclick="reply_close(this)">Close</a>
        </form>
      </div>
    </div>
  </section>
</template>

<style scope>
section {
  background-color:white;
}
</style>
