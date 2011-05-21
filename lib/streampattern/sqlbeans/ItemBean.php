<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace streampattern\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
use streampattern\sqlbeans\AuthorBean;
/**
 * Description of ItemBean
 *
 * @author johannes
 */
class ItemBean extends SQLBean {

    protected static $tableNoPrefix = 'items';
    protected static $tableAlias = 'items';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'published', 'title', 'body', 'visible');
    protected static $beanMap = array(
        'author' => array(
            'joinType' => 'LEFT',
            'joinBean' => 'streampattern\sqlbeans\AuthorBean',
            'foreignKey' => 'author_id')
    );

    protected function get_author() {
        $author = $this->getMapped('author');
        return $author !== false ? $author : false;
    }

}