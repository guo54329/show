<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$cate = M('cate')->order('id ASC')->select();
    	$this->cate=$cate;
		$this->display();
    }

    public function saveid(){
    	$id = $_POST['id'];
    	session('id',$id);
		echo json_encode(array('no'=>1));	
    }
    public function navigator(){
    	$cate = M('cate')->order('id ASC')->select();
    	if(session('id')!=null){
    		$cid=session('id');
			// $pyjxarr=M('cate')->field('pyjx')->find($cid);
			// $pyjx=$pyjxarr['pyjx'];
			$picture = M('picture')->where("cid=$cid")->select();
			$url='content.html?cid='.$cid;
			$this->url=$url;
    	}
		$this->cate=$cate;
    	$this->display();
    }

    public function content($cid){
    	$cate = M('cate')->field('id,num,title,pyjx')->find($cid);
    	$picture = M('picture')->where("cid=$cid")->order('id ASC')->select();
    	$this->cate=$cate;
    	$this->picture=$picture;
    	$this->display();
    }

}