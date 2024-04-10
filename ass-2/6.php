<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Validation</title>
</head>
<body>
    <h1>Email Validation</h1>
    <form method="post">
        <label for="email">Enter your email address:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Check">
    </form>
    <?php
    function validateEmail($email) {
        if (substr_count($email, '@') !== 1) {
            return false;
        }
        list($localPart, $domainPart) = explode('@', $email);
        if (substr_count($domainPart, '.') > 2) {
            return false;
        }
        if (preg_match('/^[0-9_.@]/', $localPart)) {
            return false;
        }
        if ($domainPart === '' || $domainPart[0] === '.') {
            return false;
        }
        return true;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = $_POST['email'];
        $isValid = validateEmail($email);
        if ($isValid) {
            echo "<p>The email address '$email' is valid.</p>";
        } else {
            echo "<p>The email address '$email' is not valid.</p>";
        }
    }
    ?>
</body>
</html>
