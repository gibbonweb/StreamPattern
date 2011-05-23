<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * All rights reserved.
 */
namespace streampattern\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
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
    protected static $fields = array('id', 'name', 'style');
}

?>
