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

                        <table class="table table-striped">
                            <thead>
                                
                            <tr>
                            <th>post_id</th>
                            <th>post_category_id</th>
                            <th>post_title</th>
                            <th>post_author</th>
                            <th>post_date</th>
                            <th>post_image</th>
                            <th>post_content</th>
                            <th>post_tags</th>
                            <th>post_comment_count</th>
                            <th>post_status</th>
                            </tr>

                                    
                                
                            </thead>
                            <tbody>
                            <?php
                                    
                                    $query = "SELECT * FROM posts";
                                    $posts_query = mysqli_query($connection,$query);
                                    while($post=mysqli_fetch_assoc($posts_query)){
                                        $post_id = $post['post_id'];
                                        $post_category_id = $post['post_category_id'];
                                        $post_title = $post['post_title'];
                                        $post_author = $post['post_author'];
                                        $post_date = $post['post_date'];
                                        $post_image = $post['post_image'];
                                        $post_content = $post['post_content'];
                                        $post_tags = $post['post_tags'];
                                        $post_comment_count = $post['post_comment_count'];
                                        $post_status = $post['post_status'];

                                        echo "<tr>";
                                        echo "<td>$post_id</td>";
                                        echo "<td>$post_category_id</td>";
                                        echo "<td>$post_title</td>";
                                        echo "<td>$post_author</td>";
                                        echo "<td>$post_date</td>";
                                        echo "<td><img width=100 src='../images/$post_image'></td>";
                                        echo "<td>$post_content</td>";
                                        echo "<td>$post_tags</td>";
                                        echo "<td>$post_comment_count</td>";
                                        echo "<td>$post_status</td>";
                                        echo "</tr>";
                                    }
                                    
                                    ?>
                            
                            </tbody>
                        </table>




                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "includes/admin_footer.php";?>
 