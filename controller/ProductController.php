<?php
class ProductController {
    public static function view(){
        $result = ProductModel::get_all();
        require_once 'view/product.php';
    }
    public static function add(){
        $factoryList = FactoryModel::get_all();
        $categoryList = CategoryModel::get_all();
        require_once 'view/product/add.php';
    }
    public static function add_product() {
          //xử lí ảnh
          $image ="";
          $tmp_name =$_FILES['image']['tmp_name'];
          $path =getcwd(). DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'image';
          $name_image =$path.DIRECTORY_SEPARATOR.$_FILES['image']['name'];
          $success =move_uploaded_file($tmp_name, $name_image);
          if($success){
              $masse = $name_image . "Đã upload";
              $image =$_FILES['image']['name'];
          }
        $name  =$_POST['productName'];
        $price =$_POST['productPrice'];
        $category =$_POST['productCategory'];
        $factory =$_POST['productFactory'];
        ProductModel::add_product($image, $name, $price, $category, $factory);
        $result = ProductModel::get_all();
        require_once('view/product.php');
    }
    public static function delete(){
        $id = $_GET['id'];
        $image= MasterModel::get_by_id($id);
        $name_image =$image['image'];
        $path = getCwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'image';
        $deleteImage =unlink($path.DIRECTORY_SEPARATOR. $image['image']);
        if(!$deleteImage){
            return "xoá ảnh thất bại";
        }
        ProductModel::delete_product($id);
        $result =ProductModel::get_all();
        require_once('view/product.php');
    }
    public static function edit(){
        $id = $_GET['id'];
        $result =MasterModel::get_by_id($id);
        $categoryList =CategoryModel::get_all();
        $factoryList =FactoryModel::get_all();
        require_once('view/product/edit.php');
    }
    public static function update(){
        $id = $_POST['productID'];
        //xử lí ảnh
        $image =$_POST['productOldImage'];
        $tmp_name = $_FILES['productImage']['tmp_name'];
        $path =getcwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'image';
        $name_pic =$path.DIRECTORY_SEPARATOR.$_FILES['productImage']['name'];
        if(isset($_FILES['productImage'])){
            $success =move_uploaded_file($tmp_name, $name_pic);
        }else{
            $success = false;
        }
        if($success){
            $image =$_FILES['productImage']['name'];
        }
        $name = $_POST['productName'];
        $price = $_POST['productPrice'];
        $factory = $_POST['productFactory'];
        $category = $_POST['productCategory'];
        ProductModel::update_product($id, $image, $name, $price, $factory, $category);
        $result = ProductModel::get_all();
        require_once('view/product.php');

    }
    public static function search(){
        $data = $_POST['search'];
        $result= ProductModel::search_product($data);
        require_once('view/product.php');

    }
    public static function arrange(){
        $value = $_GET['value'];
        if( $value == 'asc'){
            $data = 'DESC';
        }else{
            $data = 'ASC';
        }
        $result = ProductModel::arrange_product($data);
        require_once('view/product.php');
    }

    // lưu vô ordoer

    // foreach ($sss as $key => $value) {
    //     $pr_id = $value['product_id'];
    //     $pr_iname= $value['product_id'];
    //     ProductModel::add_product($pr_id, $pr_iname);
    // }
   
}