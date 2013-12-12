<?php

/**
 * This is the model class for table "pagibig".
 *
 * The followings are the available columns in table 'pagibig':
 * @property integer $id
 * @property integer $employee_id
 * @property string $pagibig_no
 * @property string $pagibig_date
 * @property string $pagibig_periodMonth
 * @property string $pagibig_periodDeduction
 * @property string $pagibig_periodYear
 * @property string $pagibig_monthlyContribution
 * @property string $pagibig_loanMonthlyDeduction
 * @property string $pagibig_totalMonthlyDeduction
 *
 * The followings are the available model relations:
 * @property Employee $employee
 */
class pagibig extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pagibig the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagibig';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, pagibig_no, pagibig_date, pagibig_periodMonth, pagibig_periodDeduction, pagibig_periodYear', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('pagibig_no', 'length', 'max'=>14),
			array('pagibig_periodMonth', 'length', 'max'=>25),
			array('pagibig_periodDeduction', 'length', 'max'=>15),
			array('pagibig_periodYear', 'length', 'max'=>4),
			array('pagibig_totalMonthlyDeduction','calculateMargin'),
			array('pagibig_monthlyContribution, pagibig_loanMonthlyDeduction, pagibig_totalMonthlyDeduction', 'length', 'max'=>10),
			array('pagibig_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, pagibig_no, pagibig_date, pagibig_periodMonth, pagibig_periodDeduction, pagibig_periodYear, pagibig_monthlyContribution, pagibig_loanMonthlyDeduction, pagibig_totalMonthlyDeduction', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'employee' => array(self::BELONGS_TO, 'employee', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee',
			'pagibig_no' => 'Pagibig No',
			'pagibig_date' => 'Date',
			'pagibig_periodMonth' => 'Period Month',
			'pagibig_periodDeduction' => 'Period Deduction',
			'pagibig_periodYear' => 'Period Year',
			'pagibig_monthlyContribution' => 'Monthly Contribution',
			'pagibig_loanMonthlyDeduction' => 'Loan Monthly Deduction',
			'pagibig_totalMonthlyDeduction' => 'Total Monthly Deduction',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('pagibig_no',$this->pagibig_no,true);
		$criteria->compare('pagibig_date',$this->pagibig_date,true);
		$criteria->compare('pagibig_periodMonth',$this->pagibig_periodMonth,true);
		$criteria->compare('pagibig_periodDeduction',$this->pagibig_periodDeduction,true);
		$criteria->compare('pagibig_periodYear',$this->pagibig_periodYear,true);
		$criteria->compare('pagibig_monthlyContribution',$this->pagibig_monthlyContribution,true);
		$criteria->compare('pagibig_loanMonthlyDeduction',$this->pagibig_loanMonthlyDeduction,true);
		$criteria->compare('pagibig_totalMonthlyDeduction',$this->pagibig_totalMonthlyDeduction,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getEmployeeFullName()
	{	
	return $this->employee['FullName']; 
	}
	
	public function calculateMargin( $attribute, $params )
    {
                $this->pagibig_totalMonthlyDeduction=0;
                $this->pagibig_monthlyContribution=100;
				
		$this->pagibig_totalMonthlyDeduction=($this->pagibig_monthlyContribution) + (($this->pagibig_loanMonthlyDeduction));
			
    }
	public function getPagibigInfo()
	{	
	return $this->pagibig_date.', '.$this->pagibig_periodDeduction.', '.$this->pagibig_totalMonthlyDeduction; 
	}
}