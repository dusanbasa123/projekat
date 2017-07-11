<?php include 'app/views/_global/beforeContent.php'; ?>

<form method="post">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required placeholder="Enter the title here" class="form-control"
               pattern="^.{5,}$" value="<?php echo htmlspecialchars($DATA['product']->title); ?>">
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required placeholder="Enter the price here" class="form-control"
               min="0.01" step="0.01" value="<?php echo htmlspecialchars($DATA['product']->price); ?>">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" required placeholder="Enter the description here" class="form-control"
                  pattern="^.{20,}$"><?php echo htmlspecialchars($DATA['product']->description); ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>

<?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
<?php endif; ?>

<?php include 'app/views/_global/afterContent.php'; ?>
