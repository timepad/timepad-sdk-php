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
      'name' => 'string',
      'description_short' => 'string',
      'description_html' => 'string',
      'starts_at' => 'string',
      'ends_at' => 'string',
      'categories' => 'array[CategoryInclude]',
      'location' => 'LocationInclude',
      'organization' => 'OrganizationInclude',
      'poster_image_url' => 'string',
      'questions' => 'array[CategoryInclude]',
      'ticket_types' => 'array[TicketTypeInclude]',
      'properties' => 'array[string]',
      'custom' => 'object'
  );

  static $attributeMap = array(
      'name' => 'name',
      'description_short' => 'description_short',
      'description_html' => 'description_html',
      'starts_at' => 'starts_at',
      'ends_at' => 'ends_at',
      'categories' => 'categories',
      'location' => 'location',
      'organization' => 'organization',
      'poster_image_url' => 'poster_image_url',
      'questions' => 'questions',
      'ticket_types' => 'ticket_types',
      'properties' => 'properties',
      'custom' => 'custom'
  );

  
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
  * Организация, проводящая событие
  */
  public $organization; /* OrganizationInclude */
  /**
  * URL картинки события
  */
  public $poster_image_url; /* string */
  /**
  * Список вопросов в анкете регистрации
  */
  public $questions; /* array[CategoryInclude] */
  /**
  * Список видов билетов
  */
  public $ticket_types; /* array[TicketTypeInclude] */
  /**
  * Список настроек события (например, мультианкета)
  */
  public $properties; /* array[string] */
  /**
  * Объект с дополнительными полями, специфичными для данной организации
  */
  public $custom; /* object */

  public function __construct(array $data = null) {
    $this->name = $data["name"];
    $this->description_short = $data["description_short"];
    $this->description_html = $data["description_html"];
    $this->starts_at = $data["starts_at"];
    $this->ends_at = $data["ends_at"];
    $this->categories = $data["categories"];
    $this->location = $data["location"];
    $this->organization = $data["organization"];
    $this->poster_image_url = $data["poster_image_url"];
    $this->questions = $data["questions"];
    $this->ticket_types = $data["ticket_types"];
    $this->properties = $data["properties"];
    $this->custom = $data["custom"];
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
