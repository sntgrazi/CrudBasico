<template>
  <div class="dashboard">
    <Header />
  </div>
  <main>
    <toolbar :toggleForm="toggleform" />
    <team
      :clientes="clientes"
      @deletar-cliente="excluirCliente"
      :toggleForm="toggleform"
      :userId="userId"
    />
    <clienteForm
      v-if="formActive"
      :toggleForm="toggleform"
      @cliente-adicionado="atualizarClientes"
      :userId="userId"
      @cliente-atualizado="atualizarClientes"
    />
  </main>
</template>

<script>
import { ref } from "vue";
import axios from "axios";
import Header from "@/components/Header";
import Toolbar from "@/components/Toolbar";
import Team from "@/components/Team";
import ClienteForm from "./components/clienteForm.vue";

export default {
  name: "App",
  components: {
    Header,
    Toolbar,
    Team,
    ClienteForm,
  },
  setup() {
    const formActive = ref(false);
    const userId = ref(false);

    const toggleform = (id = false) => {
      formActive.value = !formActive.value;
      userId.value = false;

      if (id) {
        userId.value = id;
        console.log(userId.value);
      }
    };

    return {
      formActive,
      toggleform,
      userId,
    };
  },
  data() {
    return {
      clientes: [],
    };
  },
  methods: {
    async atualizarClientes() {
      try {
        const response = await axios.get("http://localhost:84/clientes");
        this.clientes = response.data;
      } catch (error) {
        console.error(error);
      }
    },
    excluirCliente(id) {
      swal({
        text: "Você tem certeza que deseja deletar este cliente?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          axios.delete(`http://localhost:84/delete/${id}`).then(() => {
            this.atualizarClientes();
            console.log(id);
          });
          swal("Cliente deletado com sucesso", {
            icon: "success",
          });
        }
      });
    },
  },
  mounted() {
    this.atualizarClientes();
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");
* {
  margin: 0;
  padding: 0;
  font-family: "Nunito", sans-serif;
}
</style>