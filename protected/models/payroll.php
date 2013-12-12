<?php

/**
 * This is the model class for table "payroll".
 *
 * The followings are the available columns in table 'payroll':
 * @property integer $id
 * @property integer $employee_id
 * @property string $payroll_date
 * @property string $payroll_month
 * @property string $payroll_dateRange
 * @property string $payroll_year
 * @property string $payroll_totalNetPayBeforeTax
 * @property string $payroll_withholdingTax
 * @property string $payroll_totalNetPayAfterTax
 * @property string $payroll_totalGross
 */
class payroll extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return payroll the static model class
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
		return 'payroll';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id,payroll_totalNetPayBeforeTax', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('payroll_month', 'length', 'max'=>25),
			array('payroll_dateRange, payroll_totalNetPayBeforeTax, payroll_withholdingTax, payroll_totalNetPayAfterTax', 'length', 'max'=>10),
			array('payroll_year', 'length', 'max'=>4),
			array('payroll_totalNetPayBeforeTax','calculateMargin'),
			array('payroll_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, payroll_date, payroll_month, payroll_dateRange, payroll_year, payroll_totalNetPayBeforeTax, payroll_withholdingTax, payroll_totalNetPayAfterTax', 'safe', 'on'=>'search'),
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
		'deductions' => array(self::BELONGS_TO, 'deductions', 'deductions_id'),
		'employee' => array(self::BELONGS_TO, 'employee', 'employee_id'),
		'withholdingtax' => array(self::BELONGS_TO, 'withholdingtax', 'withholdingtax_id'),
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
			'payroll_date' => 'Date',
			'payroll_month' => 'Period Month',
			'payroll_dateRange' => 'Period Date Range',
			'payroll_year' => 'Period Year',
			'payroll_totalNetPayBeforeTax' => 'Taxable Income',
			'payroll_withholdingTax' => 'Withholding Tax',
			'payroll_totalNetPayAfterTax' => 'Total Net Pay After Tax',
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
		$criteria->compare('payroll_date',$this->payroll_date,true);
		$criteria->compare('payroll_month',$this->payroll_month,true);
		$criteria->compare('payroll_dateRange',$this->payroll_dateRange,true);
		$criteria->compare('payroll_year',$this->payroll_year,true);
		$criteria->compare('payroll_totalNetPayBeforeTax',$this->payroll_totalNetPayBeforeTax,true);
		$criteria->compare('payroll_withholdingTax',$this->payroll_withholdingTax,true);
		$criteria->compare('payroll_totalNetPayAfterTax',$this->payroll_totalNetPayAfterTax,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function calculateMargin( $attribute, $params )
    {
        $this->payroll_totalNetPayAfterTax=0;
				
		$this->payroll_totalNetPayAfterTax=($this->payroll_totalNetPayBeforeTax) - ($this->payroll_withholdingTax);
			
    }
}