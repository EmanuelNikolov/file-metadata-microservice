<?php

// Check if file exists in $_FILES array
if (isset($_FILES['upfile'])) {
    $file = $_FILES['upfile'];

    // Check if files size is under 10MB
    if ($file['size'] > 10 ** 7) {
        $result = [
          'error' => 'Sorry, file size cannot exceed1 0 megabytes :('
        ];
    } else {
        // Make an array with needed info
        $result = [
          'name' => $file['name'],
            'type' => $file['type'],
            'size' => $file['size']
        ];
    }
} else {
    // Just in case some other error occurs
    $result = [
      'error' => 'An unknown error occurred :('
    ];
}

// Make the result array into a JSON and echo it to the user
header('Content-type: application/json');
echo json_encode($result);