<?php
$errors = [];
$selectedCategories = [];

$categories = [
   ['id' => 1, 'name' => 'Technology'],
   ['id' => 2, 'name'=> 'Health'],
   ['id'=> 3, 'name'=> 'Sports'],
   ['id'=> 4, 'name'=> 'Education'],
   ['id'=> 5, 'name'=> 'Entertainment'],
   ['id'=> 6, 'name'=> 'Music'],
   ['id'=> 7, 'name'=> 'Travel'],
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $selectedCategories = isset($_POST['categories']) ? $_POST['categories'] : [];

   if (empty($selectedCategories)) {
       $errors['categories'] = "You have to choose at least one category!";
   }

   if (empty($errors)) {
       // Verwerking
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Verwerking van Formulier</title>
</head>
<body>

<form method="post">
   <div>
       <label>Categories</label>
       <?php foreach($categories as $category): ?>
           <div>
               <input
                   <?= in_array($category['id'], $selectedCategories) 
                           ? 'checked' : '' ?>
                   value="<?= $category['id'] ?>"
                   type="checkbox"
                   name="categories[]"
                   id="category_<?=$category['id'] ?>"
               >
               <label for="category_<?=$category['id'] ?>">
                   <?=$category['name'] ?> 
               </label>
           </div>
       <?php endforeach ?>
   </div>
   <div>
       <input type="submit" value="Submit">
   </div>
</form>
  
</body>
</html>