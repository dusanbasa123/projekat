<div class="row">
    <div class="col m4">
        <ul class="tabs mytabs">
            <li class="tab mytab"><a class="active" href="#addNewCategory">Add new</a></li>
            <?php foreach ($DATA["kategorije"] as $device): ?>
            <li class="tab mytab"><a href="#device-<?php echo Misc::specialCharactersRemoveal($device->name); ?>"><?php echo $device->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col m8">
        <div id="addNewCategory" class="col tab-content mytab-content">
            <form action="<?php echo Misc::link("admin/categories/store/"); ?>" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="category" type="text" name="name" class="validate">
                        <label for="category">Category</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
        <?php foreach ($DATA['kategorije'] as $device): ?>
        <div id="device-<?php echo Misc::specialCharactersRemoveal($device->name); ?>" class="col tab-content mytab-content">
            <form action="<?php echo Misc::link("admin/categories/edit/".$device->category_id); ?>" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="category" type="text" name="name" value="<?php echo htmlspecialchars($device->name); ?>" class="validate">
                            <label for="category">Category</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            <form action="<?php echo Misc::link("admin/categories/delete/".$device->category_id); ?>" method="POST">
                <button class="btn waves-effect waves-light red" type="submit" name="action">DELETE
                    </button>
            </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>