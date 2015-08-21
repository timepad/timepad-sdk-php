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

class EventResponse implements ArrayAccess {
    static $swaggerTypes = array(
        'id' => 'int',
        'created_at' => 'DateTime',
        'starts_at' => 'DateTime',
        'ends_at' => 'DateTime',
        'name' => 'string',
        'description_short' => 'string',
        'description_html' => 'string',
        'url' => 'string',
        'poster_image' => 'ImageResponse',
        'ad_partner_percent' => 'int',
        'locale' => 'string',
        'location' => 'LocationResponse',
        'organization' => 'OrganizationResponse',
        'categories' => 'array[CategoryResponse]',
        'ticket_types' => 'array[TicketTypeResponse]',
        'questions' => 'array[QuestionResponse]',
        'widgets' => 'array[WidgetResponse]',
        'properties' => 'array[string]',
        'moderation_status' => 'string',
        'access_status' => 'string',
        'registration_data' => 'RegistrationDataResponse'
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
    public $created_at; /* DateTime */
    /**
    * Дата начала события
    */
    public $starts_at; /* DateTime */
    /**
    * Дата конца события
    */
    public $ends_at; /* DateTime */
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
    public $poster_image; /* ImageResponse */
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
    public $location; /* LocationResponse */
    /**
    * Организация, проводящая событие
    */
    public $organization; /* OrganizationResponse */
    /**
    * Категории события
    */
    public $categories; /* array[CategoryResponse] */
    /**
    * Доступные типы билетов
    */
    public $ticket_types; /* array[TicketTypeResponse] */
    /**
    * Вопросы, задающиеся при регистрации
    */
    public $questions; /* array[QuestionResponse] */
    /**
    * Виджеты, доступные для события
    */
    public $widgets; /* array[WidgetResponse] */
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
    public $registration_data; /* RegistrationDataResponse */

    public function __construct(array $data = null) {
    
        if(isset($data["id"])) {
            $this->id = $data["id"];
        }
    
    
        if(isset($data["created_at"])) {
            $this->created_at = $data["created_at"];
        }
    
    
        if(isset($data["starts_at"])) {
            $this->starts_at = $data["starts_at"];
        }
    
    
        if(isset($data["ends_at"])) {
            $this->ends_at = $data["ends_at"];
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
    
    
        if(isset($data["url"])) {
            $this->url = $data["url"];
        }
    
    
        if(isset($data["poster_image"])) {
            $this->poster_image = $data["poster_image"];
        }
    
    
        if(isset($data["ad_partner_percent"])) {
            $this->ad_partner_percent = $data["ad_partner_percent"];
        }
    
    
        if(isset($data["locale"])) {
            $this->locale = $data["locale"];
        }
    
    
        if(isset($data["location"])) {
            $this->location = $data["location"];
        }
    
    
        if(isset($data["organization"])) {
            $this->organization = $data["organization"];
        }
    
    
        if(isset($data["categories"])) {
            $this->categories = $data["categories"];
        }
    
    
        if(isset($data["ticket_types"])) {
            $this->ticket_types = $data["ticket_types"];
        }
    
    
        if(isset($data["questions"])) {
            $this->questions = $data["questions"];
        }
    
    
        if(isset($data["widgets"])) {
            $this->widgets = $data["widgets"];
        }
    
    
        if(isset($data["properties"])) {
            $this->properties = $data["properties"];
        }
    
    
        if(isset($data["moderation_status"])) {
            $this->moderation_status = $data["moderation_status"];
        }
    
    
        if(isset($data["access_status"])) {
            $this->access_status = $data["access_status"];
        }
    
    
        if(isset($data["registration_data"])) {
            $this->registration_data = $data["registration_data"];
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
