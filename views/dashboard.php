<?php

Core\View::render('header', ['title'=>'Todo aplikace 2024']);

use Core\Auth;
use Core\View;

?>


<body>
    <main class="container">

        <a href="/Todolist2024/logout" class="button--error"> Odhlásit se </a>

        <nav class="tabs">
            <div>
                <a id="demo" class="tabs__tab" href="/TodoApp/">To-do</a>
                <a class="tabs__tab--selected" href="/TodoApp/done">Done</a>
            </div>
            <button autofocus id="new_todo" class="button--primary">Přidat nový úkol +</button>
        </nav>

        <?php 

        foreach ($todos as $todo) 
        { 
            View::render('todo', ['todo' => $todo]); 
        } 

        ?>
    </main>

    <div class="modal-overlay">
        <form action="/Todolist2024/" class="form" method="post">
            <h1 class="form__headline"><?php echo $modal_title ?></h1>
            <input name="todo" id="todo_input" type="text" placeholder="Úkol" required autofocus>
            <input name="description" type="text" placeholder="Popis úkolu" required>
            <input name="done" type="hidden" value="0" required>
            <input name="user_id" type="hidden" value="<?php echo Auth::user() ?>">
            <button class="button--primary" type="submit">Přidat úkol</button>
        </form>
    </div>

    <script src="/Todolist2024/Views/resources/modal.js"></script>
    <script src="/Todolist2024/Views/resources/script.js"></script>
</body>

</html>