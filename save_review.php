<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = htmlspecialchars($_POST['username']);
    $rating = $_POST['rating'];
    $comment = htmlspecialchars($_POST['comment']);
    
    // Простой вывод данных (можно сохранять в базе данных или файле)
    echo "<h2>Review Submitted!</h2>";
    echo "<p><strong>Name:</strong> $username</p>";
    echo "<p><strong>Rating:</strong> $rating</p>";
    echo "<p><strong>Comment:</strong> $comment</p>";
}
?>
