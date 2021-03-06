<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validação
    |--------------------------------------------------------------------------
    |
    | As linhas a seguir contém as mensagens de erro padrão 
    | utilizadas pela classe de validação. Algumas destas regras possuem 
    | diversas versões, como as regras de tamanho por exemplo.
    |
    */

    'accepted'             => 'Você deve aceitar o campo :attribute.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',
    'alpha'                => 'O campo :attribute só pode conter letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve ser um array PHP',
    'before'               => 'O campo :attribute deve ser uma data anterior a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve ser um valor entre :min e :max.',
        'file'    => 'O campo :attribute deve ser um arquivo entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve possuir entre :min e :max caracteres.',
        'array'   => 'O campo :attribute dever ser um array PHP com :min a :max items.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação do campo :attribute não é válida.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_format'          => 'O campo :attribute não confere com o formato :format.',
    'different'            => 'O campo :attribute e :other devem ser diferentes.',
    'digits'               => 'O campo :attribute deve possuir :digits dígitos.',
    'digits_between'       => 'O campo :attribute deve possuir entre :min and :max dígitos.',
    'email'                => 'O campo :attribute deve ser um endereço de email válido.',
    'filled'               => 'O campo :attribute é obrigatório.',
    'exists'               => 'O valor selecionado do campo :attribute é inválido.',
    'image'                => 'O campo :attribute deve ser uma imagem.',
    'in'                   => 'O valor selecionado do campo :attribute é inválido.',
    'integer'              => 'O campo :attribute deve ser um número inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endereço de IP válido.',
    'max'                  => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file'    => 'O campo :attribute não pode ser um arquivo maior que :max kilobytes.',
        'string'  => 'O campo :attribute não pode possuir mais que :max caracteres.',
        'array'   => 'O campo :attribute não pode possuir mais que :max items.',
    ],
    'mimes'                => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'file'    => 'O campo :attribute deve ser um arquivo com no mínimo :min kilobytes.',
        'string'  => 'O campo :attribute deve possuir no mínimo :min caracteres.',
        'array'   => 'O campo :attribute deve possuir no mínimo :min items.',
    ],
    'not_in'               => 'O valor selecionado do campo :attribute é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'regex'                => 'O formato do campo :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é igual a :value.',
    'required_with'        => 'O campo :attribute é obrigatório quando um dos campos: :values existir.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando todos os campos: :values existirem.',
    'required_without'     => 'O campo :attribute é obrigatório quando um dos campos: :values não existir.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos campos: :values existir.',
    'same'                 => 'Os campos :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser igual a :size.',
        'file'    => 'O campo :attribute dever ser um arquivo com :size kilobytes.',
        'string'  => 'O campo :attribute deve possuir :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size items.',
    ],
    'timezone'             => 'O campo :attribute deve ser uma timezone válida.',
    'unique'               => 'O campo :attribute já existe.',
    'url'                  => 'O formato do campo :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Validação Customizada
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar mensagens de validação customizadas para
    | atributos usando a convenção "atributo.regra" para nomear as linhas. Isto
    | torna rápido encontrar uma linha customizada específica para uma regra de atributo.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Validação de Atributos Customizadas
    |--------------------------------------------------------------------------
    |
    | As linhas a seguir são usadas para trocar marcadores de atributo
    | para algo mais amigável ao usuário, como "Endereço de Email"ao invés
    | de "email". Isto simplesmeste nos ajuda a criar mensagens mais limpas.
    |
    */

    'attributes' => [],

];
