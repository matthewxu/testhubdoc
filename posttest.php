<?php

$i=0;
while(1){
			$posturl = 'http://wenku.datacdn.cn/testupload';
	        $post_data['uploadtoken']       = 'kakslsiekcj849dMlssffhz';
	        $post_data['Title']      = '大话西游-仙履奇缘'.$i;
	        $post_data['Cid'] = '3';
	        $post_data['Price']    = '1';
	        $post_data['Filename']    = '大话西游'.$i;
			$post_data['Keywords']    = '大话西游'.$i;
			$post_data['Intro']    = '《大话西游》是由周星驰彩星电影公司和西安电影制片厂联合摄制的爱情悲喜剧电影，由刘镇伟执导，周星驰、朱茵、吴孟达、莫文蔚等主演。《大话西游》由《月光宝盒》和《大圣娶亲》两部组成，讲述了一个跨越时空的悲喜交加的爱情故事。影片于1995年在中国香港和内地上映，直到1997年后才开始在内地各个高校和网络上流传并迅速走红。影片上映20年之际，《大话西游》于2014年10月24日在内地重映。'.$i;
			$post_data['Tags']    = '电影,喜剧'.$i;
			$ch = curl_init();
			$post_data['file'] = '@/Users/matthewxu/git/testhubdoc/1.bmp';	               
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_POST, true);  
			curl_setopt($ch,CURLOPT_BINARYTRANSFER,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
			curl_setopt($ch, CURLOPT_URL, $posturl);
			$info= curl_exec($ch);
			curl_close($ch);
			print_r($info);
			$i++;
			echo $i;
			
			sleep(1);
	}		
?>