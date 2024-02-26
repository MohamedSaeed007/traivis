<?php

return [
    'education_institute_enabled' => env('EDUCATION_INSTITUTE_ENABLED', false),
    'enterprise_enabled' => env('ENTERPRISE_ENABLED', false),
    'review_statuses' => [
        'hold' => 'Unapproved',
        'approve' => 'Approved',
        'spam' => 'Spam',
    ],
    'issue_reports' => [
        'severities' => [
            'list' => [
                'low' => 'Low',
                'medium' => 'Medium',
                'high' => 'High',
            ],
            'default' => 'medium',
        ],
        'statuses' => [
            'list' => [
                'open' => 'Open',
                'closed' => 'Closed',
                'in-progress' => 'In progress',
            ],
            'default' => 'open',
        ],
    ],
];
