<?php 
require '../demo/includes/database.php';
$data = new database();
if(isset($_POST['id_delete'])){
    try{
        $data->detetePost($_POST['id_delete']);
        echo "Xóa thành công";
    }catch(Exception $E){
        echo "Lỗi !!!!";
    }
    exit;
}
if(isset($_GET['xoa'])){
    $thongbao = "Xóa thành công";
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
                                    <a class="au-btn au-btn-icon au-btn--green" href="../demo/addPost.php">
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
                                        <th>Người đăng</th>
                                        <th>Thời gian đăng</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>                                        
                                <tbody>
                                    <?php
                                    $number = 0; 
                                       foreach ($data->selectPost() as $post) {
                                        $username =$data->getUser($post['id_user'])['username'];
                                        $number++;    
                                        echo '
                                            <tr>
                                            <td>'.$number.'</td>
                                            <td>'.$post['title'].'</td>
                                            <td>'.$username.'</td>
                                            <td>'.date("Y-m-d",$post['time_add']).'</td>
                                            <td style=" width:260px;">
                                                <a style="border:2px solid black;padding:5px; width:100px;text-align:center; background-color:#03506F;color:white;opacity:0.7" href = "../demo/editPost.php?id_post='.$post['id_post'].'">Edit</a>
                                                <button style="border:2px solid black;padding:5px; width:100px;text-align:center; background-color:red;color:white;opacity:0.7" data-toggle="modal" data-toggle="modal" data-target="#delete_category">Delete</button>
                                            </td>
                                                <div class="modal fade" id="delete_category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form method="POST" action="">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 style="margin:-2px 10px;"class="modal-title" id="myModalLabel">Delete Category</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure that you want to delete this category?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" name="form_name" value="'.$post['id_post'].'">
                                                                <input type="hidden" name="category_id" value="">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick = "handleClickDelete('.$post['id_post'].')">Delete</button>
                                                            </div>
                                                        </div>
                                                        </form>
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
    function handleDialog(){
        $('#edit_category').modal('show');
    }
    function handleClickDelete(value){
        $.ajax({
            type : "POST",  //type of method
            url  : "../demo/listPost.php",  //your page
            data : { id_delete : value},// passing the values
            success: function(res){  
                                    window.location.replace("http://127.0.0.1/PHP/NguyenHongHa/DoAn2/Backend/demo/listPost.php?xoa=true");
                    }
        });
    }
</script>
