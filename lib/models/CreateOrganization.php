<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace TimepadApi\models;

use \ArrayAccess;

class CreateOrganization implements ArrayAccess {
    static $swaggerTypes = array(
        'name' => 'string',
        'subdomain' => 'string',
        'phone' => 'string'
    );

    static $attributeMap = array(
        'name' => 'name',
        'subdomain' => 'subdomain',
        'phone' => 'phone'
    );

    
    /**
    * Название организации
    *
    * @var string
    */
    public $name;
    /**
    * URL-идентификатор организации в Таймпаде (***.timepad.ru)
    *
    * @var string
    */
    public $subdomain;
    /**
    * Телефон организатора
    *
    * @var string
    */
    public $phone;

    public function __construct(array $data = null) {
    
        if(isset($data["name"])) {
            $this->name = $data["name"];
        }
    
    
        if(isset($data["subdomain"])) {
            $this->subdomain = $data["subdomain"];
        }
    
    
        if(isset($data["phone"])) {
            $this->phone = $data["phone"];
        }
    
    }

    public function offsetExists($offset) {
        return isset($this->$offset);
    }

    public function offsetGet($offset) {
        return $this->$offset;
    }

    public function offsetSet($offset, $value) {
        $this->$offset = $value;
    }

    public function offsetUnset($offset) {
        unset($this->$offset);
    }
}
