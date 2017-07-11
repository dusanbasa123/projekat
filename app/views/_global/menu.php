<nav class="nav-wrapper deep-purple darken-4">
    <a href="index.html"> <img src="<?php echo Misc::link("assets/img/logo1.png"); ?>" id="logo2" alt=""></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><?php echo Misc::url("", "Pocetna"); ?></li>
        <?php foreach ($DATA['kategorije'] as $kategorija): ?>
        <li> <?php Misc::url("category/".$kategorija->category_id, $kategorija->name); ?>
        </li>
        <?php endforeach; ?>
        <li><?php echo Misc::url("kontakt/", "Kontakt"); ?></li>
        <?php if (Session::exists('user_id')): ?>
            <?php include 'app/views/_global/menu-session.php'; ?>
        <?php else: ?>
            <li><a class="waves-effect waves-light btn" href="registracija.html">Registracija</a></li>
        <?php endif; ?>
    </ul>
    <ul class="side-nav" id="mobile-demo">
        <li class="active"><?php echo Misc::url("", "Pocetna"); ?></li>
        <?php foreach ($DATA['kategorije'] as $kategorija): ?>
        <li><a href="<?php echo Misc::link('category/' . $kategorija->category_id); ?>">
                <?php echo htmlspecialchars($kategorija->name); ?>
            </a>
        </li>
        <?php endforeach; ?>
        <li><?php echo Misc::url("kontakt/", "Kontakt") ?></li>
        <?php if (Session::exists('user_id')): ?>
            <?php include 'app/views/_global/menu-session.php'; ?>
        <?php else: ?>
            <li><a href="registracija.html">Registracija</a></li>
        <?php endif; ?>
        
    </ul>
    <script>$(".button-collapse").sideNav();</script>   
</nav> 