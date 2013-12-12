<?php

/**
 * This is the model class for table "thirteenth_month_pay".
 *
 * The followings are the available columns in table 'thirteenth_month_pay':
 * @property integer $id
 * @property string $thirteenthMonthPay_date
 * @property string $thirteenthMonthPay_dateOfRegularization
 * @property string $thirteenthMonthPay_totalBonus
 * @property integer $employee_id
 *
 * The followings are the available model relations:
 * @property Employee $employee
 */
class thirteenthmonthpay extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'thirteenth_month_pay';
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
			array('employee_id, thirteenthMonthPay_dateOfRegularization', 'numerical', 'integerOnly'=>true),
			array('thirteenthMonthPay_totalBonus', 'length', 'max'=>10),
			array('thirteenthMonthPay_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, thirteenthMonthPay_date, thirteenthMonthPay_dateOfRegularization, thirteenthMonthPay_totalBonus, employee_id', 'safe', 'on'=>'search'),
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
			'thirteenthMonthPay_date' => 'Date',
			'thirteenthMonthPay_dateOfRegularization' => 'Number of Months Worked',
			'thirteenthMonthPay_totalBonus' => 'Total Bonus',
			'employee_id' => 'Employee',
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
		$criteria->compare('thirteenthMonthPay_date',$this->thirteenthMonthPay_date,true);
		$criteria->compare('thirteenthMonthPay_dateOfRegularization',$this->thirteenthMonthPay_dateOfRegularization,true);
		$criteria->compare('thirteenthMonthPay_totalBonus',$this->thirteenthMonthPay_totalBonus,true);
		$criteria->compare('employee_id',$this->employee_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return thirteenthmonthpay the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function calculateBonus($attribute, $params){
					$this->thirteenthMonthPay_totalBonus=0;
				$this->thirteenthMonthPay_totalBonus = ($this->employee->employee_monthlySalary * $this->thirteenthMonthPay_dateOfRegularization)/12;
					}
}
