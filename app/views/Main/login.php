<?php include 'app/views/_global/beforeContent.php'; ?>

<article class="row">
    <div class="s12">
        <h1>Prijava na portal</h1>
        <div class="page-content">
            <form method="post">
                <div class="row">
                    <div class="s12">
                        <div class="input-field">
                            <label for="username">Korisničko ime:</label><br>
                            <input type="text" name="username" required class="validate"
                                   pattern="^[A-z0-9_\-\.]{4,32}$" placeholder="Unesite korisničko ime">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="s12">
                        <div class="input-field">
                            <label for="password">Lozinka:</label><br>
                            <input type="password" name="password" required class="validate"
                                   pattern="^.{6,255}$" placeholder="Unesite lozinku">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Prijavite se
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</article>

<?php if (isset($DATA['message'])): ?>
<p><?php echo htmlspecialchars($DATA['message']); ?></p>
<?php endif; ?>

<?php include 'app/views/_global/afterContent.php'; ?>