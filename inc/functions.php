<?php


//Function to print the html out for the catalog items in an array. Takes the id-> key from the array and $item -> the key for the inner array
function get_item_html($id, $item) {
$output =  "<li><a href = '#'><img src = '"
          .$item["img"]."' alt = '"
          .$item["title"]
          ."'>"
          . "<p>View Details</p>"
          . "</a></li>";
  return $output;
}

//pass two parameters
//return an array of keys

function array_category($catalog, $category) { 
  if ($category == null) {
    return array_keys($catalog);
  }
  $output = array();
  foreach( $catalog as $id => $item) {
    if (strtolower($category) == strtolower($item["category"])) {
      $output[] = $id;
    }
  }
  return $output;
}
