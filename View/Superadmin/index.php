<div class="container-fluid">
    <section id="logo-section"> <span id="logo">Haj és SzépségÁpolás Admin bejelentkezés</span> </section>
    <div class="row row-centered">
        <section id="login" class="col-md-3 col-centered">
            <form method="post" action="<?php echo "/superadmin/login"?>">
                <div class="form-group">
                    <label for="username"><span class="glyphicon glyphicon-user"></span>&nbsp;Felhasználónév:</label>
                    <input type="text" class="form-control" id="username"> </div>
                <div class="form-group">
                    <label for="password"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;Jelszó:</label>
                    <input type="password" class="form-control" id="password"> </div>
                <button type="submit" class="btn btn-default">Bejelentkezés</button>
            </form>
        </section>
    </div>
</div>