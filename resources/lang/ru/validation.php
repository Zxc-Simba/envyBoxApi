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

    'accepted' => 'Поле :attribute должно быть принято.',
    'accepted_if' => 'Поле :attribute должно быть принято, если поле :other имеет значение :value.',
    'active_url' => 'Поле :attribute должно быть ссылкой вида https://test.org.',
    'after' => 'Поле :attribute должно быть датой позднее :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой не ранее :date.',
    'alpha' => 'Поле :attribute должно содержать только буквы.',
    'alpha_dash' => 'Поле :attribute должен содержать только буквы, цифры, дефис и нижнее подчеркивание.',
    'alpha_num' => 'Поле :attribute должно содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно быть датой ранее :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой не позднее :date.',
    'between' => [
        'array' => 'Поле :attribute должно иметь не менее :min и не более :max элементов.',
        'file' => 'Файл :attribute должен быть размером не менее :min и не более :max КБ.',
        'numeric' => 'Поле :attribute должно быть не меньше :min и не больше :max.',
        'string' => 'Поле :attribute должно быть не короче :min и не длиннее :max символов.',
    ],
    'boolean' => 'Поле :attribute должно быть или истиной или ложью.',
    'confirmed' => 'Отсутствует подтверждение поля :attribute.',
    'current_password' => 'Неверный текущий пароль.',
    'date' => ':attribute не является датой.',
    'date_equals' => ':attribute должен соответствовать дате :date.',
    'date_format' => ':attribute не совпадает с форматом :format.',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, если поле :other имеет значение :value.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Значение поля :attribute должно иметь :digits цифр.',
    'digits_between' => 'Значение поля :attribute должно иметь не меньше :min и не больше :max. цифр',
    'dimensions' => ':attribute имеет неверные размеры.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'doesnt_start_with' => 'Поле :attribute не должно начинаться со следующих значений: :values.',
    'email' => 'Поле :attribute должно иметь формат example@mail.ru.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values.',
    'enum' => 'Для поля :attribute выбрано неверное значение.',
    'exists' => 'Для поля :attribute выбрано неверное значение.',
    'file' => 'Поле должно содержать файл.',
    'filled' => 'Поле :attribute должно быть заполнено.',
    'gt' => [
        'array' => 'Поле :attribute должно иметь более чем :value элементов.',
        'file' => ':attribute должен иметь размер более :value КБ.',
        'numeric' => 'Поле :attribute должно быть больше чем :value.',
        'string' => 'Поле :attribute должно иметь больше чем :value. символов',
    ],
    'gte' => [
        'array' => 'Поле :attribute должно иметь не меньше :value элементов.',
        'file' => ':attribute должен иметь размер не меньше :value КБ.',
        'numeric' => 'Поле :attribute должно быть не меньше :value.',
        'string' => 'Поле :attribute должно иметь не меньше :value символов.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Значение поля :attribute неверно.',
    'in_array' => 'Значение поля :attribute должно быть представлено в :other.',
    'integer' => 'Атрибут :attribute должен быть целым числом.',
    'ip' => 'Поле :attribute должно быть валидным IP адресом.',
    'ipv4' => 'Поле :attribute должно быть валидным IPv4 адресом.',
    'ipv6' => 'Поле :attribute должно быть валидным IPv6 адресом.',
    'json' => 'Поле :attribute должно быть валидным JSON.',
    'lt' => [
        'array' => 'Поле :attribute должно иметь меньше чем :value элементов.',
        'file' => ':attribute должен иметь размер меньше чем :value КБ.',
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'string' => 'Поле :attribute должно иметь меньше чем :value символов.',
    ],
    'lte' => [
        'array' => 'Поле :attribute должно иметь не более :value элементов.',
        'file' => ':attribute должен иметь размер не больше :value КБ.',
        'numeric' => 'Поле :attribute должно быть не больше :value.',
        'string' => 'Поле :attribute должно иметь не более :value символов.',
    ],
    'mac_address' => 'Поле :attribute должно быть валидным MAC-адресом.',
    'max' => [
        'array' => 'Поле :attribute должно иметь не более :max элементов.',
        'file' => ' Файл должен иметь размер не больше :max КБ.',
        'numeric' => 'Поле :attribute должно быть не больше :max.',
        'string' => 'Поле не может содержать более :value символов.',
    ],
    'mimes' => ':attribute должен быть файлом с типом: :values.',
    'mimetypes' => ':attribute должен быть файлом с типом: :values.',
    'min' => [
        'array' => 'Список должно содержать не менее :min элемента(ов)',
        'file' => ':attribute должен иметь размер не меньше :min КБ.',
        'numeric' => 'Поле :attribute должно быть не меньше :min.',
        'string' => 'Поле должно иметь не менее :min символов.',
    ],
    'multiple_of' => 'Поле :attribute должно иметь несколько значений из следующих: :value.',
    'not_in' => 'Значение поля :attribute неверно.',
    'not_regex' => 'Поле :attribute имеет неверный формат.',
    'numeric' => ':attribute должен быть числом.',
    'password' => [
        'letters' => ':attribute должен содержать минимум одну букву.',
        'mixed' => ':attribute должен содержать заглавные и строчные буквы.',
        'numbers' => ':attribute должен содержать минимум одну цифру.',
        'symbols' => ':attribute должен содержать минимум один символ из следующих: -,._!@#$%^&*(){}.',
        'uncompromised' => 'Данный :attribute найден в утечке данных. Пожалуйста, выберите другой :attribute',
    ],
    'present' => 'Поле :attribute должно быть представлено.',
    'prohibited' => 'Поле :attribute должно быть пустой строкой или не быть представленым.',
    'prohibited_if' => 'Поле :attribute должно быть пустой строкой или не быть представленым, если :other имеет значение :value.',
    'prohibited_unless' => 'Поле :attribute должно быть пустой строкой или не быть представленым, если :other имеет значение из списка :values.',
    'prohibits' => 'Если поле :attribute присутствует, поля :other не могут присутствовать.',
    'regex' => 'Поле имеет неверный формат.',
    'required' => ':attribute: Обязательное поле.',
    'required_array_keys' => 'Поле :attribute должно иметь следующие параметры: :values.',
    'required_if' => 'Поле :attribute должно быть представлено, если :other имеет значение :value.',
    'required_unless' => 'Поле :attribute должно быть представлено, если :other имеет значение из списка :values.',
    'required_with' => 'Поле должно быть заполнено.',
    'required_with_all' => 'Поле :attribute должно быть представлено, если все поля из списка :values представлены.',
    'required_without' => 'Поле :attribute должно быть представлено, если хотя бы одно из полей :values не представлено.',
    'required_without_all' => 'Поле :attribute должно быть представлено, если все поля из списка :values не представлены.',
    'same' => 'Поля :attribute и :other должны иметь одинаковые значения.',
    'size' => [
        'array' => 'Поле :attribute должно иметь :size элементов.',
        'file' => ':attribute должен иметь размер :size КБ.',
        'numeric' => 'Поле :attribute должно быть равно :size.',
        'string' => 'Поле :attribute должно иметь :size символов.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться одним из следующих значений: :values.',
    'string' => 'Атрибут :attribute должен быть строкой.',
    'timezone' => 'Поле :attribute должно быть валидным часовым поясом.',
    'unique' => 'Поле :attribute уже занято.',
    'uploaded' => 'Не удалось загрузить файл :attribute.',
    'url' => 'Поле :attribute должно быть валидным URL.',
    'uuid' => 'Поле :attribute должно быть валидным UUID.',

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

    'attributes' => [
        'name' => 'Имя',
        'phone' => 'Телефон',
        'feedback' => 'Отзыв',
    ],

];
