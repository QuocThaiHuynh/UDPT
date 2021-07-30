<?php
    //include_once '../Get_Post_Put_Patch_Delete/set.php';\
    include_once "../functionsAPI_php/define.php"
    include_once "functionsAPI";

    // --------------------------------
    $k = "tags";
    $key = "accounts";
    getAPI_url($k);
    $data = array('userName'=>'New User 123','passwordHash'=>'65000');
    postAPI_url($key,$data);
    echo   "br";
    echo   "new";
    getAPI_url($key);
    $data2 = <<<DATA
    {
      "userName": "12345",
      "passwordHash": "John Smith",
      "Role": 1
    }
    DATA;
?>