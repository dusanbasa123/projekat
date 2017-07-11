<?php include 'app/views/_global/beforeContent.php'; ?>

<form method="post">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required placeholder="Enter the title here"
               pattern="^.{5,}$" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required placeholder="Enter the price here"
               min="0.01" step="0.01" value="0.01" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" required placeholder="Enter the description here"
                  pattern="^.{20,}$" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add new record</button>
    </div>
</form>

<?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
<?php endif; ?>

<?php include 'app/views/_global/afterContent.php'; ?>
