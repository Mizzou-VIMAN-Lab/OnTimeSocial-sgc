<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<?php $this->beginContent('@humhub/modules/session/views/info/main.php') ?>

<div class="container">
    <div class="col-md-10 panel layout-content-container">
        <p>Hello, World! Hope This works!!</p>
    </div>
</div>
<?php $this->endContent(); ?>
