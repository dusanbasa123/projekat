<?php include 'app/views/_global/beforeContent.php'; ?>

<?php Misc::url('admin/products/add', 'Add a new product', 'btn btn-primary'); ?>

<div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table table-condensed table-hover table-bordered">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Price</th>
                    <th colspan="2">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($DATA['products'] as $product): ?>
                <tr>
                    <td><?php echo $product->product_id; ?></td>
                    <td><?php echo htmlspecialchars($product->title); ?></td>
                    <td>
                        <ul>
                            <?php foreach ($product->product_categories as $category): ?>
                            <li><?php echo htmlspecialchars($category->name); ?>
                            <?php endforeach; ?>
                        </ul>
                    </td>
                    <td><?php echo htmlspecialchars($product->price); ?></td>
                    <td><?php Misc::url('admin/products/edit/' . $product->product_id, 'Edit'); ?></td>
                    <td><?php Misc::url('admin/products/delete/' . $product->product_id, 'Delete'); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'app/views/_global/afterContent.php'; ?>