<?php
const DEBUG = 1;

define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/blrw';
const HELPERS = ROOT . '/vendor/blrw/helpers';
const CACHE = ROOT . '/tmp/cache';
const LOGS = ROOT . '/tmp/logs';
const CONFIG = ROOT . '/config';
const LAYOUT = 'blackriver';
const PATH = 'http://blackriver.loc';
const ADMIN = 'http://blackriver.loc/admin';
const NO_IMAGE = 'uploads/no_image.jpg';

require_once ROOT . '/vendor/autoload.php';
