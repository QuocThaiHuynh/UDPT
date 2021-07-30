<html>

<head>
    <title>Add page</title>
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
        <h1>QUESTION ADD</h1>
        <table class="table table-hover">
            
            <tbody>
                <?php
                $count=0;
                $key='http://localhost:3000/questions';
                require_once ("C:/xampp/htdocs/testphp/controllers/controller.php");
                require_once ('C:/xampp/htdocs/testphp/functionsAPI_php/functions_API.php');
                $c=(string)$_POST['txtQues'];
                $today = date("d/m/Y");
                // $userlike=array('');
                // $acc=array(
                //     '0'=>array('id'=>"123456",'Name'=>"default"),
                //     '1'=>array('id'=>"1234567",'Name'=>"default2")
                // );
                $data_add=array('Name'=>$c,'time'=>$today,'Tag'=>[],'IdUserLike'=>[],'Account'=>array('id'=>"123456",'Name'=>"default"));
                postData($key,$data_add);
                
                ?> 
            </tbody>
       
        </table>
        
    </div>
</body>

</html>