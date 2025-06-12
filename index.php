<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>

    <div class="row mb-5">

    <?php
    /*Conexão com o BD*/
    $servidor = "localhost";
    $bd = "movieflix";
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
    if(!$conexao){
        die("Não conectado".mysqli_connect_error());
    }
    echo "Conectado";

    ?>

        <div class="col-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="img/filme1.webp" class="card-img-top img-formatada">
                <div class="card-body">
                    <h5 class="card-title">Jurassic Park</h5>
                    <p class="card-text">⭐ 10/10</p>
                    <a href="#" class="btn btn-primary">Veja Detalhes</a>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-6">
            <img src="img/carrosfilme.jpeg" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p>Carros é uma animação da Pixar que acompanha Relâmpago McQueen, um carro de corrida ambicioso que, ao se perder em uma cidade esquecida chamada Radiator Springs, aprende lições sobre amizade, humildade e o verdadeiro significado da vitória.</p>
            <a href="https://youtu.be/0I1x9ew1OZU?si=4APGqzqGpsPGz0Q4" class="btn btn-primary btn-lg">ASSISTA AO TRAILER</a>
        </div>
    </div>
    <div class="row">
        <div class="col-6 align-content-center">
            <p>Como Treinar o Seu Dragão(live-action) conta a história de Soluço, um jovem viking que desafia a tradição de sua aldeia ao fazer amizade com um dragão ferido. Juntos, eles mostram que humanos e dragões podem viver em paz.
            </p>
            <a href="https://youtu.be/CWTy1ukPoYY?si=_2j2RIkPeM3437rM" class="btn btn-primary btn-lg">ASSISTA AO TRAILER</a>
        </div>
        <div class="col-6">
            <img src="img/comotreina.jpg" class="img-fluid">
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Precisa de ajuda? Clique aqui!</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda ❗</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ente em contado através dos nossos canais de comunicação</p>
                    <p>Email: filme@filme.com <br>Whatsapp: (11)99999-9999 <br> <a href="contato.php">Formulário de contato</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                </div>
            </div>
        </div>
    </div>


</div>
<?php include "rodape.php"; ?>