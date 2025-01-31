<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  try {
    $file = fopen("non_existent_file.txt", "r");
    if (!$file) {
      throw new Exception("File not found!");
    }
    // Additional code to work with the file
  } catch (Exception $e) {
    // Log the error to a file
    error_log($e->getMessage(), 3, "error_log.txt");
    echo "Something went wrong. Please try again later.";
  }
?>
