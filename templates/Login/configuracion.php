<?php
  require_once '../../vendor/autoload.php';

  $clientID = '861232122681-ak4na834mm7l4edbpksuv7our2344hnr.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Estanteria/templates/Estanteria/Estanteria.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>