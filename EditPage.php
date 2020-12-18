<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa mặt hàng</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Sửa mặt hàng</legend>
        ID: <input type="text" name="id" required>
        Tên: <input type="text" name="name" required>
        Loại: <input type="text" name="category" required>
        Số lượng: <input type="number" name="amount" min="0" required>
        Đơn giá: <input type="text" name="price" min="0" required>
        Mô tả: <input type="text" name="description" required>
        Ngày tạo: <input type="date" name="dateCreated" required>
        Ảnh: <input type="text" name="img" required>
        <button class="submitBtn">Cập nhật</button>
    </fieldset>
</form>
</body>
</html>