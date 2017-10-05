<?php
/*
Creating a catalog array

- We create a catalog array that will have an element that will be a key
- Each item i.e the key will have its own array to house details about that item
-Associate array housing items in a key value pair
to display the items we put in this array we use a foreach loop
-This foreach ($array_name, $placeholder) {
  //do something with eg echo "<li>" . $placeholder. "</li>"
}


Creating the display function
- //we are creating a function to display the items from a category in each individual page. Takes two parameters first the array in this case the main outer array_category the second argument is the item in the inner array ie the value from they key value
pair in the inner array_category
- For example here we are trying to display the image, make it linkable so that it takes you to the items details page
- Also we have a piece of text that will take you to the details page
- Here for the catalog array we are setting up the function such that the
$id   = key
$item = is the item in the inner array eg title, year etc and we access the value using $item["img"] etc
- Now if we go back to the catalog page to use the dispaly function we  use a foreach loop (arrayname = $catalog as key=> value $id => $item) when we loop through each item in the catalog
array, we will pick out the id that is the key and pass it to the function get_item_html(). The function will then take the key as the first parameter and the second parameter will be item i.e every key in the inner array of the key
- so when it picks out the item[img] and item[title ] it will form the string and return it to the foreach loop to echo to the catalog page.

Ramdom fun with arrays:
- Here we use php's random function and assign the 4 random values to an array called  random
- the random array is then passed through the foreach loop and teh get_item_html function to display on its page.


Displaying categories
-own funtion like the array random
-pass two parameters
-return the array key
- two paramters -> the array and the category we wish to return
- to return an array we create an empty array called output
-to loop through catalog array we use foreach ($catalog and $category)
-we use conditional to compare the category to the category in the inner array_category
then we add that key/ $id to the output array_category




























*/

?>
