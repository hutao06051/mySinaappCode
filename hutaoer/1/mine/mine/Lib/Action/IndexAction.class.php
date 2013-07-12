<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
		// $this->name = 'hutaoer';
		// $Data = M('Data');
		// $this->data = $Data->select();
		// $this->display();
        // require("../../../../templates/isPC.php");
        echo dirname(__FILE__);
        echo $_SERVER['SCRIPT_FILENAME'];
        require($_SERVER['DOCUMENT_ROOT'].'/hutaoer/1/mine/templates/priceTrend.php');

    }

    public function test() {
    	header("Content-Type:text/html; charset=utf-8");
    	echo "this is test!";
    }
}