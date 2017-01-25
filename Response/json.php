<?php
/**
 * 按Json方式输出通信数据
*/
class Json extends Api {
	public function response($code, $message = '', $data = array()) {
		if(!(is_numeric($code))) {
			return '';
		}

		$result = array(
			'code' => $code,
			'message' => $message,
			'data' => $data
		);
		//$data = "输出json数据";
		//$newData = iconv('UTF-8','GBK',$data); // 此函数用于字符串的编码转换 UTF-8 => GBK
		echo json_encode($result); //对变量进行 JSON 编码,只接受UTF-8编码的数据
		exit;
	}
}