

<?php

$APIKEY = "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";

$result['response'] = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer '.$APIKEY,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n    \"model\": \"text-davinci-003\",\n    \"prompt\": \"Code for python program\",\n    \"max_tokens\": 250,\n    \"temperature\": 0.2\n  }");

$response = curl_exec($ch);
echo json_encode($response);
curl_close($ch);
}
?>