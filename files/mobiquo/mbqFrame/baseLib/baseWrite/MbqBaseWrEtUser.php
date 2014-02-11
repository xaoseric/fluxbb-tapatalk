<?php

defined('MBQ_IN_IT') or exit;

/**
 * user write class
 * 
 * @since  2012-9-28
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseWrEtUser extends MbqBaseWr {
    
    public function __construct() {
    }
    
    /**
     * m_ban_user
     */
    protected function mBanUser() {
        MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_NEED_ACHIEVE_IN_INHERITED_CLASSE);
    }
    
    /**
     * register user
     */
    protected function registerUser() {
        MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_NEED_ACHIEVE_IN_INHERITED_CLASSE);
    }
    
    /**
     * update password
     */
    protected function updatePassword() {
        MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_NEED_ACHIEVE_IN_INHERITED_CLASSE);
    }
    
    /**
     * update email
     */
    protected function updateEmail() {
        MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_NEED_ACHIEVE_IN_INHERITED_CLASSE);
    }
  
}

?>