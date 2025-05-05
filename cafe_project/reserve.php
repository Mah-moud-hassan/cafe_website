<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $date = htmlspecialchars(trim($_POST["date"]));
    $time = htmlspecialchars(trim($_POST["time"]));
    $guests = htmlspecialchars(trim($_POST["guests"]));

    if ($name && $email && $date && $time && $guests) {
        // في تطبيق حقيقي: احفظ البيانات في قاعدة بيانات
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Please fill all fields correctly.";
    }
} else {
    echo "Invalid request.";
}
?>
