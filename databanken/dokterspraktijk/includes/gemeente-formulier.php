 <?php if ($melding): ?>
     <div><?= $melding ?></div>
 <?php endif; ?>
 <div>
     <label for="naam">Naam</label>
     <input value="<?= $naam ?>" type="text" name="naam" id="naam">
     <?php if (isset($errors["naam"])): ?>
         <p class="error"><?= $errors["naam"] ?></p>
      <?php endif; ?>
 </div>
 <div>
     <label for="postcode">Postcode</label>
     <input value="<?= $postcode ?>" type="text" name="postcode" id="postcode">
     <?php if (isset($errors["postcode"])): ?>
         <p class="error"><?= $errors["postcode"] ?></p>
     <?php endif; ?>
 </div>
