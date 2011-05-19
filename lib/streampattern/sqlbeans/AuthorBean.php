<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace streampattern\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
/**
 * Description of AuthorBean
 *
 * @author johannes
 */
class AuthorBean extends SQLBean {
    protected static $tableNoPrefix = 'authors';
    protected static $tableAlias = 'authors';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'email', 'name', 'about');
}

?>
