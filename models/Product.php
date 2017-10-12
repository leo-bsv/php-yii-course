<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Product class.
 */
class Product extends Model
{
    public $id;
    public $name;
    public $price;
    public $category;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // safe attributes
            [['name', 'price', 'category'], 'safe'],
        ];
    }    
    
    public function scenarios() {
        parent::scenarios();
    }
}
