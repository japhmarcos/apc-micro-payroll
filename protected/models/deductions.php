<?php

/**
 * This is the model class for table "deductions".
 *
 * The followings are the available columns in table 'deductions':
 * @property integer $id
 * @property integer $employee_id
 * @property integer $earnings_id
 * @property integer $philhealth_id
 * @property integer $sss_id
 * @property integer $pagibig_id
 * @property string $deductions_date
 * @property string $deductions_periodMonth
 * @property string $deductions_periodDateRange
 * @property string $deductions_periodYear
 * @property string $deductions_otherDeduction
 * @property string $deductions_longDistanceCall
 * @property string $deductions_totalNetPayBeforeTax
 *
 * The followings are the available model relations:
 * @property Pagibig $pagibig
 * @property Earnings $earnings
 * @property Philhealth $philhealth
 * @property Sss $sss
 */
class deductions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return deductions the static model class
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
		return 'deductions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, earnings_id, philhealth_id, sss_id, pagibig_id', 'required'),
			array('employee_id, earnings_id, philhealth_id, sss_id, pagibig_id', 'numerical', 'integerOnly'=>true),
			array('deductions_otherDeduction, deductions_longDistanceCall, deductions_totalNetPayBeforeTax', 'length', 'max'=>10),
			array('deductions_periodMonth', 'length', 'max'=>25),
			array('deductions_periodDateRange', 'length', 'max'=>15),
			array('deductions_periodYear', 'length', 'max'=>4),
			array('deductions_totalNetPayBeforeTax','calculateMargin'),
			array('deductions_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, earnings_id, philhealth_id, sss_id, pagibig_id, deductions_date, deductions_periodMonth, deductions_periodDateRange, deductions_periodYear, deductions_otherDeduction, deductions_longDistanceCall, deductions_totalNetPayBeforeTax', 'safe', 'on'=>'search'),
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
			'pagibig' => array(self::HAS_MANY, 'pagibig', 'deductions_id'),
			'philhealth' => array(self::BELONGS_TO, 'philhealth', 'philhealth_id'),
			'sss' => array(self::BELONGS_TO, 'sss', 'sss_id'),
			'earnings' => array(self::BELONGS_TO, 'earnings', 'earnings_id'),
			'pagibig' => array(self::BELONGS_TO, 'pagibig', 'pagibig_id'),
			'withholdingtax' => array(self::HAS_MANY, 'withholdingtax', 'deductions_id'),
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
			'earnings_id' => 'Total Earnings',
			'philhealth_id' => 'Philhealth Contribution',
			'sss_id' => 'SSS Contribution',
			'pagibig_id' => 'Pagibig Contribution',
			'deductions_date' => 'Date',
			'deductions_periodMonth' => 'Period Month',
			'deductions_periodDateRange' => 'Period Date Range',
			'deductions_periodYear' => 'Period Year',
			'deductions_otherDeduction' => 'Other Deduction',
			'deductions_longDistanceCall' => 'Long Distance Call',
			'deductions_totalNetPayBeforeTax' => 'Total Net Pay Before Tax',
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
		$criteria->compare('earnings_id',$this->earnings_id);
		$criteria->compare('philhealth_id',$this->philhealth_id);
		$criteria->compare('sss_id',$this->sss_id);
		$criteria->compare('pagibig_id',$this->pagibig_id);
		$criteria->compare('deductions_date',$this->deductions_date,true);
		$criteria->compare('deductions_periodMonth',$this->deductions_periodMonth,true);
		$criteria->compare('deductions_periodDateRange',$this->deductions_periodDateRange,true);
		$criteria->compare('deductions_periodYear',$this->deductions_periodYear,true);
		$criteria->compare('deductions_otherDeduction',$this->deductions_otherDeduction,true);
		$criteria->compare('deductions_longDistanceCall',$this->deductions_longDistanceCall,true);
		$criteria->compare('deductions_totalNetPayBeforeTax',$this->deductions_totalNetPayBeforeTax,true);

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
                $this->deductions_totalNetPayBeforeTax=0;
				
		$this->deductions_totalNetPayBeforeTax=($this->earnings['earnings_totalGross']) - (
		($this->philhealth->philhealth_totalDeduction)+($this->sss->sss_totalDeduction)+($this->pagibig->pagibig_totalMonthlyDeduction)+($this->deductions_otherDeduction)
		+($this->deductions_longDistanceCall));
			
    }
	public function getDeductionInfo()
	{	
	return $this->deductions_date.', '.$this->deductions_periodDateRange.', '.$this->deductions_totalNetPayBeforeTax; 
	}
	
	
}