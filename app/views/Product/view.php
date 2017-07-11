<?php include 'app/views/_global/beforeContent.php'; ?>

<div class="row">
    <div class="col s5">
        <?php if($DATA['pic'] != null) : ?>
            <img src="<?php echo Misc::link($DATA['pic']->path) ?>" alt="ge-pe-es" style="width:304px;height:228px;">
        <?php endif ?>
    </div>	
    <div class="col s7">
         <span class="flow-text">
            <div class="container">
               <div class="row">
                    Naziv: <?php echo htmlspecialchars($DATA['device']->name); ?>
                    <br/>
                    Cena: <?php echo htmlspecialchars($DATA['device']->price); ?>
                    <?php if($DATA['device']->description != null) : ?>
                    <h2>Opis:</h2>
                        <?php echo htmlspecialchars($DATA['device']->description); ?>
                    <?php endif ?>
                    <?php if(count($DATA['spec']) != 0) : ?>
                        <h2>Specifikacije:</h2>
                        <?php foreach ($DATA['spec'] as $spec): ?>
                            <?php echo $spec->name . ": ". $spec->value; ?>
                            <br/>
                        <?php endforeach; ?>
                    <?php endif; ?>
               </div>
           </div>
        </span>
    </div>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>