<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">产品列表</div>
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
                                <th>名称</th>
                                <th>描述</th>
                                <th>价格(元)</th>
                                <th>库存</th>
                                <th>分类</th>
                                <th>操作</th>
                            </tr>                            
                        </thead>
                        <tbody>                            
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>1</td>
                                <td>产品1</td>
                                <td>产品1描述</td>
                                <td>1000.00</td>
                                <td>1000</td>
                                <td>类别1</td>
                                <td><a href="product-detail.php" class="btn btn-modify">修改</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" class="check" name="" value=""></td>
                                <td>2</td>
                                <td>产品2</td>
                                <td>产品2描述</td>
                                <td>2000.00</td>
                                <td>200</td>
                                <td>类别2</td>
                                <td><a href="product-detail.php" class="btn btn-modify">修改</a></td>
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