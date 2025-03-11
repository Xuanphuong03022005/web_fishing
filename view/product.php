
<div class="container">
    <a class="btn btn-sm btn-info mt-1 fl-4 " href="?controller=productcontroller&action=arrange&value=asc" onclick="showgif()">GIÁ CAO->THẤP</a>
    <a class="btn btn-sm btn-warning mt-1 fl-4 " href="?controller=productcontroller&action=arrange&value=desc" onclick="showgif()">GIÁ THẤP->CAO</a>
    <a class="btn btn-primary mt-1 float-end" href="?controller=productcontroller&action=add" onclick="showgif()">ADD NEW</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">IMAGE</th>
                <th scope="col">NAME</th>
                <th scope="col">PRICE</th>
                <th scope="col">FACTORY</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($result)): ?>
                <?php foreach ($result as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><img src="public/image/<?php echo $value['image']; ?>" width="60" height="60"></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['price']; ?></td>
                        <td><?php echo $value['category_name']; ?></td>
                        <td><?php echo $value['location_name']; ?></td>
                        <td><a href="?controller=productcontroller&action=edit&id=<?php echo $value[0] ?>" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-pen"></i>
                            </a>
                        </td>
                        <td><a href="?controller=productcontroller&action=delete&id=<?php echo $value[0] ?>" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

