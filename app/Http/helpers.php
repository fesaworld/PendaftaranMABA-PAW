<?php
 
  function checkPermission($permissions){
    $userAccess = getMyPermission(auth()->user()->hak_akses);
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }
 
 
  function getMyPermission($akses)
  {
    if($akses == 'administrator')
    {return 'admin';}
    else if($akses == 'pendaftar')
    {return 'pendaftar';}
  }
 
?>