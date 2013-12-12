<?php

/**
 * This is the model class for table "philhealth".
 *
 * The followings are the available columns in table 'philhealth':
 * @property integer $id
 * @property integer $employee_id
 * @property string $philhealth_no
 * @property string $monthly_salary
 * @property string $philhealth_date
 * @property string $philhealth_periodMonth
 * @property string $philhealth_periodOfDeduction
 * @property string $philhealth_periodYear
 * @property string $philhealth_salarybracket
 * @property string $philhealth_totalDeduction
 */
class philhealth extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return philhealth the static model class
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
		return 'philhealth';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('philhealth_no', 'length', 'max'=>14),
			array('monthly_salary, philhealth_totalDeduction', 'length', 'max'=>10),
			array('philhealth_periodMonth,philhealth_salarybracket', 'length', 'max'=>25),
			array('philhealth_periodOfDeduction', 'length', 'max'=>15),
			array('philhealth_periodYear', 'length', 'max'=>4),
			array('philhealth_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, philhealth_no, monthly_salary, philhealth_date, philhealth_periodMonth, philhealth_periodOfDeduction, philhealth_periodYear, philhealth_totalDeduction, philhealth_deduction_id', 'safe', 'on'=>'search'),
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
			'philhealth_no' => 'Philhealth ID Number',
			'monthly_salary' => 'Monthly Salary',
			'philhealth_date' => 'Date',
			'philhealth_periodMonth' => 'Period Month',
			'philhealth_periodOfDeduction' => 'Period Of Deduction',
			'philhealth_periodYear' => 'Period Year',
			'philhealth_salarybracket' => 'Salary Range',
			'philhealth_totalDeduction' => 'Total Conribution',
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
		$criteria->compare('philhealth_no',$this->philhealth_no,true);
		$criteria->compare('monthly_salary',$this->monthly_salary,true);
		$criteria->compare('philhealth_date',$this->philhealth_date,true);
		$criteria->compare('philhealth_periodMonth',$this->philhealth_periodMonth,true);
		$criteria->compare('philhealth_periodOfDeduction',$this->philhealth_periodOfDeduction,true);
		$criteria->compare('philhealth_periodYear',$this->philhealth_periodYear,true);
		$criteria->compare('philhealth_salarybracket',$this->philhealth_salarybracket,true);
		$criteria->compare('philhealth_totalDeduction',$this->philhealth_totalDeduction,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getPhilhealthInfo()
	{	
	return $this->philhealth_date.', '.$this->philhealth_periodOfDeduction.', '.$this->philhealth_totalDeduction; 
	}
	public function getEmployeeFullName()
	{	
	return $this->employee['FullName']; 
	}
}