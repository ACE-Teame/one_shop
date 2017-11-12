<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">订单列表</div>
                <div class="operate">
                    <a href="#" class="btn btn-add">新增</a>
                    <a href="#" class="btn btn-export">导出</a>
                    <a href="#" class="btn btn-search">查询</a>
                    <a href="#" class="btn btn-delete">删除</a>
                </div>
                <div class="table">                    
                    <table>
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="check" name="" value=""></th>
                                <th>订单号</th>
                                <th>产品名称</th>
                                <th>收件人</th>
                                <th>收件地址</th>
                                <th>收件电话</th>
                                <th>备注</th>
                                <th>订单创建时间</th>
                                <th>订单状态</th>
                            </tr>                            
                        </thead>
                        <tbody>                            
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>00000001</td>
                                <td>产品1</td>
                                <td>jack</td>
                                <td>广东省深圳市福田区</td>
                                <td>13728372839</td>
                                <td>速度</td>
                                <td>2017-11-11 11:11:11</td>
                                <td><a href="javascript:void(0);" class="btn btn-wait-confirm">等待确认</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>00000002</td>
                                <td>产品2</td>
                                <td>jack</td>
                                <td>广东省深圳市福田区</td>
                                <td>13728372839</td>
                                <td>速度</td>
                                <td>2017-11-11 11:11:11</td>
                                <td><a href="javascript:void(0);" class="btn btn-fakes">确认假单</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>00000003</td>
                                <td>产品2</td>
                                <td>jack</td>
                                <td>广东省深圳市福田区</td>
                                <td>13728372839</td>
                                <td>速度</td>
                                <td>2017-11-11 11:11:11</td>
                                <td><a href="javascript:void(0);" class="btn btn-wait-deliver">等待发货</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>00000004</td>
                                <td>产品1</td>
                                <td>jack</td>
                                <td>广东省深圳市福田区</td>
                                <td>13728372839</td>
                                <td>速度</td>
                                <td>2017-11-11 11:11:11</td>
                                <td><a href="javascript:void(0);" class="btn btn-deliver">已经发货</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>00000005</td>
                                <td>产品2</td>
                                <td>jack</td>
                                <td>广东省深圳市福田区</td>
                                <td>13728372839</td>
                                <td>速度</td>
                                <td>2017-11-11 11:11:11</td>
                                <td><a href="javascript:void(0);" class="btn btn-sign">已经签收</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>00000006</td>
                                <td>产品1</td>
                                <td>jack</td>
                                <td>广东省深圳市福田区</td>
                                <td>13728372839</td>
                                <td>速度</td>
                                <td>2017-11-11 11:11:11</td>
                                <td><a href="javascript:void(0);" class="btn btn-refund">已经退货</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="paginate">
                    <ul class="clear">
                       <div id="page">
                           <li><span>首页</span></li>
                           <li><span>上一页</span></li>
                           <li><a href="?page=1" title="第1页" class="active">1</a></li>
                           <li><a href="?page=2" title="第2页">2</a></li>
                           <li><a href="?page=3" title="第3页">3</a></li>
                           <li><a href="?page=2" title="下一页">下一页</a>
                           </li><li><a href="?page=3" title="尾页">尾页</a></li>
                           
                       </div>
                       <div class="show clear">
                            <div class="show-fl">
                                行数: <input type="text" name="">
                            </div>
                            <div class="show-fr">
                                <span class="pageRemark">共<b>3</b>页<b>25</b>条数据</span>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>