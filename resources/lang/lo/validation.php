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

    'accepted' => 'The :attribute ຕ້ອງໄດ້ຮັບການຍອມຮັບ.' ,
    'accepted_if' => ' :attribute ຕ້ອງໄດ້ຮັບການຍອມຮັບເມື່ອ :other is :value.' ,
    'active_url' => ':attribute ບໍ່ແມ່ນ URL ທີ່ຖືກຕ້ອງ.' ,
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => ':attribute ຈະຕ້ອງເປັນວັນທີຫຼັງຈາກ :date.' ,
    'alpha' => ':attribute ຕ້ອງມີຕົວອັກສອນເທົ່ານັ້ນ.' ,
    'alpha_dash' => 'ຄຸນສົມບັດ :attribute ຕ້ອງມີຕົວອັກສອນ, ຕົວເລກ, ຂີດຕໍ່ ແລະຂີດກ້ອງເທົ່ານັ້ນ.' ,
    'alpha_num' => ':attribute ຕ້ອງມີຕົວອັກສອນ ແລະຕົວເລກເທົ່ານັ້ນ.' ,
    'array' => ':attribute ຕ້ອງເປັນ array.' ,
    'before' => 'The :attribute ຈະຕ້ອງເປັນວັນທີກ່ອນ :date.' ,
    'before_or_equal' => ':attribute ຈະຕ້ອງເປັນວັນທີກ່ອນ ຫຼືເທົ່າກັບ :date.' ,
    'between' => [
        'numeric' => ':attribute ຈະຕ້ອງຢູ່ລະຫວ່າງ :min ແລະ :max.' ,
        'file' => ':attribute ຈະຕ້ອງຢູ່ລະຫວ່າງ :min ແລະ :max kilobytes.' ,
        'string' => ' :attribute ຈະຕ້ອງຢູ່ລະຫວ່າງ :min ແລະ :max ຕົວອັກສອນ.' ,
        'array' => ':attribute ຕ້ອງມີລະຫວ່າງ :min ແລະ :max items.' ,
    ],
    'boolean' => 'ຊ່ອງຂໍ້ມູນ :attribute ຈະຕ້ອງເປັນຄວາມຈິງ ຫຼືຜິດ.' ,
    'confirmed' => 'ການຢືນຢັນ :attribute ບໍ່ກົງກັນ.' ,
    'current_password' => 'ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ.' ,
    'date' => ':attribute ບໍ່ແມ່ນວັນທີທີ່ຖືກຕ້ອງ.' ,
    'date_equals' => ':attribute ຈະຕ້ອງເປັນວັນທີເທົ່າກັບ :date.' ,
    'date_format' => ':attribute ບໍ່ກົງກັບຮູບແບບ :format.' ,
    'declined' => ':attribute ຕ້ອງຖືກປະຕິເສດ.' ,
    'declined_if' => ' :attribute ຈະຕ້ອງຖືກປະຕິເສດເມື່ອ :other is :value.' ,
    'different' => ':attribute ແລະ :other ຈະຕ້ອງແຕກຕ່າງກັນ.' ,
    'digits' => ':attribute ຈະຕ້ອງເປັນ :digits digits.' ,
    'digits_between' => ':attribute ຈະຕ້ອງຢູ່ລະຫວ່າງ :min ແລະ :max digits.' ,
    'dimensions' => 'The :attribute ມີຂະໜາດຮູບທີ່ບໍ່ຖືກຕ້ອງ.' ,
    'distinct' => 'ຊ່ອງຂໍ້ມູນ :attribute ມີມູນຄ່າຊໍ້າກັນ.' ,
    'email' => ':attribute ຈະຕ້ອງເປັນທີ່ຢູ່ອີເມວທີ່ຖືກຕ້ອງ.' ,
    'ends_with' => ' :attribute ຈະຕ້ອງສິ້ນສຸດດ້ວຍອັນໃດອັນໜຶ່ງຕໍ່ໄປນີ້: :values.' ,
    'enum' => 'ທີ່ເລືອກ :attribute ບໍ່ຖືກຕ້ອງ.' ,
    'exists' => 'ທີ່ເລືອກ :attribute  ຜິດກົດໝາຍ.',
    'file' => ':attribute ຕ້ອງເປັນໄຟລ໌.' ,
    'filled' => 'ຊ່ອງຂໍ້ມູນ :attribute ຕ້ອງມີຄ່າ.' ,
    'gt' => [
        'numeric' => 'ຄຸນສົມບັດ :attribute ຈະຕ້ອງໃຫຍ່ກວ່າ :value.' ,
        'file' => ':attribute ຈະຕ້ອງໃຫຍ່ກວ່າ :value kilobytes.' ,
        'string' => ' :attribute ຈະຕ້ອງໃຫຍ່ກວ່າ :value ຕົວອັກສອນ.' ,
        'array' => ':attribute ຕ້ອງມີຫຼາຍກວ່າ :value items.' ,
    ],
    'gte' => [
        'numeric' => 'ຄຸນສົມບັດ :attribute ຈະຕ້ອງໃຫຍ່ກວ່າ ຫຼືເທົ່າກັບ :value.' ,
        'file' => ':attribute ຈະຕ້ອງໃຫຍ່ກວ່າ ຫຼືເທົ່າກັບ :value kilobytes.' ,
        'string' => ':attribute ຈະຕ້ອງໃຫຍ່ກວ່າ ຫຼືເທົ່າກັບ :value ຕົວອັກສອນ.' ,
        'array' => ' :attribute ຕ້ອງມີ :value items ຫຼືຫຼາຍກວ່ານັ້ນ.' ,
    ],
    'image' => ':attribute ຕ້ອງເປັນຮູບ.' ,
    'in' => 'ທີ່ເລືອກ :attribute ບໍ່ຖືກຕ້ອງ.' ,
    'in_array' => 'ຊ່ອງຂໍ້ມູນ :attribute ບໍ່ມີຢູ່ໃນ :other.' ,
    'integer' => 'ຄຸນສົມບັດ :attribute ຈະຕ້ອງເປັນຈຳນວນເຕັມ.' ,
    'ip' => ':attribute ຈະຕ້ອງເປັນທີ່ຢູ່ IP ທີ່ຖືກຕ້ອງ.' ,
    'ipv4' =>':attribute ຈະຕ້ອງເປັນທີ່ຢູ່ IPv4 ທີ່ຖືກຕ້ອງ.' ,
    'ipv6' => ':attribute ຈະຕ້ອງເປັນທີ່ຢູ່ IPv6 ທີ່ຖືກຕ້ອງ.' ,
    'json' => ':attribute ຈະຕ້ອງເປັນສະຕຣິງ JSON ທີ່ຖືກຕ້ອງ.' ,
    'lt' => [
        'numeric' => 'ຄຸນສົມບັດ :attribute ຈະຕ້ອງໜ້ອຍກວ່າ :value.' ,
        'file' => ':attribute ຕ້ອງມີໜ້ອຍກວ່າ :value kilobytes.' ,
        'string' => ' :attribute ຕ້ອງມີໜ້ອຍກວ່າ :value ຕົວອັກສອນ.' ,
        'array' => ':attribute ຕ້ອງມີໜ້ອຍກວ່າ :value items.' ,
    ],
    'lte' => [
        'numeric' => ':attribute ຈະຕ້ອງໜ້ອຍກວ່າ ຫຼືເທົ່າກັບ :value.' ,
        'file' => ':attribute ຈະຕ້ອງໜ້ອຍກວ່າ ຫຼືເທົ່າກັບ :value kilobytes.' ,
        'string' => ' :attribute ຈະຕ້ອງໜ້ອຍກວ່າ ຫຼືເທົ່າກັບ :value ຕົວອັກສອນ.' ,
        'array' => ' :attribute ຈະຕ້ອງບໍ່ມີຫຼາຍກ່ວາ :value items.' ,
    ],
    'mac_address' => ':attribute ຈະຕ້ອງເປັນທີ່ຢູ່ MAC ທີ່ຖືກຕ້ອງ.' ,
    'max' => [
        'numeric' => 'ຄຸນສົມບັດ :attribute ຈະຕ້ອງບໍ່ໃຫຍ່ກວ່າ :max.' ,
        'file' => ':attribute ຈະຕ້ອງບໍ່ໃຫຍ່ກວ່າ :max kilobytes.' ,
        'string' => ':attribute ຈະຕ້ອງບໍ່ໃຫຍ່ກວ່າ :max ຕົວອັກສອນ.' ,
        'array' => ':attribute ຈະຕ້ອງບໍ່ມີຫຼາຍກ່ວາ :max items.' ,
    ],
    'mimes' => ':attribute ຕ້ອງເປັນໄຟລ໌ປະເພດ: :values.' ,
    'mimetypes' => ':attribute ຕ້ອງເປັນໄຟລ໌ປະເພດ: :values.' ,
    'min' => [
        'numeric' => 'ຄຸນສົມບັດ :attribute ຕ້ອງມີຢ່າງໜ້ອຍ :min.' ,
        'file' => ':attribute ຕ້ອງມີຢ່າງໜ້ອຍ :min kilobytes.' ,
        'string' => ':attribute ຕ້ອງມີຢ່າງໜ້ອຍ :min ຕົວອັກສອນ.' ,
        'array' => ':attribute ຕ້ອງມີຢ່າງໜ້ອຍ :min items.' ,
    ],
    'multiple_of' => ':attribute ຈະຕ້ອງເປັນຄູນຂອງ :value.' ,
    'not_in' => 'ທີ່ເລືອກ :attribute ບໍ່ຖືກຕ້ອງ.' ,
    'not_regex' =>'ຮູບແບບ :attribute ບໍ່ຖືກຕ້ອງ.' ,
    'numeric' => ':attribute ຕ້ອງເປັນຕົວເລກ.' ,
    'password' => 'ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ.' ,
    'present' => 'ຊ່ອງຂໍ້ມູນ :attribute ຕ້ອງມີຢູ່.' ,
    'prohibited' => 'ຊ່ອງຂໍ້ມູນ :attribute ຖືກຫ້າມ.' ,
    'prohibited_if' => 'ຊ່ອງຂໍ້ມູນ :attribute ຖືກຫ້າມເມື່ອ :other is :value.' ,
    'prohibited_unless' => 'ຊ່ອງຂໍ້ມູນ :attribute ຖືກຫ້າມເວັ້ນເສຍແຕ່ :other ຢູ່ໃນ :values.' ,
    'prohibits' => 'ຊ່ອງຂໍ້ມູນ :attribute ຫ້າມ :ອື່ນໆບໍ່ໃຫ້ມີຢູ່.' ,
    'regex' => 'ຮູບແບບ :attribute ບໍ່ຖືກຕ້ອງ.' ,
    'required' => 'ຕ້ອງລະບຸຊ່ອງຂໍ້ມູນ :attribute.' ,
    'required_array_keys' => 'ຊ່ອງຂໍ້ມູນ :attribute ຕ້ອງມີລາຍການສຳລັບ: :values.' ,
    'required_if' => 'ຊ່ອງຂໍ້ມູນ :attribute ແມ່ນຕ້ອງການເມື່ອ :other is :value.' ,
    'required_unless' => 'ຕ້ອງລະບຸຊ່ອງຂໍ້ມູນ :attribute ເວັ້ນເສຍແຕ່ວ່າ :other ຢູ່ໃນ :values.' ,
    'required_with' => 'ຊ່ອງຂໍ້ມູນ :attribute ແມ່ນຕ້ອງການເມື່ອ :values ມີຢູ່.' ,
    'required_with_all' => 'ຕ້ອງລະບຸຊ່ອງຂໍ້ມູນ :attribute ເມື່ອ :values ມີຢູ່.' ,
    'required_without' =>'ຕ້ອງລະບຸຊ່ອງຂໍ້ມູນ :attribute ເມື່ອ :values ບໍ່ມີຢູ່.' ,
    'required_without_all' => 'ຕ້ອງລະບຸຊ່ອງຂໍ້ມູນ :attribute ເມື່ອບໍ່ມີ :values.' ,
    'same' => ':attribute ແລະ :other ຈະຕ້ອງກົງກັນ.' ,
    'size' => [
        'numeric' => ':attribute ຈະຕ້ອງເປັນ :size.' ,
        'file' => ':attribute ຈະຕ້ອງເປັນ :size kilobytes.' ,
        'string' => ':attribute ຈະຕ້ອງເປັນ :size character.' ,
        'array' => 'The :attribute ຕ້ອງມີ :size items.' ,
    ],
    'starts_with' => ' :attribute ຈະຕ້ອງເລີ່ມຕົ້ນດ້ວຍອັນໃດອັນໜຶ່ງຕໍ່ໄປນີ້: :values.' ,
    'string' =>':attribute ຈະຕ້ອງເປັນ string.' ,
    'timezone' => ':attribute ຕ້ອງເປັນເຂດເວລາທີ່ຖືກຕ້ອງ.' ,
    'unique' => ' :attribute ໄດ້ຖືກປະຕິບັດແລ້ວ.' ,
    'uploaded' => 'ການອັບໂຫລດ :attribute ລົ້ມເຫລວ.' ,
    'url' => ':attribute ຈະຕ້ອງເປັນ URL ທີ່ຖືກຕ້ອງ.' ,
    'uuid' => ':attribute ຈະຕ້ອງເປັນ UUID ທີ່ຖືກຕ້ອງ.' ,

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
