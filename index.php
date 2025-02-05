<?php
if (file_exists('todos.json')) {
    $todos = json_decode(file_get_contents('todos.json'), true);
} else {
    $todos = [];
}
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
            <div class="has-validation">
                <div class="d-flex gap-2 card-body">
                    <input type="text" id="todo" name="todo" class="form-control">
                    <button type="submit" class="btn btn-primary" style="white-space: nowrap">Add Todo</button>
                </div>
                <div class="invalid-feedback">
                    feedback
                </div>
            </div>
        </form>
    </div>
    <div class="card p-2 mx-auto mt-4" style="max-width: 600px">
        <div class="card-header">
            My todos:
        </div>
        <div class="card-body mt-2 d-flex flex-column gap-2">
            <?php if ($todos): ?>
                <?php foreach ($todos as $todoName => $todo): ?>
                    <div class="todo-item d-flex gap-3 border border-secondary p-2 px-2 rounded-1">
                        <div>
                            <input type="checkbox" class="btn-check"
                                   id="<?php echo $todoName ?>" <?php echo $todo['completed'] ? 'checked' : '' ?>
                                   autocomplete="off">
                            <label class="btn btn-outline-primary" style="font-size: 10px"
                                   for="<?php echo $todoName ?>"><?php echo $todo['completed'] ? 'Completed' : 'Complete' ?></label><br>
                        </div>
                        <?php echo $todoName ?>
                        <form class="ms-auto" action="">
                            <button type="submit" class="red-x-mark">
                                &#x274C;
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h3 class="text-center">There is no todos yet!</h3>
            <? endif; ?>
        </div>
    </div>
</div>
</body>
</html>

<style>
    .red-x-mark {
        border: unset;
        background-color: transparent;
        opacity: 0.5;
        cursor: pointer;
        transition: all ease 0.2s;
    }

    .red-x-mark:hover {
        opacity: 1;
    }
</style>
