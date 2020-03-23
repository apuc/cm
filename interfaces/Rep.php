<?php


namespace interfaces;


interface Rep
{

    public function getComponent();

    public function getManifest(string $slug):?array;

}