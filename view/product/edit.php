<div class="container mt-5" style="width: 500px;">
    <div class="box border border-dark p-4">
        <legend class="text-center text-info fw-bold">EDIT PRODUCT</legend>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">Id:</label>
                <input name="productID" type="text" class="form-control" id="" readonly value="<?php echo $result['id'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Image:</label>
                <input name="productImage" type="file" class="form-control">
                <input type="hidden" name="productOldImage" id="" value="<?php echo $result['image'] ?>">
                <img class="form-group mt-3" src="public/image/<?php echo $result['image'] ?>" style="width :60px; height :60px; border-radius: 10px;">
            </div>
            <div class="form-group mb-3">
                <label for="">Name:</label>
                <input name="productName" type="text" class="form-control" id="" value="<?php echo $result['name'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Price:</label>
                <input name="productPrice" type="text" class="form-control" id="" value="<?php echo $result['price'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Factory:</label>
                <select name="productFactory" class="form-select" required>
                    <?php foreach ($factoryList as $key => $value) : ?>
                        <option value="<?php echo $value['id']; ?>"
                            <?php if ($value['id'] == $result['factory_id']) echo "selected" ?>><?php echo $value['location'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Category:</label>
                <select name="productCategory" class="form-select" required>
                    <?php foreach ($categoryList as $key => $value) : ?>
                        <option value="<?php echo $value['id']; ?>"
                            <?php if ($value['id'] = $result['category_id']) echo "selected" ?>><?php echo $value['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button name="action" class="btn btn-success" value="update" type="submit">SAVE</button>
        </form>
    </div>
</div>