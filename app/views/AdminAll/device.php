
        <div class="row">
            <div class="col m4">
                <ul class="tabs mytabs">
                    <li class="tab mytab"><a class="active" href="#addNewDevice">Add new</a></li>
                    <?php foreach ($DATA["devices"] as $device): ?>
                    <li class="tab mytab"><a href="#device-<?php echo Misc::specialCharactersRemoveal($device->name); ?>"><?php echo $device->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col m8">
                <div id="addNewDevice" class="col tab-content mytab-content">
                    <form action="<?php echo Misc::link("admin/devices/store/"); ?>" method="POST">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Upload</span>
                                <input name="slika" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <select name="kategorije[]" multiple>
                                <option value="" disabled selected>Izaberite kategorije</option>
                                <?php foreach ($DATA['kategorije'] as $kategorija): ?>
                                    <option value="<?php echo $kategorija->category_id; ?>"><?php echo $kategorija->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Kategorije:</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="naslov" type="text" class="validate" name="naslov">
                                <label for="email">Naslov</label>
                            </div>
                        </div>	
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="cena" type="number" class="validate" name="cena">
                                <label for="email">Cena</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" name="opis" class="materialize-textarea" data-length="120"></textarea>
                                    <label for="textarea1">Opis</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
                <?php foreach ($DATA['devices'] as $device): ?>
                <div id="device-<?php echo Misc::specialCharactersRemoveal($device->name); ?>" class="col tab-content mytab-content">
                        <form action="admin/devices/edit/<?php echo $device->device_id; ?>" method="POST">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Upload</span>
                                    <input name="slika" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <select multiple>
                                    <option value="" disabled selected>Izaberite kategorije</option>
                                    <?php foreach ($DATA['kategorije'] as $kategorija): ?>
                                        <option value="<?php echo $kategorija->category_id; ?>"><?php echo $kategorija->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label>Kategorije:</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="naslov" type="text" class="validate" name="naslov" value="<?php echo $device->name; ?>">
                                    <label for="naslov">Naslov</label>
                                </div>
                            </div>	
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="cena" type="number" class="validate" name="cena" value="<?php echo $device->price; ?>">
                                    <label for="email">Cena</label>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" name="opis" class="materialize-textarea" data-length="120"><?php echo $device->description; ?></textarea>
                                        <label for="textarea1">Opis</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    <form action="<?php echo Misc::link("admin/devices/delete/".$device->device_id); ?>" method="POST">
                <button class="btn waves-effect waves-light red" type="submit" name="action">DELETE
                    </button>
            </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
