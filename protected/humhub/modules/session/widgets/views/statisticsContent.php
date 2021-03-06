<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

/**
 * @var \humhub\modules\user\models\User $contentContainer
 * @var bool $showProfilePostForm
 */

use yii\helpers\Url;
use yii\helpers\Html;
use \humhub\compat\CHtml;
use yii\widgets\ActiveForm;
use humhub\modules\space\models\Space;
use humhub\modules\session\widgets\StatisticsContent;
use humhub\widgets\Tabs;
?>

<link rel="stylesheet" type="text/css" href="protected/humhub/modules/session/views/statistics/stats-content.css">

<div class="tab-container">
    <?php
        echo Tabs::widget([
            'items' => [
                [
                    'label' => 'Main',
                    'content' => 'This is some content...',
                    'active' => true
                ],
                [
                    'label' => 'Details',
                    'content' => 'This is also some content...'
                ],
            ],
        ]);
    ?>
</div>
