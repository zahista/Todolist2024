<?php Core\View::render('header', ['title' => $title]) ?>

<body>
    <head class="header">
    </head>


    <main class="container--center">
        <form action="/Todolist2024/login" class="form" method="post">
            <h1 class="form__headline">Přihlásit se</h1>
            <input type="email" name="email" placeholder="Email" autofocus>
            <input id="password" type="text" name="password" placeholder="Heslo">
            <small class="form__error-message">Heslo musí být delší než 5 znaků.</small>
            <button class="button--primary" type="submit">Přihlášení</button>
            <div class="form__footer">
                <p>Nemáte účet? <a href="registrace">Vytvořte si ho</a></p>
            </div>
        </form>
    </main>

    <script src="/Todolist2024/Views/resources/script.js"></script>
</body>
</html>