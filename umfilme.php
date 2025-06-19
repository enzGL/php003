<?php
include "cabecalho.php";
?>
<div class="container">
    <?php
    include "conexao.php";
    $sql = "SELECT * FROM filmes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_assoc($resultado)) {
    ?>
        <div class="card mx-auto d-block mt-3" style="width: 18rem;">
            <img src="<?= $linha['foto']; ?>" class="card-img-top">
            <div class="card-body">
                <h2 class="card-text"><?= $linha['titulo']; ?></h2>
                <p>⭐ <?= $linha['avaliacao']; ?>/10</p>
                <p><strong>Categoria: </strong><?= $linha['categoria']; ?></p>
                <p><strong>História: </strong><?= $linha['historia']; ?></p>
            </div>
        </div>
    <?php
    }
    mysqli_close($conexao);
    ?>
</div>
<?php include "rodape.php"; ?>