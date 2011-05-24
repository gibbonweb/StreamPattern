<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * All rights reserved.
 */
namespace streampattern\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
use hydrogen\database\Query;
/**
 * Description of TypeBean
 *
 * @author johannes
 */
class TypeBean extends SQLBean {
    protected static $tableNoPrefix = 'types';
    protected static $tableAlias = 'types';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'name', 'style_id');
    protected static $beanMap = array(
        'author' => array(
            'joinType' => 'LEFT',
            'joinBean' => 'streampattern\sqlbeans\StyleBean',
            'foreignKey' => 'style_id')
    );
    
    
    /**
     * Returns the style of this item.
     * @return type streampattern\sqlbeans\StyleBean
     */
    protected function get_style() {
        $style = $this->getMapped('style');
        if (false !== $style)
            return $style;
        $q = new Query("select");
        $q->where("id = ?", $this->style_id);
        $style = StyleBean::select($q);
        return $style !== false ? $style : false;
    }
}

?>
