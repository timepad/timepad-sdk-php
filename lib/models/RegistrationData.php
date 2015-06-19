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

class RegistrationData implements ArrayAccess {
  static $swaggerTypes = array(
      'price_max' => 'float',
      'price_min' => 'float',
      'sale_ends_at' => 'DateTime',
      'tickets_total' => 'int',
      'tickets_limit' => 'int',
      'is_registration_open' => 'bool'
  );

  static $attributeMap = array(
      'price_max' => 'price_max',
      'price_min' => 'price_min',
      'sale_ends_at' => 'sale_ends_at',
      'tickets_total' => 'tickets_total',
      'tickets_limit' => 'tickets_limit',
      'is_registration_open' => 'is_registration_open'
  );

  
  /**
  * Цена самого дорогого билета
  */
  public $price_max; /* float */
  /**
  * Цена самого дешёвого билета
  */
  public $price_min; /* float */
  /**
  * Дата окончания продажи последней категории билета
  */
  public $sale_ends_at; /* DateTime */
  /**
  * Количество забронированных, проданных и бесплатных билетов
  */
  public $tickets_total; /* int */
  /**
  * Максимальное количество доступных билетов, независимо от типа билета
  */
  public $tickets_limit; /* int */
  /**
  * Открыта ли регистрация
  */
  public $is_registration_open; /* bool */

  public function __construct(array $data = null) {
    
    if(isset($data["price_max"])) {
      $this->price_max = $data["price_max"];
    }
    
    
    if(isset($data["price_min"])) {
      $this->price_min = $data["price_min"];
    }
    
    
    if(isset($data["sale_ends_at"])) {
      $this->sale_ends_at = $data["sale_ends_at"];
    }
    
    
    if(isset($data["tickets_total"])) {
      $this->tickets_total = $data["tickets_total"];
    }
    
    
    if(isset($data["tickets_limit"])) {
      $this->tickets_limit = $data["tickets_limit"];
    }
    
    
    if(isset($data["is_registration_open"])) {
      $this->is_registration_open = $data["is_registration_open"];
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
