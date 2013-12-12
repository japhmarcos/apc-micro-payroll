<?php 
class WebUser extends CWebUser
{
	// Store model to not repeat query.
	private $_model;
    
	/**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
	 
    public function checkAccess($operation, $params=array())
    {
        if (empty($this->id)) {
            // Not identified => no rights
            return false;
        }
        $title = $this->getState("title");
        // allow access if the operation request is the current user's role
        return ($operation === $title);
    }
	function getUserId()
	{
    $user = $this->loadUser(Yii::app()->user->id);
    return $user->employee_id;
	}
	protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model=useraccount::model()->findByPk($id);
        }
        return $this->_model;
    }
	
}

