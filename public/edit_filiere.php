<?php
    require_once '../app/config/system.php';

    $page = 'manage_filieres';
    $title = 'Editer une filière';

    require_once INCLUDES . '/admin/header.php';

    require_once DIR_MODELS . '/admin/edit_filiere.php';
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2"><?= $title; ?></h1>
            </div>
            
            <?php
            if (!empty($_SESSION['advert'])) {
                $class = ($_SESSION['advert']['type'] == 'error') ? 'danger' : 'success';
                
                echo '<div class="alert alert-'.$class.'" role="alert">' . htmlentities($_SESSION['advert']['message']) . '</div>';
                
                $_SESSION['advert'] = [];
            }
            ?>

            <form action="do/edit_filiere.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom de la filière" value="<?= htmlentities($filiere['name']); ?>">
              </div>
              <input type="hidden" name="id" value="<?= $filiere['id']; ?>">
              <input type="hidden" name="csrf" value="<?= $_SESSION['csrf']; ?>">
              <button type="submit" class="btn btn-success">Enregistrer</button>
            </form>
        </main>

<?php

require_once INCLUDES . '/admin/footer.php';

?>