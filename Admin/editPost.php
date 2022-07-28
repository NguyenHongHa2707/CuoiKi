<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<?php 
 require '../demo/includes/database.php';
 $data = new database();
 if(isset($_GET["id_post"])){
     $data = new database();
     $dataPost = $data->selectPostId($_GET["id_post"]);
 }else{
     header("location: https://blogsha.herokuapp.com/listPost.php" ); 
 }
    require '../demo/theme/header.php';
   
    if(isset($_POST["title"])){
        //add Categories
        try{
            $conn = $data->updatePost
                    ($_POST["id_post"],
                    $_POST['title'],
                    $_POST['categori'],
                    $_POST['description']
                    ,$_POST['content'], 
                    $_POST['image']);
            $thongbao = "Update post thành công!!!";
        }
        catch( Exception $e){
            var_dump($e);
            $thongbao = "Update post thất bại";
        }
        echo $thongbao;
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
                <form action="editPost.php" method="post" >
                   
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" value="<?php echo $dataPost[0]['title'] ?>">    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categories</label>
                    <select class="form-control" id="exampleFormControlSelect1" name ="categori">
                    <?php 
                        foreach ($data->selectCategories() as $cate) {
                            if($cate['id'] == $dataPost[0]['category']){
                                echo '<option selected value= "'.$cate['id'].'" >'.$cate['name'].'</option>';
                            }else{
                                echo '<option value= "'.$cate['id'].'" >'.$cate['name'].'</option>';
                            }
                            
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Mô tả chi tiết</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $dataPost[0]['description'] ?>">    
                </div>
                <div class="form-group">
                    <label for="image">Link Image</label>
                    <input type="text" class="form-control" id="image" name="image" value="<?php echo $dataPost[0]['link_image'] ?>">    
                </div>
                <div class="form-group">
                    <label for="editor">Nội dung</label>
                    <textarea class="form-control" id="editor" name="content" rows="4"><?php echo $dataPost[0]['content'] ?></textarea>
                </div>
                <style>
                                            .ck-placeholder, .ck-content {
                                                height: 200px;
                                            }
                                        </style>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-2 px-5" value="Tạo"> 
                </div>
                <input type="hidden" value ="<?php echo $dataPost[0]['id_post']?>" name= "id_post" />
            </form>
            </div>  
        </section>
    <?php 
    require '../demo/theme/footer.php';
?>
  <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <style>