<?php


namespace Admin\Controller;
header("content-type:text/html;charset=utf-8");

use Think\Controller;

class BrandController extends Controller
{
    public function lst()
    {
        $model = D('brand');
        $brandData = $model->select();
        $this->assign(array(
            'brandData' => $brandData,
        ));
        $this->display();
    }

    public function add()
    {
        if (IS_POST) {
            $model = D('brand');
            if ($model->create(I('post.'), 1)) {
                if ($model->add()) {
                    $this->success('操作成功！', U('lst'));//当前控制器的lst方法，默认一秒
                    exit;
                }
            }
            $error = $model->getError();
            $this->error($error);
        }
        $this->display();
    }
}