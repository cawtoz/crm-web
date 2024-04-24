<?php

$customers = [
    [
        "id" => 1,
        "name" => "Alejandro",
        "email" => "alejandro@gmail.com",
        "phone" => 1212121212,
    ],
    [
        "id" => 2,
        "name" => "Isabel",
        "email" => "isabel@gmail.com",
        "phone" => 1313131313,
    ],
    [
        "id" => 3,
        "name" => "Gabriel",
        "email" => "gabriel@gmail.com",
        "phone" => 1414141414,
    ],
    [
        "id" => 4,
        "name" => "Carlos",
        "email" => "carlos@gmail.com",
        "phone" => 1515151515,
    ],
    [
        "id" => 5,
        "name" => "María",
        "email" => "maria@gmail.com",
        "phone" => 1616161616,
    ],
];

function createCustomer($customer)
{
    global $customers;
    $customers[] = $customer;
}

function readCustomers()
{
    global $customers;
    return $customers;
}

function updateCustomer($updatedCustomer)
{
    global $customers;
    foreach ($customers as $key => $customer) {
        if ($customer['id'] === $updatedCustomer['id']) {
            $customers[$key] = $updatedCustomer;
            return;
        }
    }
}

function removeCustomer($customerId)
{
    global $customers;
    $customers = array_filter($customers, function ($customer) use ($customerId) {
        return $customer['id'] !== $customerId;
    });
}

function findCustomerById($customerId)
{
    global $customers;
    foreach ($customers as $customer) {
        if ($customer['id'] === $customerId) {
            return $customer;
        }
    }
    return null;
}
