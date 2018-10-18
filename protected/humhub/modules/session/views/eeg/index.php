<?php

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<?php $this->beginContent('@humhub/modules/session/views/info/main.php') ?>

<div>
     <embed src=”http://ipaddress:8080” width=”1600px” height=”1200px”/>
</div>

<?php $this->endContent(); ?>
