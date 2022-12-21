<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once '../config/database.php';
include_once '../class/employees.php';

$ch = curl_init();
//$query = isset($_GET['query']) ? $_GET['query'] : die();
$query = isset($_GET['query']) ? urlencode($_GET['query']) : die();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://api.unsplash.com/photos/random?client_id=vebG0dLYa4T1dot7y2riaPTQxMznG81QevRU_k8AfBk&count=1&query='.$query);
//curl_setopt($ch, CURLOPT_POST, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
$result = curl_exec($ch);

echo $result;

//$data = json_decode($result);
//$results = $data['id'];
//$results = array();

//$suppliers = array();
//$customers = array();

/*foreach ($results as $key => $value){
    if ($key['id'] == $results){
        echo $key['id'];
    }
}*/



//header('Content-Type: application/json');

//echo json_encode($customers);
//echo json_encode($suppliers);

die();

//print_r($result);
curl_close($ch);
/*
$database = new Database();
$db = $database->getConnection();

$items = new Employee($db);

$stmt = $items->getEmployees();
$itemCount = $stmt->rowCount();


echo json_encode($itemCount);
//Photo by <a href="https://unsplash.com/@anniespratt?utm_source=your_app_name&utm_medium=referral">Annie Spratt</a> on <a href="https://unsplash.com/?utm_source=your_app_name&utm_medium=referral">Unsplash</a>;

if($itemCount > 0){

    $employeeArr = array();
    $employeeArr["body"] = array();
    $employeeArr["itemCount"] = $itemCount;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "age" => $age,
            "designation" => $designation,
            "created" => $created
        );

        array_push($employeeArr["body"], $e);
    }
    echo json_encode($employeeArr);
}


else{
    http_response_code(404);
    echo json_encode(
        array("message" => "No record found.")
    );
}
*/
?>