
<div class="content">
    <h1>Are you sure delete this product?</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $product->getId(); ?>">
        <input type="submit" value="Delete">
    </form>
    <a href="./index.php"><button>Cancel</button></a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $key+1; ?></th>
                <td><?php echo $product->getName(); ?></td>
                <td><?php echo $product->getType(); ?></td>
            </tr>
        </tbody>
    </table>
</div>