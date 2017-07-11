<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="row">
    <div class="col s12 m3">
        <h2>Filteri</h2>
        <?php foreach($DATA["specs"] as $spec) : ?>
        <a class='dropdown-button btn stretch' href='#' data-activates='dropdown-<?php echo $spec['name']; ?>'> <?php echo $spec['name']; ?>:</a>
        <ul id='dropdown-<?php echo $spec['name']; ?>' class='dropdown-content'>
            <?php foreach($spec['values'] as $value) : ?>
            <li><a href="#!"><?php echo $value->value; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <br>
        <br>
        <?php endforeach; ?>			 
    </div>
    <div class="col m9 s12">
        <span class="flow-text">
            <div class="container">
                <div class="row">
                    <a class='dropdown-button btn pull right' href='#' data-activates='dropdown1'>Sortiraj po:</a>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Imenu A-Z</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Imenu Z-A</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Ceni rastuce</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Ceni opadajuce</a></li>
                    </ul>
                    <h2><?php echo $DATA['category_name']->name; ?></h2>
                </div>
                <div class="row">
                    <?php foreach($DATA['devices'] as $device): ?>
                    <div class="col s12 m4 l3">  
                        <img src="<?php echo $device->img_path; ?>" alt="s" id="gps+<?php echo $device->device_id; ?>">
                        <a href="<?php echo Misc::link('device/' . $device->device_id); ?>">
                            <?php echo htmlspecialchars($device->name); ?>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </span>
    </div>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>