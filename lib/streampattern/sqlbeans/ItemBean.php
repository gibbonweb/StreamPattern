<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * All rights reserved.
 */
namespace streampattern\sqlbeans;
use hydrogen\database\Query;
use hydrogen\sqlbeans\SQLBean;
use streampattern\sqlbeans\AuthorBean;
use streampattern\sqlbeans\TypeBean;
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
    protected static $fields = array('id', 'published', 'title', 'body', 'visible', 'parent_id');
    protected static $beanMap = array(
        'author' => array(
            'joinType' => 'LEFT',
            'joinBean' => 'streampattern\sqlbeans\AuthorBean',
            'foreignKey' => 'author_id'),
        'type' => array(
            'joinType' => 'LEFT',
            'joinBean' => 'streampattern\sqlbeans\TypeBean',
            'foreignKey' => 'type_id')
    );
    protected $children = NULL;

    /**
     * Returns the author of this item.
     * @return type streampattern\sqlbeans\AuthorBean
     */
    protected function get_author() {
        $author = $this->getMapped('author');
        return $author !== false ? $author : false;
    }

    /**
     * Returns the type of this item.
     * @return type streampattern\sqlbeans\TypeBean
     */
    protected function get_type() {
        $type = $this->getMapped('type');
        return $type !== false ? $type : false;
    }
    
    /**
     * Returns the parent of this item, or false if the item has no parent.
     * @return type streampattern\sqlbeans\ItemBean
     */
    protected function get_parent() {
        if(!isset(ItemBean::$beanMap['parent'])) {
            ItemBean::$beanMap['parent'] = array(
                'joinType' => 'LEFT',
                'joinBean' => 'streampattern\sqlbeans\ItemBean',
                'foreignKey' => 'parent_id');
        }
        $parent = $this->getMapped('parent');
        return $parent !== false ? $parent : false;
    }
    
    
    /**
     * Returns an array of children for this item.
     * @return type array
     */
    protected function get_children() {
        if(!$this->children) {
            $q = new Query("SELECT");
            $q->where("parent_id = ?",$this->id);
            $this->children = ItemBean::select($q,true);
            return $this->children;
        }
    }

}