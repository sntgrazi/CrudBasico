<template>
        <div class="team">
            <div class="team-members table">
                <div class="table-header table-row">
                    <div class="table-col">Nome</div>
                    <div class="table-col">Email</div>
                    <div class="table-col">Telefone</div>
                    <div class="table-col table-actions">Actions</div>
                </div>
                <div class="member table-row">
                    <div class="table-col name">Ana</div>
                    <div class="table-col email">Ana@gmail.com</div>
                    <div class="table-col telefone">0000-0000</div>
                    <div class="table-col actions">
                        <div class="button-group group-end">
                            <button class="button button-small">Update</button>
                            <button class="button button-small button-alert">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</template>

<script>
    export default{

    }
</script>

<style>
    .team{
        padding: 16px;
    }

    .table-row{
        display: flex;
        align-items: center;
        background-color: #fff;
    }

    .table-col{
        flex: 1 1 33.33333%;
        padding: 16px;
        color: gray;
    }

    .table-row:nth-child(2n+1){
        background-color: red;
    }

    .table .table-header{
        background-color: #000;
    }

    .table .table-header .table-col{
        color: rgb(179, 85, 85);
    }

    .table-actions{
        text-align: right;
    }



</style>