PHP开发APP接口
==============


DIRECTORY STRUCTURE
-------------------

      files/         file类的静态缓存路径
      logs/          contains console commands (controllers)
	  redis/         php调用redis简单实例
      Response/      响应类，输出通讯格式（json,xml etc.）的数据
      api.php        
	  common.php
	  cron.php       定时任务，调用db和file类
	  db.php
	  error.php
	  file.php       file类 静态缓存技术 
	  init.php
	  list.php       APP 获取首页数据 从数据库获取数据
	  response.php   response类，用于输出不同通信格式的数据: json、xml、综合方法 
	  version.txt


	  
### Database

Edit the file `db.php` with real data, for example:

```php
private $_dbConfig = array(
	'host' => '127.0.0.1',
	'user' => 'root',
	'password' => '',
	'database' => 'video',
);
```