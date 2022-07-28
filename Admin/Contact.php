<?php 
 require 'includes/database.php';
$data = new database();
if(isset($_POST['id_delete'])){
    try{
        $data->detetePost($_POST['id_delete']);
        echo "oke";
     }catch(Exception $E){
         echo "thatbai";
     }
     exit;
    }
    if(isset($_GET['xoa'])){
      $thongbao = "Xóa thành công";
    }
        require 'header.php';

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
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Nội dung</th>
                                    </tr>
                                </thead>                                        
                                <tbody>
                                    <?php 
                                    $number = 0; 
                                       foreach ($data->selectReport() as $report) {
                                        $number++;    
                                        echo '
                                            <tr>
                                            <td>'.$number.'</td>
                                            <td>'.$report['email'].'</td>
                                            <td>'.$report['name'].'</td>
                                            <td>'.$report['mess'].'</td>
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
    require 'theme/footer.php';
?>
<script>
    function handleDialog(){
        $('#edit_category').modal('show');
    }
    function handleClickDelete(value){
        $.ajax({
            type : "POST",  //type of method
            url  : "listPost.php",  //your page
            data : { id_delete : value},// passing the values
            success: function(res){  
                                    window.location.replace("https://blogsha.herokuapp.com/listPost.php?xoa=true");
                    }
        });
    }
</script>
