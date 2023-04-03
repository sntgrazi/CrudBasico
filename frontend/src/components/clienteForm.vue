<template>
    <div class="cliente-form">
        <div class="form-overlay" @click="()=>toggleForm()"></div>
        <form class="form"  @submit.prevent="enviarForm">
            <h3>Cliente Form</h3>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" v-model="nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" v-model="email">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="form-control" v-model="telefone">
            </div>
        
            <input type="submit" value="Cadastrar" class="btn-submit" >
        </form>
    </div>
</template>


<script>
    import axios from "axios";

    export default{
        data(){
            return{
                name: '',
                email: '',
                telefone: ''
            }
        },
        methods:{
            async enviarForm(){
                const formData = {
                    nome: this.nome,
                    email: this.email,
                    telefone: this.telefone
                };

                try{
                    const response = await axios.post("http://localhost:84/inserir", formData);
                    console.log(response.data);
                    this.$emit('cliente-adicionado'); // emitir o evento 'cliente-adicionado'
                    this.nome = ""; // limpar o formulário
                    this.email = "";
                    this.telefone = "";
                } catch (error){
                    console.error(error);
                }
            }
        },
        props: ["toggleForm"]
    }
</script>

<style>

    .cliente-form{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cliente-form .form-overlay{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background-color: #00000088;
    }

    .cliente-form .form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 1;
        background-color: #fff;
        padding: 16px;
        border-radius: 8px;
        width: 400px;
        max-width: 480px;
    }

    .cliente-form .form h3{
        color: #000;
        font-size: 28px;
        margin-bottom: 16px;
        text-align: center;
    }

    .cliente-form .form-group{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin: 10px;
    }

    .cliente-form .form-group label{
        font-size: 18px;
        font-weight: bold;
        width: 80px;
    }

    .cliente-form .form-group input{
        width: 250px;
        border-radius: 10px;
        outline: none;
        border: 1px solid #000;
        font-size: 18px;
        padding: 5px;
    }

    .btn-submit{
        width:120px;
        
        font-size: 18px;
        border: none;
        background-color: #000;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        margin: 10px;
        padding: 10px;
        text-align: center;
    }

</style>