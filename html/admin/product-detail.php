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
                <div class="product-detail">                    
                    <div class="entry clear">
                        <label>名称:</label>
                        <input type="text" name="product_name">
                    </div>
                    <div class="entry clear">
                        <label>描述:</label>
                        <textarea rows="3"></textarea>
                    </div>
                    <div class="entry clear">
                        <label>价格:</label>
                        <input type="text" name="product_name">
                    </div>
                    <div class="entry clear">
                        <label>库存:</label>
                        <input type="text" name="product_name">
                    </div>
                    <div class="entry clear">
                        <label>分类:</label>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="entry clear">
                        <label>属性:</label>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div><!-- end content -->
                
            </div>
        </div>
    </div>

<?php require('footer.php'); ?>