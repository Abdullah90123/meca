<section class="features" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
   <a 
              href="<?= base_url('products.details/' . $products['id']) ?>" 
              style="display: inline-block; margin-top: 10px; padding: 8px 12px; color: white; text-decoration: none; border-radius: 4px;"
            >
        <div class="feature-card" style="width: 300px; height: 400px; border: 1px solid #ddd; padding: 16px; box-shadow: 0 0 8px rgba(0,0,0,0.1); border-radius: 8px; text-align: center;">

            <div class="image-container" style="width: 100%; height: 200px; overflow: hidden; border-radius: 6px; margin-bottom: 12px;">
                <img src="<?= base_url($products['image']); ?>" alt="<?= $products['name']; ?>" class="img-fluid rounded thumbnail-image">
            </div>

            <h3><?= esc($products['name']) ?></h3>
            <p><?= esc($products['description']) ?></p>
            <p><strong>$<?= esc($products['price']) ?></strong></p> 
        </div>
    </a>
</section>