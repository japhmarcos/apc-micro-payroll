<?php

/**
 * This is the model class for table "philhealth_salarybracket".
 *
 * The followings are the available columns in table 'philhealth_salarybracket':
 * @property integer $id
 * @property string $salary_range
 * @property string $employee_share
 * @property string $employer_share
 * @property string $total_monthly_premium
 */
class philhealthsalarybracket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return philhealthsalarybracket the static model class
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
		return 'philhealth_salarybracket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('salary_range, employee_share, employer_share', 'required'),
			array('salary_range', 'length', 'max'=>25),
			array('total_monthly_premium','calculateMargin'),
			array('employee_share, employer_share, total_monthly_premium', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, salary_range, employee_share, employer_share, total_monthly_premium', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Salary Bracket Number',
			'salary_range' => 'Salary Range',
			'employee_share' => 'Employee Share',
			'employer_share' => 'Employer Share',
			'total_monthly_premium' => 'Total Monthly Premium',
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
		$criteria->compare('salary_range',$this->salary_range,true);
		$criteria->compare('employee_share',$this->employee_share,true);
		$criteria->compare('employer_share',$this->employer_share,true);
		$criteria->compare('total_monthly_premium',$this->total_monthly_premium,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function calculateMargin( $attribute, $params )
    {
                $this->total_monthly_premium=0;
            	$this->total_monthly_premium= 
				($this->employee_share + $this->employer_share);
				return 'total_monthly_premium';
			
		
			
    }
}