<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../lib/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="../lib/js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container ">
            <h2>Search</h2>
            <hr>
            <div>
                <form name="formSearch" id="formSearch">
                    Name : <input type="text" value="" 
                                  name="txtSearch" id="txtSearch" />
                    <input type="submit" value="Search" 
                           name="btnOK" id="btnOK" >
                </form>
                <br><br>
            </div>
            <div id="result">

            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#formSearch").submit(function () {
                    var url = "L10_search_process.php";
                    var data = {
                        name: $("#txtSearch").val(),
                        ok: $("#btnOK").val()
                    };
                    var success = function (result) {
                        $("#result").html(result);
                    }
                    var dataType = "text";

                    $.get(url, data, success, dataType);
                    return false;
                });

                $("#formSearch").submit();
            });
        </script>

        
    </body>
</html>
