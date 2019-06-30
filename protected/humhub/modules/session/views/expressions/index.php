<?php
/**
 * Developed my Roland Oruche, University of Missouri
 */

use yii\helpers\Html;
$session = $this->context->contentContainer;
?>

<?php $this->beginContent('@humhub/modules/session/views/info/main.php') ?>

<body>
    <div> 
        <p>"Hello, World! Hope this works!";</p>
    </div>
    <script>
        const fs = require('fs');
        fs.readFile('Student1.txt', (err, data) => {
            if(err) {
                throw err;
            }
            console.log(data);
        })
    </script>
</body>

<?php $this->endContent(); ?>
