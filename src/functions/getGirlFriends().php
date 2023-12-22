<?php

function getGirlFriends($users) {
    $friends = array_reduce($users, function ($acc, $user) {
        return array_merge($acc, $user['friends']);
    }, []);

    return array_values(array_filter($friends, function ($friend) {
        return $friend['gender'] === 'female';
    }));
}

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

print_r(getGirlFriends($users));
# Array (
#     ['name' => 'Mira', 'gender' => 'female'],
#     ['name' => 'Aria', 'gender' => 'female'],
#     ['name' => 'Keit', 'gender' => 'female']
# )