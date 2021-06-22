<?php

return [
    'task' => [
        'index' => [
            'noColumn' => 'Do not have data',
        ],
        'store' => [
            'success' => 'Create Task Success',
            'error'   => 'Create Task Error',
        ],
        'delete' => [
            'success' => 'Delete Task Success',
            'error' => 'Delete Task Error',
            'notExist' => 'Invalid Id'
        ],
        'validate' => [
            'required' => 'The name is required',
            'unique' => 'The name is exist',
            'max' => 'The name must less 30',
        ],
    ],
    'login' => [
        'validate' => [
            'requiredEmail' => 'The email is required',
            'requiredPassword' => 'The password is required',
        ],
        'fail' => 'Login fail'
    ],
];
