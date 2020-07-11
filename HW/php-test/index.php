<?php
include_once '../../lib/lib.inc';

function getBookList(){
    $link = getConnect();
    $sql = "SELECT * FROM tbBook";
    $result = mysqli_query($link, $sql);
    if(mysqli_fetch_array($result)==0){
        echo "There is no book in datbase";
    }
    
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td><a href='detail.php?code=$row[0]'>Details</a></td>";
        echo "</tr>";
    }
    
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../../lib/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../lib/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        
        <div class="container">
            <h3>Book List</h3>
            <div class="row">
                <div class="col-md-5">
                    <form class="" action="">
                        <div class="form-group">
                            <label>Book Title</label>
                            <input type="text" placeholder="Search..." class="form-inline" name="txtTitle" id="txtTitle">

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Filter" name="btnFilter" class="form-inline btn btn-success">
                        </div>
                    </form>
                    <a class="btn btn-info mb-2" href="create.php">Create New Book</a>
                    <table class="table table-border table-hover table-stripeds">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Edition</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                getBookList();
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </body>
</html>
