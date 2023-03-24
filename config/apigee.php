<?php

// config for Lordjoo/Apigee
return [
    "endpoint" => env("APIGEE_ENDPOINT", "https://api.enterprise.apigee.com/v1"),
    "organization" => env("APIGEE_ORGANIZATION", "your-org"),
    "username" => env("APIGEE_USERNAME", "your-username"),
    "password" => env("APIGEE_PASSWORD", "your-password"),
    "monetization" => env("APIGEE_MONETIZATION", false),
];

