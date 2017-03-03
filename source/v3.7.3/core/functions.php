<?php
class Validation {
  # Checks is value is part of an array.
  private static function has_inclusion($value, $array, $strict=true) {
      return in_array($value, $array, $strict);
  } // end of function has_inclusion()

# Checks if field is not blank.
# Use trim to cut spaces around value.
# Function empty() would consider 0 and "0" to be empty.
private static function has_presence($value) {
	return isset($value) && $value !== "" && !empty($value) && $value !== 0 && $value !== "0";
}

# Check if multiple values are have correct lenght.
# Otherwise it throws an error.
# Expects an associative array.
public static function hex_lengths($colors) {
  // If more than one it will return false.
  $state = true;
	// Expects an assoc. array
	foreach($colors as $hex => $value) {

		$value = trim($colors[$hex]);
	  if ((strlen($value) != 6) && Validation::has_presence($value)) {
      //echo "Unable to recreate shared theme. Feel free to build a new one! ;)";
      $state = false;
	  } // end of if ((strlen($value) != 6) && Validation::has_presence($value))
	} // end of foreach($colors as $hex => $value)
  return $state;
} // end function hex_lengths()

  # Takes in values from input i.e $_POST array.
  # Compares input against expected fields, if they are not the same the input will be unset.
  # There's no need for error message as unwanted fields can be bypassed.
  public static function expected_fields($expected_fields, $input_fields) {
      foreach($input_fields as $field => $value) {
          if (!Validation::has_inclusion($field, $expected_fields)) {
              unset($value);
              unset($field);
          } // end if (!has_inclusion($field, $expected_fields))
      } // end foreach ($input_fields as $field => $value)
      // echo print_r($_GET);
  } // function has_expected_fields()

  # Renders HTML harmless.
  # Can be applied to array i.e $_POST, $_GET.
  # trim() screws this up.
  public static function h($data) {
      if(is_array($data)) {
          foreach ($data as $field => $value) {
          $data[$field] = htmlentities($value);
          }
          return $data;
      } else {
          $data = htmlentities($data);
          return $data;
      } // if(is_array($data))
  } // function h($data)

  # Adds the hash sign to color value.
  # Can be applied to array i.e $_POST, $_GET.
  public static function addHash($data) {
      if(is_array($data)) {
          foreach ($data as $field => $value) {
          $data[$field] = "#" . $value;
          }
          return $data;
      } else {
          $data = "#" . $data;
          return $data;
      } // if(is_array($data))
  } // function removeHash($data)

} // end Validation class


class Theme {

  // Setting properties to host colors that compose the theme.
  // These properties are only used inside the Theme class.
  /*
  private $base_color;
  private $highlight_color;
  private $navigation_color;
  private $search_color;
  */

  // Creates URL that creates a theme.
  public static function shareUrl() {
    // Maps color variables to incoming data.
    $base = isset($_POST['hex']['base_color']) ? $_POST['hex']['base_color'] : '#1A1A1A';
    $highlight = isset($_POST['hex']['highlight_color']) ? $_POST['hex']['highlight_color'] : '#662D91';
    $navigation = isset($_POST['hex']['navigation_color']) ? $_POST['hex']['navigation_color'] : '#FFFFFF';
    $search = isset($_POST['hex']['search_color']) ? $_POST['hex']['search_color'] : '#411754';

    // Removes hash from values.
    $base = ltrim($base, "#");
    $highlight = ltrim($highlight, "#");
    $navigation = ltrim($navigation, "#");
    $search = ltrim($search, "#");
    return "index.php?base={$base}&highlight={$highlight}&navigation={$navigation}&search={$search}";
  }

  # Pushes returns hex values from url to be used in preview.
  # Checks if array of hex values exists.
  # If so starts checking if values are expected and compatible with theme creation.
  # Returns values to be applied to preview and color scheme.
  public static function shared($colors){

    if (isset($colors['base'])) {
      // Checks if values have right length.
      if (Validation::hex_lengths($colors)) {
        // Check's for expected fields, neutralizes injected ones.
        $expected_fields = array('base', 'highlight', 'navigation','search');
        Validation::expected_fields($expected_fields, $colors);

        // Removes harmfull html and javascript.
        $colors = Validation::h($colors);
        // Add's hash sign to color values.
        $colors = Validation::addHash($colors);
        echo "<h1>SHARED THEME.</h1>";
        print_r($colors);
        return $colors;
      }

    } else {
      # Assigns default colors to preview areas.
      $colors = [
        'base' => '#1A1A1A',
        'highlight' => '#662D91',
        'navigation' => '#FFFFFF',
        'search' =>  '#411754'
      ];
      echo "<h1>FRESH THEME.</h1>";
      print_r($colors);
      return $colors;
    } // end of isset($colors)
  } // end function shared()

  public function previewColor() {

    isset($colors['base']) ? "#" . $colors['base'] : '#1A1A1A';
    isset($colors['highlight']) ? "#" . $colors['highlight'] : '#662D91';
    isset($colors['navigation']) ? "#" . $colors['navigation'] : '#FFFFFF';
    isset($colors['search']) ? "#" . $colors['search'] : '#411754';

    return $colors;
  }

  # Saves theme into a file.
  # Removes any previous content from it.
  private static function saveRaw($css) {
    // File path.
    $file = 'raw.txt';
    // Open the file to get existing content.
    $content = $css;
    // Clean file contents.
    //file_put_contents($file, "");
    // Write the CSS to file (overrides previous content).
    file_put_contents($file, $content);
  }

  public static function build() {
    // Maps color variables to incoming data.
    $base = isset($_POST['hex']['base_color']) ? $_POST['hex']['base_color'] : '#1A1A1A';
    $highlight = isset($_POST['hex']['highlight_color']) ? $_POST['hex']['highlight_color'] : '#662D91';
    $navigation = isset($_POST['hex']['navigation_color']) ? $_POST['hex']['navigation_color'] : '#FFFFFF';
    $search = isset($_POST['hex']['search_color']) ? $_POST['hex']['search_color'] : '#411754';
    // Requires file with CSS string.
    // This string with the custom colors.
    require_once "css_output.php";

    // Stores theme in raw file.
    //Theme::saveRaw($css);
    return $css;
  }
} // end of Theme class.

# Links to redirect to.
$home_path = "../../quark/index.php";
function redirect_to($location) {
    header("Location: {$location}");
} // end of redirect_to
?>
