<div style="text-align: center; margin: 20px 0;">
    <form method="get" action="<?php echo site_url('products/search'); ?>" style="display: inline-block;">
        <input type="text" name="q" placeholder="Search products..." style="padding: 8px;">
        
        <select name="category" style="padding: 8px;">
            <option value="">All Categories</option>
            <option value="tshirt">T-Shirts</option>
            <option value="hoodie">Hoodies</option>
            <option value="shoes">Shoes</option>
        </select>

        <button type="submit" style="padding: 8px 12px;">Apply</button>
    </form>
</div>