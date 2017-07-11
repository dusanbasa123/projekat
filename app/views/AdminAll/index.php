<?php include 'app/views/_global/beforeContent.php'; ?>

<ul id="tabs-swipe-demo" class="tabs">
    <li class="tab col s3"><a class="active" href="#test-swipe-1">Categories</a></li>
    <li class="tab col s3"><a href="#test-swipe-2">Devices</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Specifications</a></li>
</ul>
<div id="test-swipe-1" class="col s12">
    <?php include 'app/views/AdminAll/category.php'; ?>
</div>
<div id="test-swipe-2" class="col s12">
    <?php include 'app/views/AdminAll/device.php'; ?>
</div>
<div id="test-swipe-3" class="col s12">
    <?php include 'app/views/AdminAll/specification.php'; ?>
</div>

<?php include 'app/views/_global/afterContent.php'; ?>