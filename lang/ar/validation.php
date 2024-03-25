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
    'required' => 'حقل :attribute مطلوب.',
    'unique' => 'تم أخذ :attribute بالفعل.',
    'min' => [
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'string' => 'يجب أن يكون :attribute على الأقل :min أحرف.',
    ],
    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما :other يكون :value.',
    'active_url' => 'حقل :attribute يجب أن يكون عنوان URL صحيح.',
    'after' => 'حقل :attribute يجب أن يكون تاريخًا بعد :date.',
    'after_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
    'alpha' => 'حقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash' => 'حقل :attribute يجب أن يحتوي على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'حقل :attribute يجب أن يحتوي على أحرف وأرقام فقط.',
    'array' => 'حقل :attribute يجب أن يكون مصفوفة.',
    'ascii' => 'حقل :attribute يجب أن يحتوي على أحرف أبجدية أحادية بايت ورموز فقط.',
    'before' => 'حقل :attribute يجب أن يكون تاريخًا قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
    'between' => [
        'array' => 'حقل :attribute يجب أن يحتوي على عدد من العناصر بين :min و :max.',
        'file' => 'حقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون بين :min و :max.',
        'string' => 'حقل :attribute يجب أن يكون بين :min و :max حرفًا.',
    ],
    'boolean' => 'حقل :attribute يجب أن يكون صحيحًا أو خطأ.',
    'can' => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'حقل :attribute يجب أن يكون تاريخًا صحيحًا.',
    'date_equals' => 'حقل :attribute يجب أن يكون تاريخًا مساويًا لـ :date.',
    'date_format' => 'حقل :attribute يجب أن يتوافق مع الشكل :format.',
    'decimal' => 'حقل :attribute يجب أن يحتوي على :decimal أماكن عشرية.',
    'declined' => 'حقل :attribute يجب أن يكون مرفوضًا.',
    'declined_if' => 'حقل :attribute يجب أن يكون مرفوضًا عندما :other يكون :value.',
    'different' => 'حقل :attribute و :other يجب أن يكونان مختلفين.',
    'digits' => 'حقل :attribute يجب أن يحتوي على :digits أرقام.',
    'digits_between' => 'حقل :attribute يجب أن يكون بين :min و :max أرقام.',
    'dimensions' => 'حقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with' => 'حقل :attribute يجب ألا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'حقل :attribute يجب ألا يبدأ بأحد القيم التالية: :values.',
    'email' => 'حقل :attribute يجب أن يكون عنوان بريد إلكتروني صحيح.',
    'ends_with' => 'حقل :attribute يجب أن ينتهي بأحد القيم التالية: :values.',
    'enum' => 'القيمة المحددة :attribute غير صحيحة.',
    'exists' => 'القيمة المحددة :attribute غير صحيحة.',
    'extensions' => 'حقل :attribute يجب أن يكون لديه إحدى الامتدادات التالية: :values.',
    'failed'=>'فشل التحقق',
    'file' => 'حقل :attribute يجب أن يكون ملفًا.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'array' => 'حقل :attribute يجب أن يحتوي على أكثر من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'حقل :attribute يجب أن يحتوي على :value عنصر أو أكثر.',
        'file' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value حرفًا.',
    ],
    'hex_color' => 'حقل :attribute يجب أن يكون لون هكس صحيح.',
    'image' => 'حقل :attribute يجب أن يكون صورة.',
    'in' => 'القيمة المحددة :attribute غير صحيحة.',
    'in_array' => 'حقل :attribute يجب أن يكون موجودًا في :other.',
    'integer' => 'حقل :attribute يجب أن يكون عددًا صحيحًا.',
    'ip' => 'حقل :attribute يجب أن يكون عنوان IP صحيحًا.',
    'ipv4' => 'حقل :attribute يجب أن يكون عنوان IPv4 صحيحًا.',
    'ipv6' => 'حقل :attribute يجب أن يكون عنوان IPv6 صحيحًا.',
    'json' => 'حقل :attribute يجب أن يكون نص JSON صحيح.',
    'lowercase' => 'حقل :attribute يجب أن يكون في حالة صغيرة.',
    'lt' => [
        'array' => 'حقل :attribute يجب أن يحتوي على أقل من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'حقل :attribute يجب أن لا يحتوي على أكثر من :value عنصر.',
        'file' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'string' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value حرفًا.',
    ],
    'mac_address' => 'حقل :attribute يجب أن يكون عنوان MAC صحيحًا.',
    'max' => [
        'array' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max عنصر.',
        'file' => 'حقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'حقل :attribute يجب ألا يكون أكبر من :max حرفًا.',
    ],
    'max_digits' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max أرقام.',
    'mimes' => 'حقل :attribute يجب أن يكون ملفًا من النوع: :values.',
    'mimetypes' => 'حقل :attribute يجب أن يكون ملفًا من النوع: :values.',
    'min' => [
        'array' => 'حقل :attribute يجب أن يحتوي على الأقل على :min عنصر.',
        'file' => 'حقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون على الأقل :min.',
        'string' => 'حقل :attribute يجب أن يكون على الأقل :min حرفًا.',
    ],
    'min_digits' => 'حقل :attribute يجب أن يحتوي على الأقل على :min أرقام.',
    'missing' => 'حقل :attribute يجب أن يكون مفقودًا.',
    'missing_if' => 'حقل :attribute يجب أن يكون مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'حقل :attribute يجب أن يكون مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'حقل :attribute يجب أن يكون مفقودًا عندما يكون :values موجودًا.',
    'missing_with_all' => 'حقل :attribute يجب أن يكون مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا للقيمة :value.',
    'not_in' => 'القيمة المحددة لـ :attribute غير صالحة.',
    'not_regex' => 'تنسيق حقل :attribute غير صالح.',
    'numeric' => 'يجب أن يكون حقل :attribute رقمًا.',
    'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على الأقل على حرف واحد.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على الأقل على حرف كبير وحرف صغير ورقم ورمز.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على الأقل على رقم واحد.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على الأقل على رمز واحد.',
        'uncompromised' => ':attribute المدخل تم التعرف عليه في تسريب بيانات. يرجى اختيار :attribute مختلفًا.',
    ],
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'present_if' => 'يجب أن يكون حقل :attribute موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون حقل :attribute موجودًا ما لم يكن :other هو :value.',
    'present_with' => 'يجب أن يكون حقل :attribute موجودًا عندما يكون :values موجودًا.',
    'present_with_all' => 'يجب أن يكون حقل :attribute موجودًا عندما تكون :values موجودة.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other في :values.',
    'prohibits' => 'حقل :attribute يمنع :other من الوجود.',
    'regex' => 'تنسيق حقل :attribute غير صالح.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على مفاتيح للقيم: :values.',
    'required_if' => 'يجب أن يكون حقل :attribute مطلوبًا عندما يكون :other هو :value.',
    'required_if_accepted' => 'يجب أن يكون حقل :attribute مطلوبًا عند قبول :other.',
    'required_unless' => 'يجب أن يكون حقل :attribute مطلوبًا ما لم يكن :other في :values.',
    'required_with' => 'يجب أن يكون حقل :attribute مطلوبًا عندما تكون :values موجودًا.',
    'required_with_all' => 'يجب أن يكون حقل :attribute مطلوبًا عندما تكون :values موجودة.',
    'required_without' => 'يجب أن يكون حقل :attribute مطلوبًا عندما لا تكون :values موجودة.',
    'required_without_all' => 'يجب أن يكون حقل :attribute مطلوبًا عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :size عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute :size.',
        'string' => 'يجب أن يكون حقل :attribute :size حرفًا.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون حقل :attribute نصًا.',
    'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',
    'unique' => 'تم أخذ :attribute بالفعل.',
    'uploaded' => 'فشل في رفع :attribute.',
    'uppercase' => 'يجب أن يكون حقل :attribute بالأحرف الكبيرة.',
    'url' => 'يجب أن يكون حقل :attribute رابطًا صالحًا.',
    'ulid' => 'يجب أن يكون حقل :attribute ULID صالحًا.',
    'uuid' => 'يجب أن يكون حقل :attribute UUID صالحًا.',

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
        'phone' => [
            'regex' => 'يجب أن يحتوي :attribute على 10 أرقام ويبدأ بـ 09.',
        ],
        'password' => [
            'required' => 'حقل :attribute مطلوب.',
            'min' => 'يجب أن يكون :attribute على الأقل :min أحرف.',
        ],
        'Scientific_name' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'Trade_name' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'category' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'Manufacturer' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'Available_Quantity' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'Expiration_date' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'Price' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'medicines' => [
            'required' => 'حقل :attribute مطلوب.',
            'array' => 'يجب أن يكون :attribute مصفوفة.',
        ],
        'medicines.*.name' => [
            'required' => 'حقل :attribute مطلوب.',
            'string' => 'يجب أن يكون :attribute نصًا.',
        ],
        'medicines.*.quantity' => [
            'required' => 'حقل :attribute مطلوب.',
            'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
            'min' => 'يجب أن يكون :attribute على الأقل :min.',
        ],
        'status' => [
            'required' => 'حقل :attribute مطلوب.',
        ],
        'payment' => [
            'required' => 'حقل :attribute مطلوب.',
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

    'attributes' => [
        'first_name' => 'الاسم الأول',
        'last_name' => 'اسم العائلة',
        'phone' => 'رقم الهاتف',
        'password' => 'كلمة المرور',
        'Scientific_name' => 'الاسم العلمي',
        'Trade_name' => 'الاسم التجاري',
        'category' => 'التنصنيف',
        'Manufacturer' => 'الشركة المصنعة',
        'Available_Quantity' => 'الكمية المتاحة',
        'Expiration_date' => ' تاريخ انتهاء الصلاحية',
        'Price' => 'السعر',
        'updated_at' => 'تم إنشاؤه في',
        'created_at' => 'تم التعديل عليه في',
        'medicines' => 'الأدوية',
        'medicines.*.name' => 'اسم الدواء',
        'medicines.*.quantity' => 'الكمية',
        'status' => 'حالة الطلب',
        'payment' => 'حالة الدفع',
    ],

];





