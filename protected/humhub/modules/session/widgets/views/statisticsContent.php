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
use humhub\modules\admin\widgets\SpaceGridView;
?>

<?php
    echo SpaceGridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'caption' => 'Main',
                //'content' => 'This is some content...',
                'options' => ['style' => 'min-width:200px;']
                //'active' => true
            ],
            [
                'caption' => 'Details',
                //'content' => 'This is also some content...',
                'options' => ['style' => 'min-width:200px;']
            ],
        ],
    ]);
?>
