<!-- <?php
// $recaptchaSecretKey = '6LdxYnwoAAAAAFyB2_iXua1FOGqnXCDrbeM0Ij4B'; // Replace with your secret key
// $recaptchaResponse = $_POST['g-recaptcha-response'];

// $verificationUrl = 'https://www.google.com/recaptcha/api/siteverify';
// $data = [
//     'secret' => $recaptchaSecretKey,
//     'response' => $recaptchaResponse
// ];

// $options = [
//     'http' => [
//         'method' => 'POST',
//         'content' => http_build_query($data)
//     ]
// ];

// $context = stream_context_create($options);
// $response = file_get_contents($verificationUrl, false, $context);
// $responseData = json_decode($response);

// if ($responseData->success) {
//     // reCAPTCHA verification passed; process the form data
//     // ...
// } else {
//     // reCAPTCHA verification failed; handle the error
//     // ...
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Document</title>
</head>
<body>
<form action="your-server-side-script.php" method="POST">
<div>
    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
</div>
<div class="g-recaptcha" data-sitekey="6LdxYnwoAAAAAPn4yzzK6Tv0JokKed3zFFxZsbgV"></div>

    
    <button type="submit">Submit</button>
</form>

<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
</body>
</html> -->
<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>

<button class="g-recaptcha" 
        data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>