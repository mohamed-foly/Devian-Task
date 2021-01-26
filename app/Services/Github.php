<?php

namespace App\Services;

class Github {

  private $programmingLang;

  public function setProgrammingLanguage($programmingLang) {
    $this->programmingLang = $programmingLang;
    return $this;
  }

  public static function search($date, $order='desc', $per_page=10){
    $client = new \GuzzleHttp\Client();
    $result = $client->request('GET','https://api.github.com/search/repositories', [
      'query'=>[
        'q'=>'created:>'.$date,
        'order'=>$order,
        'per_page'=>$per_page
      ]
    ]);
    $result = json_decode($result->getBody()->getContents());
    return $result;
  }

}