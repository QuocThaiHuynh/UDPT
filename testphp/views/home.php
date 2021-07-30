<html>

<head>
    <title>Home page</title>
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
        <h1>QUESTION FORUM</h1>
        <div>
        <form name="frmSearch" action="views/search.php" method="post">
			<label>Key words: </label>
			<input type="text" name="txtWord" />
			<input type="submit" value="SEARCH"/><br/>
		</form>
        <form name="frmAdd" action="views/add.php" method="post">
            <label>Question     :    </label>
			<input type="text" name="txtQues" />
			<input type="submit" value="ADD QUESTION"/><br/>
		</form>
        </div>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><h5>ID questions</h5></th>
                    <th>Content questions</th>
                    <th>Time</th>
                    <!--<th>Edit</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                require ("C:/xampp/htdocs/testphp/controllers/controller.php");
                foreach($data as $key=>$value){
                ?>
                <tr>
                    <td><?php echo $value["_id"]; ?></td>
                    <td><?php echo $value["Name"]; ?></td>
                    <td><?php echo $value["time"]; ?></td>
                </tr> 
                <?php 
                }
                
                ?> 
            </tbody>
       
        </table>
        
    </div>
</body>

</html>