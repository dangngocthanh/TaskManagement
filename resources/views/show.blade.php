<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Khách hàng thứ {{ $id }}</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $id+1 }}</td>
            <td>{{ $name }}</td>
            <td>{{ $phone }}</td>
            <td>{{ $email }}</td>
            <td>
                 <a href="{{ route('user.edit', $id) }}">Sửa</a> | <a href="">Xóa</a>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
