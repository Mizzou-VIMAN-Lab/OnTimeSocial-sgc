<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

namespace humhub\modules\session\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use humhub\modules\admin\components\Controller;
use humhub\modules\stream\actions\ContentContainerStream;

class SessionStatsController extends \humhub\modules\content\components\ContentContainerController
{
     /**
     * @inheritdoc
     */
    public $adminOnly = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->appendPageTitle(Yii::t('AdminModule.base', 'Session Stats'));
        return parent::init();
    }

    public function actionIndex()
    {
        $this->subLayout = '@humhub/modules/session/views/expressions/index';

        $members = \humhub\modules\session\models\SessionMembership::getSessionMembersQuery($this->session)->all();
        return $this->render('index');
    }


}
