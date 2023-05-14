<?php

require_once('User.php');
require_once('UserService.php');

$users = [
    new User('Alex', 'Test123', new DateTime('01.01.2001')),
    new User('Boris', 'Test234', new DateTime('02.02.2002')),
    new User('Chris', 'Test345', new DateTime('03.03.2003')),
    new User('Eve', 'Test456', new DateTime('05.05.2005')),
    new User('Dan', 'Test567', new DateTime('04.04.2004')),
    new User('Ann', 'Test678', new DateTime('01.02.2003'))
];

$sortedUsernames = UserService::sortByBirthday($users, 'older');

UserService::displayUsers($sortedUsernames);