<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<div class="container session-layout-container">
    <div class="row">
        <div class="col-md-12">
            <?php echo humhub\modules\session\widgets\Header::widget(['session' => $session]); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 layout-nav-container">
            <?php echo \humhub\modules\session\widgets\Menu::widget(['session' => $session]); ?>
            <br>
        </div>
        <div class="container">
            <div class="col-md-10 panel layout-content-container">
                <p>Hello, World! Hope This works!!</p>
                <?php /* echo \humhub\modules\session\widgets\ExpressionsContent::widget(['session' => $session]); */?>
                <!-- 
                    Get content from ExpressionsContent class
                -->
            </div>
        </div>
    </div>
</div>