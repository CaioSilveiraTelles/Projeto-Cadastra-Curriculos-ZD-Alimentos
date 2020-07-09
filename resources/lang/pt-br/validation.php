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

    'accepted' => 'O campo :attribute precisa ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute precisa ser uma data maior do que :date.',
    'after_or_equal' => 'O campo :attribute precisa ser uma data maior ou igual a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números, dashes e underscores.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números.',
    'array' => 'O campo :attribute precisa ser um array.',
    'before' => 'O campo :attribute precisa ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute precisa ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute precisa estar entre :min e :max.',
        'file' => 'O campo :attribute precisa estar entre :min e :max kilobytes.',
        'string' => 'O campo :attribute precisa estar entre :min e :max caracteres.',
        'array' => 'O campo :attribute precisa ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute precisa ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute confirmation does not match.',
    'date' => 'O campo :attribute is not a valid date.',
    'date_equals' => 'O campo :attribute must be a date equal to :date.',
    'date_format' => 'O campo :attribute does not match the format :format.',
    'different' => 'O campo :attribute and :other must be different.',
    'digits' => 'O campo :attribute must be :digits digits.',
    'digits_between' => 'O campo :attribute precisa estar entre :min e :max digits.',
    'dimensions' => 'O campo :attribute has invalid image dimensions.',
    'distinct' => 'O campo :attribute field has a duplicate value.',
    'email' => 'O campo :attribute must be a valid email address.',
    'ends_with' => 'O campo :attribute must end with one of the following: :values.',
    'exists' => 'O campo selected :attribute is invalid.',
    'file' => 'O campo :attribute must be a file.',
    'filled' => 'O campo :attribute field must have a value.',
    'gt' => [
        'numeric' => 'O campo :attribute must be greater than :value.',
        'file' => 'O campo :attribute must be greater than :value kilobytes.',
        'string' => 'O campo :attribute must be greater than :value caracteres.',
        'array' => 'O campo :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute precisa se maior ou igual a :value.',
        'file' => 'O campo :attribute precisa se maior ou igual a :value kilobytes.',
        'string' => 'O campo :attribute precisa se maior ou igual a :value caracteres.',
        'array' => 'O campo :attribute must have :value itens ou mais.',
    ],
    'image' => 'O campo :attribute must be an image.',
    'in' => 'O campo selecionado :attribute is invalid.',
    'in_array' => 'O campo :attribute field does not exist in :other.',
    'integer' => 'O campo :attribute must be an integer.',
    'ip' => 'O campo :attribute must be a valid IP address.',
    'ipv4' => 'O campo :attribute must be a valid IPv4 address.',
    'ipv6' => 'O campo :attribute must be a valid IPv6 address.',
    'json' => 'O campo :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'O campo :attribute must be less than :value.',
        'file' => 'O campo :attribute must be less than :value kilobytes.',
        'string' => 'O campo :attribute must be less than :value caracteres.',
        'array' => 'O campo :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute must be less than or equal :value.',
        'file' => 'O campo :attribute must be less than or equal :value kilobytes.',
        'string' => 'O campo :attribute must be less than or equal :value caracteres.',
        'array' => 'O campo :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute may not be greater than :max.',
        'file' => 'O campo :attribute may not be greater than :max kilobytes.',
        'string' => 'O campo :attribute may not be greater than :max caracteres.',
        'array' => 'O campo :attribute may not have more than :max items.',
    ],
    'mimes' => 'O campo :attribute must be a file of type: :values.',
    'mimetypes' => 'O campo :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'O campo :attribute must be at least :min.',
        'file' => 'O campo :attribute must be at least :min kilobytes.',
        'string' => 'O campo :attribute must be at least :min caracteres.',
        'array' => 'O campo :attribute must have at least :min items.',
    ],
    'not_in' => 'O campo selected :attribute is invalid.',
    'not_regex' => 'O campo :attribute format is invalid.',
    'numeric' => 'O campo :attribute must be a number.',
    'password' => 'O campo password is incorrect.',
    'present' => 'O campo :attribute field must be present.',
    'regex' => 'O campo :attribute format is invalid.',
    'required' => 'O campo :attribute field is required.',
    'required_if' => 'O campo :attribute field is required when :other is :value.',
    'required_unless' => 'O campo :attribute field is required unless :other is in :values.',
    'required_with' => 'O campo :attribute field is required when :values is present.',
    'required_with_all' => 'O campo :attribute field is required when :values are present.',
    'required_without' => 'O campo :attribute field is required when :values is not present.',
    'required_without_all' => 'O campo :attribute field is required when none of :values are present.',
    'same' => 'O campo :attribute and :other must match.',
    'size' => [
        'numeric' => 'O campo :attribute must be :size.',
        'file' => 'O campo :attribute must be :size kilobytes.',
        'string' => 'O campo :attribute must be :size caracteres.',
        'array' => 'O campo :attribute must contain :size items.',
    ],
    'starts_with' => 'O campo :attribute must start with one of the following: :values.',
    'string' => 'O campo :attribute must be a string.',
    'timezone' => 'O campo :attribute must be a valid zone.',
    'unique' => 'O campo :attribute has already been taken.',
    'uploaded' => 'O campo :attribute failed to upload.',
    'url' => 'O campo :attribute format is invalid.',
    'uuid' => 'O campo :attribute must be a valid UUID.',

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
