

<?php
function GetData($key){
    //$ch= curl_init();
    $url=$key;
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $resp=curl_exec($ch);
    // if($e = curl_error($ch)){
    // echo $e;
    // }else{
    $resp = file_get_contents($url);
    $decoded=json_decode($resp, true);
    /*in toan bo tag, questions(id, name,_v,...)*/
   //print_r($decoded);
        //in  toàn bộ tên của tags thi dc nhung giu nguyen de in toàn bộ nội dung câu hỏi thì ko báo lỗi foreach không áp dụng đc cho này
        //chỉ ap dụng cho mảng, object
   /* foreach ($decoded as $key=>$value){
        echo $value["Name"] ;
        echo "<br>";
    }*/
    return $decoded;
    // //echo $decode->$decode["Name"]; 
    // //in tên của tag, câu hỏi đc rồi
    // // echo $decoded["Name"];
    // var_dump($decoded);
    
// }
    //curl_close($ch);
}
function postData($key,$data)
{
    # code...
    // User data to send using HTTP POST method in curl
    //set data test
    //$data = array('userName'=>'New User 123','passwordHash'=>'65000');

    // Data should be passed as json format
    $data_json = json_encode($data);

    // API URL to send data
    $url = $key;

    // curl initiate
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // SET Method as a POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // Pass user data in POST command
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute curl and assign returned data
    $response  = curl_exec($ch);

    // Close curl
    curl_close($ch);
    

    // See response if data is posted successfully or any error
    print_r ($response);

}


?>
