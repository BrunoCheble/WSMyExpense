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
    public $updateAll;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['repeat','updateAll'], 'integer'],
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

    public function update() {

        if(!empty($this->updateAll)) {
            
            $conditions = ['expense_id' => $this->_expense->expense_id, 'status' => 'PENDENTE'];

            // Atualizar somente os proximos, a partir da data do registro
            if($this->updateAll == 2)
                $conditions[] = [ 'AND', ['>=', 'due_date', $this->_expense->due_date]];

            // Qtd de registros deletados
            $this->repeat = Expense::deleteAll($conditions);

            return $this->create();
        }
        
        $model = Expense::findOne($this->_expense->id);
        $model = $this->_expense;

        return $this->save();
    }
}
