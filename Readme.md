PHP����APP�ӿ�
==============


DIRECTORY STRUCTURE
-------------------

      files/         file��ľ�̬����·��
      logs/          contains console commands (controllers)
	  redis/         php����redis��ʵ��
      Response/      ��Ӧ�࣬���ͨѶ��ʽ��json,xml etc.��������
      api.php        
	  common.php
	  cron.php       ��ʱ���񣬵���db��file��
	  db.php
	  error.php
	  file.php       file�� ��̬���漼�� 
	  init.php
	  list.php       APP ��ȡ��ҳ���� �����ݿ��ȡ����
	  response.php   response�࣬���������ͬͨ�Ÿ�ʽ������: json��xml���ۺϷ��� 
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