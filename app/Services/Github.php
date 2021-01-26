<?php

namespace App\Services;

class Github {

  private $programmingLang;

  public function setProgrammingLanguage($programmingLang) {
    $this->programmingLang = $programmingLang;
    return $this;
  }

  public static function search($date, $order='desc', $per_page=10){
    $result = null; // github response
    return $result;
  }

}