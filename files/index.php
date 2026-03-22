<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'] ?? '';
    echo "Получен комментарий: " . htmlspecialchars($comment);
} else {
    echo "Сервер для обработки комментариев";
}
