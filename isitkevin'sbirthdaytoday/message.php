#!/usr/local/bin/php

<?php
    if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'yes.php') !== false) {
        // GET THEIR NAME
        $inputName = htmlspecialchars($_POST['name']);

        // GET THEIR MESSAGE
        $inputMessage = htmlspecialchars($_POST['message']);

        // IF CSV DOESN'T EXIST CREATE THE HEADERS
        if (!file_exists("messages.csv")){
            $myfile = fopen("messages.csv", "a") or die("Unable to open file!");
            $headers = "Name, Message\n";
            fwrite($myfile, $headers);
            fclose($myfile);
        }

        // STORE NAME AND RESPONSE TO CSV FILE
        $myfile = fopen("messages.csv", "a") or die("Unable to open file!");

        $userResponse = '"' . $inputName . '","' . $inputMessage . '"' . "\n";
        fwrite($myfile, $userResponse);
        fclose($myfile);

        // Prepare the response
        $response = array(
            'name' => $inputName
        );

        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>