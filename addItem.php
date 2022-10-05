<!-- Form page to add an item to the database -->
<?php

  //Login Cookie?
/*
  if ( !isset( $_SESSION['username'] ) ) {
      header('Location: index.html');
      die;
  }
*/

?>


<!--
  NOTE: Needs to have function that generates
        and assigns a Random sequece for the
        identification tag
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add Item</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
  <style>
    body {
      background-color: #EAF6F6;
    }
  </style>
</head>

<header class = "w3-margin-right">
  <h1 class="w3-container w3-win8-crimson w3-round-xxlarge"><b>Costume Inventory Manager</b></h1>
  <section>
    <h7>
        <button class = "w3-button w3-dark-grey w3-round-xlarge w3-text-white" type="button"><a href="index.html">Home</a></button>
        <button class = "w3-button w3-dark-grey w3-round-xlarge w3-text-white" type="button"><a href="rented.html">Rented</a></button>
        <button class = "w3-button w3-dark-grey w3-round-xlarge w3-text-white" type="button"><a href="addItem.html">Add Item</a></button>
        <button class = "w3-button w3-dark-grey w3-round-xlarge w3-text-white" type="button"><a href="">Modify/Delete</a></button>
    </h7>
  </section>
</header>


<body>
  <!-- Page Header -->

  <hr>
  <!-- End of Page Header -->

  <section>
    <h2> Add An Article </h2>
    <h4>Enter Information about the article and click submit to process the item</h4>
    <form class="" action="addAnother.html">

        <label>Article Name:</label>
        <input type="text" name="Article Name" value=""><br><br>

        <label>Item Location:</label>
        <input type="text" name="itemLocation" value=""><br><br>

        <label>Period:</label>
        <input type="text" name="itemPeriod" value=""><br><br>

        <label>Type:</label>
        <input type="text" name="itemType" value=""><br><br>

        <label>Color:</label>
        <input type="text" name="itemColor" value=""><br><br>

        <label>Print:</label>
        <input type="text" name="itemPrint" value=""><br><br>

        <label>Fabric:</label>
        <input type="text" name="itemFabric" value=""><br><br>

        <label>Size:</label>
        <input type="text" name="itemSize" value=""><br><br>

        <label>Sleeve:</label>
        <input type="text" name="itemSleeve" value=""><br><br>

        <label>Neckline:</label>
        <input type="text" name="itemNeckline" value=""><br><br>

        <label>Length:</label>
        <input type="text" name="itemLength" value=""><br><br>

        <label>Ornament:</label>
        <input type="text" name="itemOrnament" value=""><br><br>

        <label for="myfile">Add A Photo:</label>
        <input type="file" id="itemPhoto" name="itemPhoto"><br><br>
        <hr>

        <input type="submit" value="Submit" />
    </form>
  </section>



</body>
