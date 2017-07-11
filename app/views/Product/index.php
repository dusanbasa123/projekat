<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="row">
    
    <?php foreach ($DATA['products'] as $product): ?>
    <div class="col s12 m6 l3">
        <h2>
            <a href="<?php echo Misc::link('product/' . $product->product_id); ?>">
                <?php echo htmlspecialchars($product->title); ?>
            </a>
        </h2>
        <p><?php echo htmlspecialchars($product->description); ?></p>
        <p class="cena"><b>Cena:</b> <?php echo htmlspecialchars($product->price); ?> Din.</p>
    </div>
    <?php endforeach; ?>

</div>
<?php include 'app/views/_global/afterContent.php'; ?>