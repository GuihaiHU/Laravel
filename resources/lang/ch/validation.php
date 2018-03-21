<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute must be accepted.',
    'active_url'           => ':attribute 不是合法url',
    'after'                => ':attribute 必须大于:date.',
    'after_or_equal'       => ':attribute 必须大于或等于 :date.',
    'alpha'                => ':attribute 只能包含字母.',
    'alpha_dash'           => ':attribute 只能包含字母、数字或下划线.',
    'alpha_num'            => ':attribute 只能包含字母或数字.',
    'array'                => ':attribute 只能包含数组.',
    'before'               => ':attribute 必须小于:date.',
    'before_or_equal'      => ':attribute 必须小于或等于:date.',
    'between'              => [
        'numeric' => ':attribute 必须大于或等于:min 小于或等于:max.',
        'file'    => ':attribute 必须大于或等于:min kb小于或等于:max kb.',
        'string'  => ':attribute 字符长度必须大于或等于 :min 小于或等于 :max.',
        'array'   => ':attribute 数组长度必须大于或等于 :min 小于或等于 :max.',
    ],
    'boolean'              => ':attribute 必须为true 或 false.',
    'confirmed'            => ':attribute 信息不匹配.',
    'date'                 => ':attribute 不是合法日期格式.',
    'date_format'          => ':attribute 日期格式必须是 :format.',
    'different'            => ':attribute 必须不等于 :other.',
    'digits'               => ':attribute 必须是数字，并且必须具有是:digits.',
    'digits_between'       => ':attribute 必须在:min 和 :max之间.',
    'dimensions'           => ':attribute 不合法图片比例.',
    'distinct'             => ':attribute 字段不能有任何重复值.',
    'email'                => ':attribute 不合法邮件地址.',
    'exists'               => ':attribute 给定字段不存在.',
    'file'                 => ':attribute 必须是文件.',
    'filled'               => ':attribute 必须有值.',
    'image'                => ':attribute 必输是图片.',
    'in'                   => ':attribute 给定值不合法.',
    'in_array'             => ':attribute 必须是:other中的一个.',
    'integer'              => ':attribute 必须是整数.',
    'ip'                   => ':attribute 必须是ip地址.',
    'ipv4'                 => ':attribute 必须是ipv4地址.',
    'ipv6'                 => ':attribute 必须是ipv6地址.',
    'json'                 => ':attribute 必须是json.',
    'max'                  => [
        'numeric' => ':attribute 不可大于 :max.',
        'file'    => ':attribute 不可大于 :max kb.',
        'string'  => ':attribute 不可大于 :max 个字母.',
        'array'   => ':attribute 不可大于 :max 个元素.',
    ],
    'mimes'                => ':attribute 必须是:values类型的文件.',
    'mimetypes'            => ':attribute 必须是:values类型的文件.',
    'min'                  => [
        'numeric' => ':attribute 必须大于或等于:min.',
        'file'    => ':attribute 必须大于或等于:min kb.',
        'string'  => ':attribute 必须大于或等于:min 个字母.',
        'array'   => ':attribute 必须大于或等于:min 个元素.',
    ],
    'not_in'               => ':attribute 给定值不合法.',
    'numeric'              => ':attribute 必须是数字.',
    'present'              => ':attribute 字段必须存在于请求数据中.',
    'regex'                => ':attribute 格式不合法',
    'required'             => ':attribute 缺失.',
    'required_if'          => '当 :other 等于 :value时， :attribute必填.',
    'required_unless'      => '除非:other 在 :values中，否则 :attribute必填.',
    'required_with'        => '当 :values存在时. :attribute必填',
    'required_with_all'    => '当 :values存在时. :attribute必填',
    'required_without'     => '当 :values不存在时. :attribute必填.',
    'required_without_all' => '当 :values不存在时. :attribute必填.',
    'same'                 => ':attribute 和 :other 必须一样.',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size.',
        'file'    => ':attribute 必须是 :size kb.',
        'string'  => ':attribute 必须是 :size 个字母.',
        'array'   => ':attribute 必须包含 :size 个元素.',
    ],
    'string'               => ':attribute 必须是字符串.',
    'timezone'             => ':attribute 必须是有效的时区标识符.',
    'unique'               => ':attribute 必须是唯一.',
    'uploaded'             => ':attribute 上传失败.',
    'url'                  => ':attribute 格式不合法.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
