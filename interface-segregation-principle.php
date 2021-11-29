<?php

interface Codable
{
    public function code();
}

interface Testable
{
    public function test();
}

class Developer implements Codable, Testable
{
    public function code(): string
    {
        return 'coding';
    }

    public function test(): string
    {
        return 'testing in localhost';
    }
}

class Tester implements Testable
{
    public function test(): string
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(Codable $member)
    {
        return $member->code();
    }

    public function processTest(Testable $member)
    {
        return $member->test();
    }
}

$pm = new ProjectManagement();
var_dump($pm->processCode(new Developer()));