<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

require "./server/db.php";
include "./header.php";
require "./server/functions.php";

pozdrav();
?>

<body>
    <a class="button--error" href="/TodoApp/logout">Odhlásit se</a>
    <main class="container">
        <nav class="tabs">
            <div>
                <a id="demo" class="tabs__tab" href="/TodoApp/">To-do</a>
                <a class="tabs__tab" href="/TodoApp/done">Done</a>
            </div>
            <button autofocus id="new_todo" class="button--primary">Přidat nový úkol +</button>
        </nav>

        <?php 
            foreach($todos as $todo)
            {
                echo '
                <article class="todo">
            <div>
                <img src="" class="todo__img" alt="">
                <h1 class="todo__headline">'.$todo['title'].'</h1>
                <p class="todo__description">'.$todo['description'].'</p>
            </div>
            <div>
                <form action="/TodoApp/delete">
                    <input name="todo_id" type="hidden">
                    <button type="submit" class="button--error">Smazat</button>
                </form>
            </div>
        </article>
                ';
            }
        ?>
    </main>

    <div class="modal-overlay">
        <form action="/TodoApp/" class="form" method="post">
            <h1 class="form__headline">Nový úkol</h1>
            <input name="todo" id="todo_input" type="text" placeholder="Úkol" required autofocus>
            <input name="description" type="text" placeholder="Popis úkolu" required>
            <input name="done" type="hidden" value="0" required>
            <input name="user_id" type="hidden">
            <button class="button--primary" type="submit">Přidat úkol</button>
        </form>
    </div>

    <script src="./resources/script.js"></script>
    <script src="./resources/modal.js"></script>
</body>

</html>