<form method="post">
    <div class="form-group">
        <label for="">Name </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <select name="type">
            <option value="Smartphone">Smartphone</option>
            <option value="Laptop">Laptop</option>
            <option value="Tablet">Tablet</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="">Amount</label>
        <input type="number" name="amount" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="hidden" name="createdDate" value="<?php echo date("Y-m-d H:i:s");?>">
    <button type="submit" class="btn btn-primary">Add</button>
    <a href="./index.php"><button type="" class="btn btn-primary">Cancel</button></a>
</form>