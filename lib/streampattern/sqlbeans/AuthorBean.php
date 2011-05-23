<?php
/*
 * Copyright (c) 2011, Johannes Becker
 * All rights reserved.
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
