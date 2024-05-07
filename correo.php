<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['msg'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $header = "From no@responder.com" . "\r\n";
        $header .= "Reply-to " . $email . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $correo = $name . " con el siguiente correo ". $email . " le ha enviado el siguiente mensaje: " . "\r\n" . $msg;
        $destino = "palacioslucasm912@gmail.com";
        $asunto = "Nuevo correo en tu pagina web de " . $name;
        $mail = mail($destino, $asunto, $correo, $header);
        if($mail){
            echo("<h1> correo enviado exitosamente </h1>");
        }
    }
}
?>