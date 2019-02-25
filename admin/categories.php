<?php include "includes/admin_header.php";?>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php";?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>USER</small>
                        </h1>

                         <div class="col-xs-6">

                        <?php // ADD CATEGORY INTO CATEGORIES TABLE from functions.php
                         addCategory();
                       
                        ?>
                         
                         <!-- ADD CATEGORY FORM -->
                         <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input class="form-control" type="text" name="cat_title">
                            
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            
                            </div>
                         
                         </form>
                        

                        <!-- UPDATE CATEGORY FORM -->
                         <?php
                         
                         if(isset($_GET['edit'])){
                            include "includes/update_categories.php";
                         }
                         ?>

                        </div>
                         <div class="col-xs-6">

                        <?php //DELETE CATEGORY FUNCTION FROM functions.php
                         
                         deleteCategory();

                        ?>
                         <table class="table table-hover table-striped">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Category Title</th>
                                 </tr>
                             </thead>
                             <tbody>
                             
                             <?php //GENERATE TABLE FUNCTION FROM functions.php
                                generateTable();
                             ?>
                            </tbody>
                         </table>
                         
                         </div>           
                    </div>
                    <br>
                    <div>
                    <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "includes/admin_footer.php";?>
 