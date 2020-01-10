<form method="post">
    <div class="form-group">
        <label for="">Name </label>
        <input type="text" name="name" class="form-control" value="<?php echo $product->getName(); ?>">
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select name="type">
            <option value="Smartphone" <?php if ($product->getType() == "Smartphone") echo "selected"; ?>>Smartphone</option>
            <option value="Laptop" <?php if ($product->getType() == "Laptop") echo "selected"; ?>>Laptop</option>
            <option value="Tablet" <?php if ($product->getType() == "Tablet") echo "selected"; ?>>Tablet</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control" name="price" value="<?php echo $product->getPrice(); ?>">
    </div>
    <div class="form-group">
        <label for="">Amount</label>
        <input type="number" name="amount" class="form-control" value="<?php echo $product->getAmount(); ?>">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10" ><?php echo $product->getDescription(); ?></textarea>
    </div>
    <input type="hidden" name="id" value="<?php echo $product->getId(); ?>">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="./index.php"><button type="" class="btn btn-primary">Cancel</button></a>
</form>