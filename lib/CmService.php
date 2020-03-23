<?php


namespace lib;


use interfaces\Rep;

class CmService
{

    /**
     * @var Rep
     */
    public $rep;

    /**
     * @var array
     */
    public $info = [];

    public function __construct()
    {
        //Получение конфига и определение репазитория
    }

    public function checkVersion($slug)
    {
        $this->info = $this->rep->getManifest($slug);
        if(isset($this->info['version'])){
            return $this->info['version'];
        }
        return "no version";
    }

}