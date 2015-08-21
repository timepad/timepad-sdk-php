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

class QuestionResponse implements ArrayAccess {
    static $swaggerTypes = array(
        'field_id' => 'int',
        'name' => 'string',
        'type' => 'string',
        'possible_answers' => 'array[AnswerResponse]',
        'is_mandatory' => 'bool',
        'is_for_every_visitor' => 'bool',
        'meta' => 'object'
    );

    static $attributeMap = array(
        'field_id' => 'field_id',
        'name' => 'name',
        'type' => 'type',
        'possible_answers' => 'possible_answers',
        'is_mandatory' => 'is_mandatory',
        'is_for_every_visitor' => 'is_for_every_visitor',
        'meta' => 'meta'
    );

    
    /**
    * Название поля вопроса
    */
    public $field_id; /* int */
    /**
    * Текст вопроса
    */
    public $name; /* string */
    /**
    * Тип вопроса
    */
    public $type; /* string */
    /**
    * Список предлагаемых ответов (если вопрос предполагает такой список)
    */
    public $possible_answers; /* array[AnswerResponse] */
    /**
    * На вопрос обязательно отвечать
    */
    public $is_mandatory; /* bool */
    /**
    * Выводить вопрос отдельно для каждого купленного билета
    */
    public $is_for_every_visitor; /* bool */
    /**
    * Дополнительные данные
    */
    public $meta; /* object */

    public function __construct(array $data = null) {
    
        if(isset($data["field_id"])) {
            $this->field_id = $data["field_id"];
        }
    
    
        if(isset($data["name"])) {
            $this->name = $data["name"];
        }
    
    
        if(isset($data["type"])) {
            $this->type = $data["type"];
        }
    
    
        if(isset($data["possible_answers"])) {
            $this->possible_answers = $data["possible_answers"];
        }
    
    
        if(isset($data["is_mandatory"])) {
            $this->is_mandatory = $data["is_mandatory"];
        }
    
    
        if(isset($data["is_for_every_visitor"])) {
            $this->is_for_every_visitor = $data["is_for_every_visitor"];
        }
    
    
        if(isset($data["meta"])) {
            $this->meta = $data["meta"];
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
