<?php

return [
    'task' => [
        'index' => [
            'noColumn' => 'Không có dữ liệu',
        ],
        'store' => [
            'success' => 'Thêm Thành Công',
            'error'   => 'Thêm Thất Bại',
        ],
        'delete' => [
            'success'=> 'Xóa Thành Công',
            'error'=> 'Xóa Thất Bại',
            'notExist' => 'Không Tìm Thấy Id'
        ],
        'validate' => [
            'required' => 'Vui lòng nhập tên',
            'unique' => 'Tên đã tồn tại',
            'max' => 'Tên phải ít hơn 30 kí tự',
        ],
    ],
    'login' => [
        'validate' => [
            'requiredEmail' => 'Vui lòng nhập email',
            'requiredPassword' => 'Vui lòng nhập mật khẩu',
        ],
        'fail' => 'Đăng nhập thất bại',
    ],
];
