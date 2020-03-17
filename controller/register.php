<?php
//error_reporting(0);
require('../config/database.php');
require('../config/koneksi.php');
require('../config/config.php');

$cek=mysqli_num_rows(mysqli_query($conn,"select * from users where username='".$_POST['email']."'"));

if($_POST['_token']==''){
    echo '<b>Error</b>: <br />- Gagal Registrasi';
}else{
    if (trim($_POST['email']) == '') {$error[] = '- Email Harus diisi';}
    if (trim($_POST['name']) == '') {$error[] = '- Full Name Harus diisi';}
    if (trim($_POST['password']) == '') {$error[] = '- Paswword Harus diisi';}
    if (isset($error)) {echo '<b>Error</b>: <br />'.implode('<br />', $error);} 
    else{

        
            if($_POST['password']==$_POST['confirmpassword']){
                if($cek>0){
                    echo '<b>Error</b>: <br />- Email Sudah Terdaftar';
                }else{
                    mysqli_query($conn,"insert users set akses=1,username='".$_POST['email']."',name='".$_POST['name']."',password='".kode($_POST['password'])."'");
                    echo'ok';
                }
            }else{
                echo'Passsword';
            }
       
    }
}