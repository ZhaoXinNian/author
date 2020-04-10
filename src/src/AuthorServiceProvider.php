<?php
/**
 *
 * @Author: NewYear
 * @Date: 2020/4/10 10:49
 * @Source: YC_Windows
 * @Intro:
 *
 */

namespace Author;

use Illuminate\Support\ServiceProvider;
class AuthorServiceProvider extends ServiceProvider
{
    protected $config_key = 'author';
    protected $config_file_name = 'author.php';

    public function boot()
    {
        // 复制自定义的文件到config目录
        if (!file_exists(config_path($this->config_file_name))) {
            $this->publishes([
                dirname(__DIR__) . '/config/'.$this->config_file_name => config_path($this->config_file_name),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/'.$this->config_file_name, $this->config_key
        );
        $this->app->singleton("hook",function ($app){
            return new Author($app);
        });
    }

}