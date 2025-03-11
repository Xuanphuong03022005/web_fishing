<div class="container mt-5" style="width: 500px;">
    <div class="box border border-dark p-4">
        <legend class="text-center text-info fw-bold">ADD PRODUCT</legend>
        <form action="" method="POST" enctype="multipart/form-data"> 
            <div class="form-group mb-3">
                <label for="">Name:</label>
                <input name="productName" type="text" class="form-control" id="" value="">
            </div>
            <div class="form-group mb-3">
                <label for="">Image:</label>
                <input name="image" type="file" class="form-control" id="" value="">
            </div>
            <div class="form-group mb-3">
                <label for="">Price:</label>
                <input name="productPrice" type="text" class="form-control" id="" value="">
            </div>
            <div class="form-group mb-3">
                <label for="">Factory:</label>
                <select name="productFactory" class="form-select" required>
                    <option value="" selected>--- Select ---</option>
                    <?php foreach ($factoryList as $key => $value) : ?>
                        <option value="<?php echo $value['id']; ?>"><?php echo $value['location'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Category:</label>
                <select name="productCategory" class="form-select" required>
                    <option value="" selected>--- Select ---</option>
                    <?php foreach ($categoryList as $key => $value) : ?>
                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button name="action" class="btn btn-success" value="add_product" type="submit">SAVE</button>
            <button name="action" class="btn btn-primary" type="reset">RESET</button>
        </form>
    </div>
</div>