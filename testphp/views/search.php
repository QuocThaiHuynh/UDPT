<html>

<head>
    <title>Search page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
.container{
    color: red;
};
    </style>
</head>

<body>
    <div class="container">
        <h1>QUESTION SEARCH</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><h5>ID questions</h5></th>
                    <th>Content questions</th>
                    <th>Time</th>
                    <!--th>Edit</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                $count=0;
                require ("C:/xampp/htdocs/testphp/controllers/controller.php");
                foreach($data as $key=>$value){
                    $a=(string)$value["Name"];
                    $b=(string)$_POST['txtWord'];
                    $temp=strpos($a,$b);
                    if (strpos($a, $b) !== false)
                    {
                        $count=1;
                ?>
                <tr>
                    <td><?php echo $value["_id"]; ?></td>
                    <td><?php echo $value["Name"]; ?></td>
                    <td><?php echo $value["time"]; ?></td>
                </tr> 
                <?php 
                }
            }
                if ($count==0){
                    echo 'Không tìm thấy câu hỏi';
                }
                ?> 
            </tbody>
       
        </table>
        
    </div>
</body>

</html>