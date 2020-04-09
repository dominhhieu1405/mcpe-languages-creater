<?php
//Thư mục bạn sẽ lưu file upload
$target_dir    = "icon/";
//Vị trí file lưu tạm trong server
$target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);
$allowUpload   = true;
//Lấy phần mở rộng của file
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$maxfilesize   = 6144; //(bytes)
////Những loại file được phép upload
$allowtypes    = array('jpg', 'png', 'jpeg', 'gif', 'icon');


if(isset($_POST["submit"])) {
    //Kiểm tra xem có phải là ảnh
    $check = getimagesize($_FILES["icon"]["tmp_name"]);
    if($check !== false) {
        $allowUpload = true;
    } else {
        $thongbao = $thongbao . "Đây không phải là file ảnh. <br>";
        $allowUpload = false;
    }
}

}
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
if ($_FILES["icon"]["size"] > $maxfilesize)
{
    $thongbao = $thongbao . "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
    $allowUpload = false;
}


// Kiểm tra kiểu file
if (!in_array($imageFileType,$allowtypes ))
{
    $thongbao = $thongbao . "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF, ICON";
    $allowUpload = false;
}

// Kiểm tra xem $uploadOk có bị lỗi thành 0 không
if ($allowUpload) {
    if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file))
    {
    }
    else
    {
        $thongbao = $thongbao . "Có lỗi xảy ra khi upload file.";
    }
}
else
{
    $thongbao = $thongbao . "Không upload được file!";
}
?>
