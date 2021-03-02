<?php
  
  header('Content-Type: text/html; charset=utf-8');
  function send_curl($g_response, $ip)
  {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $fields = array(
      'secret' => urlencode(''),
      'remoteip' => urlencode($ip),
      'response' => urlencode($g_response),
    );
    
    //url-ify the data for the POST
    $fields_string = '';
    foreach ($fields as $key => $value) {
      $fields_string .= $key . '=' . $value . '&';
    }
    rtrim($fields_string, '&');
    
    //open connection
    $ch = curl_init();
    
    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    
    $response = curl_exec($ch);
    
    // Then, after your curl_exec call:
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    
    //close connection
    curl_close($ch);
    
    return json_decode($body);
  }
  
  
  $nome = (isset($_POST['nome']) && !empty($_POST['nome'])) ? $_POST['nome'] : '';
  $email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : '';
  $telefone = (isset($_POST['telefone']) && !empty($_POST['telefone'])) ? $_POST['telefone'] : '';
  $mensagem = (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : '';
  $destinatario = (isset($_POST['recipient']) && !empty($_POST['recipient'])) ? $_POST['recipient'] : '';
  $assunto = (isset($_POST['subject']) && !empty($_POST['subject'])) ? $_POST['subject'] : '';
  
  $g_response = (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : '';
  $ip_address = $_SERVER['REMOTE_ADDR'];
  $data = date("d/m/Y H:i");
  
  $result = send_curl($g_response, $ip_address);
  
  
  if ($result->success) {
    
    
    $body = '';
    foreach ($_POST as $fkix => $valorx) {
      if (($fkix != "recipient") && ($fkix != "recipient2") && ($fkix != "subject") &&
        ($fkix != "redirect") && ($fkix != "submit") && ($fkix != "button") &&
        ($fkix != "informativos") && ($fkix != "x") && ($fkix != "y") && ($fkix != "incluir_x") &&
        ($fkix != "incluir_y") && ($fkix != "incluir") && ($fkix != "g-recaptcha-response")
      ) {
        $$fkix = $valorx;
        $body .= "<strong>" . ucfirst($fkix) . ":</strong> " . $valorx . "<br>";
      }
    }
    
    $body = "<p>" . $body . "</p>";
    $body .= "<strong>IP:</strong> {$_SERVER['REMOTE_ADDR']}<br>";
    $body .= "<strong>Data/Hora:</strong> " . date("d/m/Y H:i") . "<br>";
    
    $receiver = $destinatario;
    $subject = $assunto;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $email . "\r\n";
    
    $mail = (@mail($receiver, $subject, $body, $headers));
    
    if ($mail) {
      header('Location:' . $_POST['redirect']);
    }else{
      echo "<script>alert('Houve um erro ao enviar sua mensagem. \\nPor favor tente novamente');history.back();</script>";
    }
    
  } else {
    echo "<script>alert('Erro ao validar o captcha. \\nPor favor tente novamente.');history.back();</script>";
  }
