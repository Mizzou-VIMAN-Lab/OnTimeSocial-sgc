<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

namespace humhub\modules\session\widgets;

use Yii;
use humhub\components\Widget;
use yii\data\ActiveDataProvider;
use humhub\modules\user\models\User;
use humhub\modules\session\models\Tokens;
use humhub\modules\session\models\SessionMembership;
use humhub\modules\content\components\ContentContainerActiveRecord;

class ExpressionsContent extends Widget 
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
        $query = \humhub\modules\session\models\SessionMembership::getSessionMembersQuery($this->contentContainer);
        $session = $this->contentContainer;

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            ]);

        $dataProvider->setSort([
            'attributes' => [
                'username',
            ]
        ]);

        return $this->render('expressionsContent', ['session' => $this->contentContainer, 'members' => $query->all()]);
    }
}
