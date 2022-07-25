<?php 
    require '../demo/theme/header.php';
?>
        <!-- PAGE CONTAINER-->
        <div  class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div  class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div  class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                   
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside  class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    
                </div>
            </aside>
            
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
                                    <button class="au-btn au-btn-icon au-btn--green">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

             <!-- form -->

            <section>
            <h4 class="bg-secondary text-white p-2 my-0 mx-n3">Bài viết</h4>
            <div class="col-12   m-auto border border-secondary">
                <form action="xulydangky.php" method="post" >
                   
                <div class="form-group">
                    <label for="username">Category Title</label>
                    <input type="text" class="form-control" id="username" name=""username" >    
                </div>
                <div class="form-group">
                    <label for="password">Category Meta Title</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="repass">Category Path</label>
                    <input type="text" class="form-control" id="repass" name="repass">
                </div>
                
               
                <div class="form-group">
                    <label for="hinh">Images</label>
                    <input type="file" class="form-control" id="hinh" name="hinh" >    
                </div>
                
                <div class="form-group">
                    <label for="mota">Mô tả chi tiết</label>
                    <textarea class="form-control" id="mota" name="mota" rows="4" ></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary py-2 px-5" value="Đăng bài"> 
                    <input type="reset" class="btn btn-danger py-2 px-5" value="Sửa">
                </div>
            </form>
            </div>  
        </section>
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
                                        <th>Meta Title</th>
                                        <th>Path</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>                                        
                                <tbody>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>  

                                    <td>
                                        <button class="popup-button">View</button>
                                        <button data-toggle="modal" data-toggle="modal" data-target="#edit_category ">Edit</button>
                                        <button data-toggle="modal" data-toggle="modal" data-target="#delete_category">Delete</button>
                                    </td>
                                        <div class="modal fade" id="edit_category <?php echo $rows['n_category_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                                <input name="category_title" class="form-control" placeholder="Enter category" value="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Category Meta Title</label>
                                                                <input name="category_meta_title" class="form-control" placeholder="Enter meta category" value="?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Category Path</label>
                                                                <input name="category_path" class="form-control" placeholder="Enter path category" value="">
                                                            </div>        
                                                            
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="form_name" value="edit_category">
                                                        <input type="hidden" name="category_id" value="">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>                                                                
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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
                                                        <input type="hidden" name="form_name" value="delete_category">
                                                        <input type="hidden" name="category_id" value="">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        </td>
                                    </tr> 
                                                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
                <!-- /.panel -->
            </div>
        </div>


        </section>


          

    <?php 
    require '../demo/theme/footer.php';
?>