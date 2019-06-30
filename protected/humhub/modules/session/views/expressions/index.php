<?php

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<?php $this->beginContent('@humhub/modules/session/views/info/main.php') ?>

<div> 
    <p>"Hello, World! Hope this works!";</p>
</div>

<?php $this->endContent(); ?>