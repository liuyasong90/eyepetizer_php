<?php


class Demo{

    public function __call($method, $args)
    {
        //遍历参数
        $var='';
        foreach ($args as $value){
            $var.=$value;

        }
        return '方法是'.$method.'('.$var.')'.'不存在';
        // TODO: Implement __call() method.
    }

    public static function __callStatic($method, $args)
    {

        $var='';
        foreach ($args as $value){
            $var.=$value.',';
        }


        return '静态方法是'.$method.'('.$var.')'.'不存在';
        // TODO: Implement __callStatic() method.
    }
}

echo (new Demo)->hello('php',python);
echo '<hr>';

echo Demo::hello(10,20,30);