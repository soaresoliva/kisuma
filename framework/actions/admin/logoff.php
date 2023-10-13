<?php

    /* Faz Logoff do Sistema K2 */
    Login::sairSistema ();

    /* Retorna para a Tela de Login */
    header('Location: ?pagina=admin/login');
    exit();


?>