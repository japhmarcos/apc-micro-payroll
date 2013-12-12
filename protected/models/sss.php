<?php

/**
 * This is the model class for table "sss".
 *
 * The followings are the available columns in table 'sss':
 * @property integer $id
 * @property integer $employee_id
 * @property string $monthly_salary
 * @property string $sss_no
 * @property string $sss_date
 * @property string $sss_periodMonth
 * @property string $sss_periodOfDeduction
 * @property string $sss_periodYear
 * @property string $sss_loanMonthlyDeduction
 * @property string $sss_salarybracket
 * @property string $sss_totalMonthlyContribution
 * @property string $sss_totalDeduction
 */
class sss extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sss';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, monthly_salary', 'required'),
			array('employee_id', 'numerical', 'integerOnly'=>true),
			array('sss_totalDeduction','calculateMargin'),
			array('monthly_salary, sss_loanMonthlyDeduction, sss_totalMonthlyContribution, sss_totalDeduction', 'length', 'max'=>10),
			array('sss_no', 'length', 'max'=>12),
			array('sss_periodMonth', 'length', 'max'=>25),
			array('sss_periodOfDeduction', 'length', 'max'=>15),
			array('sss_periodYear', 'length', 'max'=>4),
			array('sss_salarybracket', 'length', 'max'=>50),
			array('sss_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, monthly_salary, sss_no, sss_date, sss_periodMonth, sss_periodOfDeduction, sss_periodYear, sss_loanMonthlyDeduction, sss_salarybracket, sss_totalMonthlyContribution, sss_totalDeduction', 'safe', 'on'=>'search'),
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
		'earnings' => array(self::BELONGS_TO, 'earnings', 'earnings_id'),
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
			'monthly_salary' => 'Monthly Salary',
			'sss_no' => 'SSS ID No.',
			'sss_date' => 'Date',
			'sss_periodMonth' => 'Month',
			'sss_periodOfDeduction' => 'Period of Deduction',
			'sss_periodYear' => 'Year',
			'sss_loanMonthlyDeduction' => 'Loan Monthly Deduction',
			'sss_salarybracket' => 'SSS Salary Bracket',
			'sss_totalMonthlyContribution' => 'Total Monthly Contribution',
			'sss_totalDeduction' => 'Total Deduction',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('monthly_salary',$this->monthly_salary,true);
		$criteria->compare('sss_no',$this->sss_no,true);
		$criteria->compare('sss_date',$this->sss_date,true);
		$criteria->compare('sss_periodMonth',$this->sss_periodMonth,true);
		$criteria->compare('sss_periodOfDeduction',$this->sss_periodOfDeduction,true);
		$criteria->compare('sss_periodYear',$this->sss_periodYear,true);
		$criteria->compare('sss_loanMonthlyDeduction',$this->sss_loanMonthlyDeduction,true);
		$criteria->compare('sss_salarybracket',$this->sss_salarybracket,true);
		$criteria->compare('sss_totalMonthlyContribution',$this->sss_totalMonthlyContribution,true);
		$criteria->compare('sss_totalDeduction',$this->sss_totalDeduction,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return sss the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getEmployeeFullName()
	{	
	return $this->employee['FullName']; 
	}
	
	public function getSSSInfo()
	{	
	return $this->sss_date.', '.$this->sss_periodOfDeduction.', '.$this->sss_totalDeduction; 
	}
	
		public function calculateMargin( $attribute, $params )
    {
                $this->sss_totalDeduction=0;
				
		$this->sss_totalDeduction=($this->sss_totalMonthlyContribution) + (($this->sss_loanMonthlyDeduction));
			
    }
}
