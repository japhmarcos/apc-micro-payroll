<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property integer $department_id
 * @property string $employee_lastName
 * @property string $employee_firstName
 * @property string $employee_middleName
 * @property integer $employee_age
 * @property string $employee_homeAddress
 * @property string $employee_city
 * @property string $employee_zipCode
 * @property string $employee_dateOfBirth
 * @property string $employee_contactNo
 * @property string $employee_civilStatus
 * @property string $employee_gender
 * @property string $employee_dateHired
 * @property string $employee_dateOfRegularization
 * @property string $employee_philhealthNo
 * @property string $employee_sssNo
 * @property string $employee_pagIbigNo
 * @property string $employee_tinNo
 * @property string $employee_exemptionStatus
 * @property string $employee_bankAccountNo
 * @property string $employee_minimumHoursOfWork
 * @property string $employee_salaryPerHour
 * @property integer $employee_daysPerWeek
 * @property string $employee_salaryPerDay
 * @property string $employee_monthlySalary
 *
 * The followings are the available model relations:
 * @property Earnings[] $earnings
 * @property Department $department
 * @property PagIbig[] $pagIbigs
 * @property Payroll[] $payrolls
 * @property Sss[] $ssses
 * @property ThirteenthMonthPay[] $thirteenthMonthPays
 * @property UserAccount[] $userAccounts
 * @property WithholdingTax[] $withholdingTaxes
 */
class employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return employee the static model class
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
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_id,employee_lastName, employee_firstName, employee_middleName, employee_age, employee_homeAddress, employee_city, employee_dateOfBirth, employee_contactNo, employee_civilStatus, employee_gender, employee_dateHired, employee_philhealthNo, employee_sssNo, employee_pagIbigNo, employee_tinNo, employee_exemptionStatus', 'required'),
			array('department_id, employee_age, employee_daysPerWeek', 'numerical', 'integerOnly'=>true),
			array('employee_lastName, employee_firstName, employee_middleName, employee_tinNo, employee_bankAccountNo', 'length', 'max'=>15),
			array('employee_homeAddress, employee_exemptionStatus', 'length', 'max'=>45),
			array('employee_city', 'length', 'max'=>20),
			array('employee_zipCode', 'length', 'max'=>5),
			array('employee_contactNo', 'length', 'max'=>11),
			array('employee_civilStatus', 'length', 'max'=>25),
			array('employee_gender', 'length', 'max'=>6),
			array('employee_philhealthNo, employee_pagIbigNo', 'length', 'max'=>14),
			array('employee_sssNo', 'length', 'max'=>12),
			array('employee_minimumHoursOfWork, employee_salaryPerHour, employee_salaryPerDay, employee_monthlySalary', 'length', 'max'=>10),
			array('employee_dateOfRegularization', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, department_id, employee_lastName, employee_firstName, employee_middleName, employee_age, employee_homeAddress, employee_city, employee_zipCode, employee_dateOfBirth, employee_contactNo, employee_civilStatus, employee_gender, employee_dateHired, employee_dateOfRegularization, employee_philhealthNo, employee_sssNo, employee_pagIbigNo, employee_tinNo, employee_exemptionStatus, employee_bankAccountNo, employee_minimumHoursOfWork, employee_salaryPerHour, employee_daysPerWeek, employee_salaryPerDay, employee_monthlySalary', 'safe', 'on'=>'search'),
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
			
			'department' => array(self::BELONGS_TO, 'department', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'department_id' => 'Department',
			'employee_lastName' => 'Last Name',
			'employee_firstName' => 'First Name',
			'employee_middleName' => 'Middle Name',
			'employee_age' => 'Age',
			'employee_homeAddress' => 'Home Address',
			'employee_city' => 'City',
			'employee_zipCode' => 'Zip Code',
			'employee_dateOfBirth' => 'Date Of Birth',
			'employee_contactNo' => 'Contact No',
			'employee_civilStatus' => 'Civil Status',
			'employee_gender' => 'Gender',
			'employee_dateHired' => 'Date Hired',
			'employee_dateOfRegularization' => 'Date Of Regularization',
			'employee_philhealthNo' => 'Philhealth No',
			'employee_sssNo' => 'SSS No',
			'employee_pagIbigNo' => 'Pagibig No',
			'employee_tinNo' => 'Tin No',
			'employee_exemptionStatus' => 'Exemption Status',
			'employee_bankAccountNo' => 'Bank Account No',
			'employee_minimumHoursOfWork' => 'Minimum Hours Of Work',
			'employee_salaryPerHour' => 'Salary Per Hour',
			'employee_daysPerWeek' => 'Days Per Week',
			'employee_salaryPerDay' => 'Salary Per Day',
			'employee_monthlySalary' => 'Monthly Salary',
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
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('employee_lastName',$this->employee_lastName,true);
		$criteria->compare('employee_firstName',$this->employee_firstName,true);
		$criteria->compare('employee_middleName',$this->employee_middleName,true);
		$criteria->compare('employee_age',$this->employee_age);
		$criteria->compare('employee_homeAddress',$this->employee_homeAddress,true);
		$criteria->compare('employee_city',$this->employee_city,true);
		$criteria->compare('employee_zipCode',$this->employee_zipCode,true);
		$criteria->compare('employee_dateOfBirth',$this->employee_dateOfBirth,true);
		$criteria->compare('employee_contactNo',$this->employee_contactNo,true);
		$criteria->compare('employee_civilStatus',$this->employee_civilStatus,true);
		$criteria->compare('employee_gender',$this->employee_gender,true);
		$criteria->compare('employee_dateHired',$this->employee_dateHired,true);
		$criteria->compare('employee_dateOfRegularization',$this->employee_dateOfRegularization,true);
		$criteria->compare('employee_philhealthNo',$this->employee_philhealthNo,true);
		$criteria->compare('employee_sssNo',$this->employee_sssNo,true);
		$criteria->compare('employee_pagIbigNo',$this->employee_pagIbigNo,true);
		$criteria->compare('employee_tinNo',$this->employee_tinNo,true);
		$criteria->compare('employee_exemptionStatus',$this->employee_exemptionStatus,true);
		$criteria->compare('employee_bankAccountNo',$this->employee_bankAccountNo,true);
		$criteria->compare('employee_minimumHoursOfWork',$this->employee_minimumHoursOfWork,true);
		$criteria->compare('employee_salaryPerHour',$this->employee_salaryPerHour,true);
		$criteria->compare('employee_daysPerWeek',$this->employee_daysPerWeek);
		$criteria->compare('employee_salaryPerDay',$this->employee_salaryPerDay,true);
		$criteria->compare('employee_monthlySalary',$this->employee_monthlySalary,true);
	
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));	
	}
	
	public function getDepartmentName()
	{	
	return $this->department['DepartmentName']; 
	}
	
	public function getFullName(){
		return $this->employee_lastName.', '.$this->employee_firstName; 
	}
	public function getSSSNo(){
		return $this->employee_sssNo;
	}
	
	public function getpagIbigNo(){
		return $this->employee_pagIbigNo;
	}
}