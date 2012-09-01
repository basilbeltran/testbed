
/**
  * Debug Helper
  *
  * Outputs the given variable(s) with formatting and location
  *
  * @access        public
  * @param        mixed    variables to be output
  */
function dump(){
    list($callee) = debug_backtrace();
    $arguments = func_get_args();
    $total_arguments = count($arguments);

    echo '<fieldset style="background: #fefefe !important; border:2px red solid; padding:5px">';
    echo '<legend style="background:lightgrey; padding:5px;">'.$callee['file'].' @ line: '.$callee['line'].'</legend><pre>';
    $i = 0;
    foreach ($arguments as $argument)
    {
        echo '<br/><strong>Debug #'.(++$i).' of '.$total_arguments.'</strong>: ';
        //var_dump($argument);
            if (is_array($argument)) {
                print_r($argument);
            }
            else{
                var_dump($argument);
            }
    }

    echo "</pre>";
    echo "</fieldset>";
}//dump



function dump2($var, $return = FALSE)
{
$output = "<pre class=\"dump2\">" . _dump2($var, 0) . "</pre>\n";

if (!$return)
{
    $trace = debug_backtrace();
    $i = isset($trace[1]['class']) && $trace[1]['class'] === __CLASS__ ? 1 : 0;
    if (isset($trace[$i]['file'], $trace[$i]['line']))
    {
        $output = substr_replace($output, ' <small>' . htmlspecialchars("in file {$trace[$i]['file']} on line {$trace[$i]['line']}", ENT_NOQUOTES) . '</small>', -8, 0);
    }
}

if ($return)
{
    return $output;
}
else
{
    echo $output;
    return $var;
}
}//dump2

     

     
function _dump2(&$var, $level)
{
    $maxDepth = 4;
    $maxLen = 250;

    $tableUtf = $tableBin = array();
    $reBinary = '#[^\x09\x0A\x0D\x20-\x7E\xA0-\x{10FFFF}]#u';
    if ($tableUtf === NULL)
    {
        foreach (range("\x00", "\xFF") as $ch)
        {
            if (ord($ch) < 32 && strpos("\r\n\t", $ch) === FALSE)
            $tableUtf[$ch] = $tableBin[$ch] = '\\x' . str_pad(dechex(ord($ch)), 2, '0', STR_PAD_LEFT);
            elseif (ord($ch) < 127)
            $tableUtf[$ch] = $tableBin[$ch] = $ch;
            else
            {
            $tableUtf[$ch] = $ch;
            $tableBin[$ch] = '\\x' . dechex(ord($ch));
            }
        }
        $tableBin["\\"] = '\\\\';
        $tableBin["\r"] = '\\r';
        $tableBin["\n"] = '\\n';
        $tableBin["\t"] = '\\t';
        $tableUtf['\\x'] = $tableBin['\\x'] = '\\\\x';
    }

    if (is_bool($var))
    {
        return ($var ? 'TRUE' : 'FALSE') . "\n";
    }
    elseif ($var === NULL)
    {
        return "NULL\n";
    }
    elseif (is_int($var))
    {
        return "$var\n";
    }
    elseif (is_float($var))
    {
        $var = (string) $var;
        if (strpos($var, '.') === FALSE)
            $var .= '.0';
        return "$var\n";
    } elseif (is_string($var))
    {
        if ($maxLen && strlen($var) > $maxLen)
        {
            $s = htmlSpecialChars(substr($var, 0, $maxLen), ENT_NOQUOTES) . ' ... ';
        }
        else
        {
            $s = htmlSpecialChars($var, ENT_NOQUOTES);
        }
        $s = strtr($s, preg_match($reBinary, $s) || preg_last_error() ? $tableBin : $tableUtf);
        $len = strlen($var);
        return "\"$s\"" . ($len > 1 ? " ($len)" : "") . "\n";
    }
    elseif (is_array($var))
    {
        $s = "<span>array</span>(" . count($var) . ") ";
        $space = str_repeat($space1 = '   ', $level);
        $brackets = range(0, count($var) - 1) === array_keys($var) ? "[]" : "{}";

        static $marker;
        if ($marker === NULL)
            $marker = uniqid("\x00", TRUE);
        if (empty($var))
        {

        }
        elseif (isset($var[$marker]))
        {
            $brackets = $var[$marker];
            $s .= "$brackets[0] *RECURSION* $brackets[1]";
        }
        elseif ($level < $maxDepth || !$maxDepth)
        {
            $s .= "<code>$brackets[0]\n";
            $var[$marker] = $brackets;
            foreach ($var as $k => &$v)
            {
            if ($k === $marker)
                continue;
            $k = is_int($k) ? $k : '"' . strtr($k, preg_match($reBinary, $k) || preg_last_error() ? $tableBin : $tableUtf) . '"';
            $s .= "$space$space1$k => " . _dump($v, $level + 1);
            }
            unset($var[$marker]);
            $s .= "$space$brackets[1]</code>";
        } else
        {
            $s .= "$brackets[0] ... $brackets[1]";
        }
        return $s . "\n";
    }
    elseif (is_object($var))
    {
        $arr = (array) $var;
        $s = "<span>" . get_class($var) . "</span>(" . count($arr) . ") ";
        $space = str_repeat($space1 = '   ', $level);

        static $list = array();
        if (empty($arr))
        {

        }
        elseif (in_array($var, $list, TRUE))
        {
            $s .= "{ *RECURSION* }";
        }
        elseif ($level < $maxDepth || !$maxDepth)
        {
            $s .= "<code>{\n";
            $list[] = $var;
            foreach ($arr as $k => &$v)
            {
            $m = '';
            if ($k[0] === "\x00")
            {
                $m = $k[1] === '*' ? ' <span>protected</span>' : ' <span>private</span>';
                $k = substr($k, strrpos($k, "\x00") + 1);
            }
            $k = strtr($k, preg_match($reBinary, $k) || preg_last_error() ? $tableBin : $tableUtf);
            $s .= "$space$space1\"$k\"$m => " . _dump($v, $level + 1);
            }
            array_pop($list);
            $s .= "$space}</code>";
        }
        else
        {
            $s .= "{ ... }";
        }
        return $s . "\n";
    }
    elseif (is_resource($var))
    {
        return "<span>" . get_resource_type($var) . " resource</span>\n";
    }
    else
    {
        return "<span>unknown type</span>\n";
    }
}//_dump2


    
    
    
    


/**
* return a comptact backtrace output
*
* @return string
*/
function backtrace_inline () {
$arrBt = debug_backtrace();
//@see http://php.net/manual/fr/function.debug-backtrace.php
$strBts = '';
   if (is_array($arrBt)) {
      unset($arrBt[0]);
      $fn = null;
      foreach ($arrBt as $bt_line) {
       if (is_array($bt_line))
       if (is_array($bt_line['args'])) {
          $args = str_replace( "\n",' ', str_replace( "\r",'', var_export($bt_line['args'], 1) ) );
       }
       $strBts .= ($fn != basename($bt_line['file'])) ? 'in [' .basename($bt_line['file']) .'@' .$bt_line['line'] .']' : '';
       $strBts .= ' for ' .$bt_line['class'] .$bt_line['type'] .$bt_line['function'] .'( ' .$args .' ) ';
       $fn = basename($bt_line['file']);
      }
   }
return $strBts;
}

