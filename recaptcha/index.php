<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Google reCaptcha V3 </h1>
    <div id="recaptchaform">
        <form  id="formAction" method="POST" action="#">
            
            <div>
                reCaptcha: <input type="text" id="g-recaptcha-response" name="g-recaptcha-response" readonly>
            </div>

            <div>
                <input type="text" value="" />
            </div>

            <div>
                <button type="submit" id="submit" name="submit">SUBMIT</button>
            </div>

        </form>
    </div>
</body>

<script src="https://www.google.com/recaptcha/api.js?render=6LfYtRcrAAAAALUgbtSfGC5B_Dk1nVk_z9atzT1v"></script>
<script>
      grecaptcha.ready(function() {
          grecaptcha.execute('6LfYtRcrAAAAALUgbtSfGC5B_Dk1nVk_z9atzT1v', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              document.getElementById('g-recaptcha-response').value= token;
          });
        });
  </script>

  <?php
     define('SITE_KEY','6LfYtRcrAAAAALUgbtSfGC5B_Dk1nVk_z9atzT1v');
     define('SECRET_KEY','6LfYtRcrAAAAAObMVHPyBpcuSzq98wOxEkNsi84j');

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $captcha_response = $_POST['g-recaptcha-response'] ?? '';
    
        function getCaptcha($key) {
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . SECRET_KEY . "&response=" . $key;
            $response = file_get_contents($url);
            return json_decode($response, true);
        }
    
        $return = getCaptcha($captcha_response);
    
        echo "<h3>reCAPTCHA Response:</h3>";
        echo "<pre>";
        print_r($return);
        echo "</pre>";
    
        if ($return['success']) {
            echo "<p style='color: green;'>Verified Successfully!</p>";
        } else {
            echo "<p style='color: red;'>Verification Failed</p>";
            echo "Error Codes: ";
            print_r($return['error-codes'] ?? []);
        }
    }
?>    
</html>