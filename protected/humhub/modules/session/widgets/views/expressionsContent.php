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
use humhub\modules\session\widgets\ExpressionsContent;

?>


<div>
    <?php
        foreach(glob("protected/humhub/modules/session/views/expressions/*.txt") as $filename) {
            $file = fopen($filename, "r");
            while(!feof($file)) {
                $line = fgets($file);
                echo $line . "<br>";
            }
            fclose($file);
        }
    ?>
</div>

