<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
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
    @if($arr != null)
        @foreach( $arr['id'] as $key=> $value)
            <tr>
                <td>{{ $key+1}}</td>
                <td>{{ $arr['name'][$key] }}</td>
                <td>{{ $arr['phone'][$key] }}</td>
                <td>{{ $arr['email'][$key] }}</td>
                <td>
                    <a href="{{ route('user.show' ,$key) }}">Xem</a> | <a href="{{ route('user.edit' ,$key) }}">Sửa</a> | <a href="{{ route('user.delete' ,$key) }}">Xóa</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
    <a href="{{ route('user.create') }}">add</a>
</table>
</body>
</html>
