<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <meta name="description" content="<?php echo $description; ?>">
    <meta name="author"
        content="<?php echo "Desenvolvido por {$author} - Todos os direitos reservados, " . date('Y');?>">

    <meta name="geo.placename" content="<?php echo $placename; ?>">
    <meta name="geo.region" content="<?php echo $region; ?>">
    <meta name="geo.position" content="<?php echo $position; ?>">

    <!-- <meta name="google-site-verification" content="Sua_Chave_de_Verificação"> -->
    <!--<link rel="canonical" href="URL_canônica">-->

    <!--
        Compartilhamento Facebook, Twitter e Instagram
        <meta property="og:type" content="website">
        <meta property="og:title" content="Título do Conteúdo">
        <meta property="og:description" content="Descrição do Conteúdo">
        <meta property="og:image" content="URL da Imagem">
        <meta property="og:url" content="URL da Página">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Título do Conteúdo">
        <meta name="twitter:description" content="Descrição do Conteúdo">
        <meta name="twitter:image" content="URL da Imagem">

        <meta property="instagram:caption" content="Legenda personalizada para a imagem">
        <meta property="instagram:username" content="Nome de Usuário do Instagram">
    -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <link rel="shortcut icon" href="<?php echo $url; ?>assets/img/favicon.png">
    <title><?php echo "{$nome} - {$description}"; ?></title>
</head>