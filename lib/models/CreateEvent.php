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

class CreateEvent implements ArrayAccess {
  static $swaggerTypes = array(
      'organization' => 'OrganizationInclude',
      'questions' => 'array[QuestionInclude]',
      'properties' => 'array[string]',
      'name' => 'string',
      'description_short' => 'string',
      'description_html' => 'string',
      'starts_at' => 'string',
      'ends_at' => 'string',
      'categories' => 'array[CategoryInclude]',
      'location' => 'LocationInclude',
      'poster_image_url' => 'string',
      'ticket_types' => 'array[TicketTypeInclude]',
      'custom' => 'object'
  );

  static $attributeMap = array(
      'organization' => 'organization',
      'questions' => 'questions',
      'properties' => 'properties',
      'name' => 'name',
      'description_short' => 'description_short',
      'description_html' => 'description_html',
      'starts_at' => 'starts_at',
      'ends_at' => 'ends_at',
      'categories' => 'categories',
      'location' => 'location',
      'poster_image_url' => 'poster_image_url',
      'ticket_types' => 'ticket_types',
      'custom' => 'custom'
  );

  
  /**
  * Организация, проводящая событие
  */
  public $organization; /* OrganizationInclude */
  /**
  * Список вопросов в анкете регистрации
  */
  public $questions; /* array[QuestionInclude] */
  /**
  * Список настроек события (например, мультианкета)
  */
  public $properties; /* array[string] */
  /**
  * Название события
  */
  public $name; /* string */
  /**
  * Краткое описание/подзаголовок события
  */
  public $description_short; /* string */
  /**
  * Полное описание с html-тегами
  */
  public $description_html; /* string */
  /**
  * Дата начала события в формате ISO
  */
  public $starts_at; /* string */
  /**
  * Дата окончания события в формате ISO
  */
  public $ends_at; /* string */
  /**
  * Список категорий, в которые входит событие
  */
  public $categories; /* array[CategoryInclude] */
  /**
  * Место проведения события
  */
  public $location; /* LocationInclude */
  /**
  * URL картинки события
  */
  public $poster_image_url; /* string */
  /**
  * Список видов билетов
  */
  public $ticket_types; /* array[TicketTypeInclude] */
  /**
  * Объект с дополнительными полями, специфичными для данной организации
  */
  public $custom; /* object */

  public function __construct(array $data = null) {
    
    if(isset($data["organization"])) {
      $this->organization = $data["organization"];
    }
    
    
    if(isset($data["questions"])) {
      $this->questions = $data["questions"];
    }
    
    
    if(isset($data["properties"])) {
      $this->properties = $data["properties"];
    }
    
    
    if(isset($data["name"])) {
      $this->name = $data["name"];
    }
    
    
    if(isset($data["description_short"])) {
      $this->description_short = $data["description_short"];
    }
    
    
    if(isset($data["description_html"])) {
      $this->description_html = $data["description_html"];
    }
    
    
    if(isset($data["starts_at"])) {
      $this->starts_at = $data["starts_at"];
    }
    
    
    if(isset($data["ends_at"])) {
      $this->ends_at = $data["ends_at"];
    }
    
    
    if(isset($data["categories"])) {
      $this->categories = $data["categories"];
    }
    
    
    if(isset($data["location"])) {
      $this->location = $data["location"];
    }
    
    
    if(isset($data["poster_image_url"])) {
      $this->poster_image_url = $data["poster_image_url"];
    }
    
    
    if(isset($data["ticket_types"])) {
      $this->ticket_types = $data["ticket_types"];
    }
    
    
    if(isset($data["custom"])) {
      $this->custom = $data["custom"];
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
