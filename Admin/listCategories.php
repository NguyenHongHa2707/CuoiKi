<?php 
require '../demo/includes/database.php';
$data = new database();
if(isset($_POST['category_title'])){
    // update
    try{
        $data->updateCate($_POST['category_title'],$_POST['category_description_title'],$_POST['id']);
        header('location: ../demo/listCategories.php');
    }catch(Exception $E){
        $thongbao = "Update thất bại";
    }
    exit;
}
if(isset($_POST['id_delete'])){
    try{
        $data->deleteCate($_POST['id_delete']);
        $thongbao = "Xóa thành công";
    }catch(Exception $E){
        $thongbao = "Xóa thất bại";
    }
    exit;
}
    require '../demo/theme/header.php';
?>
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="home.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <a href="index.php">
                                                <li class="list-inline-item">Dashboard</li>
                                            </a>
                                        </ul>
                                    </div>
                                    <a class="au-btn au-btn-icon au-btn--green" href="../demo/addCategories.php">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <p style="color:green"><?php if(isset($thongbao)) echo $thongbao;?></p>
                        </div>
                    </div>
                </div>
            </section>

             <!-- form -->

        <section>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>                                        
                                <tbody>
                                    <?php
                                    $number = 0; 
                                       foreach ($data->selectCategories() as $cate) {
                                        $number++;    
                                        echo '
                                            <tr>
                                            <td>'.$number.'</td>
                                            <td>'.$cate['name'].'</td>
                                            <td>'.$cate['description'].'</td>
                                            <td>
                                                <button  onclick="handleDialog('.$cate['id'].')">Edit</button>
                                                <button data-toggle="modal" data-toggle="modal" data-target="#delete_category">Delete</button>
                                            </td>
                                                <div class="modal fade" id="delete_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form method="POST" action="">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure that you want to delete this category?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="form_name" value="'.$cate['id'].'">
                                                                <input type="hidden" name="category_id" value="">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick = "handleClickDelete('.$cate['id'].')">Delete</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="edit_category_'.$cate['id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
            </div>
            <form role="form" name="frm_edit" method="POST" action="">
            <div class="modal-body">                                                           
                    <div class="form-group">
                        <label>Category Title</label>
                        <input id ="category_title_'.$cate['id'].'" name="category_title" class="form-control" placeholder="Enter category" value="'.$cate['name'].'">
                    </div>

                    <div class="form-group">
                        <label>Category Meta Title</label>
                        <input id ="category_description_title_'.$cate['id'].'"  name="category_description_title" class="form-control" placeholder="Enter category description" value="'.$cate['description'].'">
                    </div>
                    <input name ="id" type="hidden" value = "'.$cate['id'].'" >
            </div>
            <div class="modal-footer">
                <input type="hidden" name="form_name" value="edit_category">
                <input type="hidden" name="category_id" value="">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick ="handleClickUpdate('.$cate['id'].')">Save changes</button>                                                                
            </div>
            </form>
        </div>
    </div>
</div>
                                                </td>
                                        </tr> 
                                            ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        </section>
        
    <?php 
    require '../demo/theme/footer.php';
?>
<script>
    function handleDialog(id){
        $('#edit_category_'+id).modal('show');
    }
    function handleClickUpdate(value){
        let category_title =  document.getElementById("category_title_"+value).value;
        let category_description_title =  document.getElementById("category_description_title_"+value).value;
        $.ajax({
            type : "POST",  //type of method
            url  : "../demo/listCategories.php",  //your page
            data : { id : value, category_title:category_title,category_description_title:category_description_title },// passing the values
            success: function(res){  
                window.location.replace("https://blogsha.herokuapp.com/listCategories.php?xoa=true");
                    }
        });
    }
    function handleClickDelete(value){
        $.ajax({
            type : "POST",  //type of method
            url  : "../demo/listCategories.php",  //your page
            data : { id_delete : value},// passing the values
            success: function(res){  
                window.location.replace("https://blogsha.herokuapp.com/listCategories.php?xoa=true");
                    }
        });
    }
</script>
