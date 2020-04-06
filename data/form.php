<form action="/upload.php" method="post" enctype="multipart/form-data" autocomplete="on">
    Chọn Icon Addon:
    <input type="file" name="icon" id="icon">
    <br>
    Tên Addon:
    <input type="text" name="name" id="name">
    Mô tả:
    <textarea name="describe" id="describe"></textarea>
    Tác giả:
    <input type="text" name="author" id="author">
    
    <input type="submit" value="Tạo addon" name="submit">
</form>
