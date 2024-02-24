<?php
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $to = "diegovianagomes@gmail.com";
    $subject = "Contato Website";
    $body = 
            "Email: " . $email . "\n" .
            "Telefone: " . $telefone . "\n";
    $header = 
                "From: diegovianagomes@gmail.com" . "\r\n" .
                "Reply-To: " . $email . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $body, $header)) {
        echo "Email enviado com sucesso";
    } else {
        echo "Email não pode ser enviado";
    }
}
?>