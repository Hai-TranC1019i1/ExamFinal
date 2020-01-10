
<div class="content">
    <form class="form-inline my-2 my-lg-0" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a href="./index.php?page=add"><button type="button" class="btn btn-success">Add Product</button></a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $key => $product): ?>
        <tr>
            <th scope="row"><?php echo $key+1; ?></th>
            <td><?php echo $product->getName(); ?></td>
            <td><?php echo $product->getType(); ?></td>
            <td>
                <a href="./index.php?page=edit&id=<?php echo $product->getId();?>">Edit |</a>
                <a href="./index.php?page=delete&id=<?php echo $product->getId();?>" class ="danger"> Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>