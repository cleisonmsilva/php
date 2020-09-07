<?php
    require("config_session.php");

    //Seu id de sessão
    echo session_id();

    //sorteio de id
    echo session_regenerate_id();

    var_dump($_SESSION);

?>