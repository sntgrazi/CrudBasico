<template>
  <div class="toolbar">
    <h2>Clientes</h2>
    <div class="button-group">
      <button class="btn-adicionar" @click="() => toggleForm()">
        <i class="fa-solid fa-plus"></i>Adicionar cliente
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["toggleForm"],
};
</script>

<style>
.toolbar {
  padding: 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.toolbar h2 {
  color: #000;
  font-size: 32px;
  font-weight: 400;
}

.btn-adicionar {
  width: 180px;
  padding: 6px;
  margin: 0 5px;
  border: none;
  font-size: 18px;
  background-color: #000;
  color: white;
  border-radius: 10px;
  cursor: pointer;
}

.btn-adicionar:hover {
  color: rgb(221, 115, 115);
}

.btn-adicionar > i {
  margin: 5px;
}
</style>