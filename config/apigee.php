<?php

return [
    /*
     * The driver which is responsible for reading the configuration.
     *
     * it should implements the ConfigReaderInterface
     */
    "driver" => \Lordjoo\Apigee\ConfigReaders\ConfigFileDriver::class,

    /*
     * The endpoint which we will use in the API calls
     *
     * NOTE: if you are using the ConfigFileDriver, you should set the endpoint in the config file
     */
    "endpoint" => env("APIGEE_ENDPOINT"),

    /*
     * The organization name which we will use in the API calls
     *
     * NOTE: if you are using the ConfigFileDriver, you should set the organization name in the config file
     */
    "organization" => env("APIGEE_ORGANIZATION"),

    /*
     * The username which we will use in the API calls
     *
     * NOTE: if you are using the ConfigFileDriver, you should set the username in the config file
     */
    "username" => env("APIGEE_USERNAME"),

    /*
     * The password which we will use in the API calls
     *
     * NOTE: if you are using the ConfigFileDriver, you should set the password in the config file
     */
    "password" => env("APIGEE_PASSWORD"),


    // Only When using the ConfigDBDriver you should set the following values
    "db" => [
        "table_name" => "apigee_config",
        "columns" => [
            "organization" => "organization",
            "endpoint" => "endpoint",
            "username" => "username",
            "password" => "password",
        ]
    ]
];
