
<?php
echo "<h2>Testing Postfix...</h2>";
$to = 'mmgsuweb@gmail.com';
$subject = 'This is the subject!';
$body = 'This is the email body.';
mail($to, $subject, $body);
?>
