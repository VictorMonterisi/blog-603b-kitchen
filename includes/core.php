<?php
    $_SERVER['HTTPS'] = "temp"; // Apagar quando for online
    require "vendor/autoload.php";
    

    use Classes\Url;

    $set_address = new Url();
    
    $url_canonical = $set_address->setCanonicalUrl();
    $url = $set_address->setUrl();



    $nome = "603B Kitchen";
    $description = "Do básico ao extraordinário, transforme sua cozinha com receitas saudáveis que se encaixam na sua rotina, sem abandonar a praticidade e com muito sabor.";
    $author = "{$nome}";
    

    $keywords = "Blog de receitas gostosas e saudáveis, Receitas saudáveis e gostosas, Dicas culinárias em São Paulo, Dicas alimentação saudável, Dicas gastronômicas em São Paulo, Receitas práticas e gostosas";

    $placename = "São Paulo, São Paulo, Brasil";
    $region = "BR-SP";
    $position = "-23.550520;-46.633308";