<?php

/**
 * 图片处理类
 * @author Dongxiang
 */

class Image {
	
	static $error = '';
	/**
	 * 读取文件信息
	 * @param string $filename
	 * @return boolean|multitype:unknown string Ambigous <>
	 */
	static public function getImageInfo($filename){
		
		if(!file_exists($filename)){
			self::$error = '文件不存在';
			return false;
		}
		
		$imgInfo = getimagesize($filename);
		
		if($imgInfo == false){
			self::$error = '无法正确读取图片信息';
			return false;
		}
		
		$info = array();
		$info['width'] = $imgInfo[0];
		$info['height'] = $imgInfo[1];
		$info['type'] = image_type_to_extension($imgInfo[2],false);
		$info['mine'] = $imgInfo['mine'];
		
		return $info;
	}
	
	/**
	 * 缩略图生成
	 * @param unknown $ori
	 * @param unknown $width
	 * @param unknown $height
	 * @return boolean|string
	 */
	static public function getThumb($ori,$width,$height){
		$info = self::getImageInfo($ori);
		if($info == false){
			return false;
		}
		
		$scale = min($width/$info['width'],$height/$info['height']);
		
		$tw = floor($scale*$info['width']);
		$th = floor($scale*$info['height']);
		
		
		
		$small = imagecreatetruecolor($width, $height);
		
		$white = imagecolorallocate($small, 255, 255, 255);
		
		imagefill($small, 0, 0, $white);
		
		$offsetX = floor(($width-$tw)/2);
		$offsetY = floor(($height-$th)/2);
		
		$createFun = 'imagecreatefrom'.$info['type'];
		
		$src = $createFun($ori);
		
		imagecopyresampled($small, $src, $offsetX, $offsetY, 0, 0, $tw, $th, $info['width'], $info['height']);
		
		$imageFun = 'image'.$info['type'];
		
		//$new =str_replace(".", "_thumb.", $ori);
		
		if($imageFun($small,'./3.jpg')){
			return ltrim(str_replace(ROOT, '', $new),'/');
		}
		
		
		@imagedestroy($small);
		@imagedestroy($src);
	} 
	
	/**
	 * 水印生成
	 * @param unknown $ori
	 * @param unknown $sma
	 * @return boolean
	 */
	static public function getWatermark($ori,$sma){
		$srcinfo = self::getImageInfo($sma);
		
		if($srcinfo== false){
			return false;
		}
		
		$createsrc = 'imagecreatefrom'.$srcinfo['type'];
		
		$s = $createsrc($sma);
		
		$dstinfo = self::getImageInfo($ori);
		
		$createdst = 'imagecreatefrom'.$dstinfo['type'];
		
		$o = $createdst($ori);
		
		$offsetX = $dstinfo['width']-$srcinfo['width'];
		$offsetY = $dstinfo['height']-$srcinfo['height'];
		
		imagecopymerge($o, $s, $offsetX, $offsetY, 0, 0, $srcinfo['width'], $srcinfo['height'], 30);
		
		$put = 'image'.$dstinfo['type'];
		
		if($put($o,$ori)){
			return true;
		}else{
			return false;
		}
		
		@imagedestroy($o);
		@imagedestroy($s);
		
	}
	
}

?>