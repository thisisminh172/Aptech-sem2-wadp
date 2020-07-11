<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Create New Book</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="txtTitle" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Author: </label>
                            <input type="text" name="txtAuthor" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Edition: </label>
                            <input type="number" name="numEdition" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-success">
                            <input type="reset" class="btn btn-dark">
                                
                        </div>
                    </form>
                    <a href="index.php">Go back to list</a>
                </div>
                
            </div>
        </div>
        <?php
        include_once '../../lib/lib.inc';
            if(isset($_POST['btnSubmit'])){
                $title = $_POST['txtTitle'];
                $author = $_POST['txtAuthor'];
                $edition = (int) $_POST['numEdition'];
                //print_r($_POST);
                $link = getConnect();
                $sql = "INSERT INTO tbBook(`Title`,`Author`,`Edition`) VALUES ('$title','$author',$edition)";
                $result = mysqli_query($link, $sql);
                if($result==true){
                    echo "New Book Created successfully";
                    
                }else{
                    echo "Fail to create!";
                }
            }
        ?>
    </body>
</html>
