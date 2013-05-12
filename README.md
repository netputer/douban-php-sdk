豆瓣 PHP SDK
=====

介绍
-----
感觉目前已有的豆瓣 PHP SDK 不够友好，所以参考着 [新浪微博 PHP SDK](https://code.google.com/p/libweibo/) 和 [zither/simple-douban-oauth2](https://github.com/zither/simple-douban-oauth2) ，又造了一个轮子。

用法
-----
1. 直接调用不需要授权的公开 API

  通过浏览器访问 `search.php?q=PHP` 即可搜索 PHP 相关书籍的内容。

2. 通过授权方式使用

  1. Clone 或下载项目源码。
  2. 打开 `example/config.php` 文件，将常量 `KEY` `SECRET` 的值分别修改成你在豆瓣创建的应用的 `API Key` 和 `Secret` 。
  3. 通过浏览器访问 `connect.php` 进行授权。授权成功后将跳转至 `callback.php` 显示授权信息和用户信息。

TODO
-----
1. 完善注释；
2. 完善异常处理；
3. 完善对豆瓣各 Scope API 的封装；
4. 提供 Composer 方式安装。