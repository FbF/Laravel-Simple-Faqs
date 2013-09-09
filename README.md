Laravel-Simple-Faqs
===================

A Laravel 4 package to add simple database driven FAQs to a site

## Features

* Generates a page of FAQs
* Draft/Approved status
* Soft deletes
* Configurable URL, e.g. /faqs
* Order field to control order

## Installation

Add the following to you composer.json file

    "fbf/laravel-simple-faqs": "dev-master"

Run

    composer update

Add the following to app/config/app.php

    'Fbf\LaravelSimpleFaqs\LaravelSimpleFaqsServiceProvider'

Run the package migration

    php artisan migrate --package=fbf/laravel-simple-faqs

Publish the config

    php artisan config:publish fbf/laravel-simple-faqs

## Configuration

URI of the FAQs page

	'uri' => 'faqs',

Page title of the FAQs page

	'page_title' => 'My FAQs',

Meta description of the FAQs page

	'meta_description' => 'This is the description for my FAQs page',

Meta keywords of the FAQs page

	'meta_keywords' => 'These are the keywords for my FAQs page',

Determines whether to show questions at the top of the FAQs page that anchor to the FAQ below

	'show_questions_at_top' => true,

## Administrator

You can use the excellent Laravel Administrator package by frozennode to administer your blog.

http://administrator.frozennode.com/docs/installation

A ready-to-use model config file for the Faq model (faqs.php) is provided in the src/config/administrator directory of the package, which you can copy into the app/config/administrator directory (or whatever you set as the model_config_path in the administrator config file).