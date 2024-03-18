<?php include "./header.php"; ?>

<body>
    <head class="header">
    </head>

    <?php  echo "<h1>  Hello world  </h1>"; ?>

    <main class="container--center">
        <form action="/TodoApp/login" class="form" method="post">
            <h1 class="form__headline">Zaregistrovat se</h1>
            <input type="text" name="email" placeholder="Email" autofocus>
                <p class="form__error-message">Chybová hláška</p>
            <input type="text" name="password" placeholder="Heslo">
            <input type="text" placeholder="Potvrzení hesla">
            <button class="button--primary" type="submit">Registrovat</button>
            <div class="form__footer">
                <p>Již máte účet? <a href="">přihlaste se.</a></p>
            </div>
        </form>
    </main>
</body>
</html>