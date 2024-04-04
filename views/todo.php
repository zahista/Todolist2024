<?php
if ($todo['done'] == 0) {
    echo '<article class="todo">
                <div>
                    <img src="" class="todo__img" alt="">
                    <h1 class="todo__headline">' . $todo['title'] . '</h1>
                    <p class="todo__description">' . $todo['description'] . '</p>
                </div>
                <div> <form action="/Todolist2024/update">
                <input name="todo_id" type="hidden" value="' . $todo['id'] . '">
                <button type="submit" class="button--success">Hotovo</button>
            </form>   
            </div>
            </article>';
} else {
    echo '<article class="todo--done">
                <div>
                    <img src="" class="todo__img" alt="">
                    <h1 class="todo__headline">' . $todo['title'] . '</h1>
                    <p class="todo__description">' . $todo['description'] . '</p>
                </div>
                <div> 
                <form action="/Todolist2024/delete" method="post">
                    <input name="todo_id" type="hidden" value="' . $todo['id'] . '">
                    <button type="submit" class="button--error">Smazat</button>
                </form>
            </div>
            </article>';
}
