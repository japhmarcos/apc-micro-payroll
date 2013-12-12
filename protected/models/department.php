<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property integer $id
 * @property string $department_name
 * @property string $department_code
 * @property string $department_address
 * @property string $department_city
 * @property string $department_zipCode
 *
 * The followings are the available model relations:
 * @property Employee[] $employees
 */
class department extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return department the static model class
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
		return 'department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_name, department_address', 'length', 'max'=>45),
			array('department_code, department_zipCode', 'length', 'max'=>5),
			array('department_city', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, department_name, department_code, department_address, department_city, department_zipCode', 'safe', 'on'=>'search'),
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
			'employees' => array(self::HAS_MANY, 'employee', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'department_name' => 'Department Name',
			'department_code' => 'Department Code',
			'department_address' => 'Address',
			'department_city' => 'City',
			'department_zipCode' => 'Zip Code',
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
		$criteria->compare('department_name',$this->department_name,true);
		$criteria->compare('department_code',$this->department_code,true);
		$criteria->compare('department_address',$this->department_address,true);
		$criteria->compare('department_city',$this->department_city,true);
		$criteria->compare('department_zipCode',$this->department_zipCode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getDepartmentName()
	{	
	return $this->department_name; 
	}
}