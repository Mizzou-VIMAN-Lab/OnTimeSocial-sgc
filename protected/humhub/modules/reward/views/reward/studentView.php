<?php
/**
 * @var \humhub\modules\user\models\User $contentContainer
 * @var bool $showProfilePostForm
 */

use yii\helpers\Url;
use yii\helpers\Html;
use humhub\modules\space\models\Space;
use humhub\modules\admin\widgets\SpaceGridView;
?>

<div class="container">
        <div class="col-md-12 layout-content-container panel panel-default">
        <div class="panel-heading"><?= Yii::t('AdminModule.views_space_index', '<strong>Rewards</strong>'); ?></div>
            <div class="table-responsive">
                <?php
                extract($_POST);
                extract($_GET);
                    echo SpaceGridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'attribute' => 'id',
                                'options' => ['width' => '40px'],
                                'format' => 'raw',
                                'value' => function($data) {
                                    return $data->id;
                                },
                            ],
                            'user.username',
                            'session.session_name',
                            'token.pass',
                            //'token.warning',
                            'token.strike',
                            'token.tokens',
                            'description',
                            'rewarded_date',
                            'rewarded_by'
                        ],
                    ]);
                ?>
            </div>
        </div> 
    </div>
</div>
