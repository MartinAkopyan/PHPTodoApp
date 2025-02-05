<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Todo</title>
</head>
<body>
<div class="container">
    <div class="card p-2 mx-auto mt-2" style="max-width: 600px">
        <form class="" action="newTodo.php" method="POST">
            <div class="card-header">
            <label for="todo" class="form-label mb-2"><h1 class="fs-2">Todo name:</h1></label>
            </div>
            <div class="d-flex gap-2 card-body">
                <input type="text" id="todo" name="todo" class="form-control">
                <button type="submit" class="btn btn-primary" style="white-space: nowrap">Add Todo</button>
            </div>
        </form>
    </div>
    <div class="card p-2 mx-auto mt-4" style="max-width: 600px">
        <div class="card-header">
            My todos:
        </div>
        <div class="card-body mt-2 d-flex flex-column gap-2">
            <div class="todo-item">Item 1</div>
            <div class="todo-item">Item 2</div>
            <div class="todo-item">Item 3</div>
        </div>
    </div>
</div>
</body>
</html>
