<?php
// source code generated by http://restunited.com
// for any feedback/issue, please send to feedback{at}restunited.com

// load models defined for endpoints
foreach (glob(dirname(__FILE__)."/lib/models/*.php") as $filename)
{
      require_once $filename;
}

// load classes for accessing the endpoints
foreach (glob(dirname(__FILE__)."/lib/*.php") as $filename)
{
      require_once $filename;
}
