<?php

if(!is_dir('images')){
    mkdir('images');
}
$upload_path = 'images/'.$_FILES['file']['name'];
// var_dump($upload_path);exit;
if(move_uploaded_file($_FILES['file']['tmp_name'],iconv('utf-8','gb2312', $upload_path))){
    // $result['image_url'] = $upload_path;
    $result['data']['url'] = $upload_path;
    $result['code'] = 1;
    echo json_encode($result);
}