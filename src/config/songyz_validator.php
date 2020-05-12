<?php

/**
 * Laravel 验证扩展类配置文件
 * @author songyz <574482856@qq.com>
 * @date 2019/09/20 20:27
 */
return [
    'failure_throw_exception' => \Songyz\Exceptions\ValidatorFailureException::class,//验证失败抛出异常类
    'failure_throw_code' => 422,//验证失败抛出异常错误码
    'request_path' => base_path('app' . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'Requests'),
    'append_extend_rules' => [
        //添加验证规则 支持两种写法  1 正则表达式   2 回调方法
        'chineseName' => '/^([\x{4e00}-\x{9fa5}]){2,16}+$/u', //正则匹配
        'test_foo' => function ($attribute, $value, $parameters, $validator) { //匿名函数写法
            return $value == 'test_foo';
        }
    ],
];

