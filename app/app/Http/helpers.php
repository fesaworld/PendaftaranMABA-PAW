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
 
 
  function getMyPermission($id)
  {
    switch ($id) {
      case 1:
        return 'admin';
        break;
      case 2:
        return 'pendaftar';
        break;
      default:
        return 'user';
        break;
    }
  }
 
?>