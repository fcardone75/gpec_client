<?php

use Bni\Gpec\Gpec\GpecService;

require 'vendor/autoload.php';

$response = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $gpecService = new GpecService(__DIR__);

        // Get form inputs
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        // Call sendMail with form inputs
        $response = $gpecService->sendMail($email, $subject, $body);
        $response = json_encode($response);

    } catch (Throwable $exception) {
        $response = "Eccezione {$exception->getMessage()} alla riga {$exception->getLine()} del file: {$exception->getFile()}<br><br>Stack: <code>{$exception->getTraceAsString()}</code>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
</head>
<body>
<form method="post" action="">
    <label for="email">Email desinatario:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="subject">Oggetto:</label>
    <input type="text" id="subject" name="subject" required><br><br>

    <label for="body">Corpo messaggio:</label>
    <textarea id="body" name="body" required></textarea><br><br>

    <input type="submit" value="Send Mail">
</form>

<?php if ($response): ?>
    <div>
        <h3>Risposta:</h3>
        <p><?php echo $response; ?></p>
    </div>
<?php endif; ?>
</body>
</html>
