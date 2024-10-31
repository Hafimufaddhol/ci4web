<?php 

$session = session();
if($session->has('logged_in')){
    echo "Anda sudah login,".session()->get('username');
    echo "<br/>";
    echo '<a href="'.site_url('belajarlibrary/logout').'"name="logout">LOGOUT</a>';
}else{
    echo "Anda Belum login";
    echo "<br/>";
    echo '<a href="'.site_url('belajarlibrary/login').'"name="login">LOGIN</a>';
}
?>