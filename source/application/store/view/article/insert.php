<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="assets/store/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="assets/store/css/main.css"/>
    <script type="text/javascript" src="assets/store/js/libs/modernizr.min.js"></script>
    <link rel="stylesheet" href="assets/store/css/goods.css">
    <link rel="stylesheet" href="assets/store/plugins/umeditor/themes/default/css/umeditor.css">
</head>
<body>
    <div class="main-wrap">
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="parentid" id="catid" class="required">
                                    <option value="0">请选择</option>
                                    <option value="19">公司简介</option>
                                    <option value="20">产品预购</option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>导航名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="name" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td>
                            <input class="common-text" type="text" name="keyword" size="50" value="admin">
                                </td>
                            </tr>
                            <tr>
                                <th>导航类型：</th>
                                <td>
                            <input class="common-text" type="radio" name="type" size="50" value="1">公司简介
                            <input class="common-text" type="radio" name="type" size="50" value="2">公司简介
                            <input class="common-text" type="radio" name="type" size="50" value="3">公司简介
                            <input class="common-text" type="radio" name="type" size="50" value="4">公司简介
                        </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="pic" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="container" cols="30" style="width: 80%;" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
<script src="assets/store/js/ddsort.js"></script>
<script src="assets/store/plugins/umeditor/umeditor.config.js"></script>
<script src="assets/store/plugins/umeditor/umeditor.min.js"></script>
<script src="assets/store/js/goods.spec.js"></script>
<script>
    $(function () {

        // 富文本编辑器
        UM.getEditor('container');

        // 选择图片
        $('.upload-file').selectImages({
            name: 'goods[images][]'
            , multiple: true
        });

        // 图片列表拖动
        $('.uploader-list').DDSort({
            target: '.file-item',
            delay: 100, // 延时处理，默认为 50 ms，防止手抖点击 A 链接无效
            floatStyle: {
                'border': '1px solid #ccc',
                'background-color': '#fff'
            }
        });
   });
</script>