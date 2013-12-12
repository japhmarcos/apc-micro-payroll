<?php

/**
 * This is the model class for table "sss_salarybracket".
 *
 * The followings are the available columns in table 'sss_salarybracket':
 * @property integer $id
 * @property string $range_of_compensation
 * @property string $employee_contribution
 * @property string $employer_contribution
 * @property string $total_contribution
 */
class sss_salarybracket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return sss_salarybracket the static model class
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
		return 'sss_salarybracket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('range_of_compensation,employee_contribution,employer_contribution', 'required'),
			array('total_contribution','calculateMargin'),
			array('range_of_compensation', 'length', 'max'=>25),
			array('employee_contribution, employer_contribution, total_contribution', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, range_of_compensation, employee_contribution, employer_contribution, total_contribution', 'safe', 'on'=>'search'),
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
			'range_of_compensation' => 'Range Of Compensation',
			'employee_contribution' => 'Employee Contribution',
			'employer_contribution' => 'Employer Contribution',
			'total_contribution' => 'Total Contribution',
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
		$criteria->compare('range_of_compensation',$this->range_of_compensation,true);
		$criteria->compare('employee_contribution',$this->employee_contribution,true);
		$criteria->compare('employer_contribution',$this->employer_contribution,true);
		$criteria->compare('total_contribution',$this->total_contribution,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function calculateMargin( $attribute, $params )
    {
                $this->total_contribution=0;
            	$this->total_contribution= 
				($this->employee_contribution + $this->employer_contribution);
				return 'total_contribution';
    }
}