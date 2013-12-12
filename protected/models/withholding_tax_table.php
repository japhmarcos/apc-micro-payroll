<?php

/**
 * This is the model class for table "withholding_tax_table".
 *
 * The followings are the available columns in table 'withholding_tax_table':
 * @property integer $id
 * @property string $exemption_status
 * @property string $exemption_value
 * @property string $salary_base
 * @property string $percentage_excess
 * @property string $base_tax
 */
class withholding_tax_table extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return withholding_tax_table the static model class
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
		return 'withholding_tax_table';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, exemption_status, exemption_value, salary_base, percentage_excess, base_tax', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('exemption_status', 'length', 'max'=>45),
			array('exemption_value, salary_base, percentage_excess, base_tax', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, exemption_status, exemption_value, salary_base, percentage_excess, base_tax', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'exemption_status' => 'Exemption Status',
			'exemption_value' => 'Exemption Value',
			'salary_base' => 'Salary Base',
			'percentage_excess' => 'Percentage Excess',
			'base_tax' => 'Base Tax',
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
		$criteria->compare('exemption_status',$this->exemption_status,true);
		$criteria->compare('exemption_value',$this->exemption_value,true);
		$criteria->compare('salary_base',$this->salary_base,true);
		$criteria->compare('percentage_excess',$this->percentage_excess,true);
		$criteria->compare('base_tax',$this->base_tax,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}