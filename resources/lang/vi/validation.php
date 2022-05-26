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

    'accepted' => 'Trường :attribute phải được chấp nhận.',
    'accepted_if' => 'Trường :attribute phải được chấp nhận khi :other bằng :value.',
    'active_url' => 'Trường :attribute không phải là url hợp lệ.',
    'after' => 'Trường :attribute phải là ngày sau ngày :date.',
    'after_or_equal' => 'Trường :attribute phải là ngày sau hoặc bằng ngày :date.',
    'alpha' => 'Trường :attribute chỉ bao gồm các chữ cái.',
    'alpha_dash' => 'Trường :attribute chỉ bao gồm chữ cái, chữ số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => 'Trường :attribute chỉ bao gồm chữ cái và chữ số.',
    'array' => 'Trường :attribute phải là một mảng.',
    'before' => 'Trường :attribute phải là ngày trước :date.',
    'before_or_equal' => 'Trường :attribute phải là ngày trước hoặc bằng :date.',
    'between' => [
        'numeric' => 'Trường :attribute phải phải lớn hơn :min và nhỏ hơn :max.',
        'file' => 'Trường :attribute phải lớn hơn :min và nhỏ hơn :max kilobytes.',
        'string' => 'Trường :attribute phải lớn hơn :min và nhỏ hơn :max ký tự.',
        'array' => 'Trường :attribute phải lớn hơn :min và nhỏ hơn :max items.',
    ],
    'boolean' => 'Trường :attribute phải có giá trị đúng hoặc sai.',
    'confirmed' => 'Trường :attribute không khớp.',
    'current_password' => 'Mật khẩu không đúng.',
    'date' => 'Trường :attribute không phải là ngày hợp lệ.',
    'date_equals' => 'Trường :attribute phải là ngày bằng :date.',
    'date_format' => 'Trường :attribute không khớp với định dạng :format.',
    'declined' => 'Trường :attribute phải bị từ chối',
    'declined_if' => 'Trường :attribute phải bị từ chối khi :other là :value.',
    'different' => 'Trường :attribute và :other phải khác nhau.',
    'digits' => 'Trường :attribute phải là :digits các chữ số.',
    'digits_between' => 'Trường :attribute phải từ :min đến :max digits.',
    'dimensions' => 'Trường :attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => 'Trường :attribute phải là một địa chỉ email hợp lệ',
    'ends_with' => 'Trường :attribute phải kết thúc bằng một trong những following: :values.',
    'enum' => 'Trường selected :attribute không tồn tại.',
    'exists' => 'Trường selected :attribute không tồn tại.',
    'file' => 'Trường :attribute phải là một file.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'gt' => [
        'numeric' => 'Trường :attribute must be greater than :value.',
        'file' => 'Trường :attribute must be greater than :value kilobytes.',
        'string' => 'Trường :attribute phải lớn hơn :value characters.',
        'array' => 'Trường :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Trường :attribute phải lớn hơn hoặc bằng :value.',
        'file' => 'Trường :attribute phải lớn hơn hoặc bằng :value kilobytes.',
        'string' => 'Trường :attribute phải lớn hơn hoặc bằng :value characters.',
        'array' => 'Trường :attribute phải có :value items hoặc hơn.',
    ],
    'image' => 'Trường :attribute phải là một hình ảnh.',
    'in' => 'Trường selected :attribute không tồn tại.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => 'Trường :attribute phải là số nguyên.',
    'ip' => 'Trường :attribute phải là địa chỉ IP hợp lệ.',
    'ipv4' => 'Trường :attribute phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => 'Trường :attribute phải là địa chỉ IPv6 hợp lệ.',
    'json' => 'Trường :attribute phải là chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => 'Trường :attribute phải nhỏ hơn :value.',
        'file' => 'Trường :attribute phải nhỏ hơn :value kilobytes.',
        'string' => 'Trường :attribute phải nhỏ hơn :value characters.',
        'array' => 'Trường :attribute phải nhỏ hơn :value items.',
    ],
    'lte' => [
        'numeric' => 'Trường :attribute phải nhỏ hơn hoặc bằng to :value.',
        'file' => 'Trường :attribute phải nhỏ hơn hoặc bằng to :value kilobytes.',
        'string' => 'Trường :attribute phải nhỏ hơn hoặc bằng to :value characters.',
        'array' => 'Trường :attribute không được có nhiều hơn :value items.',
    ],
    'mac_address' => 'Trường :attribute phải là một địa chỉ MAC hợp lệ.',
    'max' => [
        'numeric' => 'Trường :attribute không được lớn hơn :max.',
        'file' => 'Trường :attribute không được lớn hơn :max kilobytes.',
        'string' => ':attribute không được lớn hơn :max ký tự.',
        'array' => 'Trường :attribute không được có nhiều hơn :max items.',
    ],
    'mimes' => 'Trường :attribute phải là một tập tin của type: :values.',
    'mimetypes' => 'Trường :attribute phải là một tập tin của type: :values.',
    'min' => [
        'numeric' => 'Trường :attribute phải có ít nhất :min.',
        'file' => 'Trường :attribute phải có ít nhất :min kilobytes.',
        'string' => 'Trường :attribute phải có ít nhất :min ký tự.',
        'array' => 'Trường :attribute phải có ít nhất :min items.',
    ],
    'multiple_of' => 'Trường :attribute phải là bộ số của :value.',
    'not_in' => 'Trường selected :attribute không tồn tại.',
    'not_regex' => 'Trường :attribute định dạng không tồn tại.',
    'numeric' => 'Trường :attribute phải là một số.',
    'password' => 'Mật khẩu không đúng.',
    'present' => 'Trường :attribute phải có mặt.',
    'prohibited' => 'Trường :attribute bị cấm.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other is in :values.',
    'prohibits' => 'Trường :attribute cấm :other từ hiện tại.',
    'regex' => ':attribute sai định dạng.',
    'required' => ':attribute bắt buộc phải nhập.',
    'required_array_keys' => 'Trường :attribute phải chứa các mục nhập for: :values.',
    'required_if' => 'Trường :attribute được yêu cầu khi :other is :value.',
    'required_unless' => 'Trường :attribute được yêu cầu trừ khi :other is in :values.',
    'required_with' => 'Trường :attribute được yêu cầu khi :values is present.',
    'required_with_all' => 'Trường :attribute được yêu cầu khi :values are present.',
    'required_without' => 'Trường :attribute được yêu cầu khi :values is not present.',
    'required_without_all' => 'Trường :attribute được yêu cầu khi không :values xuất hiện.',
    'same' => 'Trường :attribute và :other phải phù hợp.',
    'size' => [
        'numeric' => 'Trường :attribute phải là :size.',
        'file' => 'Trường :attribute phải là :size kilobytes.',
        'string' => 'Trường :attribute phải là :size ký tự.',
        'array' => 'Trường :attribute phải bao gồm :size giá trị.',
    ],
    'starts_with' => 'Trường :attribute phải bắt đầu với một trong following: :values.',
    'string' => 'Trường :attribute phải là a chuỗi.',
    'timezone' => 'Trường :attribute phải là a múi giờ hợp lệ.',
    'unique' => ':attribute đã tồn tại.',
    'uploaded' => 'Trường :attribute lỗi khi upload.',
    'url' => 'Trường :attribute phải là một URL hợp lệ.',
    'uuid' => 'Trường :attribute phải là một UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
