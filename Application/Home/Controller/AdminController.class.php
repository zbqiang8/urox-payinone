<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends InitController{
    public function _initialize() {
        $uid = $_SESSION['uid'];
        if ($uid!=1 and $uid!=2) {
            $this->error('Permission Denided! Fuck you!','/login',3);exit;
        } else {
            $this->assign('isadmin',1);
        }
    }
}