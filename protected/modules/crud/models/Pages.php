<?php

/**
 * This is the model class for table "pages_item".
 *
 * The followings are the available columns in table 'pages_item':
 * @property integer $id
 * @property string $label
 * @property string $text
 * @property string $alias
 * @property integer $mode
 * @property string $layout
 * @property string $aliasfull
 * @property string $url
 */
class Pages extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pages the static model class
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
		return 'pages_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mode', 'numerical', 'integerOnly'=>true),
			array('label, text, alias, layout, aliasfull, url', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, label, text, alias, mode, layout, aliasfull, url', 'safe', 'on'=>'search'),
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
			'label' => 'Label',
			'text' => 'Text',
			'alias' => 'Alias',
			'mode' => 'Mode',
			'layout' => 'Layout',
			'aliasfull' => 'Aliasfull',
			'url' => 'Url',
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
		$criteria->compare('label',$this->label,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('mode',$this->mode);
		$criteria->compare('layout',$this->layout,true);
		$criteria->compare('aliasfull',$this->aliasfull,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}