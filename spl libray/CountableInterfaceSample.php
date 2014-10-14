<?php

/*
 * Copyright 2014 www.turreta.com.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Description of CountableInterfaceSample
 *
 * @author www.turreta.com
 */
class CountableInterfaceSample implements Countable {
    
    private $names = array();
    
    public function add($name) 
    {
        $this->names[] = $name;
    }
    
    public function get($index) 
    {
        return $this->names[$index];
    }
    
    public function delete($index) 
    {
        unset($this->names[$index]);
    }
    
    public function count($mode = 'COUNT_NORMAL') {
        return count($this->names);
    }  
}

 $list_like_data_structure = new CountableInterfaceSample();
 $list_like_data_structure->add("Peter");
 $list_like_data_structure->add("John");
 $list_like_data_structure->add("Mark");
 echo 'Count is: ' . count($list_like_data_structure) . "\n";
 
 $list_like_data_structure->delete(1);
 echo 'Count is: ' . count($list_like_data_structure) . "\n";
 print_r($list_like_data_structure);