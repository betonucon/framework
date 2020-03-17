<?php
    require __DIR__.'/../config/config.php';
    //------------End Configurasi Aplication ----------------------------------------//

    //------------ Header --------------------------------------------------------//
    require __DIR__.'/../view/auth/header.php';
    //------------End Header ----------------------------------------------------//
    $url=$_REQUEST['page'];

    
    if($url!=''){
        if($url=='login'){
            require('../view/auth/login.php');
        }elseif($url=='proses'){
            require('../controller/proses.php');
        }elseif($url=='register'){
            require('../view/auth/register.php');
        }else{
            require('../view/auth/login.php');
        }
            
            
    }else{
        require('../view/auth/login.php');
    }


    //------------ footer --------------------------------------------------------//
    require __DIR__.'/../view/auth/footer.php';
    //------------ footer --------------------------------------------------------//
    