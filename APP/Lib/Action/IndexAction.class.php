<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->display();
    }

    public function saveid(){
    	$id = $_POST['id'];
    	session('id',$id);
		echo json_encode(array('no'=>1));	
    }

    public function navigator(){
    	if(session('id')!=null){
    		$cid=session('id');
			$picture = M('picture')->where("cid=$cid")->select();
			$url='content.html?cid='.$cid;
			$this->url=$url;
    	}
        $cate  = M('cate')->order('id ASC')->limit(8)->select();
        $cateq = M('cate')->order('id DESC')->limit(2)->select();
        $qianyan=$cateq[0];
        $jishuyu=$cateq[1];
        $this->cate=$cate;
        $this->qianyan=$qianyan;
        $this->jishuyu=$jishuyu;
		$this->cate=$cate;
    	$this->display();
    }

    public function content($cid){
    	$cate = M('cate')->find($cid);
    	$picture = M('picture
    		')->where("cid=$cid")->order('id ASC')->select();
    	$this->cate=$cate;
    	$this->picture=$picture;
    	$this->display();
    }

}