<?php
///////////////////////////////------------- 20210819090621.....BAIGIAU ZIURETI 1:58:43--------------////////////////
function connect()
{
    return new mysqli("localhost", "root", "", "medelynams");
}


function find($id){    
$conn = connect();      
$sql = 'SELECT * from `plants` where id ='.$id;               
$result = $conn->query($sql);      
$conn->close(); 
return $result->fetch_assoc();         
}


// function allOld(){
//     $conn = connect();
// $sql = "SELECT * from `plants`";
// $result = $conn->query($sql);

// $arr = [];
//     while($row = $result->fetch_assoc()) {
//         $plant = [];
//         $plant['id']= $row['id'];
//         $plant['name'] = $row['name']; 
//         $plant['is_yearling'] = $row['is_yearling'];
//         $plant['quantity'] = $row['quantity'];
//         $arr[] = $plant;
//     }
// $conn->close();
// return $arr;
// }




function all(){
    $conn = connect();
    $sql = "SELECT * from `plants`";
    $result = $conn->query($sql);
    $conn-> close();   
    return $result;
}


function store(){
    $conn = connect();
    $sql = 'INSERT INTO `plants`(`id`,`name`,`is_yearling`, `quantity`) VALUES (NULL,"'.$_POST['name'].'","'.$_POST['is_yearling'].'","'.$_POST['quantity'].'")';
    $conn->query($sql);
    $conn-> close();   
}


function update(){
    $conn = connect();
    $sql = 'UPDATE `plants` SET `name`="'.$_POST['name'].'",`is_yearling`="'.$_POST['is_yearling'].'",`quantity`="'.$_POST['quantity'].'" WHERE id ="'.$_POST['update'].'"';
    $conn->query($sql);
    $conn-> close();   
} 


function destroy($id){
    $conn = connect();
    $sql = "DELETE FROM `plants` WHERE id=$id";
    $conn->query($sql);
    $conn-> close();   
}

 
// fetch_assoc() paima sekanti duomenu klasteri