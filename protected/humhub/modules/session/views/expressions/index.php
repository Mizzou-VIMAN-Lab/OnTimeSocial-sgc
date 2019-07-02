<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

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
            <?= \humhub\modules\session\widgets\ExpressionsContent::widget([
                    'contentContainer' => $session]) ?>
    </div>
</div>