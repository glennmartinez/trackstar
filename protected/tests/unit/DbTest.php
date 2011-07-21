<?php
	
class DbTest extends CTestCase
{
    
    public function testconnection()
    {
        
        $this->assertNotEquals(Null, Yii::app()->db);
        
    }
    
    
}    
    
?>