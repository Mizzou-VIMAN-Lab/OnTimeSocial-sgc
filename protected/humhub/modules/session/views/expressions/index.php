<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<?php $this->beginContent('@humhub/modules/session/views/info/main.php') ?>

<body>
    <div> 
        <?= \humhub\modules\session\widgets\ExpressionsContent::widget([
            'contentContainer' => $session,
            'content' => $content
        ]) ?>
    </div>
</body>

<?php $this->endContent(); ?>
