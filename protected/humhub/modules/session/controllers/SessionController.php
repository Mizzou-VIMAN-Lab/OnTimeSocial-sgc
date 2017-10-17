<?php

namespace humhub\modules\session\controllers;

use Yii;
use humhub\components\Controller;
use humhub\modules\session\models\Session;
use humhub\modules\user\models\Instructor;
use humhub\modules\user\models\forms\Registration;
use humhub\modules\admin\permissions\ManageSpaces;
use humhub\modules\admin\permissions\ManageSettings;

class SessionController extends Controller
{
    public function init()
    {
        $this->appendPageTitle(\Yii::t('SessionModule.base', 'Session'));
        return parent::init();
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'guestAllowedActions' => [
                    'index',
                    'stream'
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        
    }

    /**
     * Dashboard Index
     *
     * Show recent wall entries for this user
     */
    public function actionIndex()
    {
        // if (Yii::$app->user->can(new ManageSpaces())) {
            // $searchModel = new \humhub\modules\admin\models\SpaceSearch();
            $searchModel = new \humhub\modules\session\models\Session();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel
            ]);
        // } else if (Yii::$app->user->can(new ManageSettings())) {
        //     $this->redirect([
        //         'settings'
        //     ]);
        // }
    }

    public function actionAdd()
    {
        $model =  new Session;
        $instructorModel = new Instructor;

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save())
        {
            $this->view->saved();
            return $this->actionIndex();
        } else
        {
            return $this->render('add', array('model' => $model, 'instructorModel' => $instructorModel));
        }
    }
}
