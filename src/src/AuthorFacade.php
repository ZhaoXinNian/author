<?php
/**
 *
 * @Author: NewYear
 * @Date: 2020/4/10 9:59
 * @Source: YC_Windows
 * @Intro:
 *
 */

namespace Core\Author;

use Illuminate\Support\Facades\Facade;
/**
 * @method portal(string $name) static 指定入口方法名称
 * @method alias(string $name, string $behavior = null) static 指定行为标识 便于调用
 * @method add(string $tag,mixed $behavior,bool $first = false) static 动态添加行为扩展到某个标签
 */
class AuthorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'author';
    }
}