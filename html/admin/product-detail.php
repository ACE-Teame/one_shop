<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">产品详细信息</div>
                <div class="operate">
                    <a href="#" class="btn btn-add">保存</a>
                </div>
                <div class="page-header">
                    <ul class="nav clear">
                        <li class="active" id="tab-1"><a href="#">通用信息</a></li>
                        <li id="tab-2"><a href="#">商品模型</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane tab-1 active">
                        <form action="#" class="operateForm" method="POST" name="form1">
                            <div class="entry clear">
                                <input type="hidden" name="id" id="id" value="">
                            </div>
                            <div class="entry clear">
                                <div class="fl">
                                    <label>名称:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="name" id="name" value="" placeholder="">
                                </div>
                            </div>
                            <div class="entry clear">
                                <div class="fl">
                                    <label>简介:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="" id="" value="" placeholder="">
                                </div>
                            </div>
                            <div class="entry clear">
                                <div class="fl">
                                    <label>货号:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="" id="" value="" placeholder="">
                                </div>
                            </div>                           
                            <div class="entry clear">
                                <div class="fl">
                                    <label>价格:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="price" id="price" value="" placeholder="">
                                </div>
                            </div>
                            <div class="entry clear">
                                <div class="fl">
                                    <label>库存:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="account" id="account" value="" placeholder="">
                                </div>
                            </div>  
                            <div class="entry clear">
                                <div class="fl">
                                    <label>详情描述:</label>
                                </div>
                                <div class="fl">
                                    <textarea rows="3" name="description"></textarea>
                                </div>
                            </div>  
                        </form>
                    </div>
                    <div class="tab-pane tab-2">
                        <form action="#" class="operateForm" method="POST" name="form1">
                             <div class="entry clear">
                                <div class="fl">
                                    <label>分类:</label>
                                </div>
                                <div class="fl">
                                    <select name="">
                                        <option value="1">分类1</option>
                                        <option value="2">分类2</option>
                                        <option value="3">分类3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="entry">                         
                                <div class="entry clear">
                                    <div class="fl">
                                        <label>颜色:</label>
                                    </div>
                                    <div class="fl">
                                        <select name="">
                                            <option value="1">红色</option>
                                            <option value="2">黄色</option>
                                            <option value="3">白色</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="entry clear">
                                    <div class="fl">
                                        <label>尺寸:</label>
                                    </div>
                                    <div class="fl">
                                        <select name="">
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                            <option value="3">XL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
<?php require('footer.php'); ?>