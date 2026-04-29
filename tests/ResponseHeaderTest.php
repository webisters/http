<?php
/*
 * This file is part of Webisters HTTP Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\HTTP;

use Framework\HTTP\ResponseHeader;
use PHPUnit\Framework\TestCase;

final class ResponseHeaderTest extends TestCase
{
    public function testConstants() : void
    {
        $reflection = new \ReflectionClass(ResponseHeader::class);
        foreach ($reflection->getConstants() as $name => $value) {
            self::assertSame(\strtoupper($name), $name);
            self::assertSame(ResponseHeader::getName($value), $value);
            $name = \strtr(\strtolower($name), ['_' => '-']);
            $value = \strtolower($value);
            self::assertSame($name, $value);
        }
    }
}
