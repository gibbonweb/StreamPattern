<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * All rights reserved.
 */
namespace streampattern\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
/**
 * Description of StyleBean
 *
 * @author johannes
 */
class StyleBean extends SQLBean {
    protected static $tableNoPrefix = 'styles';
    protected static $tableAlias = 'styles';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'size', 'class');
}

?>
