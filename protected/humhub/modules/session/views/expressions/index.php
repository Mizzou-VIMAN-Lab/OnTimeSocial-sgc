<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<?php $this->beginContent('@humhub/modules/session/views/info/_layout.php') ?>

<body>
    <div> 
        <p>"Hello, World! Hope this works!";</p>
    </div>
</body>

<?php $this->endContent(); ?>
