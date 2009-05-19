<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author fabrizzio
 */
class Post
{
    private $_id;
    private $_rev;
    
    private $title;

    public function __construct()
    {
        
    }

    public function get_id() {
        return $this->_id;
    }

    public function set_id($_id) {
        $this->_id = $_id;
        return $this;
    }

    public function get_rev() {
        return $this->_rev;
    }

    public function set_rev($_rev) {
        $this->_rev = $_rev;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
}
?>
