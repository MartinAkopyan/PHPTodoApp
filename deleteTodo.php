<?php
$todos = json_decode(file_get_contents('todos.json'), true);

if (!isset($_POST['todoName'])) {
    throw new \Exception('No todo name provided');
}
$todoName = $_POST['todoName'];
unset($todos[$todoName]);
file_put_contents('todos.json', json_encode($todos, JSON_PRETTY_PRINT));

header('Location: index.php');

