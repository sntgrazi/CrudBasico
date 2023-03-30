<template>
    <div class="cliente-form">
        <div class="form-overlay" @click="()=>toggleForm()"></div>
        <form class="form" @submit.prevent="">
            <h3>Cliente Form</h3>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefone">Nome</label>
                <input type="tel" name="telefone" id="telefone" class="form-control">
            </div>
        
            <input type="submit" value="Add" class="button">
        </form>
    </div>
</template>


<script>
    export default{
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
        z-index: 99;

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
        z-index: 0;
        background-color: (0,0,0,0.6);
    }

    .cliente-form .form{
        position: relative;
        z-index: 1;
        background-color: #fff;
        padding: 16px;
        border-radius: 8px;
        width: 100%;
        max-width: 480px;
    }

    .cliente-form .form h3{
        color: #000;
        font-size: 28px;
        margin-bottom: 16px;
    }

</style>