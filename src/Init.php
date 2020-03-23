<?php
/**
 * email 291868060@qq.com.
 * User: Mr.liu
 * Date: 2020/3/20
 * Time: 15:54
 */

class Init
{
    private $appId = '';
    private $domain = '';
    private $secret = '';
    private $signature = '';
    private $timestemp = '';
  public function exe()
  {
      $this->timestemp = time();
      $this->signature = md5($this->appId.$this->secret.$this->timestemp);
  }
  public function curlGet($url,$data=[])
  {
     $this->exe();
      $header = array(
          'Accept: application/json',
      );

      $str = '?app_id='.$this->appId.'&signature='.$this->signature.'&timestemp='.$this->timestemp;
      if($data && is_array($data))
      {
          foreach ($data as $key => $val)
          {
              $str .=  '&' . $key . '=' . $val;
          }
      }
      $url = $this->domain.'/'.$url.$str;
      $curl = curl_init();
      //设置抓取的url
      curl_setopt($curl, CURLOPT_URL, $url);
      //设置头文件的信息作为数据流输出
      curl_setopt($curl, CURLOPT_HEADER, 0);
      // 超时设置,以秒为单位
      curl_setopt($curl, CURLOPT_TIMEOUT, 1);

      // 超时设置，以毫秒为单位
      // curl_setopt($curl, CURLOPT_TIMEOUT_MS, 500);

      // 设置请求头
      curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
      //设置获取的信息以文件流的形式返回，而不是直接输出。
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);
      //执行命令
      $data = curl_exec($curl);
      // 显示错误信息
      if (curl_error($curl)) {
          return false;
      } else {
          // 打印返回的内容
          curl_close($curl);
          return $data;
      }
  }
  public function curlPost($url,$data)
  {
      $this->exe();

      $data['signature'] = $this->signature;
      $data['app_id'] = $this->appId;
      $data['timestemp'] = $this->timestemp;
      $ch = curl_init();
        $url = $this->domain.'/'.$url;
      //指定URL
      curl_setopt($ch, CURLOPT_URL, $url);

      //设定请求后返回结果
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      //声明使用POST方式来进行发送
      curl_setopt($ch, CURLOPT_POST, 1);

      //发送什么数据呢
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);


      //忽略证书
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

      //忽略header头信息
      curl_setopt($ch, CURLOPT_HEADER, 0);

      //设置超时时间
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);

      //发送请求
      $output = curl_exec($ch);

      //关闭curl
      curl_close($ch);

      //返回数据
      return $output;
  }
}