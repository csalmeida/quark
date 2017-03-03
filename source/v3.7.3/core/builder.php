<?php
  require_once "functions.php";

  if (isset($_POST['color'])) {
    // This is used for debuging.
    $id = $_POST['color'];

    // Array of data to be passed on to the page.
    $data = [
      'css'=> Theme::build(),
      'share' => ""# Theme::shareUrl()
    ];
    // Converts to JSON syntax before sending.
    echo json_encode($data, JSON_UNESCAPED_SLASHES);
  } else {
    //redirect_to($home_path);
  }
?>
