<?php
    error_reporting(0);
    //------------Configurasi Koneksi ----------------------------------------//
        require __DIR__.'/../config/session.php';
    //------------End Configurasi Koneksi ----------------------------------------//

    //------------Configurasi Koneksi ----------------------------------------//
    require __DIR__.'/../config/koneksi.php';
    //------------End Configurasi Koneksi ----------------------------------------//

    //------------Configurasi Aplication ----------------------------------------//
    require __DIR__.'/../config/config.php';
    //------------End Configurasi Aplication ----------------------------------------//

    //------------ Header --------------------------------------------------------//
    require __DIR__.'/../view/header.php';
    //------------End Header ----------------------------------------------------//
    
    require __DIR__.'/../route/route.php';


    //------------ footer --------------------------------------------------------//
    require __DIR__.'/../view/footer.php';
    //------------ footer --------------------------------------------------------//
