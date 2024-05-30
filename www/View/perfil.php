<?php

include_once("../Controller/unClasseProtect.php");
include_once("../Model/unClasseConfig.php");
include_once("imagens.php");
include_once("../css/Estilos.php");

$oProtect = new Procect(); // instância para permitir o acesso somente a quem estiver logado
$id_usuario = $_SESSION["idusuario"];


if(isset($_FILES["arquivo"])){
    $arquivo = $_FILES["arquivo"];
    
    if($arquivo["size"] > 2097152){
        die("Arquivo muito grande! Max: 2MB");
    }

    if($arquivo["error"]){
        die("Erro ao enviar o arquivo");
    }

    $pasta = "../Fotos_perfil/";
    $nomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));
    date_default_timezone_set('America/Sao_Paulo');
    $time = date('Y-m-d H:i:s');
    $endereco = $_SESSION["endereco"];

    if ($extensao == "png" || $extensao == "jpeg" || $extensao == "jpg" || $extensao == "gif" || $extensao == "svg" || $extensao == "bmp"|| $extensao == ""){

        // Deleta a foto anterior na pasta local
        $BuscaFoto = $mysqli->query("SELECT path FROM fotos_perfil where idusuario = '$id_usuario'") or die($mysqli->error);
        $localFoto = $BuscaFoto->fetch_assoc();
        unlink($localFoto["path"]);

        // deletar a foto anterior na pasta local
        $enviado = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeArquivo . "." . $extensao);
        $path = $pasta . $nomeArquivo . "." . $extensao;

        if($enviado){
            $mysqli->query("UPDATE fotos_perfil SET nome = '$nomeArquivo', data_upload ='$time', path = '$path' WHERE idusuario = $id_usuario") or die($mysqli->error);
            echo "foto enviada!";
        } else {
            die("Falha ao enviar a foto!");
        }

    } else {
        die("Erro ao enviar o arquivo(if de extenção)");
    }
}

// var_dump($_FILES["arquivo"]); // detalhes do arquivo
// print_r(nl2br($extensao.PHP_EOL)); // printa e pula uma linha

// Buscar local da foto no banco
$BuscaFoto = $mysqli->query("SELECT path FROM fotos_perfil where idusuario = '$id_usuario'") or die($mysqli->error);
$localFoto = $BuscaFoto->fetch_assoc();
$FotoUser = $localFoto["path"];

// Verifica se o usuario já enviou foto
if($FotoUser == ""){
    $FotoUser = "../Fotos_perfil/avatars.gif";
}

// Verifica endereço do usuario
if ($endereco = " "){
    $endereco = "Nenhum endereço cadastrado";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Configurações de perfil</title>
    <?php echo $Estilizacao_pagina; // Estilo do Cabeçalho e do rodapé da página ?>
</head>
<body>
    <div class="Container">
        <?php echo $Topo ?>
        <div class="Middle">
            <div class="Label1">
            <img src=<?php echo $FotoUser; ?> alt="Foto de perfil do usuário">
            <form method="post" enctype="multipart/form-data" action="">
                <input type="file" name="arquivo" id="arquivo" style="display: none;" onchange="this.form.submit()">
                <label for="arquivo" name="arquivo" type="submit">Alterar foto</label>
                <br>
                <label>Sou doadora</label>
            </form>
            </div>
            <div class="Label2">
                <label>Nome</label>
                <p><?php echo $_SESSION["nome"] ?></p>
                <label>E-mail</label>
                <p><?php echo $_SESSION["email"]; ?></p>
                <label>Endereço</label>
                <p><?php echo $endereco; ?></p>
            </div>
            <div class="Label3">
                <a href="mensagens.php"><img src="../images/icons8-letter-50.png" alt="Mensagens"></a>
                <a href="publicacoes.php"><img src="../images/icons8-photo-gallery-50.png" alt="Publicações"></a>
                <a href="conexoes.php"><img src="../images/icons8-group-48.png" alt="conexões"></a>
            </div>
        </div>
        <?php echo $Bottom ?>
    </div>
</body>
</html>
