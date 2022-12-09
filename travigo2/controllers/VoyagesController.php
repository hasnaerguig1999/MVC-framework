<?php

class VoyagesController{
    public function getAllVoyages(){
    $voyages = Voyage::getAll();
    return $voyages;
}
}
?>