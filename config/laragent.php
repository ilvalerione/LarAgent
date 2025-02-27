<?php

// config for Maestroerror/LarAgent
return [
    /*
     * Determine the driver to use at runtime to connect with an LLM.
     */
    'default_driver' => \LarAgent\Drivers\OpenAi\OpenAiDriver::class,

    /*
     * Determine the strategy to retain messages between multiple LLM interactions.
     */
    'default_chat_history' => \LarAgent\History\InMemoryChatHistory::class,

    /*
     * Define the configuration options drivers need to be properly instatiated.
     */
    'providers' => [
        'default' => [
            'name' => 'openai',
            'api_key' => env('OPENAI_API_KEY'),
            'default_context_window' => 50000,
            'default_max_completion_tokens' => 100,
            'default_temperature' => 1,
        ],
    ],
];
