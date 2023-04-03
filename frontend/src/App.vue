<template>
  <div class="dashboard">
    <Header />
  </div>
  <main>
    <toolbar :toggleForm="toggleform" />
    <team :clientes="clientes" @deletar-cliente="excluirCliente"/>
    <clienteForm
      v-if="formActive"
      :toggleForm="toggleform"
      @cliente-adicionado="atualizarClientes"
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

    const toggleform = (id = false) => {
      formActive.value = !formActive.value;

      console.log(id);
    };

    return {
      formActive,
      toggleform,
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
      axios.delete(`http://localhost:84/delete/${id}`).then(() => {
        this.atualizarClientes();
        console.log(id);
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