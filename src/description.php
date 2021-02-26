<?php

return [
    'baseUrl' => 'https://securepay.tinkoff.ru/v2',
    'operations' => [
        'init' => [
            'httpMethod' => 'POST',
            'uri' => '/Init',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Amount' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'OrderId' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'IP' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Description' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Language' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Recurrent' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'CustomerKey' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'RedirectDueDate' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'NotificationURL' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'SuccessURL' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'FailURL' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PayType' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                    'enum' => [
                        'O',
                        'T',
                    ],
                ],
                'Receipt' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
                'DATA' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
            ],
        ],
        'finishAuthorize' => [
            'httpMethod' => 'POST',
            'uri' => '/FinishAuthorize',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Amount' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'DATA' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
                'InfoEmail' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'IP' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaymentId' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'Phone' => [
                    'required' => false,
                    'type' => 'boolean',
                    'location' => 'formParam',
                ],
                'SendEmail' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Route' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                    'enum' => [
                        'ACQ',
                    ],
                ],
                'Source' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                    'enum' => [
                        'Cards',
                        'ApplePay',
                        'GooglePay'
                    ],
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'confirm' => [
            'httpMethod' => 'POST',
            'uri' => '/Confirm',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaymentId' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'Amount' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'IP' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Receipt' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
            ],
        ],
        'cancel' => [
            'httpMethod' => 'POST',
            'uri' => '/Cancel',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaymentId' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'Amount' => [
                    'required' => false,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'IP' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Receipt' => [
                    'required' => false,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
            ],
        ],
        'getState' => [
            'httpMethod' => 'POST',
            'uri' => '/GetState',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaymentId' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'IP' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'resend' => [
            'httpMethod' => 'POST',
            'uri' => '/Resend',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'submit3DSAuthorization' => [
            'httpMethod' => 'POST',
            'uri' => '/Submit3DSAuthorization',
            'responseModel' => 'Result',
            'parameters' => [
                'MD' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaRes' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaymentId' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
            ],
        ],
        'sendClosingReceipt' => [
            'httpMethod' => 'POST',
            'uri' => '/SendClosingReceipt',
            'responseModel' => 'Result',
            'parameters' => [
                'TerminalKey' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'PaymentId' => [
                    'required' => true,
                    'type' => 'numeric',
                    'location' => 'formParam',
                ],
                'Token' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'formParam',
                ],
                'Receipt' => [
                    'required' => true,
                    'type' => 'array',
                    'location' => 'formParam',
                ],
            ],
        ],
    ],
    'models' => [
        'Result' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ]
        ]
    ]
];
