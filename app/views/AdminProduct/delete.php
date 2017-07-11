<?php include 'app/views/_global/beforeContent.php'; ?>

<form method="post">
    <input type="hidden" name="confirm" value="confirm">

    <p>Do you want to delete this record?</p>

    <button type="submit" class="btn btn-danger">Yes, delete it!</button>
    
    <?php Misc::url('admin/products', 'Go back', 'btn btn-default'); ?>
</form>

<?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
<?php endif; ?>

<?php include 'app/views/_global/afterContent.php'; ?>
