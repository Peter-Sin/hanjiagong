<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function news(){
      	$this->display('news');
    }

    public function lzrlzy(){
    	// $uid=$_SESSION['id'];
    	// $info=M("systeminfo");
    	// $list=$info->where("uid='$uid'")->select();
    	// $this->assign('list',$list);
    	$this->display('lzrlzy');
    }

    public function lzwgfh(){
    	// $uid=$_SESSION['id'];
    	// $info=M("officialinfo");
    	// $list=$info->select();
    	// $this->assign('list',$list);
    	$this->display('lzwgfh');
    }

    public function systeminfo(){
    	$page=$_POST["page"];
    	$num='6';
    	$total=$page*$num;
		$uid=$_SESSION['id'];
    	$info=M("systeminfo");
    	$list=$info->where("uid='$uid'")->order("id desc")->limit($total,$num)->select();
    	$this->ajaxReturn($list,'json');
    }

    public function officialinfo(){
    	$page=$_POST["page"];
    	$num='6';
    	$total=$page*$num;
		$info=M("officialinfo");
    	$list=$info->order("id desc")->limit($total,$num)->select();
    	$this->ajaxReturn($list,'json');
    }

    public function xtggxq(){
    	$id=$_GET['id'];
    	$info=M("systeminfo");
    	$list=$info->where("id='$id'")->select();
    	$this->assign("list",$list);
    	$this->display("ggxx");
    }

    public function gfggxq(){
    	$id=$_GET['id'];
    	$info=M("officialinfo");
    	$list=$info->where("id='$id'")->select();
    	$this->assign("list",$list);
    	$this->display("ggxx");
    }

    public function timeee(){
        $units = array();
        for($i=0;$i<100000;$i++){
            
                $units[]=date('YmdHis').substr(MD5($i.date("Y-m-d H:i:s")),8,16).getnumcode();
        }
        $values  = array_count_values($units);
        $duplicates = [];
        foreach($values as $k=>$v){
                if($v>1){
                        $duplicates[$k]=$v;
                }
        }
        echo '<pre>';
        dump($duplicates);
        echo '</pre>';
    }

    public function eee(){
        $str = 'test';
        $cm = md5($str);
        $bm = md5($str, true);
         
        $cstr = implode(unpack('H*', $bm));
        $bstr = pack('H*', $cm);
         
         
        echo 'str:'. $str . "<br >\n";
        echo 'cm :' . $cm . "<br >\n";
        echo 'cstr:' . $cstr . "<br >\n";
        echo 'urlencode(bm)  :' . urlencode($bm) . "<br >\n";
        echo 'urlencode(bstr):' . urlencode($bstr) . "<br >\n";
    }

    public function dateee(){
        // echo date('YmdHis')."<br>";
        // echo date('Ymd',strtotime('+10 day'))."<br>";

        // $order="12345678912345678912345678912345";
        // $orders=date('Ymd').substr($order,8,16).getnumcode();
        // echo $orders;
        $ip = $_SERVER["REMOTE_ADDR"];
        echo $ip;
        echo $_SERVER['REMOTE_HOST'];
        echo "123";
        echo C(ENROLL_FEE);
    }
}