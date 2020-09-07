<?php
   
    require_once("config_session.php");

    echo session_id();
    echo "<hr><br>";
    echo session_save_path();
    echo "<hr><br>";
    var_dump(session_status());

    switch (session_status()) {
        case PHP_SESSION_DISABLED:
            echo " as sessões estiverem desabilitadas";
            break;

        case PHP_SESSION_NONE:
            echo "as sessões estiverem habilitadas, mas nenhuma existir";
            break;

        case PHP_SESSION_ACTIVE:
            echo "as sessões estiverem habilitada, e uma existir";
            break;
        
    }
    

?>