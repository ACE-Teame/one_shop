<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">用户列表</div>
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
                                <th>ID</th>
                                <th>用户名</th>
                                <th>注册时间</th>
                                <th>最近登录时间</th>
                                <th>最近登录IP</th>
                                <th>操作</th>
                            </tr>                            
                        </thead>
                        <tbody>                            
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>1</td>
                                <td>Jack</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>172.120.2.1</td>
                                <td><a href="#" class="btn btn-modify">修改</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>2</td>
                                <td>Jack</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>172.120.2.1</td>
                                <td><a href="#" class="btn btn-modify">修改</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>3</td>
                                <td>Jack</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>172.120.2.1</td>
                                <td><a href="#" class="btn btn-modify">修改</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>4</td>
                                <td>Jack</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>172.120.2.1</td>
                                <td><a href="#" class="btn btn-modify">修改</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>5</td>
                                <td>Jack</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>2017-11-11 11:11:11</td>
                                <td>172.120.2.1</td>
                                <td><a href="#" class="btn btn-modify">修改</a></td>
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