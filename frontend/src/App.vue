<template>
  <div class="dashboard">
    <Header />
  </div>
  <main>
      <toolbar :toggleForm="toggleform"/>
      <team />
      <clienteForm v-if="formActive" :toggleForm="toggleform" />
  </main>
</template>

<script>
  import { ref } from "vue";

  import Header from "@/components/Header";
  import Toolbar from "@/components/Toolbar";
  import Team from "@/components/Team"
  import ClienteForm from './components/clienteForm.vue';

  export default{
    name: "App",
    components:{
      Header,
      Toolbar,
      Team,
      ClienteForm
    },
    setup(){
      const formActive = ref(false);

      const toggleform = (id = false) => {
        formActive.value = !formActive.value;

        console.log(id);
      }

      return{
        formActive,
        toggleform
      }
    }
  }

</script>

<style></style>