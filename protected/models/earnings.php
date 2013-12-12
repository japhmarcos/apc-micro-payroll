<?php

/**
 * This is the model class for table "earnings".
 *
 * The followings are the available columns in table 'earnings':
 * @property integer $id
 * @property integer $employee_id
 * @property string $earnings_date
 * @property string $earnings_periodMonth
 * @property string $earnings_periodDateRange
 * @property string $earnings_periodYear
 * @property integer $earnings_totalWorkingHours
 * @property string $earnings_totalAllowancePerDay
 * @property string $earnings_otherEarnings
 * @property string $earnings_overtime
 * @property string $earnings_specialHoliday
 * @property string $earnings_specialHolidayOnRestDay
 * @property string $earnings_regularHoliday
 * @property string $earnings_regularHolidayOnRestDay
 * @property string $earnings_totalOvertimeOnHoliday
 * @property string $earnings_totalOvertimeOnRestDay
 * @property string $earnings_totalGross
 *
 * The followings are the available model relations:
 * @property Employee $employee
 * @property Sss[] $ssses
 */
class earnings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return earnings the static model class
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
		return 'earnings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, earnings_date, earnings_totalWorkingHours, earnings_periodMonth, earnings_periodDateRange, earnings_periodYear', 'required'),
			array('employee_id, earnings_totalWorkingHours', 'numerical', 'integerOnly'=>true),
			array('earnings_periodMonth', 'length', 'max'=>25),
			array('earnings_periodDateRange', 'length', 'max'=>15),
			array('earnings_periodYear', 'length', 'max'=>4),
			array('earnings_totalGross','calculateMargin'),
			array('earnings_totalAllowancePerDay, earnings_otherEarnings, earnings_overtime, earnings_specialHoliday, earnings_specialHolidayOnRestDay, earnings_regularHoliday, earnings_regularHolidayOnRestDay, earnings_totalOvertimeOnHoliday, earnings_totalOvertimeOnRestDay, earnings_totalGross', 'length', 'max'=>10),
			array('earnings_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, earnings_date, earnings_periodMonth, earnings_periodDateRange, earnings_periodYear, earnings_totalWorkingHours, earnings_totalAllowancePerDay, earnings_otherEarnings, earnings_overtime, earnings_specialHoliday, earnings_specialHolidayOnRestDay, earnings_regularHoliday, earnings_regularHolidayOnRestDay, earnings_totalOvertimeOnHoliday, earnings_totalOvertimeOnRestDay, earnings_totalGross', 'safe', 'on'=>'search'),
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
			'ssses' => array(self::HAS_MANY, 'sss', 'earnings_id'),
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
			'earnings_date' => 'Date',
			'earnings_periodMonth' => 'Period Month',
			'earnings_periodDateRange' => 'Period Date Range',
			'earnings_periodYear' => 'Period Year',
			'earnings_totalWorkingHours' => 'Total Regular Working Hours',
			'earnings_totalAllowancePerDay' => 'Allowance Per Day',
			'earnings_otherEarnings' => 'Other Earnings',
			'earnings_overtime' => 'Total Overtime Hours',
			'earnings_specialHoliday' => 'Special Holiday Working Hours',
			'earnings_specialHolidayOnRestDay' => 'Special Holiday On Rest Day Working Hours',
			'earnings_regularHoliday' => 'Regular Holiday Working Hours',
			'earnings_regularHolidayOnRestDay' => 'Regular Holiday On Rest Day Working Hours',
			'earnings_totalOvertimeOnHoliday' => 'Total Overtime Hours On Holiday',
			'earnings_totalOvertimeOnRestDay' => 'Total Overtime Hours On Rest Day',
			'earnings_totalGross' => 'Total Gross',
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
		$criteria->compare('earnings_date',$this->earnings_date,true);
		$criteria->compare('earnings_periodMonth',$this->earnings_periodMonth,true);
		$criteria->compare('earnings_periodDateRange',$this->earnings_periodDateRange,true);
		$criteria->compare('earnings_periodYear',$this->earnings_periodYear,true);
		$criteria->compare('earnings_totalWorkingHours',$this->earnings_totalWorkingHours);
		$criteria->compare('earnings_totalAllowancePerDay',$this->earnings_totalAllowancePerDay,true);
		$criteria->compare('earnings_otherEarnings',$this->earnings_otherEarnings,true);
		$criteria->compare('earnings_overtime',$this->earnings_overtime,true);
		$criteria->compare('earnings_specialHoliday',$this->earnings_specialHoliday,true);
		$criteria->compare('earnings_specialHolidayOnRestDay',$this->earnings_specialHolidayOnRestDay,true);
		$criteria->compare('earnings_regularHoliday',$this->earnings_regularHoliday,true);
		$criteria->compare('earnings_regularHolidayOnRestDay',$this->earnings_regularHolidayOnRestDay,true);
		$criteria->compare('earnings_totalOvertimeOnHoliday',$this->earnings_totalOvertimeOnHoliday,true);
		$criteria->compare('earnings_totalOvertimeOnRestDay',$this->earnings_totalOvertimeOnRestDay,true);
		$criteria->compare('earnings_totalGross',$this->earnings_totalGross,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
		public function calculateMargin( $attribute, $params )
    {
                $this->earnings_totalGross=0;
            	$this->earnings_totalGross= 
				($this->earnings_totalWorkingHours * $this->employee->employee_salaryPerHour) +
				((($this->earnings_totalAllowancePerDay)/8)*($this->earnings_totalWorkingHours)) + 
				((($this->employee->employee_salaryPerHour) * 2) * ($this->earnings_regularHoliday)) + 
				((($this->employee->employee_salaryPerHour) * 2.60) * ($this->earnings_regularHolidayOnRestDay)) +
				((($this->employee->employee_salaryPerHour) * 1.30) * ($this->earnings_specialHoliday)) +
				((($this->employee->employee_salaryPerHour) * 1.50) * ($this->earnings_specialHolidayOnRestDay)) +
				(((($this->employee->employee_salaryPerHour) * 2.60) * 1.30) *($this->earnings_totalOvertimeOnHoliday)) +
				(((($this->employee->employee_salaryPerHour) * 2.60) * 1.25) *($this->earnings_totalOvertimeOnRestDay)) +
				((($this->employee->employee_salaryPerHour) * 1.25) * ($this->earnings_overtime)) + ($this->earnings_otherEarnings);
				return 'earnings_totalGross';
			
		
			
    }
	public function getEmployeeFullName()
	{	
	return $this->employee['FullName']; 
	}
	
	public function getEarningsInfo()
	{	
	return $this->earnings_date.', '.$this->earnings_periodDateRange.', '.$this->earnings_totalGross;
	}

}