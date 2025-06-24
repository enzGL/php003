<?php
include "cabecalho.php";

?>
<div class="container">
    <?php
    include "conexao.php"; //Conexão com bd
    $sql = "SELECT * FROM filmes WHERE id = $id"; //Montar sql
    $resultado = mysqli_query($conexao, $sql); //Execução do slq

    while ($linha = mysqli_fetch_assoc($resultado)) { //Laço com as infos do filme
        $foto = $linha['foto'];
        $nome = $linha['titulo'];
        $avaliacao = $linha['avaliacao'];
        $categoria = $linha['categoria'];
        $historia = $linha['historia'];
    ?>

        <div class="container">
            <div class="row mx-5 mt-5">
                <div class="col">
                    <img src="<?= $foto ?>" class="img-fluid" style="max-width: 500px">
                </div>
                <div class="col text-center fs-3" style="margin-top: 100px;">
                        <h5 class="fs-1"><?= $nome ?></h5>
                        <p>⭐ <?= $avaliacao ?>/10</p>
                        <p>Categoria: <?= $categoria ?></p>
                        <p>Historia: <?= $historia ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    mysqli_close($conexao); //Fechar a conexão com bd
    ?>
</div>
<?php include "rodape.php"; ?>