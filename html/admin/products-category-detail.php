<?php require('header.php'); ?>

<body>
    <div class="container">
        <?php require('nav-top.php'); ?>

        <div class="main clear">
            <?php require('nav-left.php'); ?>
            <div class="main-fr">
                <div class="title">产品管理 > 产品分类</div>
                <div class="operate">
                    <a href="#" class="btn btn-add">保存</a>
                </div>
                <div class="content">
                    <form action="#" class="operateForm" method="POST" name="form1">
                        <div class="entry">                         
                            <div class="entry clear">
                                <div class="fl">
                                    <label>名称:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="wechat" id="wechat" value="" placeholder="">
                                </div>
                            </div>  
                        </div>
                        <div class="entry">                         
                            <div class="entry clear">
                                <div class="fl">
                                    <label>描述:</label>
                                </div>
                                <div class="fl">
                                    <input type="text" name="wechat" id="wechat" value="" placeholder="">
                                </div>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>