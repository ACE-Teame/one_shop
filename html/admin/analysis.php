<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">销售分析</div>
                <div class="operate">
                    <a href="#" class="btn btn-search">查询</a>
                </div>
                <div class="atatistics-table clear">
                    <div class="table tab-1">                        
                        <table>
                            <thead>
                                <tr>
                                    <th>省份</th>
                                    <th>销售额</th>
                                    <th>订单数量</th>
                                </tr>                            
                            </thead>
                            <tbody>      
                                <tr>
                                    <td>广东</td>
                                    <td>1000</td>
                                    <td>100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                    <div class="table tab-2">
                        <table>
                            <thead>
                                <tr>
                                    <th>CID</th>
                                    <th>订单数量</th>
                                </tr>                            
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td>0001</td>
                                    <td>2143</td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>2143</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                    <div class="table tab-3">
                        <table>
                            <thead>
                                <tr>
                                    <th>时间(小时)</th>
                                    <th>销售额</th>
                                    <th>订单数量</th>
                                </tr>                            
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td>12</td>
                                    <td>2143</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>2143</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>2143</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>2143</td>
                                    <td>13</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div><!-- atatistics-table -->
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>