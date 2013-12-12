<?php

/**
 * This is the model class for table "withholding_tax".
 *
 * The followings are the available columns in table 'withholding_tax':
 * @property integer $id
 * @property integer $employee_id
 * @property string $tin_number
 * @property string $withholdingtax_exemption_status
 * @property string $withholdingtax_date
 * @property string $withholdingtax_periodMonth
 * @property string $withholdingtax_periodOfDeduction
 * @property string $withholdingtax_periodYear
 * @property string $taxable_income
 * @property string $withholdingtax_salaryBase
 * @property string $withholdingtax_baseTax
 * @property string $withholdingtax_percentageExcess
 * @property string $withholdingtax_exemption
 * @property string $total_withholdingTax
 *
 * The followings are the available model relations:
 * @property Employee $employee
 * @property Deductions $deductions
 */
class withholding_tax extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return withholding_tax the static model class
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
		return 'withholding_tax';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, taxable_income', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('tin_number, withholdingtax_periodOfDeduction', 'length', 'max'=>15),
			array('withholdingtax_exemption_status', 'length', 'max'=>45),
			array('withholdingtax_periodMonth', 'length', 'max'=>25),
			array('withholdingtax_periodYear', 'length', 'max'=>4),
			array('total_withholdingTax','calculateTax'),
			array('withholdingtax_salaryBase, withholdingtax_baseTax, withholdingtax_percentageExcess,withholdingtax_exemption, total_withholdingTax', 'length', 'max'=>10),
			array('withholdingtax_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, tin_number, withholdingtax_exemption_status, withholdingtax_date, withholdingtax_periodMonth, withholdingtax_periodOfDeduction, withholdingtax_periodYear, taxable_income, withholdingtax_salaryBase, withholdingtax_baseTax, withholdingtax_percentageExcess, total_withholdingTax', 'safe', 'on'=>'search'),
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
			'deductions' => array(self::BELONGS_TO, 'deductions', 'deductions_id'),
			'withholding_tax_table' => array(self::BELONGS_TO, 'withholding_tax_table', 'id'),
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
			'tin_number' => 'TIN Number',
			'withholdingtax_exemption_status' => 'Exemption Status',
			'withholdingtax_date' => 'Date',
			'withholdingtax_periodMonth' => 'Period Month',
			'withholdingtax_periodOfDeduction' => 'Period Of Deduction',
			'withholdingtax_periodYear' => 'Period Year',
			'taxable_income' => 'Taxable Income',
			'withholdingtax_salaryBase' => 'Salary Base',
			'withholdingtax_baseTax' => 'Base Tax',
			'withholdingtax_percentageExcess' => 'Percentage Excess',
			'withholdingtax_exemption' => 'Exemption Value',
			'total_withholdingTax' => 'Total Withholding Tax',
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
		$criteria->compare('tin_number',$this->tin_number,true);
		$criteria->compare('withholdingtax_exemption_status',$this->withholdingtax_exemption_status,true);
		$criteria->compare('withholdingtax_date',$this->withholdingtax_date,true);
		$criteria->compare('withholdingtax_periodMonth',$this->withholdingtax_periodMonth,true);
		$criteria->compare('withholdingtax_periodOfDeduction',$this->withholdingtax_periodOfDeduction,true);
		$criteria->compare('withholdingtax_periodYear',$this->withholdingtax_periodYear,true);
		$criteria->compare('taxable_income',$this->taxable_income,true);
		$criteria->compare('withholdingtax_salaryBase',$this->withholdingtax_salaryBase,true);
		$criteria->compare('withholdingtax_baseTax',$this->withholdingtax_baseTax,true);
		$criteria->compare('withholdingtax_percentageExcess',$this->withholdingtax_percentageExcess,true);
		$criteria->compare('withholdingtax_exemption',$this->withholdingtax_exemption,true);
		$criteria->compare('total_withholdingTax',$this->total_withholdingTax,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function calculateTax($attribute, $params){
					$this->total_withholdingTax=0;
				$this->total_withholdingTax = ((($this->taxable_income - $this->withholdingtax_salaryBase) *($this->withholdingtax_percentageExcess))
				+ $this->withholdingtax_baseTax) ;
					}
	
	public function getTaxInfo()
	{	
	return $this->withholdingtax_date.', '.$this->withholdingtax_periodOfDeduction.', '.$this->total_withholdingTax; 
	}
	
	public function getEmployeeFullName()
	{	
	return $this->employee['FullName']; 
	}
}