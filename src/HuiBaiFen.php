<?php
/**
 * email 291868060@qq.com.
 * User: Mr.liu
 * Date: 2020/3/20
 * Time: 15:23
 */

class HuiBaiFen extends Init
{
    /**
     * 生成一个图片
     * @param $url
     * @return bool|mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function showQrcode($url)
    {
        $url = urlencode($url);
        return   $this->curlGet('open/Qrcode/showQrcode',['url'=>$url]);
    }

    /**
     * 获取&设置会议收费
     *
     * @param $meetid  会议主键id
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function getToll($meetid)
    {
        $route = '/open/meeting/getToll';
        $data['id'] = $meetid;
        return $this->curlPost($route,$data);
    }

    /**
     * 个人中心（个人账户信息）
     * @return array|bool|mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function merchantIndex()
    {
        return   $this->curlGet('/open/merchant/index');
    }

    /**
     * 会议总览
     * @param $meetid
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPandect($meetid)
    {
        $data = ['id'=>$meetid];
        return   $this->curlPost('/open/meeting/pandect',$data);
    }

    /**
     * 会议模块详情
     * @param $modelId 模块主键id
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingGetModelDetail($modelId)
    {
        $data = ['id'=>$modelId];
        return   $this->curlPost('/open/meeting/getModelDetail',$data);
    }

    /**
     * 获取会议注册字段
     * @param $meetid
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingGetRegisterField($meetid)
    {
        $data = ['meetid'=>$meetid];
        return   $this->curlPost('/open/meeting/getRegisterField',$data);
    }

    /**
     * 嘉宾管理列表
     * @param $data ['id'=>18,'keyword'=>'张三','mtaid'=>0,'page'=>1,'pageNum'=>10] //data字段一定要有这些数据
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function usersIndex($data)
    {
        return   $this->curlPost('/open/Users/index',$data);
    }

    /**
     * 嘉宾管理添加或修改
     * @param $data ['id'=>18,'username'=>'kkk','mobile'=>'17611014444','sex'=>'男','email'=>'22222@qq.com','tagid[0]'=>16,'tagid[1]'=>12]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function usersAdd($data)
    {
        return   $this->curlPost('/open/Users/add',$data);
    }

    /**
     * 嘉宾管理删除用户
     * @param $data ['uid'=>507,'id'=>'18'] //uid 以，隔开
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function usersDelUsers($data)
    {
        return   $this->curlPost('/open/Users/delUsers',$data);
    }

    /**
     * 给用户打标签
     * @param $data ['mtaid'=>12,'uid[0]'=>'1','uid[1]'=>'2','id'=>18]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function usersMakeTag($data)
    {
        return   $this->curlPost('/open/Users/makeTag',$data);
    }
    /**
     * 给用户打标签
     * @param $data ['mtaid'=>12,'uid[0]'=>'1','uid[1]'=>'2','id'=>18]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingGetMeetingTag($data)
    {
        return   $this->curlPost('/open/meeting/getMeetingTag',$data);
    }
    /**
     * 获取用户信息
     * @param $data ['meetid'=>18,'uid'=>492]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function usersGetUserinfo($data)
    {
        return   $this->curlPost('/open/users/getUserinfo',$data);
    }
    /**
     * 提交导入用户信息
     * @param $data ['meetid'=>18,'tag[0]'=>12,'user[0][username]'=>'zzz',
    'user[0][mobile]'=>17611002222,
    'user[0][sex]'=>'男',
    'user[0][email]'=>'2918888@qq.com','user[1][username]'=>'zz',
    'user[1][mobile]'=>17611002212,
    'user[1][sex]'=>'男',
    'user[1][email]'=>'2918818@qq.com',
    ]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function usersImportUserSave($data)
    {
        return   $this->curlPost('/open/users/importUserSave',$data);
    }

    /**
     * 新增&修改标签
     * @param $data ['meetid'=>18,'name'=>'vvvip'] 或者 ['meetid'=>18,'name'=>'vvvip','id'=>12]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingSetMeetingTag($data)
    {
        return   $this->curlPost('/open/meeting/setMeetingTag',$data);
    }
    /**
     * 删除标签
     * @param $data ['meetid'=>18,'id'=>12]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingDelMeetingTag($data)
    {
        return   $this->curlPost('/open/meeting/delMeetingTag',$data);
    }
    /**
     * 添加缴费人员
     * @param $data ['meetid'=>18,'uid'=>508,'type'=>'3','remark'=>'hahhahhha']
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingAddPayUser($data)
    {
        return   $this->curlPost('/open/meeting/addPayUser',$data);
    }
    /**
     * 会议收费管理
     * @param $data ['meetid'=>18,'id'=>12]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingChargeManagement($data)
    {
        return   $this->curlPost('/open/meeting/chargeManagement',$data);
    }
    /**
     * 收费管理删除记录
     * @param $data ['meetid'=>18,'id'=>485]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingDelOrder($data)
    {
        return   $this->curlPost('/open/meeting/delOrder',$data);
    }
    /**
     * 会议会场列表
     * @param $data ['meetid'=>18]
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceIndex($data)
    {
        return   $this->curlPost('/open/meeting_place/index',$data);
    }

    /**
     * 新增&修改会场
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceAdd($data)
    {
        return   $this->curlPost('/open/meeting_place/add',$data);
    }
    /**
     * 删除会场
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceDelete($data)
    {
        return   $this->curlPost('/open/meeting_place/delete',$data);
    }
 /**
     * 会场查看详情
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceUserList($data)
    {
        return   $this->curlPost('/open/meeting_place/userList',$data);
    }
/**
     * 移出会场用户
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceRemoveUser($data)
    {
        return   $this->curlPost('/open/meeting_place/removeUser',$data);
    }
/**
     * 签到导出列表
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceExcelExport($data)
    {
        return   $this->curlPost('/open/meeting_place/excelExport',$data);
    }
    /**
     * 设置会场人员
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceSetPlaceUser($data)
    {
        return   $this->curlPost('/open/meeting_place/setPlaceUser',$data);
    }
    /**
     * :签到管理获取用户信息
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceGetUser($data)
    {
        return   $this->curlPost('/open/meeting_place/getUser',$data);
    }
    /**
     * :签到管理编辑用户信息
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingPlaceSetUser($data)
    {
        return   $this->curlPost('/open/meeting_place/setUser',$data);
    }
 /**
     * :数据统计
     * @param $data
     * @return mixed
     * email 291868060@qq.com.
     * User: Mr.liu
     */
    public function meetingStatistical($data)
    {
        return   $this->curlPost('/open/meeting/statistical',$data);
    }

}
//$obj = new HuiBaiFen();
//$res = $obj->showQrcode('http://portal.huibaifen.com/wx/#/home/index/18');
//$res = $obj->getToll(18);
//$res = $obj->merchantIndex();
//$res = $obj->meetingPandect(18);
//$res = $obj->meetingGetModelDetail(19);
//$data = ['id'=>18,'keyword'=>'张三','mtaid'=>0,'page'=>1,'pageNum'=>10];
//$res = $obj->meetingGetRegisterField(18);
//$res = $obj->usersIndex($data);
//$res = $obj->usersAdd(['id'=>18,'username'=>'kkk','mobile'=>'17611014444','sex'=>'男','email'=>'22222@qq.com','tagid[0]'=>16,'tagid[1]'=>12]);
//$res = $obj->usersDelUsers(['uid'=>507,'id'=>'18']);
//$res = $obj->usersMakeTag(['mtaid'=>12,'uid[0]'=>'1','uid[1]'=>'2','id'=>18]);
//$res = $obj->meetingGetMeetingTag(['id'=>18]);
//$res = $obj->usersGetUserinfo(['meetid'=>18,'uid'=>492]);
//$res = $obj->usersImportUserSave(['meetid'=>18,'tag[0]'=>12,'user[0][username]'=>'zzz',
//    'user[0][mobile]'=>17611002222,
//    'user[0][sex]'=>'男',
//    'user[0][email]'=>'2918888@qq.com','user[1][username]'=>'zz',
//    'user[1][mobile]'=>17611002212,
//    'user[1][sex]'=>'男',
//    'user[1][email]'=>'2918818@qq.com',
//]);
//$res = $obj->meetingDelMeetingTag(['meetid'=>18,'id'=>40]);
//$res = $obj->meetingAddPayUser(['meetid'=>18,'uid'=>508,'type'=>'3','remark'=>'hahhahhha']);
//$res = $obj->meetingChargeManagement(['meetid'=>18,'id'=>40,'keyword'=>'',]);
//$res = $obj->meetingDelOrder(['meetid'=>18,'id'=>485]);
//$res = $obj->meetingPlaceIndex(['meetid'=>18]);
//$res = $obj->meetingPlaceAdd(['meetid'=>18,'title'=>'234234']);
//$res = $obj->meetingPlaceDelete(['meetid'=>18,'id'=>84]);
//$res = $obj->meetingPlaceUserList(['id'=>24]);
//$res = $obj->meetingPlaceRemoveUser(['id'=>91]);
//$res = $obj->meetingPlaceExcelExport(['id'=>82]);
//$res = $obj->meetingPlaceSetPlaceUser(['mpid'=>82,'uid[0]'=>3]);
//$res = $obj->meetingPlaceGetUser(['id'=>92]);
//$res = $obj->meetingPlaceSetUser(['id'=>92,'status'=>1,'sign_time'=>'2019/3/11 12:30:00']);
//$res = $obj->meetingStatistical(['meetid'=>18,'status'=>1,'sign_time'=>'2019/3/11 12:30:00']);

//echo ($res);
