<div class="content">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-12">
				<div class="card">
					<div class="content">
						<h3 class="page-title">
							Quản lý tin tức
						</h3>
						<ul class="breadcrumb">
							<li>
								<a href="<?=base_url('admin')?>">Trang chủ</a>
							</li>
							<li>
								<a href="<?=base_url('admin/news')?>">Quản lý tin tức</a>
							</li>
							<li class="active">
								Thêm mới tin tức
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
            </div>
        </div>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
$('.iframe-btn').fancybox({	
	'width'		: 900,
	'height'	: 600,
	'type'		: 'iframe',
	'autoScale'    	: true
});
</script>
		<div class="row">
			<form class="form-horizontal" method="POST" enctype="multipart/form-data">
			<div class="col-md-8 col-lg-8">
				<div class="card">
					<div class="header">
						<h4 class="title">Tạo mới</h4>
					</div>
					<div class="content">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tiêu đề</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mô tả ngắn</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="content" rows="20"></textarea>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Thẻ meta title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meta_title">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Thẻ meta description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meta_description">
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Thẻ meta keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="meta_keywords">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
								<div class="col-sm-6">
									<input type="submit" class="btn btn-primary btn-fill btn-wd" name="submit" value="Lưu lại">
									<a href="javascript:window.history.go(-1);" class="btn btn-default btn-fill">Hủy</a>
								</div>
							</div>
                    </div>
                </div>
            </div>
			<div class="col-md-4 col-lg-4">
				<div class="card">
					<div class="content">
						<div class="form-group">
							<label class="col-sm-2 control-label">Loại</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="type" value="<?=@$type?>" readonly />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Mục</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="post_type" value="<?=@$post_type?>" readonly />
							</div>
						</div>
						<?php if ($news->type == 'other' || $news->post_type == 'post') {?>
						<div class="form-group">
							<label class="col-sm-2 control-label">Danh mục</label>
							<div class="col-sm-10">
								<div class="" style="overflow-y: scroll;height: 250px;border: 1px solid #eee;padding: 0 10px;">
									<?php foreach($list_cat_id as $cat_item) {?>
									<?php
										$indent = "";
										for ($i = 1; $i < $cat_item['level']; $i++) {
											$indent .= "--- ";
										}
									?>
									<label class="checkbox">
										<input type="checkbox" name="category[]" data-toggle="checkbox" value="<?=@$cat_item['id']?>"> <?=@$indent.$cat_item['title'] ?>
									</label>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php } ?>
						<div class="form-group">
							<label class="col-sm-2 control-label">Ảnh</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="image" id="image" readonly />
								<p><a href="/assets/filemanager/dialog.php?type=1&field_id=image&relative_url=1&multiple=0" class="btn btn-sm btn-fill btn-success iframe-btn" type="button">Open Filemanager</a></p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="submit" class="btn btn-primary btn-fill btn-wd btn-sm" name="submit" value="Lưu lại">
								<a href="javascript:window.history.go(-1);" class="btn btn-default btn-fill btn-sm">Hủy</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
        </div>
        <!-- END PAGE -->
    </div>