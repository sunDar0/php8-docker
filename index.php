<?php
  class A {
    public function __invoke($args)
    {
      var_dump(__FUNCTION__);
      var_dump($args);
      // var_dump($_SERVER);
    }

    

    public function __construct()
    {
      $taskGroup = array();
      $value = 'before';
      // for($i = 0; $i < 100; $i++){
      //   $taskGroup[] = new \Fiber(function() use( &$value ){
      //     $value = 'fiber';
      //     \Fiber::suspend('suspended');
      //     $value = 'after fiber';          
      //   });
      // }

      
      // echo $value.'<br>';
      // $state = $fiber->start();
      // echo $value.'<br>';
      // $fiber->resume();
      // echo $value.'<br>';

      // echo $state.'<br>';
      // $state2 = $fiber->resume();
      // echo $state2.'<br>';
      // echo $value.'<br>';
    }

    public function __call($name, $args)
    {
      echo "$name $args[0] <br>";
    }
    
    

    function __destruct()
    {
      echo 'break <br>';
    }

    function __set($name, $value)
    {
      $this->$name = $value;
    }
    function __get($name)
    {
      return $this->$name;
    }
  }
  function a ()
  {
    $a = new A();
    $a(__METHOD__);
    
    $a->buck('aaaaa');
    $a->user='권선달';
    echo $a->user;
  }  

  a();
  
  echo "asdlkfjsalkfjsdklfjsdflasdflsrj";
  
?>