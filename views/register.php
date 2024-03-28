<?php 

Core\View::render('header');

$errors = 
[
    'email_taken'=>'Tento email je již registrován',
    'wrong_credentials'=>'Zadali jste špatné přihlašovací údaje',
];


?>

<body>
    <head class="header">
    </head>
    <main class="container--center">
        <form action="/Todolist2024/registrace" class="form" method="post">
            <h1 class="form__headline">Zaregistrovat se</h1>
            <input type="text" name="email" placeholder="Email" autofocus>
            <?php if(isset($_GET['error'])) echo '<small class="form__error-message">'.$errors[$_GET['error']].'</small>'; ?>
            <input type="text" name="password" placeholder="Heslo">
            <input type="text" placeholder="Potvrzení hesla">
            <button class="button--primary" type="submit">Registrovat</button>
            <div class="form__footer">
                <p>Již máte účet? <a href="/Todolist2024/login">přihlaste se.</a></p>
            </div>
        </form>
    </main>
</body>
</html>