<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">销售统计</div>

                <div class="atatistics-table clear">
                    <div class="table tab-1">                        
                        <table>
                            <thead>
                                <tr>
                                    <th>时间(年)</th>
                                    <th>订单数量</th>
                                    <th>销售额</th>
                                </tr>                            
                            </thead>
                            <tbody>      
                                <tr>
                                    <td>2017</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                    <div class="table tab-2">
                        <table>
                            <thead>
                                <tr>
                                    <th>时间(月)</th>
                                    <th>订单数量</th>
                                    <th>销售额</th>
                                </tr>                            
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td>2017-01</td>
                                    <td>2143</td>
                                    <td>2143</td>
                                </tr>
                                <tr>
                                    <td>2017-10</td>
                                    <td>2143</td>
                                    <td>2143</td>
                                </tr>
                                <tr>
                                    <td>2017-11</td>
                                    <td>2143</td>
                                    <td>2143</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                    <div class="table tab-3">
                        <table>
                            <thead>
                                <tr>
                                    <th>时间(日)</th>
                                    <th>订单数量</th>
                                    <th>销售额</th>
                                </tr>                            
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td>2017-11-10</td>
                                    <td>2143</td>
                                    <td>2143</td>
                                </tr>
                                <tr>
                                    <td>2017-11-11</td>
                                    <td>2143</td>
                                    <td>2143</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div><!-- atatistics-table -->
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>