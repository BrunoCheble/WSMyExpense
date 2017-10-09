<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expense".
 *
 * @property integer $id
 * @property string $title
 * @property string $value
 * @property integer $repeat
 * @property integer $expense_id
 * @property string $status
 * @property string $updated_at
 * @property string $created_at
 */
class Expense extends \yii\db\ActiveRecord
{
    public $updateAll;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expense';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'value'], 'required'],
            [['value'], 'number'],
            [['expense_id','updateAll'], 'integer'],
            [['updated_at', 'created_at','due_date'], 'safe'],
            [['title'], 'string', 'max' => 45],
            [['status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'value' => 'Value',
            'expense_id' => 'Expense ID',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    public function beforeSave($insert){


        if (parent::beforeSave($insert)) {

            if (!$insert) {

                $this->updated_at = date('Y-m-d H:s:i');

                if (!empty($this->updateAll)) 
                    return Expense::updateAll(['value' => $this->value, 'title' => $this->title, 'status' => $this->status, 'updated_at' => $this->updated_at], ['expense_id' => $this->expense_id, 'status' => 'PENDENTE']);
            }
            else
                $this->created_at = date('Y-m-d H:s:i');

            return true;
        }

        return false;
    }

}
