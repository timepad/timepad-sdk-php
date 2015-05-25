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

class Event implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'int',
      'created_at' => 'date',
      'starts_at' => 'date',
      'ends_at' => 'date',
      'name' => 'string',
      'description_short' => 'string',
      'description_html' => 'string',
      'url' => 'string',
      'poster_image' => 'Image',
      'ad_partner_percent' => 'int',
      'locale' => 'string',
      'location' => 'Location',
      'organization' => 'Organization',
      'categories' => 'array[Category]',
      'ticket_types' => 'TicketType',
      'questions' => 'array[Question]',
      'widgets' => 'array[Widget]',
      'properties' => 'array[string]',
      'moderation_status' => 'string',
      'access_status' => 'string',
      'registration_data' => 'RegistrationData'
  );

  static $attributeMap = array(
      'id' => 'id',
      'created_at' => 'created_at',
      'starts_at' => 'starts_at',
      'ends_at' => 'ends_at',
      'name' => 'name',
      'description_short' => 'description_short',
      'description_html' => 'description_html',
      'url' => 'url',
      'poster_image' => 'poster_image',
      'ad_partner_percent' => 'ad_partner_percent',
      'locale' => 'locale',
      'location' => 'location',
      'organization' => 'organization',
      'categories' => 'categories',
      'ticket_types' => 'ticket_types',
      'questions' => 'questions',
      'widgets' => 'widgets',
      'properties' => 'properties',
      'moderation_status' => 'moderation_status',
      'access_status' => 'access_status',
      'registration_data' => 'registration_data'
  );

  
  /**
  * Уникальный номер события
  */
  public $id; /* int */
  /**
  * Дата создания события
  */
  public $created_at; /* date */
  /**
  * Дата начала события
  */
  public $starts_at; /* date */
  /**
  * Дата конца события
  */
  public $ends_at; /* date */
  /**
  * Название события
  */
  public $name; /* string */
  /**
  * Короткое описание события или подзаголовок
  */
  public $description_short; /* string */
  /**
  * Полное описание события
  */
  public $description_html; /* string */
  /**
  * Адрес события в timepad
  */
  public $url; /* string */
  /**
  * Картинка события
  */
  public $poster_image; /* Image */
  /**
  * Процент, который получают партнёры за продажу билета на это событие
  */
  public $ad_partner_percent; /* int */
  /**
  * Язык события по умолчанию
  */
  public $locale; /* string */
  /**
  * Место проведения события
  */
  public $location; /* Location */
  /**
  * Организация, проводящая событие
  */
  public $organization; /* Organization */
  /**
  * Категории события
  */
  public $categories; /* array[Category] */
  /**
  * Доступные типы билетов
  */
  public $ticket_types; /* TicketType */
  /**
  * Вопросы, задающиеся при регистрации
  */
  public $questions; /* array[Question] */
  /**
  * Виджеты, доступные для события
  */
  public $widgets; /* array[Widget] */
  /**
  * Список особенностей события
  */
  public $properties; /* array[string] */
  /**
  * Статус модерации
  */
  public $moderation_status; /* string */
  /**
  * Статус доступа к событию
  */
  public $access_status; /* string */
  /**
  * Обобщённые данные о билетах
  */
  public $registration_data; /* RegistrationData */

  public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->created_at = $data["created_at"];
    $this->starts_at = $data["starts_at"];
    $this->ends_at = $data["ends_at"];
    $this->name = $data["name"];
    $this->description_short = $data["description_short"];
    $this->description_html = $data["description_html"];
    $this->url = $data["url"];
    $this->poster_image = $data["poster_image"];
    $this->ad_partner_percent = $data["ad_partner_percent"];
    $this->locale = $data["locale"];
    $this->location = $data["location"];
    $this->organization = $data["organization"];
    $this->categories = $data["categories"];
    $this->ticket_types = $data["ticket_types"];
    $this->questions = $data["questions"];
    $this->widgets = $data["widgets"];
    $this->properties = $data["properties"];
    $this->moderation_status = $data["moderation_status"];
    $this->access_status = $data["access_status"];
    $this->registration_data = $data["registration_data"];
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