<?php include("blades/top.php"); ?>
<?php include("../controller/funcao-tabela.php"); ?>


<div class="container mt-5">
<a href="v_cadastro.php" class="btn btn-primary">cadastrar</a>
</div>   

<div class="container mt-2 bg-white rounded p-3">
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="text-center">
            <th>Código</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Curso</th>
            <th colspan="2">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php funcaoTabela()?>
    </tbody>
    <Tfoot>
        <tr>
            <td colspan="6" class="text-center">Rodapé da Tabela</td>
        </tr>
    </Tfoot>
</table>
</div>

<?php include("blades/footer.php"); ?>