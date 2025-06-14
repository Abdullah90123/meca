<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>

<div class="container">
    <div style="text-align: center; margin: 20px 0;">
        <form method="post" action="<?= base_url('products/create') ?>" enctype="multipart/form-data" style="display: inline-block;">
            <?= csrf_field() ?>

            <input type="text" name="name" placeholder="Product Name" required 
                style="padding: 8px; width: 600px; border-radius: 20px; margin-bottom: 10px;"><br>

            <input type="text" name="description" placeholder="Description" required 
                style="padding: 8px; width: 600px; border-radius: 20px; margin-bottom: 10px;"><br>

            <input type="number" name="price" placeholder="Price" step="0.01" required 
                style="padding: 8px; width: 600px; border-radius: 20px; margin-bottom: 10px;"><br>

            <input type="number" name="stock" placeholder="Stock Quantity" required 
                style="padding: 8px; width: 600px; border-radius: 20px; margin-bottom: 10px;"><br>

            <input type="file" name="image" accept="image/*" required 
                style="padding: 8px; width: 600px; border-radius: 20px; margin-bottom: 10px;"><br>

            <select name="category" style="padding: 8px; width: 600px; border-radius: 20px; margin-bottom: 10px;">
                <option value="">Select Category</option>
                <option value="tshirt">T-Shirts</option>
                <option value="hoodie">Hoodies</option>
                <option value="shoes">Shoes</option>
            </select><br>

            <button type="submit" style="padding: 8px 12px; margin-top: 10px;">Upload Product</button>
        </form>
    </div>
</div>
