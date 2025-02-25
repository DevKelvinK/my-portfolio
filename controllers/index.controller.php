<?php

use Core\Database;
use App\Models\Users;
use App\Models\Stacks;
use App\Models\Projects;
use App\Models\Contacts;

$database = new Database(config('database'));

$user = $database->query(
  query: "select * from users where id = 1",
  class: Users::class
)->fetch();

$stacks = $database->query(
  query: "select * from stacks where user_id = 1",
  class: Stacks::class
)->fetchAll();

$projects = $database->query(
  query: "select * from projects where user_id = 1",
  class: Projects::class
)->fetchAll();

$contacts = $database->query(
  query: "select * from contacts where user_id = 1",
  class: Contacts::class
)->fetchAll();

view('index', compact('user', 'stacks', 'projects', 'contacts'));
