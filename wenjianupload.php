<?php
	if(isset($_POST['button'])){
	
		foreach($_FILES['face']['name'] as $k=>$name){

  			// //临时文件
  			// $tmp_path = $_FILES['face']['tmp_name'][$k];
  			//文件上传路径
  			$dst_path = "./uploads/".uniqid('',true).strrchr($name,'.');
  			// //文件上传
  			// move_uploaded_file($tmp_path, $dst_path);
		}
    }
   

    $conn=@mysqli_connect('localhost','root','root','test');

    if(mysqli_connect_error()){
    	echo "错误信息是".mysqli_connect_error();
    	echo"错误码是".mysqli_connect_erron();
    	exit;

    }
    mysqli_set_charset($conn,'utf8');

    //给$dst_path要加上双引号
    
    $sql="insert into pics values(null,'$dst_path')";
    if(mysqli_query($conn,$sql))
    	echo "插入的id是",mysqli_insert_id($conn);
    else
    	echo"插入失败";
    
  

    ?>