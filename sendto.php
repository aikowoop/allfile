<?php
function sendMessageToTelegram($message) {
    $token = "7536723724:AAHcnShdSvrH_FoqzVkrIpxJOYox3VrYwWU";
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $chatIds = [7097403742, 6776568669] ;
    foreach ($chatIds as $chatId) {
        $data = [
            'chat_id' => $chatId,
            'text' => $message
        ];

        // Utilisation de cURL pour envoyer la requête POST
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        // Optionnel : Affiche la réponse pour chaque chat_id
       
    }
}

?>