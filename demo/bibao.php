<?php

// 定义一个闭包，并把它赋给变量 $f
$f = function () {
    return 7;
};

// 使用闭包也很简单s
echo $f(); //这样就调用了闭包，输出 7

// 当然更多的时候是把闭包作为参数(回调函数)传递给函数
function testClosure (Closure $callback) {
    return $callback();
}
 function bind(Closure $closure, $newThis, $newScope = 'static') { }

// $f 作为参数传递给函数 testClosure，如果是普遍函数是没有办法作为testClosure的参数的
echo testClosure($f);

// 也可以直接将定义的闭包作为参数传递，而不用提前赋给变量
testClosure (function () {
    echo 7;
});

// 闭包不止可以做函数的参数，也可以作为函数的返回值
function getClosure () {
    return function () { return 7; };
}
$c = getClosure(); // 函数返回的闭包就复制给 $c 了
echo $c(); // 调用闭包，返回 7
