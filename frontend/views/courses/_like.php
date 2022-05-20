<?php

use common\models\Like;
use yii\helpers\Url;

$user_id = (isset(Yii::$app->user->identity->id)) ? Yii::$app->user->identity->id : 0;



if ($course) :
?>
    <li>
        <a 
        
        href="<?= Url::to(['/courses/like', 'id' => $course['id']]) ?>" 
        data-method="post" 
        data-pjax="1"
        >
            <?= Like::find()->andWhere(['course_id' => $course['id']])->count() ?>
            <i class="ti-heart"></i>
        </a>
    </li>

<?php
else :
?>

<?php
endif;
?>