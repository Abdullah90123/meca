<div style="text-align: center; margin: 20px 0;">
    <form method="get" action="<?php echo site_url('products/search'); ?>" style="display: inline-block;">
        <input type="text" name="q" placeholder="Search products..." style="padding: 8px; width: 600px; border-radius: 20px;">
        
        <select name="category" style="padding: 8px;">
            <option value="">All Categories</option>
            <option value="tshirt">T-Shirts</option>
            <option value="hoodie">Hoodies</option>
            <option value="shoes">Shoes</option>
        </select>

        <button type="submit" style="padding: 8px 12px;">Apply</button>
    </form>
</div>
<section class="features" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
   <?php foreach ($products as $product): ?>
        <div class="feature-card" style="width: 300px; height: 400px; border: 1px solid #ddd; padding: 16px; box-shadow: 0 0 8px rgba(0,0,0,0.1); border-radius: 8px; text-align: center;">

            <div class="image-container" style="width: 100%; height: 200px; overflow: hidden; border-radius: 6px; margin-bottom: 12px;">
                <img src="<?= base_url($product['image']); ?>" alt="<?= $product['name']; ?>" class="img-fluid rounded thumbnail-image">
            </div>

            <h3><?= esc($product['name']) ?></h3>
            <p><?= esc($product['description']) ?></p>
            <p><strong>$<?= esc($product['price']) ?></strong></p>

            <a 
              href="<?= site_url('products/details/' . $product['id']) ?>" 
              style="display: inline-block; margin-top: 10px; padding: 8px 12px; background: black; color: white; text-decoration: none; border-radius: 4px;"
            >
                View Details
            </a>
        </div>
    <?php endforeach; ?>

</section>
