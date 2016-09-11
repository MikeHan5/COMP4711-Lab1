<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student{
    
    // Student contructor
    function __construct() {
        $this -> surname = '';
        $this -> first_name = '';
        $this -> emails = array();
        $this -> grades = array();
    }
    
    // function to add email to student
    function add_email($which, $address){
        $this -> emails[$which] = address;
    }
    
    // function to add grade to student
    function add_grade($grade){
        $this -> grade[] = $grade;
    }
    
    // function to calculate the average grade of a student
    function average(){
        $total = 0;
        foreach ($this -> grades as $value){
            $total += $value;
            return $total / count($this -> grades);
        }
    }
    
    function toString(){
        $result = $this -> first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this -> emails as $which => $what){
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        
        return '<pre>' . $result . '</pre>';
    }
}

