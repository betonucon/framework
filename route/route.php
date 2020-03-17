<?php
    $session=1;
    $url=$_REQUEST['page'];
    // if(url_page().'home'){
    //     require('../view/modul/index.php');
    // }else{

    // }

    if($url!=''){
        
            
        if($url=='home'){
            if($session==1){
                require('../view/modul/index.php');
            }else{
                require('../view/error.php');
            }
        }

        elseif($url=='form'){
            if($session==1){
                require __DIR__.'/../config/session.php';
                require('../view/modul/form.php');
            }else{
                require('../view/error.php');
            }
        }

        elseif($url=='table'){
            if($session==1){
                require('../view/modul/table.php');
            }else{
                require('../view/error.php');
            }
        }

        else{
            require('../view/modul/error.php');
        }
       
    }else{
        require('../view/error.php');
    }
   