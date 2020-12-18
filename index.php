<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Cửa hàng</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Thêm mặt hàng</legend>
        ID: <input type="text" name="id" required>
        Tên: <input type="text" name="name" required>
        Loại: <input type="text" name="category" required>
        Số lượng: <input type="number" name="amount" min="0" required>
        Đơn giá: <input type="text" name="price" min="0" required>
        Mô tả: <input type="text" name="description" required>
        Ngày tạo: <input type="text" name="dateCreated" disabled required>
        Ảnh: <input type="text" name="img" required>
        <button class="submitBtn">Tạo</button>
    </fieldset>
</form>
<table>
    <caption>Danh sách mặt hàng</caption>
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Tên</th>
        <th>Loại</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Mô tả</th>
        <th>Ngày tạo</th>
        <th>Ảnh</th>
        <th>Chỉnh sửa</th>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>
            <form action="EditPage.php">
                <button type="submit">Sửa</button>
            </form>
        </td>
    </tr>
</table>
</body>
</html>