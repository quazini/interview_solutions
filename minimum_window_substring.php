<?php 

function MinWindowSubstring($strArr) {
 $arr = $strArr;
 
    $str = $arr[0];
    $tgt = $arr[1];
    $strl = strlen($str);
    $tgtl = strlen($tgt);
    $aa = str_split($tgt);
    $tmp = array();

    for ($i = 0; $i <= $strl - $tgtl; $i++) {
        $tmp[$i] = "";
        $add = 0;
        $flag = true;
        while ($flag == true) {
            $len = $tgtl + $add;
            if (($i + $len) > $strl) {
                $flag = false;
            } else {
                $tst = substr($str, $i, $len);
                $chk = array();

                for ($ii = 0; $ii < count($aa); $ii++) {
                    $cnt1 = substr_count($tgt, $aa[$ii]);
                    $cnt2 = substr_count($tst, $aa[$ii]);

                    if ($cnt1 > $cnt2) {
                        $add++;
                        $ii = count($aa);
                    } else {
                        $chk[$ii] = 1;
                    }
                }

                if (array_sum($chk) == count($aa)) {
                    $tmp[$i] = $tst;
                    $flag = false;
                }
            }
        }
    }

    $result = "";
    foreach ($tmp as $v) {
        if ($result == "" || ($v != "" && strlen($v) < strlen($result))) {
            $result = $v;
        }
    }

    return $result;
  // code goes here
  return $strArr;

}
   
// keep this function call here  
echo MinWindowSubstring(fgets(fopen('php://stdin', 'r'))); 

?>