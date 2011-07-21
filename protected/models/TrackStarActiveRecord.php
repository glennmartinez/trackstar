<?php
	abstract class TrackStarACtiveRecord extends CActiveRecord
    {
    protected function beforeValidate()
    {
        
        if($this->isNewRecord)
        {
            
            $this->create_time=$this->update_time=new CDBExpression('NOW()');
            $this->create_user_id=$this->update_user_id=Yii::app()->user->id; 
              } 
        else 
        { 
          //not a new record, so just set the last updated time and last updated user id      
          $this->update_time=new CDbExpression('NOW()'); 
          $this->update_user_id=Yii::app()->user->id; 
        } 
         
        return parent::beforeValidate(); 
        } 
        
        
    }
?>