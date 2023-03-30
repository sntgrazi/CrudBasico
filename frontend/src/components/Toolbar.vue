<template>
    <div class="toolbar">
        <h2>Team</h2>
        <div class="button-group">
            <button class="button" @click="()=>toggleForm()">Add</button>
            <button class="button button-outline"> Export </button>
        </div>
    </div>
</template>

<script>
    export default{
        props: ["toggleForm"]
    }
</script>

<style>
    .toolbar{
        padding: 16px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }   

    .toolbar h2{
        color: #000;
        font-size: 32px;
        font-weight: 400;
    }
</style>