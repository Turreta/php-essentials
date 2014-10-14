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

class MyArrayIterator implements Iterator 
{
    private $internal_array = [];
    private $pointer = 0;
    
    public function __construct(Array $array) {
        $this->internal_array = $array;
    }
    
    // Get the element indexed by $pointer
    public function current() {
        return $this->internal_array[$this->pointer];
    }

    // Get the current index
    public function key() {
        return $this->pointer;
    }

    // Move index to next available item
    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        // n/a
    }

    /* This is like the loop condition in your for(;;) statement.
     * Return false to terminate foreach, return true to continue
     * the loop
     */
    public function valid() {
        return $this->pointer < count($this->internal_array);
    }

}

$names = ['Mark', 'John', 'Peter'];

$my_iterator = new MyArrayIterator($names);
foreach($names as $each_name) 
{
    echo "$each_name\n";
}

echo "\n\n";

foreach($names as $key=>$value) 
{
    echo "$key - $value\n";
}