<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" enctype="multipart/form-data" method="post">
                    <div class="widget-body">
                        <fieldset>
                          <div class="widget-head am-cf">
                                <div class="widget-title am-fl">导航图标</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    图标1
                                </label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-file">
                                        <div class="upload-file" name="phone_imag">
                                            <i class="am-icon-cloud-upload"></i> 上传图片
                                          <input type="file" name="phone_image" id="file" /> 
                                          <span style="margin-left: 30px;">名称：<input type="" name=""></span>
                                        </div>
                                        <div class="uploader-list am-cf">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    图标2
                                </label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-file">
                                        <div class="upload-file" data-name="">
                                            <i class="am-icon-cloud-upload"></i> 上传图片
                                          <span style="margin-left: 30px;">名称：<input type="" name=""></span>
                                        </div>
                                        <div class="uploader-list am-cf">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    图标3
                                </label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-file">
                                        <div class="upload-file" data-name="">
                                            <i class="am-icon-cloud-upload"></i> 上传图片
                                          <span style="margin-left: 30px;">名称：<input type="" name=""></span>
                                        </div>
                                        <div class="uploader-list am-cf">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-form-label">
                                    图标4
                                </label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-file">
                                        <div class="upload-file" data-name="">
                                            <i class="am-icon-cloud-upload"></i> 上传图片
                                          <span style="margin-left: 30px;">名称：<input type="" name=""></span>
                                        </div>
                                        <div class="uploader-list am-cf">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                    <button type="submit" class="j-submit am-btn am-btn-secondary">提交
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm();

    });
</script>