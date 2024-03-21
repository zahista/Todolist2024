<?php Core\View::render('header') ?>

<body>
    <main class="container">
        <nav class="tabs">
            <div>
                <a id="demo" class="tabs__tab" href="/TodoApp/">To-do</a>
                <a class="tabs__tab" href="/TodoApp/done">Done</a>
            </div>
            <button autofocus id="new_todo" class="button--primary">Přidat nový úkol +</button>
        </nav>

        <article>
            <div>
                <img src="" class="todo__img" alt="">
                <h1 class="todo__headline">404 - je nám líto :(</h1>
                <p class="todo__description">Vypadá to, že tato stránka nexistuje, zkuste to prosím znovu.</p>
            </div>
            <div>
               
            </div>
        </article>

    </main>

   

    <script src="./resources/script.js"></script>
</body>

</html>