<?hh

// File2.php

require_once "opaquetypealiasing.php";

function try_modify_secret_id(SecretID $sid): SecretID {
  //gives an error, because it’s an operation on int
  //return $sid + time() + 2000;
  return $sid;
}

function main_ot2(): void {
  //gives an error, because it’s an int not a SecretID
  //try_modify_secret_id(44596);
}

main_ot2();
