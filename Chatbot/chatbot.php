<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = $_POST["message"];

    // System prompt to restrict responses to fashion topics
    $systemPrompt = "If the query is not Understandable so, reply with:
    'I didn't understand that. Please check our Help Section.'";

    // Combining system prompt with user input
    $fullPrompt = $systemPrompt . "\n\nUser: " . $userMessage . "\nBot:";

    $apiUrl = "http://localhost:11434/api/generate";
    $data = json_encode([
        "model" => "llama3.2:latest",
        "prompt" => $fullPrompt,
        "stream" => false
    ]);

    $options = [
        "http" => [
            "header"  => "Content-Type: application/json",
            "method"  => "POST",
            "content" => $data
        ]
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($apiUrl, false, $context);

    $response = json_decode($result, true);

    // Ensure response is handled properly
    echo json_encode(["response" => $response["response"] ?? "I didn't understand that. Please check our Help Section."]);
}
