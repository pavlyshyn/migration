<?php

/*
 * This file is part of the pavlyshyn/migration package
 * 
 * @author Roman Pavlyshyn <roman@pavlyshyn.com>
 */

namespace Pavlyshyn;

class Migration {
    
    protected $adapter = null;
    protected $directory = null;


    public function __construct(Pavlyshyn\Orm $adapter, $directory = null) {
        $$this->adapter = $adapter;
        $$this->directory = $directory;
    }

    public function up() {
        
    }

    public function down() {
        
    }

}
