<?php
// 缓存技术
class File {
	private $_dir;

	const EXT = '.txt';

	public function __construct() {
		$this->_dir = dirname(__FILE__) . '/files/';
	}
	
	/**
	* 缓存技术 静态缓存：将写入/读取硬盘的缓存文件
	* @param string $name       相当与缓存文件名
	* @param string $value      缓存数据
	* @param string $cacheTime  失效时间
	* return string
	*/
	public function cacheData($name, $value = '', $cacheTime = 0) {
		$filename = $this->_dir  . $name . self::EXT;

		if($value !== '') { // 将value值写入缓存
			// value为null时，删除缓存文件
			if(is_null($value)) { 
				return @unlink($filename);
			}
			$dir = dirname($filename);
			if(!is_dir($dir)) {
				mkdir($dir, 0777);
			}

			$cacheTime = sprintf('%011d', $cacheTime);
			return file_put_contents($filename,$cacheTime.json_encode($value));
		}
		// value为''读取缓存
		if(!is_file($filename)) {
			return FALSE;
		} 
		$contents = file_get_contents($filename);
		$cacheTime = (int)substr($contents, 0 ,11);
		$value = substr($contents, 11);
		if($cacheTime !=0 && ($cacheTime + filemtime($filename) < time())) {
			unlink($filename);
			return FALSE;
		}
		return json_decode($value, true);
		
	}
}

$file = new File();

echo $file->cacheData('test1');