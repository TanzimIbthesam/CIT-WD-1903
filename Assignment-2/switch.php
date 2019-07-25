<?php 
$val=80;
function switch_test($val)
{
  $result = '';
  switch(TRUE)
  {
    case ($val>=80 && $val <= 100) :   $result = ' You got A+';# .$val; # 2 3 4
    break;
    case ($val>=2 && $val <= 5)  :  $result = ' B: ($val>=2 && $val <= 5)'; # 5
    break;
    case ($val>=2 && $val <= 1)  :  $result = ' C: ($val>=2 && $val <= 1)';
    break;
    case ($val>=3 && $val <= 6)  :  $result = ' D: ($val>=3 && $val <= 6)'; # 6
    break;
    default: $result = 'default: ';# .$val;
  }

  return $result;
}
echo switch_test($val);




?>