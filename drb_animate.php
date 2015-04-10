<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class drb_animate {

    public $drb = "";
    public $parsed_drb = array();

    public function __construct($drb) {
        $this->drb = $drb;
    }

    public function parse_drb() {
        $this->parsed_drb = str_split($this->drb);
        return $this->parsed_drb;
    }
    
    public function split_drb(){
        $r='';
        foreach ($this->parsed_drb as $value){
            $r.='<span>'.$value.'</span>';
        }
        return $r;
        
    }
    

}
