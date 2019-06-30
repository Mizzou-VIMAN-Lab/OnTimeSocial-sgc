<?php

namespace humhub\modules\session\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use humhub\modules\admin\components\Controller;
use humhub\modules\stream\actions\ContentContainerStream;

class ExpressionsController extends \humhub\modules\content\components\ContentContainerController
{
    /**
     * @inheritdoc
     */
    public function init() {
        return;
    }
}