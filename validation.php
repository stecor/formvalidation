<?

if(isset($_REQUEST['act1'])) {

  if ($_REQUEST['act1'] === "Guardians" || $_REQUEST['act1'] === "Pirates") // Name validation
  {
    echo "Warning-Name";
  }
  else if (strpbrk($_REQUEST['act1'], '1234567890') !== FALSE)
  {
    echo "Error-Name";
  }
  else if(strlen($_REQUEST['act1']) > 0)
  {
   echo "Valid-Name";
  }

}else if(isset($_REQUEST['act2'])) {

  if (strlen($_REQUEST['act2']) >= 9 && str_repeat($_REQUEST['act2'][0], 9) === $_REQUEST['act2'])  // ID validation
  {
    echo "Warning-ID";
  }
  else if (strlen($_REQUEST['act2']) > 0 && ctype_digit($_REQUEST['act2']) === FALSE)
  {
    echo "Error-ID";
  }
  else if(strlen($_REQUEST['act2']) > 0)
  {
    echo "Valid-ID";
  }

}else if(isset($_REQUEST['act3'])) {

  if ($_REQUEST['act3'] === "Basketball" || $_REQUEST['act3'] === "Football")  // Program validation
  {
    echo "Warning-Prog";
  }
  else if ($_REQUEST['act3'] === "Beautiful" || $_REQUEST['act3'] === "Ugly")
  {
    echo "Error-Prog";
  }
  else if(strlen($_REQUEST['act3']) > 0)
  {
    echo "Valid-Prog";
  }
}

?>
