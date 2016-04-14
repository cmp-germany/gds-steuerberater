<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = create_bootstrap_message('success', $message);
    // else $response = "<div class='error'>{$message}</div>";
    else $response = create_bootstrap_message('danger', $message);

  }

  function create_bootstrap_message($alert_type, $message) {
    return "<div class='alert alert-{$alert_type} alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
      {$message}
    </div>";
  }

  //response messages
  $missing_content = "Bitte geben Sie alle benötigten Informationen an";
  $email_invalid   = "Die angegebene Email Adresse ist ungültig.";
  $message_unsent  = "Die Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es erneut.";
  $message_sent    = "Vielen Dank. Ihre Nachricht wurde versandt.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];

  //php mailer variables
  $to = $_POST['mailto'];

  $subject = "Neue Nachricht über ".get_bloginfo('name');
  $headers = 'From: '. $name . ' <' .$email . '>'. "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if ($_POST['submitted']) {
  //validate email
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    my_contact_form_generate_response("error", $email_invalid);
  else //email is valid
  {
    //validate presence of name and message
    if(empty($name) || empty($message)){
      my_contact_form_generate_response("error", $missing_content);
    }
    else //ready to go!
    {
      $sent = wp_mail($to, $subject, strip_tags($message), $headers);
      if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
      else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
    }
  }
}

?>
