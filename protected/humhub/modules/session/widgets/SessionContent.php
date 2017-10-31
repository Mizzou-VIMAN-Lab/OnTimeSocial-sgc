<?php

namespace humhub\modules\session\widgets;

use Yii;
use humhub\components\Widget;
use humhub\modules\user\models\User;
use humhub\modules\session\models\SessionMembership;
use humhub\modules\content\components\ContentContainerActiveRecord;

class SessionContent extends Widget
{
    /**
     * @var string
     */
    public $content = '';

    /**
     * @var ContentContainerActiveRecord
     */
    public $contentContainer;

    public function run()
    {
        $searchModel = new \humhub\modules\session\models\SessionSearch();
        $dataProvider =  $searchModel->search(Yii::$app->request->queryParams);
        // return $this->content;
        return $this->render('sessionContent', [
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel
            ]);
    }
}
