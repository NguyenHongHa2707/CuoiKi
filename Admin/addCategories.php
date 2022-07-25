<?php 
    require '../demo/theme/header.php';
    require '../demo/includes/database.php';
    if(isset($_POST["name"])){
        //add Categories
        $data = new database();
        try{
            $conn = $data->insertCategories($_POST['name'],$_POST['description']);
            $thongbao = "Tạo categori thành công!!!";
        }
        catch( Exception $e){
            $thongbao = "Tạo categori thất bại";
        }
        
    }
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
            <h4 class="bg-secondary text-white p-2 my-0 mx-n3">Categories</h4>
            <div class="col-12   m-auto border border-secondary">
                <form action="addCategories.php" method="post" >
                   
                <div class="form-group">
                    <label for="username">Category Title</label>
                    <input type="text" class="form-control" id="username" name="name" >    
                </div>
                <div class="form-group">
                    <label for="description">Mô tả chi tiết</label>
                    <textarea class="form-control" id="description" name="description" rows="4" ></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-2 px-5" value="Tạo"> 
                </div>
            </form>
            </div>  
        </section>
    <?php 
    require '../demo/theme/footer.php';
?>