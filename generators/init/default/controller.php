<?php
/**
 * This is the template for generating a controller class file.
 */

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gg\generators\controller\Generator */

echo "<?php\n";
?>

namespace <?= $generator->cns ?>;

use app\extensions\rest\ActiveController;
use app\models\<?=$modelClassName?>;

class <?=$controllerClassName?> extends ActiveController
{
    public $modelClass = <?=$modelClassName?>::class;
}
