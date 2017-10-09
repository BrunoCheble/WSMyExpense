<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;
use app\models\Expense;

/**
 * LoginForm is the model behind the login form.
 */
class ExpenseForm extends Model
{
    public $repeat = 1;
    public $_expense;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['repeat'], 'integer'],
            [['expense'], 'required'],
        ];
    }

    public function create() {

        for($i = 0; $i < $this->repeat; $i++) {

            $expense = new Expense;
            $expense = $this->_expense;

            $due_date          = date('Y-m-d',strtotime('+'.$i.' months',strtotime($this->_expense->due_date)));
            $expense->due_date = $due_date;
            
            if(!$expense->save()) return false;
        }

        return true;
    }
}
