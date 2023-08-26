<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/4/en/views.html#the-app-view
 */
class AppView extends View
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
        $this->loadHelper('Form', [
            'templates' => [
                'button' => '<button class="btn btn-primary"{{attrs}}>{{text}}</button>',
                'checkbox' => '<input class="form-check-input" type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
                'select' => '<select class="form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="{{name}}"{{attrs}}>{{content}}</select>',
                'selectMultiple' => '<select class="form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
                'input' => '<input class="form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="{{type}}" name="{{name}}"{{attrs}}/>',
                'textarea' => '<textarea class="form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="{{name}}"{{attrs}}>{{value}}</textarea>',
                'inputContainer' => '<div class="mb-4 {{type}}">{{content}}</div>',
                'inputContainerError' => '<div class="mb-4 {{type}} is-invalid">{{content}}{{error}}</div>',
            ],
        ]);
        $this->loadHelper('Paginator', [
            'templates' => [
                'nextActive' => '<li class="page-item next"><a rel="next" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{url}}">{{text}}</a></li>',
                'nextDisabled' => '<li class="page-item next disabled"><a class="page-link flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="" onclick="return false;">{{text}}</a></li>',
                'prevActive' => '<li class="page-item prev"><a rel="prev" class="page-link flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{url}}">{{text}}</a></li>',
                'prevDisabled' => '<li class="page-item prev disabled"><a class="page-link flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="" onclick="return false;">{{text}}</a></li>',
                'first' => '<li class="page-item first"><a class="page-link flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{url}}">{{text}}</a></li>',
                'last' => '<li class="page-item last"><a class="page-link flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{url}}">{{text}}</a></li>',
                'number' => '<li class="page-item"><a class="page-lin flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-whitek" href="{{url}}">{{text}}</a></li>',
                'current' => '<li class="page-item active"><a class="page-link flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="">{{text}}</a></li>',
            ],
        ]);

    }
}
