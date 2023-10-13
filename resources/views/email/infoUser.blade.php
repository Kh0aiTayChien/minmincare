<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minmincare - Đơn Hàng Mới</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .order-details {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .order-details th, .order-details td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .order-details th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>minmincare - Đơn Hàng Mới</h1>
    <h2>Thông tin người mua hàng:</h2>
    <ul>
        <li><strong>Tên:</strong> {{ $rows[0][0] }}</li>
        <li><strong>Số Điện Thoại:</strong> {{ $rows[0][1]  }}</li>
        <li><strong>Địa Chỉ:</strong> {{ $rows[0][2]  }}</li>
    </ul>
    <ul>
        @foreach ($data as $item)
            <table class="order-details">
                <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành Tiền</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $item[0] }}</td>
                    <td>{{ $item[1] }}</td>
                    <td>{{ $item[2] }}</td>
                    <td>{{ intval($item[1]) * intval($item[2]) }}</td>
                </tr>
                </tbody>
            </table>
        @endforeach
    </ul>
</body>
</html>
