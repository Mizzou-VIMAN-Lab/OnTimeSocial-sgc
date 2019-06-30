<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use yii\helpers\ArrayHelper;
use \humhub\compat\CHtml;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use humhub\widgets\TimePicker;
use humhub\modules\user\models\Instructor;

use humhub\widgets\ModalButton;
use humhub\widgets\ModalDialog;
?>

<script>
    const fs = require('fs');
    fs.readFile('student1.txt', function (err, data) {
        if(err) {
            throw err
        }
        console.log(data);
    });
</script>