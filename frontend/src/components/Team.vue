<template>
  <div class="team">
    <div class="team-members table">
      <div class="table-header table-row">
        <div class="table-col">Nome</div>
        <div class="table-col">Email</div>
        <div class="table-col">Telefone</div>
        <div class="table-col table-actions">Ações</div>
      </div>
      <div
        class="member table-row"
        v-for="cliente in clientes"
        :key="cliente.id"
      >
        <div class="table-col name">{{ cliente.nome }}</div>
        <div class="table-col email">{{ cliente.email }}</div>
        <div class="table-col telefone">{{ cliente.telefone }}</div>
        <div class="table-col actions">
          <div class="button-group group-end">
            <button
              class="btn-actions button-small"
              @click="() => toggleForm(cliente.id)"
            >
              <i class="fa-solid fa-pen"></i>
            </button>
            <button
              class="btn-actions button-small button-alert"
              @click="excluirCliente(cliente.id)"
            >
              <i class="fa-solid fa-trash"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["clientes", "toggleForm"],
  methods: {
    excluirCliente(id) {
      this.$emit("deletar-cliente", id);
    },
  },
};
</script>

<style>
.team {
  padding: 16px;
}

.table-row {
  display: flex;
  align-items: center;
  background-color: #fff;
}

.table-col {
  flex: 1 1 33.33333%;
  padding: 16px;
  color: rgb(0, 0, 0);
}

.table-row:nth-child(2n + 1) {
  background-color: rgb(180, 180, 180);
}

.table .table-header {
  background-color: #000;
}

.table .table-header .table-col {
  color: rgb(255, 255, 255);
}

.table-actions {
  text-align: center;
}

.actions {
  text-align: center;
}

.btn-actions {
  text-align: center;
  width: 38px;
  height: 38px;
  border: none;
  background-color: #000;
  color: white;
  border-radius: 50%;
  cursor: pointer;
  margin: 0 5px;
}

.btn-actions:hover {
  color: rgb(221, 115, 115);
}
</style>