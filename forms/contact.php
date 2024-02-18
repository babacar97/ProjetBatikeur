<?php

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */
// Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'babacarndiaye808@gmail.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['name'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

// $contact->add_message( $_POST['name'], 'From');
// $contact->add_message( $_POST['email'], 'Email');
// $contact->add_message( $_POST['message'], 'Message', 10);

// echo $contact->send();
if (isset($_POST['submit'])) {
  $url = "https://script.google.com/macros/s/AKfycbxX22K-rioPg2GcZya5fJ-1x5HGKB7zru2f_MeRwce9tRJEbAuN-1XaXXKtlo3XW-I/exec";
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POSTFIELDS => http_build_query([
      "recipient" => $_POST['name'],
      "recipient" => $_POST['email'],
      "subject"   => $_POST['subject']
    ])
  ]);
  $result = curl_exec($ch);
  echo $result;
}
